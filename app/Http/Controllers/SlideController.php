<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        if ($request) {
            $slides = Slide::where('content', 'like', '%' . $request->cari . '%')->get();
        } else {
            $slides = Slide::all();
        }
        return view('admin.slide.index', [
            'slides' => $slides,
            'request' => $request
        ]);
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.slide.create');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/slides', $image->hashName());

        $image = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move('gambar', $image);

        $slide = Slide::create([
            'image'     => $image,
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if ($slide) {
            //redirect dengan pesan sukses
            return redirect()->route('slide.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('slide.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Slide $slide)
    {
        return view('admin.slide.edit', compact('slide'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Slide $slide)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //get data Blog by ID
        $slide = Slide::findOrFail($slide->id);

        if ($request->file('image') == "") {

            $slide->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {

            //hapus old image
            // Storage::disk('local')->delete('public/slides/' . $slide->image);
            File::delete('gambar/' . $slide->image);
            //upload new image
            // $image = $request->file('image');
            // $image->storeAs('public/slides', $image->hashName());

            $image = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('gambar', $image);

            $slide['image'] = $image;

            $slide->update([
                // 'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        if ($slide) {
            //redirect dengan pesan sukses
            return redirect()->route('slide.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('slide.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        File::delete('gambar/' . $slide->image);
        $slide->delete();

        if ($slide) {
            //redirect dengan pesan sukses
            return redirect()->route('slide.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('slide.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

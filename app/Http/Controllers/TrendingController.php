<?php

namespace App\Http\Controllers;

use App\Models\Trending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TrendingController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        if ($request) {
            $trendings = Trending::where('title', 'like', '%' . $request->cari . '%')->get();
        } else {
            $trendings = Trending::all();
        }

        return view('admin.trending.index', [
            'trendings' => $trendings,
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
        return view('admin.trending.create');
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
            'content'   => 'required',
            'kutipan'   => 'required',
            'waktupost'   => 'required'
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/trendings', $image->hashName());

        $image = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move('gambar', $image);


        $trending = Trending::create([
            'image'     => $image,
            'title'     => $request->title,
            'content'   => $request->content,
            'kutipan'   => $request->kutipan,
            'waktupost'   => $request->waktupost
        ]);

        if ($trending) {
            //redirect dengan pesan sukses
            return redirect()->route('trending.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('trending.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Trending $trending)
    {
        return view('admin.trending.edit', compact('trending'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Trending $trending)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required',
            'kutipan'   => 'required',
            'waktupost'   => 'required'
        ]);

        //get data Blog by ID
        $trending = Trending::findOrFail($trending->id);

        if ($request->file('image') == "") {

            $trending->update([
                'title'     => $request->title,
                'content'   => $request->content,
                'kutipan'   => $request->kutipan,
                'waktupost'   => $request->waktupost
            ]);
        } else {

            //hapus old image
            // Storage::disk('local')->delete('public/trendings/' . $trending->image);
            File::delete('gambar/' . $trending->image);
            //upload new image

            $image = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('gambar', $image);

            $trending['image'] = $image;

            $trending->update([
                // 'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content,
                'kutipan'   => $request->kutipan,
                'waktupost'   => $request->waktupost
            ]);
        }

        if ($trending) {
            //redirect dengan pesan sukses
            return redirect()->route('trending.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('trending.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $trending = Trending::findOrFail($id);
        File::delete('gambar/' . $trending->image);
        $trending->delete();

        if ($trending) {
            //redirect dengan pesan sukses
            return redirect()->route('trending.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('trending.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

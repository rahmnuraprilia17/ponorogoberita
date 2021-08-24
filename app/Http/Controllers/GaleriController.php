<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        if ($request) {
            $galeris = Galeri::where('title', 'like', '%' . $request->cari . '%')->get();
        } else {
            $galeris = Galeri::all();
        }

        return view('admin.galeri.index', [
            'galeris' => $galeris,
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
        return view('admin.galeri.create');
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
            'title'     => 'required'
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/galeris', $image->hashName());

        $image = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move('gambar', $image);

        $galeri = Galeri::create([
            'image'     => $image,
            'title'     => $request->title
        ]);

        if ($galeri) {
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Galeri $galeri)
    {
        $this->validate($request, [
            'title'     => 'required'
        ]);

        //get data Blog by ID
        $galeri = Galeri::findOrFail($galeri->id);

        if ($request->file('image') == "") {

            $galeri->update([
                'title'     => $request->title
            ]);
        } else {

            //hapus old image
            // Storage::disk('local')->delete('public/galeris/' . $galeri->image);
            File::delete('gambar/' . $galeri->image);
            //upload new image
            // $image = $request->file('image');
            // $image->storeAs('public/galeris', $image->hashName());

            $image = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('gambar', $image);

            $galeri['image'] = $image;

            $galeri->update([
                // 'image'     => $image->hashName(),
                'title'     => $request->title
            ]);
        }

        if ($galeri) {
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $galeri = Galeri::findOrFail($id);
        File::delete('gambar/' . $galeri->image);
        $galeri->delete();

        if ($galeri) {
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

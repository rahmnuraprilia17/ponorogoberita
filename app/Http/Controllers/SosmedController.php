<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SosmedController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        if ($request) {
            $sosmeds = Sosmed::where('jenis', 'like', '%' . $request->cari . '%')->get();
        } else {
            $sosmeds = Sosmed::all();
        }
        return view('admin.sosmed.index', [
            'sosmeds' => $sosmeds,
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
        return view('admin.sosmed.create');
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
            'jenis'     => 'required',
            'name'     => 'required',
            'link'   => 'required'
        ]);

        $sosmed = Sosmed::create([
            'jenis'     => $request->jenis,
            'name'     => $request->name,
            'link'   => $request->link
        ]);

        if ($sosmed) {
            //redirect dengan pesan sukses
            return redirect()->route('sosmed.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('sosmed.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Sosmed $sosmed)
    {
        return view('admin.sosmed.edit', compact('sosmed'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Sosmed $sosmed)
    {
        $this->validate($request, [
            'jenis'     => 'required',
            'name'     => 'required',
            'link'   => 'required'
        ]);

        //get data Blog by ID
        $sosmed = Sosmed::findOrFail($sosmed->id);

        if ($request->file('') == "") {

            $sosmed->update([
                'jenis'     => $request->jenis,
                'name'     => $request->name,
                'link'   => $request->link
            ]);
        } else {


            $sosmed->update([
                'jenis'     => $request->jenis,
                'name'     => $request->name,
                'link'   => $request->link
            ]);
        }

        if ($sosmed) {
            //redirect dengan pesan sukses
            return redirect()->route('sosmed.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('sosmed.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $sosmed = Sosmed::findOrFail($id);

        $sosmed->delete();

        if ($sosmed) {
            //redirect dengan pesan sukses
            return redirect()->route('sosmed.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('sosmed.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

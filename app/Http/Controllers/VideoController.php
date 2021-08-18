<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        if ($request) {
            $videos = Video::where('jenis', 'like', '%' . $request->cari . '%')->get();
        } else {
            $videos = Video::all();
        }
        return view('admin.video.index', [
            'videos' => $videos,
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
        return view('admin.video.create');
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
            'link'   => 'required'
        ]);

        $video = Video::create([
            'jenis'     => $request->jenis,
            'link'   => $request->link
        ]);

        if ($video) {
            //redirect dengan pesan sukses
            return redirect()->route('video.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('video.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Video $video)
    {
        return view('admin.video.edit', compact('video'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Video $video)
    {
        $this->validate($request, [
            'jenis'     => 'required',
            'link'   => 'required'
        ]);

        //get data Blog by ID
        $video = Video::findOrFail($video->id);

        if ($request->file('') == "") {

            $video->update([
                'jenis'     => $request->jenis,
                'link'   => $request->link
            ]);
        } else {


            $video->update([
                'jenis'     => $request->jenis,
                'link'   => $request->link
            ]);
        }

        if ($video) {
            //redirect dengan pesan sukses
            return redirect()->route('video.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('video.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $video = Video::findOrFail($id);

        $video->delete();

        if ($video) {
            //redirect dengan pesan sukses
            return redirect()->route('video.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('video.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        if ($request) {
            $blogs = Blog::where('title', 'like', '%' . $request->cari . '%')->get();
        } else {
            $blogs = Blog::all();
        }

        return view('admin.blog.index', [
            'blogs' => $blogs,
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
        return view('admin.blog.create');
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
        // $image->storeAs('public/blogs', $image->hashName());

        $image = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move('gambar', $image);


        $blog = Blog::create([
            'image'     => $image,
            'title'     => $request->title,
            'content'   => $request->content,
            'kutipan'   => $request->kutipan,
            'waktupost'   => $request->waktupost
        ]);

        if ($blog) {
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required',
            'kutipan'   => 'required',
            'waktupost'   => 'required'
        ]);

        //get data Blog by ID
        $blog = Blog::findOrFail($blog->id);

        if ($request->file('image') == "") {

            $blog->update([
                'title'     => $request->title,
                'content'   => $request->content,
                'kutipan'   => $request->kutipan,
                'waktupost'   => $request->waktupost
            ]);
        } else {

            //hapus old image
            // Storage::disk('local')->delete('public/blogs/' . $blog->image);
            File::delete('gambar/' . $blog->image);
            //upload new image
            // $image = $request->file('image');
            // $image->storeAs('public/blogs', $image->hashName());

            $image = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('gambar', $image);

            $blog['image'] = $image;

            $blog->update([
                // 'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content,
                'kutipan'   => $request->kutipan,
                'waktupost'   => $request->waktupost
            ]);
        }

        if ($blog) {
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $blog = Blog::findOrFail($id);
        File::delete('gambar/' . $blog->image);
        $blog->delete();

        if ($blog) {
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Blog;
use App\Models\Trending;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Analytics;
use App\Models\Sosmed;
use App\Models\Video;
use Spatie\Analytics\Period;

class UserController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        $blogs = Blog::all();
        $trendings = Trending::all();
        $slides = Slide::all();
        $sosmeds = Sosmed::all();
        $videos = Video::all();

        return view('user.index', [
            'galeris' => $galeris,
            'blogs' => $blogs,
            'trendings' => $trendings,
            'slides' => $slides,
            'sosmeds' => $sosmeds,
            'videos' => $videos
        ]);
    }

    public function artikels($id)
    {
        $sosmeds = Sosmed::all();
        $blogs = Blog::where('id', $id)->first();
        return view('user.detailblog', [
            'blogs' => $blogs,
            'sosmeds' => $sosmeds
        ]);
    }

    public function trens($id)
    {
        $sosmeds = Sosmed::all();
        $trendings = Trending::where('id', $id)->first();
        return view('user.detailtrending', [
            'trendings' => $trendings,
            'sosmeds' => $sosmeds
        ]);
    }
}

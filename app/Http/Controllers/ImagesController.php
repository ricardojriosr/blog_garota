<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use App\Image;

class ImagesController extends Controller
{
    public function index(Request $request)
    {
        $images = Image::orderBy('id','DESC')->paginate(10);
        $images->each(function($images) {
            $images->article;
        });
        return view('admin.images.index')
            ->with('images',$images);
    }
}

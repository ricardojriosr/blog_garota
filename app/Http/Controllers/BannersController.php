<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Article;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use File;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','DESC')->paginate(4);
        $banners->each(function($banners) {
            $banners->article;
        });
        return view('admin.banners.index')
            ->with('banners',$banners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::orderBy('title','ASC')->lists('title','id');
        return view('admin.banners.create')
            ->with('articles',$articles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activo = 0;
        if ($request->active == 'on')
        {
            $activo = 1;
        }

        $file = $request->file('imagen');
        $name = 'garotablog_' . time() . '.' . $file->getClientOriginalName();
        $path = public_path() . '/images/banner/';
        $imagen = $name;
        $file->move($path, $name);

        $banner = new Banner();
        $banner->article_id = $request->article_id;
        $banner->resumen = $request->resumen;
        $banner->active = $activo;
        $banner->imagen = $imagen;
        $banner->save();

        return Redirect::to('admin/banners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $path = public_path() . '/images/banner/';
        File::delete($path.$banner->imagen);
        $banner->delete();

        return Redirect::to('admin/banners');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Article;
use App\Favorites;
use App\About;
use Storage;
use File;
use App\Http\Requests\AboutRequest;
use DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $articles = Article::orderBy('title','ASC')->lists('title','id');
        $about = About::Find($id);
        $favoritesx = Favorites::select('article_id')->get()->toArray();
        $favorites = array();
        foreach($favoritesx as $favx)
        {
            array_push($favorites,$favx['article_id']);
        }
        return view('admin.sections.about')
            ->with('articles',$articles)
            ->with('about', $about)
            ->with('favorites', $favorites);
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
        //dd($request->all());
        $about = About::find($id);

        $path = public_path() . '/images/about/';

        if ($about->image != '')
        {
            File::delete($path.$about->image);
        }

        $about->title = $request->title;
        $about->intro = $request->intro;
        $about->essay = $request->essay;
        $about->quote = $request->quote;


        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $file->move($path, $name);

        $about->image = $name;

        $favs = Favorites::all();
        $favs->each(function($favs) {
            $favs->delete();
        });

        foreach($request->favorites as $fav)
        {
            $favorite = new Favorites();
            $favorite->article_id = $fav;
            $favorite->save();
        }

        $about->save();

        Flash::success('Se ha actualizado los datos de esta seccion');

        return redirect()->route('admin.about.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

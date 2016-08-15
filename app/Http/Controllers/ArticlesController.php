<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;
use Storage;
use File;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::Search($request->title)->orderBy('id','DESC')->paginate(5);
        $articles->each(function($articles) {
            $articles->category;
            $articles->image;
            $articles->user;
        });
        return view('admin.articles.index')
            ->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->lists('name','id');
        $tags = Tag::orderBy('name','ASC')->lists('name','id');
        return view('admin.articles.create')
            ->with('categories',$categories)
            ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        //Manipulacion de imagenes
        $i = 0;
        $files = $request->file('image');
        foreach($files as $file)
        {
            $name = 'garotablog_' . time() . '_' . $i . '.' . $file->getClientOriginalName();
            $path = public_path() . '/images/articles/';
            $file->move($path, $name);
            $image = new Image();
            $image->name = $name;
            if ($i == 0)
            {
                $image->default = 1;
            }
            $image->article()->associate($article);
            $image->save();
            $i++;
        }

        Flash::success('Se ha creado el articulo ' . $article->title . ' de forma satisfactoria');

        return Redirect::to('admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article->category;
        $categories = Category::orderBy('name','DESC')->lists('name','id');
        $tags = Tag::orderBy('name','DESC')->lists('name','id');

        $images = Image::where('article_id','=',$article->id)->get();


        $my_tags = $article->tags->lists('id')->ToArray();

        return view('admin.articles.edit')
            ->with('categories', $categories)
            ->with('article', $article)
            ->with('tags', $tags)
            ->with('my_tags',$my_tags)
            ->with('images',$images);
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
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        $images = Image::where('article_id','=',$id)->get();

        foreach ($images as $image)
        {
            $image->default = 0;
            if ($image->id == $request->default)
            {
                $image->default = 1;
            }
            $image->save();
        }


        $article->tags()->sync($request->tags);

        Flash::warning('Se ha editado el articulo ' . $article->title . ' de forma satisfactoria');

        return Redirect::to('admin/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $images = Image::where('article_id','=',$id)->get();
        foreach ($images as $image)
        {
            $path = public_path() . '/images/articles/';
            File::delete($path.$image->name);
            $image->delete();
        }
        $article->delete();

        Flash::error('Se ha eliminado el articulo ' . $article->title . ' de forma satisfactoria');

        return Redirect::to('admin/articles');
    }

    public function entrya($id)
    {
        $article = Article::orderBy('id','ASC');
        $article->each(function($article){
            $article->entradaA = 0;
            $article->save();
        });
        $entradaA = Article::find($id);
        $entradaA->entradaA = 1;
        $entradaA->save();

        Flash::success('Se ha colocado el articulo ' . $entradaA->title . ' como entrada A');

        return Redirect::to('admin/articles');
    }

    public function entryb($id)
    {
        $cant_entradas_b = Article::where('entradab','=',1)->orderBy('id','DESC')->count();
        if ($cant_entradas_b > 2)
        {
            $entradas_b = Article::where('entradab','=',1)->orderBy('id','DESC')->limit(1)->get();
            $entradas_b->entradab = 0;
            $entradas_b->save();
        }
        $article = Article::find($id);
        $article->entradab = 1;
        $article->save();

        Flash::success('Se ha colocado el articulo ' . $article->title . ' como Dentrada B');

        return Redirect::to('admin/articles');
    }

    public function highlight($id)
    {
        $articles = Article::where('destacado','=',1)->get();
        $articles->each(function($articles) {
            $articles->destacado = 0;
            $articles->save();
        });

        $article = Article::find($id);
        $article->destacado = 1;
        $article->save();

        Flash::success('Se ha colocado el articulo ' . $article->title . ' como Destacado');

        return Redirect::to('admin/articles');
    }
}

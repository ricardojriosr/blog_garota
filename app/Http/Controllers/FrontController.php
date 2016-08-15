<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Category;
use App\Tag;
use App\Banner;

class FrontController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $articles = Article::orderBy('id','DESC')->paginate(4);
        $articles->each(function($articles) {
            $articles->category;
            $articles->user;
        });
        $banners = Banner::where('active','=','1')->orderBy('id','DESC')->limit(4)->get();
        $banners->each(function($banners) {
            $banners->article;
            $banners->article->images;
        });
        $entradaA = Article::where('entradaA','=','1')->get();
        if (!$entradaA->isEmpty()) {
            $entradaA->each(function($entradaA) {
                $entradaA->images;
                $entradaA->category;
            });
        }
        $parallax = Article::where('destacado','=',1)->get();
        $parallax->each(function($parallax){
            $parallax->images;
        });
        return view('front.index')
            ->with('articles', $articles)
            ->with('banners', $banners)
            ->with('entradaA', $entradaA)
            ->with('parallax', $parallax);
    }

    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->get()->first();
        $articles = $category->articles()->orderBy('id','DESC')->paginate(4);
        $articles->each(function($articles) {
            $articles->category;
            $articles->user;
        });
        return view('front.index')
            ->with('articles', $articles);
    }

    public function  searchTag($name)
    {
        $tag = Tag::SearchTag($name)->get()->first();
        $articles = $tag->articles()->orderBy('id','DESC')->paginate(4);
        $articles->each(function($articles) {
            $articles->category;
            $articles->user;
        });
        return view('front.index')
            ->with('articles', $articles);
    }

    public  function ViewArticle($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $article->category;
        $article->user;
        $article->tags;
        $article->images;
        return view('front.article')->with('article',$article);
    }
}

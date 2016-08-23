<?php

namespace App\Http\Controllers;

use App\About;
use App\Favorites;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Category;
use App\Tag;
use App\Banner;
use App\Http\Requests\ContactRequest;
use Laracasts\Flash\Flash;

class FrontController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index(Request $request)
    {

        $busqueda = false;
        if ($request->srch_term != '')
        {
            $busqueda = true;
            $palabras = $request->srch_term;
            $s_articles = Article::Search($palabras)->orderBy('created_at','DESC')->paginate(9);
            $s_articles->each(function($s_articles) {
                $s_articles->category;
                $s_articles->user;
                $s_articles->images;
            });
        }
        if (!$busqueda)
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
            $entradaB = Article::where('entradaB','=','1')->get();
            if (!$entradaB->isEmpty()) {
                $entradaB->each(function($entradaB) {
                    $entradaB->images;
                    $entradaB->category;
                });
            }
            $parallax = Article::where('destacado','=',1)->get();
            $parallax->each(function($parallax){
                $parallax->images;
            });
            $cat_prod = Category::where('name','=','PRODUCT')->first()->id;
            $productos = Article::where('category_id','=',$cat_prod)->orderBy('id','DESC')->get();
            $productos->each(function($productos) {
                $productos->images;
            });

            return view('front.index')
                ->with('articles', $articles)
                ->with('banners', $banners)
                ->with('entradaA', $entradaA)
                ->with('entradaB', $entradaB)
                ->with('parallax', $parallax)
                ->with('productos', $productos);
        }
        else
        {
            return view('front.sections.search')
                ->with('articles', $s_articles)
                ->with('words', explode(' ', $palabras));
        }

    }

    public function ViewArticle()
    {

    }

    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->get()->first();
        $articles = $category->articles()->orderBy('created_at','DESC')->paginate(2);
        $articles->each(function($articles) {
            $articles->category;
            $articles->user;
            $articles->images;
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
            $articles->images;
        });
        return view('front.index')
            ->with('articles', $articles);
    }

    public  function searchArticles($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $article->category;
        $article->user;
        $article->tags;
        $article->images;
        $def_image = null;
        $sec_image = null;
        $gallery = array();
        $supergallery = array();
        foreach($article->images as $img)
        {
            if ($img->default == 1)
            {
                $def_image = $img->name;
            }
        }
        foreach($article->images as $img2)
        {
            array_push($supergallery, $img2->name);
            if ($img2->default == 0)
            {
                array_push($gallery, $img2->name);
            }
        }
        if (count($gallery) > 0)
        {
            $sec_image = reset($gallery);
        }
        if(($key = array_search($sec_image, $gallery)) !== false) {
            unset($gallery[$key]);
        }
        return view('front.article')
            ->with('second', $sec_image)
            ->with('default',$def_image)
            ->with('gallery',$gallery)
            ->with('super', $supergallery)
            ->with('article',$article);
    }

    public function about()
    {
        $about = About::find(1);
        $favorites = Favorites::all();
        $favorites->each(function($favorites) {
            $favorites->article;
            $favorites->article->images;
        });
        return view('front.sections.about')
            ->with('about',$about)
            ->with('favorites',$favorites);
    }

    public function contact()
    {
        return view('front.sections.contact');
    }

    public function send_contact(ContactRequest $request)
    {
        \Mail::send('emails.contact',
            array(
                'name'          => $request->name,
                'email'         => $request->email,
                'user_message'  => $request->message,
                'subject'       => $request->subject
            ), function($message)
            {
                $message->from('ricardojriosr@gmail.com');
                $message->to('ricardojriosr@gmail.com', 'Admin')->subject('Mail from our website');
            });
        Flash::success('We Received your email, thanks for contacting us!' );
        return \Redirect::route('front.contact');
    }
}

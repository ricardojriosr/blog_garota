<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
    GET, POST, PUT, DELETE, RESOURCE
 */

//RUTAS DEL FRONTEND
Route::get('/',[
    'as'    => 'front.index',
    'uses'  => 'FrontController@index'
]);


Route::get('categories/{name}',[
    'uses'  => 'FrontController@searchCategory',
    'as'    => 'front.search.category'
]);

Route::get('tags/{name}',[
    'uses'  => 'FrontController@searchTag',
    'as'    => 'front.search.tag'
]);

Route::get('articles/{slug}',[
    'uses'  => 'FrontController@ViewArticle',
    'as'    => 'front.view.article'
]);



//RUTAS DEL BACKEND
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/',['as'    => 'admin.index' ,function () {
        return view('welcome');
    }]);

    Route::group(['middleware' => 'admin'], function() {
        Route::resource('users','UserController');
        Route::get('users/{id}/destroy', [
            'uses'  => 'UserController@destroy',
            'as'    => 'admin.users.destroy'
        ]);
    });


    Route::resource('categories','CategoriesController');
    Route::get('categories/{id}/destroy', [
        'uses'  => 'CategoriesController@destroy',
        'as'    => 'admin.categories.destroy'
    ]);

    Route::resource('banners','BannersController');
    Route::get('banners/{id}/destroy', [
        'uses'  => 'BannersController@destroy',
        'as'    => 'admin.banners.destroy'
    ]);

    Route::resource('tags','TagsController');
    Route::get('tags/{id}/destroy', [
        'uses'  => 'TagsController@destroy',
        'as'    => 'admin.tags.destroy'
    ]);

    Route::resource('articles','ArticlesController');
    Route::get('articles/{id}/destroy', [
        'uses'  => 'ArticlesController@destroy',
        'as'    => 'admin.articles.destroy'
    ]);
    Route::get('articles/{id}/entryA', [
        'uses'  => 'ArticlesController@entrya',
        'as'    => 'admin.articles.entrya'
    ]);
    Route::get('articles/{id}/entryB', [
        'uses'  => 'ArticlesController@entryb',
        'as'    => 'admin.articles.entryb'
    ]);
    Route::get('articles/{id}/highlight', [
        'uses'  => 'ArticlesController@highlight',
        'as'    => 'admin.articles.highlight'
    ]);

    Route::get('images',[
        'uses'  => 'ImagesController@index',
        'as'    => 'admin.images.index'
    ]);
});

// Authentication routes...
Route::get('admin/auth/login', [
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'admin.auth.login'
]);
Route::post('admin/auth/login', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'admin.auth.login'
]);
Route::get('admin/auth/logout', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'admin.auth.logout'
]);






/*
Route::get('/articles/{nombre?}', function ($nombre = "No coloco nombre") {
    echo "El nombre que has colocado es: " . $nombre;
});
*/

/*
Route::get('articles', [
    'as'    =>  'articles',
    'uses'  =>  'UserController@index'
]);
*/

/*
Route::group(['prefix' => 'articles'], function() {

    Route::get('view/{id}',[
        'uses'  =>  'TestController@view',
        'as'    =>  'articlesView'
    ]);

});
*/
//Route::auth();

//Route::get('/home', 'HomeController@index');

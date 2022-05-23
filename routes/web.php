<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
        return redirect('/en');
});

Route::get('/{locale}', function ($locale) {
    $lang = (object)['type' => 'English', 'short' => 'gb'];
    if(! in_array($locale, ['en', 'es']))
    {
        abort(400);
    }
    else
    {
        if($locale == 'es')
        {
            $lang->type = 'Spanish';
            $lang->short = 'es';
        }

        App::setLocale($locale);
    }

    return view('index', ['language' => $lang]);
});

Route::post('/search', '\App\Http\Controllers\SearchController@index');

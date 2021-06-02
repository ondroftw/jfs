<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('homepage');
Route::view('/onas', 'about')->name('about');
Route::view('/jedalny-listok', 'card')->name('card');
Route::view('/blog', 'blog')->name('blog');
Route::view('/kontakt', 'contact')->name('contact');


Route::get('/dishes-xml', function () {
    $xml = simplexml_load_string(file_get_contents(public_path('static/dishes.xml')), "SimpleXMLElement", LIBXML_NOCDATA);
    $json = json_encode($xml);
    $array = json_decode($json,TRUE);
    $formattedArray = array_map(function ($item) {
        return [
            "name" => data_get($item, "NAME"),
            "dishes" => array_map(function ($dish) {
                return [
                    "name" => data_get($dish, "NAME"),
                    "price" => (float)data_get($dish, "PRICE"),
                ];
            }, data_get($item, "DISHES.DISH"))
        ];
    }, data_get($array, "DISHCATEGORY"));

    return response()->json($formattedArray);

});

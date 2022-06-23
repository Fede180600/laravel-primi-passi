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

Route::get('/', function () {
    $data = [ 
        'articles' => [
            [
                'article_title' => 'Arriva il caldo',
                'article_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis obcaecati culpa distinctio laborum accusantium nemo, in at commodi sed, tenetur voluptatum ea, aliquid sunt. Aut, atque. Laborum, architecto porro!'
            ],
            [
                'article_title' => 'Il cielo si dipinge',
                'article_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur reiciendis obcaecati culpa distinctio laborum accusantium nemo, in at commodi sed, tenetur voluptatum ea, aliquid sunt. Aut, atque. Laborum, architecto porro!'
            ],
        ],
    ];
    return view('home', $data);
})->name('home');

Route::get('/categories', function() {
    return view('categories');
})->name('categories');

Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/news', function() {
    return view('news');
})->name('news');
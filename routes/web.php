<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $menu = [
        [
            'title' => 'Home',
            'link' => route('home')
        ],
        [
            'title' => 'About',
            'link' => route('about')
        ],
        [
            'title' => 'Products',
            'link' => route('home')
        ]
    ];

    $data = [
        'products' => config('products'),
        'menu' => $menu
    ];

    return view('home', compact('data'));
})->name('home');

Route::get('/about', function () {

    $menu = [
        [
            'title' => 'Home',
            'link' => route('home')
        ],
        [
            'title' => 'About',
            'link' => route('about')
        ],
        [
            'title' => 'Products',
            'link' => route('home')
        ]
    ];

    $data = [
        'products' => config('products'),
        'menu' => $menu
    ];

    return view('about', compact('data'));
})->name('about');

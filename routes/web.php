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

$iconShopElement = [
    [
        "src" => "buy-comics-digital-comics.png",
        "title" => "digital comics",
    ],
    [
        "src" => "buy-comics-merchandise.png",
        "title" => "dc merchandise",
    ],
    [
        "src" => "buy-comics-shop-locator.png",
        "title" => "subscription",
    ],
    [
        "src" => "buy-comics-subscriptions.png",
        "title" => "comic shop locator",
    ],
    [
        "src" => "buy-dc-power-visa.svg",
        "title" => "dc power visa",
    ]
];


Route::get('/', function () use ($iconShopElement) {
    $linkNav = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];

    $comicBooks = config("comics");

    return view('home', compact('linkNav', 'comicBooks', 'iconShopElement'));
});
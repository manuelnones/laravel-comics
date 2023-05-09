@extends('layouts/home-layout')

@section('content')
<div class="top-img"></div>

<main class="pt-5">
    <div class="container">
        <div class="comic-books-container">

            @foreach ($comicBooks as $book)
            <div class="comic-book">
                <div class="img-comic-book">
                    <img src="{{ $book['thumb'] }}" alt="">
                </div>
                <h5 class="book-title">{{ $book['series'] }}</h5>
            </div>
            @endforeach

        </div>

        <div class="btn-container mb-4">
            <button type="button" class="btn ps-5 pe-5 rounded-0">LOAD MORE</button>
        </div>
    </div>

    <div id="shop-elements-container">
        <a href="#" class="shop-element">
            <img src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png") }}" alt="" class="icon">
            <span class="title"> digital comics </span>
        </a>

        <a href="#" class="shop-element">
            <img src="{{ Vite::asset("resources/img/buy-comics-merchandise.png") }}" alt="" class="icon">
            <span class="title"> dc merchandise </span>
        </a>

        <a href="#" class="shop-element">
            <img src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png") }}" alt="" class="icon">
            <span class="title"> subscription </span>
        </a>

        <a href="#" class="shop-element">
            <img src="{{ Vite::asset("resources/img/buy-comics-subscriptions.png") }}" alt="" class="icon">
            <span class="title"> comic shop locator </span>
        </a>

        <a href="#" class="shop-element">
            <img src="{{ Vite::asset("resources/img/buy-dc-power-visa.svg") }}" alt="" class="icon">
            <span class="title"> dc power visa </span>
        </a>
    </div>
</main>
@endsection

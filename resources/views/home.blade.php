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
        <div class="container d-flex gap-5">
            @foreach ($iconShopElement as $icon)
            <a href="#" class="shop-element">
                <img src="{{ Vite::asset("resources/img/" . $icon['src']) }}" alt="" class="icon">
                <span class="title">{{ $icon['title'] }}</span>
            </a>
            @endforeach
        </div> 
    </div>
</main>
@endsection

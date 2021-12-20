@extends('layouts.app')

@section('page-title', 'comic')

@section('main_content')
<main id="single_comic">
    <div class="jumbo"></div>
    <div class="comic_hero">
        <div class="container">
            <div class="hero_wrapper">
                <span class="comic_type text-uppercase">
                    {{$comic['type']}}
                </span>
                <img src="{{$comic['thumb']}}" alt="">
                <div class="gallery_cta text-uppercase">View Gallery</div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <section class="comic_info row justify-content-between gx-5">
            <div class="content col-8">
                <h2>{{ $comic['title'] }}</h2>
                <div class="buy_info my-3 d-flex justify-content-between">
                    <span class="price"> U.S. Price: <heavy>{{ $comic['price'] }}</heavy></span>
                    <span class="availability">
                        AVAILABLE
                        <span class="check">Check Availability</span>
                    </span>
                </div>
                <p class="comic_more">
                    {{ $comic['description'] }}
                </p>
            </div>
        
            <div class="adv col-3">
                <div>advertisement</div>
                <img src="{{ asset('img/adv.jpg') }}" alt="">
            </div>
        </section>

    </div>
</main>

@endsection
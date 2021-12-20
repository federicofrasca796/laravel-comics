@extends('layouts.app')

@section('page-title', 'comic')

@section('main_content')
<div class="jumbo"></div>

<div class="comic_card col-2 mb-5">
    <div class="text-center">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    {{-- <a class="card_info" href="{{route('comic')}}">
        {{$comic['series']}}
    </a> --}}
</div>

@endsection
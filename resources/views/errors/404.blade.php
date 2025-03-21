@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Thambi, inge paathen... anga paathen... aana page kandupidikkave mudiyala 🥲'))
@section('error_meme')
    <img class="h-40 sm:h-48 lg:h-64  w-auto mx-auto rounded-xl " src="https://vadivelu.anoram.com/gif/404"
         alt="404 error image">
@endsection

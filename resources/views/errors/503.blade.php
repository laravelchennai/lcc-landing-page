@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Server ku leave kuduthutom... naalaiku vandhuttu paarunga!'))
@section('error_meme')
    <img class="h-40 sm:h-48 lg:h-64  w-auto mx-auto rounded-xl " src="{{ asset('assets/meme-503.gif') }}"
         alt="503 error image">
@endsection

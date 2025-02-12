@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Konjam summa irunga! Ippadi over-a request panna server-um sothappidum!'))
@section('error_meme')
    <img class="h-40 sm:h-48 lg:h-64  w-auto mx-auto rounded-xl " src="{{ asset('assets/meme-429.jpg') }}"
         alt="429 error image">
@endsection

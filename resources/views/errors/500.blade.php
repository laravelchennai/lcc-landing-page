@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('"Indha server-a vida, naanga kastapattom... aana idhu work-aagave illa!'))
@section('error_meme')
    <img class="h-40 sm:h-48 lg:h-64  w-auto mx-auto rounded-xl " src="https://vadivelu.anoram.com/gif/423"
         alt="419 error image">
@endsection

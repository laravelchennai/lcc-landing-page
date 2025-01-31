@extends('errors::minimal')

@section('title', __('Payment Required'))
@section('code', '402')
@section('message', __('Sambalam kudukkama velai kekkureenga? Apdi nadakkathu boss!'))
@section('error_meme')
    <img class="h-40 sm:h-48 lg:h-64  w-auto mx-auto rounded-xl " src="https://vadivelu.anoram.com/jpg/402"
         alt="402 error image">
@endsection

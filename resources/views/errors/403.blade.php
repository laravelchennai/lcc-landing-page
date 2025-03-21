@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Yaaru man nee? Permission illama inge vara mudiyadhu!'))
@section('error_meme')
    <img class="h-40 sm:h-48 lg:h-64  w-auto mx-auto rounded-xl " src="https://vadivelu.anoram.com/jpg/403"
         alt="403 error image">
@endsection

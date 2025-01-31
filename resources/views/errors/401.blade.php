@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Aadhar card irukka? Illaina, pass kuduthu vaa'))
@section('error_meme')
    <img class="h-40 sm:h-48 lg:h-64  w-auto mx-auto rounded-xl " src="https://vadivelu.anoram.com/gif/401"
         alt="401 error image">
@endsection


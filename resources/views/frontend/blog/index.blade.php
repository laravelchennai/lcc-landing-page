@extends('layouts.app')

@section('css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Miriam+Libre:wght@400..700&display=swap" rel="stylesheet">

<style>
    .title-font{
        font-family: "Miriam Libre", serif;
        font-optical-sizing: auto;
        font-weight: 500;
    }
    .body-font {
        font-family: "Miriam Libre", serif;
        font-optical-sizing: auto;
        font-weight: 300;
    }

</style>
@endsection
@section('content')
<div class="container mx-auto px-5 lg:max-w-screen-md my-44">
   <div class="flex flex-col">
       @forelse($blogs as $blog)
           <a href="{{ route('blog.show',$blog->slug) }}">
               <div class="bg-white w-full shadow-md block border border-lighter mb-10 p-5 rounded-lg">
                   <div class="flex flex-col justify-between flex-1">
                       <img src="{{ asset($blog->featured_image) }}" class="w-full rounded-xl" title="Cynthia Bell McGills">
                       <div>
                           <h2 class="title-font leading-normal text-3xl block mb-6">
                               {{ $blog->title }}
                           </h2>

                           <p class="leading-normal mb-6 text-lg body-font text-justify text-gray-700">
                               {{ $blog->excerpt }}
                           </p>

                       </div>

                       <div class="flex body-font items-center text-md text-light">
                           @if($blog->author->avatar != NULL)
                               <img src="{{ asset($blog->author->avatar) }}" class="w-10 h-10 rounded-full" title="Cynthia Bell McGills">
                           @endif
                           <span class="ml-2">{{ $blog->author->name }}</span>
                           <span class="ml-auto">{{ $blog->publish_date->format('M, d Y') }}</span>
                       </div>
                   </div>
               </div>
           </a>

       @empty
       @endforelse

   </div>
</div>
@endsection

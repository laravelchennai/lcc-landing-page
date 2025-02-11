@extends('layouts.app')

@section('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Miriam+Libre:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.1.2/dist/typography.min.css">
    <!-- Highlight.js Light Theme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>


    <style>
        .title-font{
            font-family: "Miriam Libre", serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-size: 2.5em;
        }
        .body-font {
            font-family: "Miriam Libre", serif;
            font-optical-sizing: auto;
            font-weight: 300;
        }

        .markdown-font {
            font-family: "Miriam Libre", serif;
        }

        .prose pre  {
            background: hsla(0,0%,93.3%,.35);
            border: 2px solid rgba(0,0,0,.05);
            color: #000;
            overflow-x: auto;
            padding: .5em;
            margin-bottom: 33px;

        }

    </style>
    <script>hljs.highlightAll()</script>
@endsection


@section('content')
<section class="my-48">
    <div class="container mx-auto px-5 lg:max-w-screen-sm">
        <h1 class="title-font">{{ $blog->title }}</h1>
        <div class="flex items-center text-md text-gray-500 body-font mb-10">
            <span>{{ $blog->publish_date->format('M, d Y') }}</span>
            —
            <a href="" class="text-muted hover:underline duration-700 mr-1">#nova</a>
            <a href="" class="text-muted mr-1">#releases</a>
        </div>
        <div class="prose markdown-font">
            {!! Str::markdown($blog_markdown_body) !!}
        </div>
    </div>
</section>
@endsection







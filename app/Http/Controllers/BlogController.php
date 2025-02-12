<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Wink\WinkPost;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = WinkPost::where('published' ,1)->get();

        return view('frontend.blog.index')
            ->with('blogs', $blogs);
    }

    public function show($slug)
    {
        $blog = WinkPost::where('slug','=',$slug)->firstOrFail();

        $html = app(MarkdownRenderer::class)
            ->highlightTheme('github-dark')
            ->toHtml($blog->body);

        return view('frontend.blog.show',[
                'blog' => $blog,
                'blog_markdown_body' => $blog->body,
                'blog_html' => $html,
            ]);
    }
}

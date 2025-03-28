<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\MembershipController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('coming-soon');
});


Route::redirect('/reminder', 'https://www.canva.com/design/DAGicS7IZ5Y/KL9Gdqxz2b6XMqFuaSapRw/watch');

// routes/web.php
Route::get('/kapathunga-gurunadha', function () {
    return view('kapathunga-gurunadha');
})->name('kapathunga.gurunadha');

Route::get('/kapathunga-gurunadha/next-step', function (Illuminate\Http\Request $request) {
    return view('booking-confirm', [
        'email' => $request->query('email'),
        'event' => $request->query('eventTypeSlug'),
        'status' => $request->query('isSuccessBookingPage'),
        'attendeeName' => $request->query('attendeeName'),
        'startTime' => $request->query('attendeeStartTime'),
        'location' => $request->query('location'),
    ]);
});

// Offline Meetups
Route::prefix('meetups')->group(function () {
    return view('vadivelu-coming-soon');
//    Route::get('/', [MeetupController::class, 'index'])->name('meetups.index');
//    Route::get('/partners', [MeetupController::class, 'partners'])->name('meetups.partners');
});

// Membership
Route::prefix('membership')->group(function () {
//    return view('vadivelu-coming-soon');
    Route::get('/', [MembershipController::class, 'index'])->name('membership.register');
    Route::post('/membership-signup', [MembershipController::class, 'store'])->name('membership.store');
//    Route::get('/list', [MembershipController::class, 'index'])->name('membership.list');
});


// Services
Route::prefix('services')->group(function () {
    return view('vadivelu-coming-soon');
//    Route::get('/fcto', [ServiceController::class, 'fcto'])->name('services.fcto');
//    Route::get('/kaapathunga-gurunadha', [ServiceController::class, 'kaapathunga'])->name('services.kaapathunga');
//    Route::post('/book', [ServiceController::class, 'book'])->name('services.book');
});


// Talk Submission & Requests
Route::prefix('talks')->group(function () {
    return view('vadivelu-coming-soon');
//    Route::get('/submit', [TalkController::class, 'create'])->name('talks.submit');
//    Route::post('/submit', [TalkController::class, 'store'])->name('talks.store');
//    Route::get('/request', [TalkController::class, 'requestForm'])->name('talks.request');
//    Route::post('/request', [TalkController::class, 'submitRequest'])->name('talks.request.submit');
});

// Blogs
Route::domain(config('app.laravel_chennai_blog_domain'))->group(function () {
    Route::prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

});


// resources for beginners
Route::prefix('resources')->group(function () {
    return view('vadivelu-coming-soon');
//    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
//    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
//    Route::get('/video-series', [VideoSeriesController::class, 'show'])->name('blog.show');
    //
});

Route::prefix('partners')->group(function () {
    return view('vadivelu-coming-soon');
//    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
//    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

Route::prefix('forum')->group(function () {
    return view('vadivelu-coming-soon');
//    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
//    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

Route::prefix('talks')->group(function () {
    return view('vadivelu-coming-soon');
});


Route::get('/mark', function () {
    $markdown = <<<'MARKDOWN'

    MARKDOWN;

    return view('frontend.blog.test', ['markdown' => $markdown]);
});

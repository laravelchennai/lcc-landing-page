<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        .bg-noise {
            background: url("{{ asset('noise.png') }}") 500px repeat;

        }
    </style>
    @yield('css')
    @routes
</head>

<body class="bg-noise">
@include('layouts.partials.navbar')
@yield('content')

@include('layouts.partials.footer')
@yield('js')
</body>
</html>


{{--updates
    Membership application completed, now members can signup using the form with all the details and their details will be stored in the
    memberships table instead of users table

    filament admin panel added the membership  has the following status
    'APPLIED';
    'UNDER_REVIEW';
    'APPROVED';
    'ACTIVE';
    'SUSPENDED';
    'REJECTED';

    and if an membership is approved an email will be sent to the member stating that their membership form is approved


   Blogging module
   installed wink blogging package https://github.com/themsaid/wink  and this is a sperate application and uses seprate database to store the users so we have create new author
   which will be stored in the wink_authors table

    created a simple fronted to view the blogs, the looks similar to blog.laravel.com
    disqus comments has been added for the blogs


--}}

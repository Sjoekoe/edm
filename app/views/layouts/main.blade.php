<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="stripe-key" content="{{ getenv('STRIPE_PUBLISH') }}"/>
        <title>EDM-School</title>
        {{ HTML::style('/css/bootstrap.css') }}
        {{ HTML::style('/css/font-awesome.css') }}
        {{ HTML::style('/css/main.css') }}
    </head>
    <body>
        @include('partials.flash_message')
        @include('layouts.partials.nav')

        @yield('content')

        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/main.js"></script>
        <script src="https://js.stripe.com/v2/"></script>
        @yield('footer')
    </body>
</html>
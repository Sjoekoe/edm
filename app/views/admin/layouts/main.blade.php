<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Admin panel"/>
        <meta name="author" content="EDM-School"/>
        <link rel="icon" href="../../favicon.ico"/>

        <title>Admin Dashboard</title>

        {{ HTML::style('/css/bootstrap.css') }}
        {{ HTML::style('/css/font-awesome.css') }}
        {{ HTML::style('/css/dashboard.css') }}

    </head>
    <body>
        @include('partials.flash_message')
        @include('admin.layouts.partials.nav')

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    @include('admin.layouts.partials.nav-sidebar')
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @yield('content')
                </div>
            </div>
        </div>
        {{ HTML::script('/js/jquery.js') }}
        {{ HTML::script('/js/bootstrap.js') }}

        {{ HTML::script('/js/main.js') }}
    </body>
</html>
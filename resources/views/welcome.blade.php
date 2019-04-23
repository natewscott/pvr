<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Paris Valley Ranch</title>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body class="home">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <div class="page-wrap" id="home">
            <!-- include "header.html" -->
            <section class="main-content">
                <article>
                    <div>
                        <img src="img/misc/pvr-logo.svg" alt="">
                        {{-- <h1>Website Coming soon.</h1> --}}
                    </div>
                </article>
            </section>
        </div>
        
    </body>
</html>
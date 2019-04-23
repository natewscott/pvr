<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Paris Valley Ranch</title>
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favico/apple-touch-icon.png')}} ">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favico/favicon-32x32.png')}} ">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favico/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('favico/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('favico/safari-pinned-tab.svg')}}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Roboto+Slab:300,400,700">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
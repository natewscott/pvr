@include('includes/_header')
<body id="home">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    @include('includes/_nav-book')
    {{-- <main class="page-wrap">
        <section class="main-content"> --}}
            @yield('content')
      {{--   </section>
    </main> --}}
    @yield('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="1 Days">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('keyword', $setting->keyword->content)">
    <meta name="description" content="@yield('description', $setting->description)">

    <title>{{ Str::title($setting->title) }} | @yield('title')</title>

    <!-- favicon -->
    <!-- <link type="image/png" rel="icon" href="{{ asset('images/html-5.png') }}"> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet"
    href="{{ asset('css/highlight/styles/androidstudio.css') }}"> -->
    <link rel="stylesheet"
    href="{{ asset('css/prism.css') }}">

   <!--  <script type="text/javascript" src="{{ asset('css/highlight/highlight.pack.js') }}"> -->
     <script type="text/javascript" src="{{ asset('js/prism.js') }}">
    </script>
    <!-- Styles -->
   <!--  <script type="text/javascript">hljs.initHighlightingOnLoad();</script> -->
    @yield('head')
</head>
<body class="mybody">    <div class="wrapper">
        @include('sections.leftbar', ['categories' => $categories, 'setting' => $setting])
        <div class="main-left-content col-lg-2 d-none d-lg-block">
            @include('sections.category-items', ['categories' => $categories])
        </div>
        <!-- Link Bulutu End -->

        <div class="contentbar col-11 col-lg-9" id="contentbar">
            <!-- Site Title -->
            <div class="full-title" id="siteTitle">
                <div class="responsive-menu-icon" onclick="openNav();">
                    <img src="{{ asset('images/menu.png') }}" class="animate__animated animate__backInDown" alt="menu-icon" width="35" height="45">
                </div>
                <h1 class="animate__animated animate__backInDown d-lg-none d-block"><a href="/">
                {{ Str::title($setting->title) }}</a>
            </h1>
                <div class="social-icons d-none d-lg-block d-flex justify-around">

                @include('sections.socials')
                </div>

        </div>
        <!-- Site Title End -->
        <div class="main-contentbar">
            <!-- Esas Main -->
            <div class="main-content col-11 col-lg-8">
                @yield('content')
                <hr class="line mt-5">
                <div class="company-name">
                    <h2>
                         {{ Str::title($setting->title) }}
                    </h2>
                </div>
                <hr class="line mb-5">
               @include('sections.footer', ['categories' => $categories])
            </div>
            <!-- Esas Main Bitti -->
            <!-- Opsiyon Bulutu -->
           @include('sections.rightbar', ['categories' => $categories])
            <!-- Opsiyon Bulutu End -->

        </div>
    </div>
</div>

@yield('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
</body>
</html>

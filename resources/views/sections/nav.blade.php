<div id="mySidenav" class="sidenav pb-2">
    <div>
        @include('sections.mobile-nav')
    </div>
    <div class="side-content">
      <div class="nav-image border-bottom position-sticky-top">
{{--        <a href="/" class="px-5 nav-title" title="{{ Str::title($setting->title). __(' Anasayfasına Gider.') }}"><!-- <img class="animate__animated animate__backInUp animate__delay-1s" src="{{ $setting->logo ?? __('') }}" width="85" height="45"  alt="resim"> -->{{ Str::title($setting->title) }}</a>--}}
    </div>
    <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" title="Kapat">
        <img src="{{ asset('images/close.png') }}" width="35" height="35" alt="menu"></a> -->
    @include('sections.category-items')
</div>
</div>

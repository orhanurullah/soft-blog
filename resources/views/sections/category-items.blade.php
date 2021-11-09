<div class="left">
  <div class="category-nav-title sticky-lg-top">
      <a href="/" class=""
         title="{{ Str::title($setting->title). __(' Anasayfasına Gider.') }}">
          <h1>{{ Str::title($setting->title) }}</h1>
      </a>
</div>
   @include('sections.deneme')
   <div class="copyright mt-5">
     {{ Str::slug($setting->title, '') }}&copy;{{ date('Y') }}
</div>
</div>

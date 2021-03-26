<div class="footer-category mb-3">
    @forelse($categories as $cat)
    <div class="footer-cat"><a href="{{ route('categories.show', ['slug' => $cat->slug]) }}"><span class="list-item" style="box-shadow: none;">{{ $cat->title }}</span></a></div>
   @empty
    <div><span>{{ config('app.name') }} </span></div>
    @endforelse
</div>
<div class="social-icons py-2">
    @include('sections.socials')
</div>

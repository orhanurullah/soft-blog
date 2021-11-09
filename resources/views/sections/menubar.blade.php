<div class="menu-category">
    <div class="mobile-close mb-2" id="mobile-close">
         <img  onclick="closeNav();" title="Kapat" id="menu-mobile-image" class="animate__animated animate__backInDown" src="{{ asset('images/close.png') }}" width="35" height="35"  alt="{{ __('Kapat') }}">
        </div>
    @forelse($categories as  $category)
    <div class="category">
        <a href="{{ route('categories.show', ['slug'=>$category->slug]) }}"
           title="{{ Str::title($category->title) }}">
            <img  alt="{{ $category->title }}"
                  class="animate__animated animate__backInDown"
                  src="{{ asset('images/'. $category->slug .'.png') }}"
                  width="40" height="40">
        </a>
    </div>
    @empty
    @endforelse
</div>

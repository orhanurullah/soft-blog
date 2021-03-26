<div class="catlist cat-list-nav pt-2" id="list-link">
      @if(Request::path() == '/')
      @forelse($categoryList as $category)
      @if($category->id < 8)
      <a href="{{ route('categories.show', ['slug'=>$category->slug]) }}"><div class="list-item {{ Request::is($category->slug.'/*') ? 'active' : '' }}" style="background-color: lightgrey; text-transform: uppercase; font-size: 1.1em;">{{ $category->title }}</div></a>
      <a href="{{ route('codes.index', ['slug'=>$category->slug]) }}"><div class="list-item {{ Request::is($category->slug.'/kodlar*') ? 'active' : '' }}" style="opacity: 0.9; font-size: 1em;">{{ __('Kodlar') }}</div></a>
            @forelse($category->posts as $child)
            <a href="{{ route('posts.show',['slug_c' => $category->slug, 'slug'=>$child->slug]) }}"><div class="list-item {{ Request::is('*/'.$child->slug) ? 'active' : '' }}" style="font-size:0.9em; text-transform: capitalize;">{{ $child->title }}</div></a>
            @empty
            @endforelse
      @endif
      @forelse($category->children as $children)
      <a href="{{ route('categories.show',['slug' => $children->slug]) }}"><div class="list-item {{ Request::is($children->slug.'/*') ? 'active' : '' }}" style="background-color: lightgrey; border-radius: 8px; opacity: 0.9; font-size:1em; text-transform: uppercase;">{{ $children->title }}</div></a>
      @forelse($children->posts as $child)
      <a href="{{ route('posts.show',['slug_c' => $children->slug, 'slug'=>$child->slug]) }}"><div class="list-item {{ Request::is('*/'.$child->slug) ? 'active' : '' }}" style="font-size:0.9em; text-transform: capitalize;">{{ $child->title }}</div></a>
      @empty
      @endforelse
      @empty
      @endforelse
      @empty
      <p>Kategori Yok</p>
      @endforelse
      @else
      @forelse($categoryList as $category)
       @if(Request::is('kategori/'.$category->slug) or Request::is($category->slug.'/*'))
     <!--  <div class="category-name">
            {{ $category->name }}
      </div> -->
        @if($category->parent_id != 0)
             <a href="{{ route('categories.show',['slug' => $category->parent->slug]) }}"><div class="list-item {{ Request::is($category->parent->slug.'/*') ? 'active' : '' }}" style="background-color: lightgrey; font-size:1em; text-transform: uppercase;">{{ $category->parent->title }}</div></a>
                  @forelse($category->parent->posts as $post)
                   <a href="{{ route('posts.show',['slug_c' => $category->parent->slug, 'slug'=>$post->slug]) }}"><div class="list-item {{ Request::is('*/'.$post->slug) ? __('active') : '' }}" style=" font-size:0.9em; text-transform: capitalize;">{{ $post->title }}</div></a>
                   @empty
                   @endforelse

                  @forelse($category->parent->children as $child)
                       <a href="{{ route('categories.show',['slug' => $child->slug]) }}"><div class="list-item {{ Request::is($child->slug) ? 'active' : '' }}" style="background-color: lightgrey; border-radius: 8px; opacity: 0.9; font-size:1em; text-transform: uppercase;">{{ $child->title }}</div></a>
                        @forelse($child->posts as $post)
                        <a href="{{ route('posts.show',['slug_c' => $child->slug, 'slug'=>$post->slug]) }}"><div class="list-item {{ Request::is('*/'.$post->slug) ? __('active') : '' }}" style="font-size:0.9em; text-transform: capitalize;">{{ $post->title }}</div></a>
                       @empty
                       @endforelse
                  @empty
                  @endforelse
                    @forelse($category->children as $children)
                        <a href="{{ route('categories.show',['slug' => $children->slug]) }}"><div class="list-item {{ Request::is($children->slug.'/*') ? 'active' : '' }}" style="background-color: lightgrey; border-radius: 8px; opacity: 0.9; font-size:1em; text-transform: uppercase;">{{ $children->title }}</div></a>
                         @forelse($children->posts as $child)
                          <a href="{{ route('posts.show',['slug_c' => $children->slug, 'slug'=>$child->slug]) }}"><div class="list-item {{ Request::is('*/'.$child->slug) ? __('active') : '' }}" style="font-size:0.9em; text-transform: capitalize;">{{ $child->title }}</div></a>
                         @empty
                         @endforelse

                  @empty
                  @endforelse
                  <div class="list-item" style="background-color: grey; color:white">
                    {{ __('KODLAR')  }}
                  </div>
                  @forelse($category->codes as $code)
                   <a href="{{ route('codes.show',['slug_c' => $category->slug, 'slug'=>$code->slug]) }}"><div class="list-item {{ Request::is('*/'.$code->slug) ? __('active') : '' }}" style=" font-size:1em;">{{ $code->name }}</div></a>
                  @empty
                  @endforelse
                   @forelse($category->parent->codes as $code)
                         <a href="{{ route('codes.show',['slug_c' => $category->parent->slug, 'slug'=>$code->slug]) }}"><div class="list-item {{ Request::is('*/'.$code->slug) ? __('active') : '' }}" style="font-size: 1em;">{{ $code->name }}</div></a>
                  @empty
                  @endforelse
          @else
                  <a href="{{ route('categories.show',['slug' => $category->slug]) }}"><div class="list-item {{ Request::is($category->slug) ? 'active' : '' }}" style="background-color: lightgrey; border-radius: 8px; opacity: 0.9; font-size:1em; text-transform: uppercase;">{{ $category->title }}</div></a>
                   @forelse($category->posts as $child)
                    <a href="{{ route('posts.show',['slug_c' => $category->slug, 'slug'=>$child->slug]) }}"><div class="list-item {{ Request::is('*/'.$child->slug) ? __('active') : '' }}" style=" font-size:0.9em; text-transform: capitalize;">{{ $child->title }}</div></a>
                  @empty
                  @endforelse
                   @forelse($category->children as $children)
                   <a href="{{ route('categories.show',['slug' => $children->slug]) }}"><div class="list-item {{ Request::is($children->slug.'/*') ? 'active' : '' }}" style="background-color: lightgrey; border-radius: 8px; opacity: 0.9; font-size:1em; text-transform: uppercase;">{{ $children->title }}</div></a>
                        @forelse($children->posts as $child)
                          <a href="{{ route('posts.show',['slug_c' => $children->slug, 'slug'=>$child->slug]) }}"><div class="list-item {{ Request::is('*/'.$child->slug) ? __('active') : '' }}" style="font-size: 0.9em; text-transform: capitalize;">{{ $child->title }}</div></a>
                    @empty
                    @endforelse
                  @empty
                  @endforelse
                   <div class="list-item" style="background-color: lightgrey; font-size:1em;">
                    {{ __('KODLAR')  }}
                  </div>
                   @forelse($category->codes as $code)
                         <a href="{{ route('codes.show',['slug_c' => $category->slug, 'slug'=>$code->slug]) }}"><div class="list-item {{ Request::is('*/'.$code->slug) ? __('active') : '' }}" style="font-size: 1em;">{{ $code->name }}</div></a>
                  @empty
                  @endforelse
          @endif
       @endif
        @empty
        @endforelse
      @endif
</div>

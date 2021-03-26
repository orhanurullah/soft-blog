<div class="page-navs my-2 mb-4">
 <div class="navs-buttons px-3 my-3">
    @if(isset($previos) and isset($previosCategory))
    <a href="{{ route('posts.show', ['slug_c' => $previosCategory->slug, 'slug' => $previos->slug]) }}" id="previos" title="{{ $previos->title }}">
    @elseif(isset($previos) and !isset($previosCategory))
     <a href="{{ route('posts.show', ['slug_c' => $category->slug, 'slug' => $previos->slug]) }}" id="previos" title="{{ $previos->title }}">
    @endif
    <button type="submit" class="btn @if(!isset($previos))
    {{ __('disabled') }} @endif">Önceki</button></a>
    @if(isset($next) and isset($nextCategory))
    <a href="{{ route('posts.show', ['slug_c' => $nextCategory->slug, 'slug' => $next->slug]) }}" id="next" title="{{ $next->title }}">
    <button type="submit" class="btn @if(!isset($next) and !isset($category->codes))
    {{ __('disabled') }} @endif" style="text-transform: capitalize;">Sonraki</button></a>
    @elseif(isset($next) and !isset($nextCategory))
    <a href="{{ route('posts.show', ['slug_c' => $category->slug, 'slug' => $next->slug]) }}" id="next" title="{{ $next->title }}">
    <button type="submit" class="btn @if(!isset($next) and !isset($category->codes))
    {{ __('disabled') }} @endif" style="text-transform: capitalize;">Sonraki</button></a>
    @elseif(count($category->codes) > 0)
            <a href="{{ route('codes.index', ['slug' => $category->slug]) }}" id="next" title="{{ $category->title. __(' kodlar') }}">
            <button type="submit" class="btn @if(!isset($next) and !(count($category->codes) > 0))
            {{ __('disabled') }} @endif" style="text-transform: capitalize;">@if(isset($next))
            {{ __('Sonraki') }}
            @else
            {{ $category->title . __(' Kodlar') }}
            @endif</button></a>
     @elseif($category->parent_id !== 0 and count($category->parent->codes) > 0)
                <a href="{{ route('codes.index', ['slug' => $category->parent->slug]) }}" id="next" title="{{ $category->parent->title. __(' kodlar') }}">
                <button type="submit" class="btn @if(!isset($next) and !(count($category->parent->codes) > 0))
                {{ __('disabled') }} @endif" style="text-transform: capitalize;">@if(isset($next))
                {{ __('Sonraki') }}
                @else
                {{ $category->parent->title . __(' Kodlar') }}
                @endif</button></a>

             @endif

</div>
</div>

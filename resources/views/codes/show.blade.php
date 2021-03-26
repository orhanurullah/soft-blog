@extends('layouts.mainlayout')
@section('keyword')
{{ $code->keyword->content }}
@endsection
@section('description')
{{ $code->excerpt }}
@endsection
@section('title')
   {{ Str::upper($category->title) }} - {{ __('Kodlar') }}
@endsection
@section('content')
<div class="main-category-info d-flex pt-3">
    <div class="main-category-image mt-2">
        @if($category->parent_id == 0)
         <img src="{{ asset('images/'. $category->slug.'.png') }}" width="40" height="40" alt="{{ $category->title }}">
        @else
         <img src="{{ asset('images/'. $category->parent->slug.'.png') }}" width="40" height="40" alt="{{ $category->parent->title }}">
        @endif
    </div>
    <div class="main-category-title mt-3 ms-3"> <h1>{{ $category->title }}</h1>
    </div>
</div>
<hr class="line">
<div class="main-page-content">
    <div class="main-page-title">
        <h4 style="text-transform: capitalize;">{{ $code->name }}</h4>
    </div>
    <hr class="line">
    <div class="main-page-description p-4">
        {{ $code->title }}
    </div>
    <hr class="line">
    <div class="main-page-description p-4">
        {{ $code->content }}
    </div>
    <hr>
</div>
<div class="navs-buttons px-2 mb-4">
 @if(isset($previos))
    <a href="{{ route('codes.show', ['slug_c' => $category->slug, 'slug' => $previos->slug]) }}" id="previos" title="{{ $previos->title }}">
    @elseif(isset($category->posts))
    <a href="{{ route('posts.show', ['slug_c' => $category->slug, 'slug' => $category->posts->first()->slug]) }}" id="next" title="{{ $category->title . __(' Makaleler') }}">
    @endif
    <button type="submit" class="btn @if(!isset($previos) and !isset($category->posts))
    {{ __('disabled') }} @endif" style="text-transform: capitalize;">@if(isset($previos))
    {{ __('Önceki') }}
    @else
    {{ $category->title . __(' Makaleleri Oku') }}
    @endif</button></a>
    @if(isset($next))
    <a href="{{ route('codes.show', ['slug_c' => $category->slug, 'slug' => $next->slug]) }}" id="next" title="{{ $next->title }}">
    @endif
    <button type="submit" class="btn @if(!isset($next))
    {{ __('disabled') }} @endif">Sonraki</button></a>
</div>
@endsection
@section('js')
@endsection
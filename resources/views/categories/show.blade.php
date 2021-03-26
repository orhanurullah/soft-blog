@extends('layouts.mainlayout')
@section('title')
{{ Str::upper($category->title) }}
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
    <div class="main-category-title mt-3 ms-3">
        <h1>{{ $category->title }}</h1>
    </div>
</div>
<hr class="line">
<div class="main-page-content">
    <div class="main-page-title">
        <h1 style="text-transform: capitalize;">{{ $category->title }}</h1>
    </div>
    <hr class="line">
    <div class="main-page-description p-4">
        {!! $category->description !!}
    </div>
    <hr>
    <div class="startbuton">
        @if(!empty($category->posts->first()))
        <a href="{{ route('posts.show', ['slug_c' => $category->slug, 'slug' => $category->posts->first()->slug]) }}"><button class="btn" style="font-size: 1.4em;">Başla</button></a>
        @endif
    </div>
</div>
@endsection
@section('js')
@endsection
@extends('layouts.mainlayout')
@section('keyword')
{{ $post->keyword->content }}
@endsection
@section('description')
{{ $post->excerpt }}
@endsection
@section('title')
{{ Str::upper($category->title) }} - {{ $post->title }}
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
    <div class="main-category-title  mt-3 ms-3"> <h1>{{ Str::upper($category->title) }}</h1>
    </div>
</div>
<hr class="line">
<div class="main-page-content">
    <div class="main-page-title">
        <h1>{{ $post->title }}</h1>
    </div>
    <hr class="line">
    <div class="main-page-description px-2 my-4">
        {!! $post->content !!}
    </div>
    <hr class="line mb-4">
    @include('sections.page-navs', ['category' => $category, 'previos' => $previos, 'next' => $next])
</div>
@endsection
@section('js')
@endsection
@extends('layouts.mainlayout')
@section('title')
   {{ Str::upper($category->title) }} - {{ __('Makaleler') }}
@endsection
@section('content')
    {{ $category->title }}
    <hr style="border:2px solid brown;">
    @forelse($posts as $post)
    <a href="{{ route('posts.show', ['slug_c' => $category->slug, 'slug' => $post->slug]) }}">{{ $post->title }}</a>
    <br />
    @empty
    @endforelse
@endsection
@section('js')
@endsection
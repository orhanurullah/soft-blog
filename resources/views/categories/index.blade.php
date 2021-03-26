@extends('layouts.mainlayout')
@section('title')
    {{ __('Kategoriler') }}
@endsection
@section('content')
    <h1>Burası Kategori Sayfası</h1>
    @forelse($categories as $category)
    <a href="{{ route('categories.show', ['slug' => $category->slug ]) }}">{{ $category->title }}</a>
    <a href="{{ route('codes.index', ['slug' => $category->slug ]) }}">{{ $category->title }} Kodları</a>
    <span style="margin-left: 20px;"><a href="{{ route('posts.index', ['slug' => $category->slug]) }}">Kategori Makaleleri </a></span>
    <hr style="border:1px solid red;">
    @empty
    @endforelse
@endsection
@section('js')
@endsection
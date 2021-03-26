@extends('layouts.mainlayout')
@section('keyword')
{{ $category->keyword }}
@endsection
@section('description')
{{ $category->excerpt }}
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
 @forelse($codes as $code)
 <div class="main-page-title">
    <a href="{{ route('codes.show', ['slug_c' => $category->slug, 'slug' => $code->slug]) }}" style="color:blue; font-weight: bold; font-size:20px;" title="{{ $code->title }}">{{ $code->name }}</a>
</div>
<hr class="line">
<div class="main-page-description p-4">
    {{ $code->title }}
</div>
<br />
@empty
@endforelse
<hr>
<div class="startbuton">
        @if(!empty($category->codes->first()))
        <a href="{{ route('codes.show', ['slug_c' => $category->slug, 'slug' => $category->codes->first()->slug]) }}"><button class="btn" style="font-size: 1.4em;">Başla</button></a>
        @endif
    </div>
</div>
@endsection
@section('js')
@endsection
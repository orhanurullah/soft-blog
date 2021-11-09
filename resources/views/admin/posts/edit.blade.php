@extends('layouts.app')
@section('content')
<div class="">
    <h2 class="pl-4">Makale Düzenleme Sayfası</h2>
</div>
<div class="form-group">
    <form action="{{ route('admin.posts.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group p-2">
            <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required="">
        </div>
        <div class="form-group p-2">
            <textarea class="form-control" id="excerpt" name="excerpt" required="">{{ $post->excerpt }}</textarea>
        </div>
        <div class="form-group p-2">
            <textarea class="form-control editor" id="content" name="content" rows="30" required="">
                {{ $post->content }}
            </textarea>
        </div>
        <div class="form-group p-2">
            <input type="text" id="keywords" name="keywords" class="form-control" value="{{ $post->keyword->content }}" required="">
        </div>
        <div class="form-group p-2">
             <select name="category_id" class="form-control" required="">
                <option value="{{ $post->category->id }}">{{ $post->category->title }}</option>
                 @forelse($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @empty
                @endforelse
            </select>
        </div>
        <div class="form-group p-2">
            <input type="number" max="1" min="0" step="1" name="is_active" id="is_active" value="{{ $post->is_active }}" class="form-control">
        </div>
        <div class="form-group p-2">
            <button type="submit" class="btn btn-success">Güncelle</button>
        </div>
    </form>
</div>
@endsection
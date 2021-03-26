@extends('layouts.app')
@section('content')
<div class="">
    <h2 class="pl-4">Makale Ekleme Sayfası</h2>
</div>
<hr class="line">
<div class="form-group">
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="form-group p-2">
            <input type="text" id="title" name="title" class="form-control" placeholder="Başlığı Gir." required="">
        </div>
        <div class="form-group p-2">
            <textarea class="form-control" id="excerpt" name="excerpt" required="">özet...</textarea>
        </div>
        <div class="form-group p-2">
            <textarea class="form-control editor" id="content" name="content" placeholder="içerik..." rows="30" required="">
            </textarea>
        </div>
        <div class="form-group p-2">
            <input type="text" id="keywords" name="keywords" class="form-control" placeholder="anahtar kelimeler..." required="">
        </div>
        <div class="form-group p-2">
             <select name="category_id" class="form-control" required="">
                <option value="">Kategori Seç</option>
                 @forelse($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @empty
                @endforelse
            </select>
        </div>
        <div class="form-group p-2">
            <input type="number" max="1" min="0" step="1" name="is_active" id="is_active" value="1" class="form-control">
        </div>
        <div class="form-group p-2">
            <button type="submit" class="btn btn-success">Kaydet</button>
        </div>
    </form>
</div>
@endsection
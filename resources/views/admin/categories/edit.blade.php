@extends('layouts.app')
@section('content')
<div class="">
    <h2 class="pl-4">Kategori Düzenleme Sayfası</h2>
</div>
<div class="form-group">
    <form action="{{ route('admin.categories.update', ['id' => $category->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group p-2">
            <input type="text" id="title" name="title" class="form-control" value="{{ $category->title }}" required="">
        </div>
        <div class="form-group p-2">
            <textarea class="form-control" id="excerpt" name="excerpt" required="">{{ $category->excerpt }}</textarea>
        </div>
        <div class="form-group p-2">
            <textarea class="form-control editor" id="description" name="description" rows="30" required="">{{ $category->description }}
            </textarea>
        </div>
        <div class="form-group p-2">
            <input type="text" id="keywords" name="keywords" class="form-control" value="{{ $category->keyword->content }}" required="">
        </div>
        <div class="form-group p-2">
             <select name="parent_id" class="form-control" required="">
                <option value="0">{{  __('Main')}}</option>
                 @forelse($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @empty
                @endforelse
            </select>
        </div>
        <div class="form-group p-2">
            <input type="number" max="1" min="0" step="1" name="is_active" id="is_active" value="{{ $category->is_active }}" class="form-control">
        </div>
        <div class="form-group p-2">
            <button type="submit" class="btn btn-success">Güncelle</button>
        </div>
    </form>
</div>
@endsection
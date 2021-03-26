@extends('layouts.app')
@section('content')
<div class="show-categories mt-2">
  <a href="{{ route('admin.posts.create') }}">
        <div class="list-adm mt-2">
            <span class="badge bg-primary">{{ __('Yeni Makale Ekle') }}</span>
        </div>
    </a>
    <hr class="line">
    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Kategori</th>
          <th scope="col">Is Active</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
      </tr>
  </thead>
  <tbody>
   @forelse($posts as $key => $post)
   <tr>
      <th scope="row">{{ __($key+1) }}</th>
      <td><a href="{{ route('posts.show', ['slug_c' => $post->category->slug, 'slug' => $post->slug]) }}" title="{{ $post->slug }}" target="_blank"> {{ $post->title }} </a></td>
      <td> {{ $post->category->title }} </td>
      <td> {{ $post->is_active ? __('Aktif') : __('Pasif') }}</td>
      <td><a href="{{ route('admin.posts.update', ['id' => $post->id]) }}"><button class="btn btn-warning p-1">Edit</button></a></td>
      <td><a href=""><button class="btn btn-warning p-1">Delete</button></a></td>
  </tr>
  @empty
  <p>Post Yok</p>
  @endforelse
</tbody>
</table>
</div>
@endsection
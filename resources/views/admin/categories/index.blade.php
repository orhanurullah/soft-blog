@extends('layouts.app')
@section('content')
<div class="show-categories mt-2">
  <a href="{{ route('admin.categories.create') }}">
        <div class="list-adm mt-2">
            <span class="badge bg-primary">{{ __('Kategori Ekle') }}</span>
        </div>
    </a>
    <hr class="line">
    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Parent</th>
          <th scope="col">Is Active</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
      </tr>
  </thead>
  <tbody>
   @forelse($categories as $key => $category)
   <tr>
      <th scope="row">{{ __($key+1) }}</th>
      <td><a href="{{ route('categories.show', ['slug' => $category->slug]) }}" title="{{ $category->title }}" target="_blank"> {{ $category->title }} </a></td>
      <td> {{ $category->parent->title ?? __('Main')}} </td>
      <td> {{ $category->is_active ? __('Aktif') : __('Pasif') }}</td>
      <td><a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}"><button class="btn btn-warning p-1">Edit</button></a></td>
      <td><a href=""><button class="btn btn-warning p-1">Delete</button></a></td>
  </tr>
  @empty
  <p>Kategori Yok</p>
  @endforelse
</tbody>
</table>
</div>
@endsection
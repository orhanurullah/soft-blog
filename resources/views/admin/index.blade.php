@extends('layouts.app')

@section('content')
  Yönetim Paneli
  <hr class="line">
  <div class="menu-list-adm">
     <a href="{{ route('admin.settings.index') }}">
        <div class="list-adm mt-2">
            {{ __('Ayarlar') }}
        </div>
    </a>
    <hr class="line">

    <a href="{{ route('admin.posts.index') }}">
        <div class="list-adm mt-2">
            {{ __('Makaleler') }}
        </div>
    </a>
    <hr class="line">
    <a href="{{ route('admin.categories.index') }}">
        <div class="list-adm mt-2">
            {{ __('Kategoriler') }}
        </div>
    </a>
</div>
@endsection
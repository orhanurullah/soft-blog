@extends('layouts.mainlayout')
@section('title')
    {{ __('Anasayfa') }}
@endsection
@section('content')
    @include('sections.home-main', ['categories' => $categories])
@endsection
@section('js')
@endsection
@extends('layouts.app')
@section('content')
<div class="show-categories mt-2">
        <div class="list-adm mt-2">
            <span class="badge bg-primary">{{ __('Site Ayarları') }}</span>
            <span class="badge bg-secondary">{{ __('Ayarları Düzenleyebilirsiniz.') }}</span>
        </div>
    <hr class="line">
    <div class="form-group">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group p-2">
            <input type="text" id="title" name="title" class="form-control" value="{{ $setting->title }}" required="">
        </div>
        <div class="form-group p-2">
            <textarea class="form-control editor" id="description" name="description" rows="30" required="">{{ $setting->description }}
            </textarea>
        </div>
        <div class="form-group p-2">
            <input type="text" id="keywords" name="keywords" class="form-control" value="{{ $setting->keyword->content }}" required="">
        </div>
      <div class="form-group p-2">
            <input type="email" id="email_address" name="email_address" class="form-control" value="{{ $setting->email_address ?? 'henüz girilmedi...' }}">
        </div>
        <div class="form-group p-2">
            <input type="text" id="email_password" name="email_password" class="form-control" value="{{ $setting->email_password ?? 'henüz girilmedi...' }}">
        </div>
        <div class="form-group p-2">
            <input type="text" id="email_host_address" name="email_host_address" class="form-control" value="{{ $setting->email_host_address ?? 'henüz girilmedi...' }}">
        </div>
         <div class="form-group p-2">
            <textarea class="form-control editor" id="about_text" name="about_text" rows="10" required="">{{ $setting->about_text }}
            </textarea>
        </div>
         <div class="form-group p-2">
            <input type="text" id="facebook" name="facebook" class="form-control" value="{{ $setting->facebook ?? 'henüz girilmedi...' }}">
        </div>
        <div class="form-group p-2">
            <input type="text" id="twitter" name="twitter" class="form-control" value="{{ $setting->twitter ?? 'henüz girilmedi...' }}">
        </div>
        <div class="form-group p-2">
            <input type="text" id="instagram" name="instagram" class="form-control" value="{{ $setting->instagram ?? 'henüz girilmedi...' }}">
        </div>
        <div class="form-group p-2">
            <input type="text" id="youtube" name="youtube" class="form-control" value="{{ $setting->youtube ?? 'henüz girilmedi...' }}">
        </div>
        <div class="form-group p-2">
            <button type="submit" class="btn btn-success">Güncelle</button>
        </div>
    </form>
</div>
</div>
@endsection
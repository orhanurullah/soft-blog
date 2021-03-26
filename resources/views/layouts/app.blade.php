<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/cc999dnjhn0gvnoff68m16lvkdxqdn4ufbs6cczx7fp79xdr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    @yield('head')
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Main -->
        <div class="dash-main">
            <div class="dash">
                <div class="left-dash">
                </div>
                <div class="content-dash">
                 @yield('content')
             </div>
             <div class="right-dash">
            </div>
        </div>
    </div>
</div>

@yield('js')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    tinymce.init({
      selector: 'textarea.editor',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker code codesample',
      codesample_languages: [
    { text: 'HTML/XML', value: 'markup' },
    { text: 'JavaScript', value: 'javascript' },
    { text: 'CSS', value: 'css' },
    { text: 'PHP', value: 'php' },
    { text: 'Ruby', value: 'ruby' },
    { text: 'Python', value: 'python' },
    { text: 'Java', value: 'java' },
    { text: 'C', value: 'c' },
    { text: 'C#', value: 'csharp' },
    { text: 'C++', value: 'cpp' }
  ],
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table codesample',

      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
  });
</script>
</body>
</html>

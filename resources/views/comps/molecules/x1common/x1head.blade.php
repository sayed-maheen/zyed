<!DOCTYPE html>
{{-- site-direction and language --}}
<html lang="en" dir="ltr">
{{-- common head --}}

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- site-title --}}
    <title>@yield('title', 'Sayed Maheen | Full Stack Developer')</title>
    {{-- seo-content --}}
    <meta name="title" content="@yield('title', 'Full Stack Developer')" />
    <meta name="description" content="@yield('description', 'Full Stack Developer')" />
    <meta property="og:type" content="website" />
    <meta name="author" content="Sayed Maheen Basheer">
    <meta property="og:title" content="@yield('title', 'Full Stack Developer')" />
    <meta property="og:description" content="@yield('description', 'Full Stack Developer')" />
    {{-- favicon --}}
    @if (config('myconfig.access_env_var') == 'production')
        <link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    @endif

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- style-sheets-local-only  --}}
    {{-- normalize css --}}
    {{-- <link rel="stylesheet" href="css/normalize.css"> --}}
    {{-- need to replaace with app.css --}}
    @if (config('myconfig.access_env_var') == 'production')
        <link rel="stylesheet" href="public/css/x1zyed.css">
        {{-- <link rel="stylesheet" href="css/app.css"> --}}
    @else
        <link rel="stylesheet" href="css/x1zyed.css">
        {{-- <link rel="stylesheet" href="public/css/app.css"> --}}
    @endif

</head>



{{-- change back.css to app.css --}}
{{-- include condition for production- stylesheets DONE --}}
{{-- more seo and description --}}
{{-- rtl data --}}
{{-- take condition and google font from amback.blade --}}

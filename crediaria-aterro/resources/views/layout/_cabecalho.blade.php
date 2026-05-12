<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo_aba', 'Site')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="header">
        <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="logo">
        <h1>@yield('titulo_header', 'Título')</h1>
    </header>
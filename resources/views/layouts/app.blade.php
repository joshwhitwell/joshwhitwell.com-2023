<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta
    content="width=device-width, initial-scale=1"
    name="viewport"
  >
  <meta
    content="{{ csrf_token() }}"
    name="csrf-token"
  >
  <title>{{ config('app.name', 'Josh Whitwell') }}</title>
  <link
    href="https://fonts.bunny.net"
    rel="preconnect"
  >
  <link
    href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
    rel="stylesheet"
  />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
  {{ $attributes->class([
      'bg-gray-100 antialiased',
      'font-sans' => !str_contains(
          'font-serif',
          $attributes['class'],
      ),
  ]) }}
>
  @if ($includeProgressBar)
    <div
      class="{{ 'bg-' . $globalColorTheme . '-900' }} fixed top-0 left-0 h-1 w-0 transition-all"
      id="progressBar"
    ></div>
  @endif

  @if ($includeNavigation)
    @include('layouts.navigation')
  @endif

  @isset($header)
    <header>{{ $header }}</header>
  @endisset

  <main>{{ $slot }}</main>

  @isset($footer)
    <footer>{{ $footer }}</footer>
  @endisset
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">


    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pagetitle')-{{ config('app.name') }}</title>
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="我们以低廉的价格为您提供高质量的Telegram频道或群组的营销服务">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/flowbite.js"></script>
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body class="antialiased">
    <div>
        @if(Auth::check())
        @include('navigation-menu')
        @else
        @include('components.nav')

        @endif
    </div>

<div>
    {{ $slot }}
</div>

    @livewire('notifications')
</body>

</html>
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex flex-row items-center h-10 px-6 rounded-lg text-gray-700 bg-gray-100 '    
            : 'flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

@props(['active', 'total'])

@php
    $classes = ($active ?? false)
                ? 'font-semibold bg-gray-100 text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md'
                : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md';
    $classesTotal = ($active ?? false)
                ? 'bg-white ml-auto inline-block py-0.5 px-3 text-xs rounded-full'
                : 'bg-gray-100 text-gray-600 group-hover:bg-gray-200 ml-auto inline-block py-0.5 px-3 text-xs rounded-full';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="truncate">{{ $slot }}</span>
    <span class="{{ $classesTotal }}">{{ $total }}</span>
</a>

@props(['active'=> false ])

@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'bg-gray-900 text-white'
                : 'text-gray-300 hover:bg-gray-700 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => "$classes rounded-md px-3 py-2 text-base font-medium"]) }}
   aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>


@props(['title' => '', 'className' => ''])

<x-base-layout :$title :$className>
    <x-header/>
    {{ $slot }}
</x-base-layout>


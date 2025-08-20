@props(['title' => '', 'footerLinks' => ''])
{{-- Use the :title because it has the same name as the attributes --}}
<x-base-layout :$title>
  <x-layouts.header />
  {{ $slot }}
</x-base-layout>
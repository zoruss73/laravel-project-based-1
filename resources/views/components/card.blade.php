@props(['color', 'bgColor' => 'white'])

<div {{ $attributes
  ->merge(['lang' => 'fil'])
  ->class("card card-text-$color card-bg-$bgColor") }}>
  <div {{ $title->attributes->class("card-header") }}>
    {{ $title }}
  </div>
  {{ $slot }}
  <div {{ $footer->attributes->class("card-footer") }}>
    {{ $footer }}
  </div>
</div>
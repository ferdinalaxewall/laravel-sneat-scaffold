@props([
    'resolution' => $resolution ?? 'md',
    'cols' => $cols ?? '12'
])

<div {{ $attributes->merge(['class' => "col-{$resolution}-{$cols} mb-3"]) }}>
    {{ $slot }}
</div>

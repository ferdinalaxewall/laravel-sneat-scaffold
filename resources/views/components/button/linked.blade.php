@props([
    'href' => $href,
    'tooltip' => $tooltip,
    'iconClass' => $iconClass ?? 'bx-plus-circle',
    'variant' => $variant ?? 'btn-primary',
    'size' => $size ?? 'sm'
])

<a href="{{ $href }}" class="btn btn-icon {{ $variant }} btn-{{ $size }}" data-bs-toggle="tooltip" data-bs-offset="0,4"
    data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ $tooltip }}">
    <i class="bx {{ $iconClass }}"></i>
</a>

@props([
    'name' => $name,
    'href' => $href,
    'isActive' => $isActive ?? false,
])

<li class="breadcrumb-item @if ($isActive) active @endif">
    <a href="{{ $href }}">{{ $name }}</a>
</li>

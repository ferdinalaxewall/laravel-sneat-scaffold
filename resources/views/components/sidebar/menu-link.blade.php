@props([
    'activeCondition' => $activeCondition,
    'name' => $name,
    'href' => $href,
])

<li class="menu-item @if($activeCondition) active @endif">
    <a href="{{ $href }}" class="menu-link">
        <div data-i18n="{{ $name }}">{{ $name }}</div>
    </a>
</li>

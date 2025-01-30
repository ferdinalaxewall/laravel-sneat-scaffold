@props([
    'activeCondition' => $activeCondition,
    'name' => $name,
    'iconClass' => $iconClass,
    'href' => $href,
    'isToggle' => $isToggle ?? false,
])

<li class="menu-item @if ($activeCondition) active @if ($isToggle) open @endif @endif">
    <a
        href="{{ $href }}"
        class="menu-link @if ($isToggle) menu-toggle @endif">
            <i class="menu-icon tf-icons {{ $iconClass }}"></i>
            <div data-i18n="{{ $name }}">{{ $name }}</div>
        </a>
    {{ $slot }}
</li>

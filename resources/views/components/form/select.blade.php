@props([
    'name' => $name,
    'placeholder' => $placeholder ?? '',
    'handleSelect2' => $handleSelect2 ?? false,
    'required' => $required ?? false,
    'disabled' => $disabled ?? false,
    'multiple' => $multiple ?? false,
])

<select
    class="form-select {{ $handleSelect2 ? 'select2' : '' }} @error($name) is-invalid @enderror"
    name="{{ $name }}"
    id="{{ $name }}"
    @if ($required) required @endif
    @if ($disabled) disabled @endif
    @if ($multiple) multiple @endif
>
    @if (!$handleSelect2)
        <option value="" selected hidden>{{ $placeholder }}</option>
    @endif
    {{ $slot }}
</select>

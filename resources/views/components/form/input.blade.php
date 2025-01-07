@props([
    'type' => $type ?? 'text',
    'name' => $name,
    'placeholder' => $placeholder ?? '',
    'required' => $required ?? false,
    'model' => $model ?? null,
    'disabled' => $disabled ?? false,
    'attributes' => $attributes ?? null,
])

<input
    type="{{ $type }}"
    class="form-control @error($name) is-invalid @enderror"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name, $model?->{$name}) }}"
    placeholder="{{ $placeholder }}"
    @if ($required) required @endif
    @if ($disabled) disabled @endif
    {{ $attributes ?? '' }}
/>
@if ($type == 'password')
    <span class="input-group-text cursor-pointer see-password" data-target="#{{ $name }}">
        <i class="bx bx-hide"></i>
    </span>
@endif
@if ($type == 'file')
    <i class="d-block">
        <small>*Kosongkan jika tidak ingin melampirkan file</small>
    </i>
@endif
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

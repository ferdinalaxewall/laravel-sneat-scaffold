@props([
    'name' => $name,
    'placeholder' => $placeholder,
    'required' => $required ?? false,
    'model' => $model ?? null,
    'disabled' => $disabled ?? false,
])

<textarea
    class="simpleEditor @error($name) is-invalid @enderror"
    name="{{ $name }}"
    id="{{ $name }}"
    data-placeholder="{{ $placeholder }}"
    @if ($required) required @endif
    data-disabled="{{ $disabled }}"
>{{ old($name, $model?->{$name}) }}</textarea>
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

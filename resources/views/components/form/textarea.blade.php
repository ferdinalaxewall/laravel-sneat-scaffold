@props([
    'name' => $name,
    'placeholder' => $placeholder,
    'rows' => $rows ?? '3',
    'required' => $required ?? false,
    'model' => $model ?? null,
    'disabled' => $disabled ?? false,
])

<textarea
    class="form-control @error($name) is-invalid @enderror"
    name="{{ $name }}"
    id="{{ $name }}"
    rows="{{ $rows }}"
    placeholder="{{ $placeholder }}"
    @if ($required) required @endif
    @if ($disabled) disabled @endif
    >{{ old($name, $model?->{$name}) }}</textarea>
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

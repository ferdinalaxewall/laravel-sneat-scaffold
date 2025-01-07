@props(['name' => $name, 'required' => $required ?? false, 'for' => $for ?? null])

<label for="{{ $name }}" class="form-label @if ($required) required @endif">{{ $name }}</label>

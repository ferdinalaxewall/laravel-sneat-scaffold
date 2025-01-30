@props([
    'actionUrl' => $actionUrl ?? '#',
    'editable' => $editable ?? false,
])

<form action="{{ $actionUrl }}" class="row" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($editable)
        <input type="hidden" name="_method" value="PUT">
    @endif
    {{ $slot }}
</form>

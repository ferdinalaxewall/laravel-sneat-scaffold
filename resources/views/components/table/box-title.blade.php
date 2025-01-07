@props(['title' => $title])

<div class="d-flex align-items-center justify-content-between pe-4  ">
    <h5 class="card-header mb-0">{{ $title }}</h5>
    <div class="d-flex align-items-center gap-2">
        {{ $slot }}
    </div>
</div>

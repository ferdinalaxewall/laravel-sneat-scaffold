<form action="{{ $action_url }}" method="GET">
    <div class="modal-body">
        <div class="mb-3">
            <label for="start_date" class="form-label">Tanggal Awal</label>
            <input type="date" name="start_date" id="start_date" value="{{ request()->query('start_date') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">Tanggal Akhir</label>
            <input type="date" name="end_date" id="end_date" value="{{ request()->query('end_date') }}" class="form-control">
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ $action_url }}" class="btn btn-secondary">Reset</a>
        <button type="submit" class="btn btn-primary">Filter</button>
    </div>
</form>
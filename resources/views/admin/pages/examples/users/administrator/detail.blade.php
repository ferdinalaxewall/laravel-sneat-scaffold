<div class="modal-body">
    <div class="row">
        <div class="col-12 text-center">
            <img src="{{ asset('assets/admin/img/skeleton/not-found-image.png') }}" style="height: 300px;" alt="Gambar Administrator">
        </div>
        <div class="col-12">
            <h4>Super Administrator</h4>
        </div>
        <div class="d-flex flex-column" style="row-gap: 3px;">
            <div class="d-flex flex-row align-items-center gap-2">
                <span>
                    <i class="bx bx-envelope me-1"></i>
                    :
                </span>
                <span>admin@google.com</span>
            </div>
            <div class="d-flex flex-row align-items-center gap-2">
                <span>
                    <i class="bx bx-calendar me-1"></i>
                    :
                </span>
                <span>{{ now()->translatedFormat('d F Y H:i:s') }}</span>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
</div>
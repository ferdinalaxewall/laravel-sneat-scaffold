{{-- Default BeautyToast Template --}}
@if(session('toastSuccess'))
    <script>
        $(document).ready(function(){
            iziToast.success({
                title: 'Success',
                message : '{{ session('toastSuccess') }}',
            });
        })
    </script>
@elseif(session('toastError'))
    <script>
        $(document).ready(function(){
            iziToast.error({
                title: 'Failed',
                message : '{{ session('toastError') }}',
            });
        })
    </script>
@elseif(session('toastInfo'))
    <script>
        $(document).ready(function(){
            iziToast.info({
                title: 'Info'
                message : '{{ session('toastInfo') }}',
            });
        })
    </script>
@elseif(session('toastWarning'))
    <script>
        $(document).ready(function(){
            iziToast.warning({
                title: 'Caution'
                message : '{{ session('toastWarning') }}',
            });
        })
    </script>
@endif

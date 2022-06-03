<!-- JAVASCRIPT -->
<script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="{{ asset('/') }}assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{ asset('/') }}assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="{{ asset('/') }}assets/js/app.js"></script>
<!-- Cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

@if(Session::has('message'))
    <script>
        toastr.success("{{ Session::get('message') }}")
    </script>
@endif

<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>

<script>
    CKEDITOR.replace( 'editor' );
</script>

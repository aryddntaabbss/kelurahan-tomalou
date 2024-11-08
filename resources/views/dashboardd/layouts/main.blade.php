<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Halaman Admin</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('assets/img/LambangTidore.png') }}" rel="icon" />
        <link href="{{ asset('assets/img/LambangTidore.png') }}" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Nunito:300,400,600|Poppins:300,400,500"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('niceadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('niceadmin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('niceadmin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('niceadmin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('niceadmin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('niceadmin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('niceadmin/vendor/simple-datatables/style.css') }}" rel="stylesheet">
        <link href="{{ asset('niceadmin/css/style.css') }}" rel="stylesheet">

        <!-- Toastr CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Trix Editor CSS & JS -->
        <link rel="stylesheet" href="{{ asset('assets/css/trix.css') }}">
        <script src="{{ asset('assets/js/trix.js') }}"></script>

        <style>
            trix-toolbar [data-trix-button-group='file-tools'] {
                display: none;
            }
        </style>
    </head>

    <body>
        <!-- Main Content -->
        @yield('body')

        <!-- Back to Top Button -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('niceadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('niceadmin/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('niceadmin/vendor/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('niceadmin/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('niceadmin/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('niceadmin/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('niceadmin/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('niceadmin/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

        <!-- Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Initialize DataTables -->
        <script>
            $(document).ready(function() {
            $('.datatable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "lengthChange": true,
                "pageLength": 10,
            });
        });
        </script>

        <!-- Toastr Notifications -->
        <script>
            @if(Session::has("success"))
            toastr.success("{{ Session::get('success') }}");
        @endif
        </script>

        <!-- Template Main JS File -->
        <script src="{{ asset('niceadmin/js/main.js') }}"></script>
    </body>

</html>
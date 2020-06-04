<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.nobleui.com/html/template/demo_2/dashboard-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jun 2020 01:59:51 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/sweetalert2/sweetalert2.min.css">

    <!-- end plugin css for this page -->
    <!-- inject:css -->
    {{-- <link rel="stylesheet" href="{{asset('/')}}/assets/fonts/feather-font/css/iconfont.css"> --}}
    <link rel="stylesheet" href="{{asset('/')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/')}}/assets/css/demo_2/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('/')}}/assets/images/favicon.png" />
    @stack('css')
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('layouts/partials/_sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('layouts/partials/_navbar')
            <!-- partial -->

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">{{$page_title}}</h4>
                    </div>

                </div>
                @yield('content')


            </div>

            <!-- partial:partials/_footer.html -->
            {{-- @include('layouts/partials/_footer') --}}

            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{asset('/')}}/assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{asset('/')}}/assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{asset('/')}}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="{{asset('/')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('/')}}/assets/vendors/progressbar.js/progressbar.min.js"></script>

    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('/')}}/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{asset('/')}}/assets/js/template.js"></script>
    <script src="{{asset('/')}}/assets/js/data-table.js"></script>
    <script src="{{asset('/')}}/assets/vendors/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{asset('/')}}/assets/js/sweet-alert.js"></script>
    <script>
        // ACTIVE MENU JS
        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path

        if (path.includes("users") || path.includes("departements") || path.includes("departements") || path.includes(
                "device") || path.includes("sensor")) {
            path = window.location.origin + '/settings';
        }

        console.log(path);
        $('ul a').each(function () {
            if (this.href === path) {
                $(this).closest('li').addClass('active');
                $(this).parent().parent().parent().closest('li').find('.with-sub').addClass(
                    'show-sub active');
            }
        });

    </script>
    @stack('js')
    <script>
        function deleteData(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.' + id,
                    //     'success'
                    // )
                    window.location = url+id+'/delete';
                }
            })
        }

    </script>
</body>

</html>

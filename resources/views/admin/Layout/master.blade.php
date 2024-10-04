<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>Guinness Press System</title>

    <link rel="icon" href="{{ asset('admin_assets/images/brand/favicon.ico') }}" type="image/x-icon" />
    <link href="{{ asset('admin_assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/boxed.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/animated.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/datatable/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .form-control::placeholder {
            color: rgba(0, 0, 0, 0.820) !important;
        }

        .toast-success {
            background-color: rgb(10, 192, 116) !important;
        }
    </style>

</head>

<body class="app sidebar-mini">

    <!---Global-loader-->
    <div id="global-loader">
        <img src="{{ asset('admin_assets/images/svgs/loader.svg') }}" alt="loader">
    </div>

    <div class="page">
        <div class="page-main">
            @include('admin.partials.sidebar')
            @include('admin.partials.app_header')
            <div class="app-content main-content">
                <div class="side-app">
                    <div class="pt-5">
                        @yield('main_section')
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->

        <!-- End Footer-->

        <!--sidebar-right-->
        <!-- <div class="sidebar sidebar-right sidebar-animate">
            <div class="card-header border-bottom pb-5">
                <h4 class="card-title">Notifications </h4>
                <div class="card-options">
                    <a href="#" class="btn btn-sm btn-icon btn-light  text-primary" data-bs-toggle="sidebar-right"
                        data-bs-target=".sidebar-right"><i class="feather feather-x"></i> </a>
                </div>
            </div>
            <div class="">
                <div class="list-group-item  align-items-center border-0">
                    <div class="d-flex">
                        <span class="avatar avatar-lg brround me-3"
                            style="background-image: url(../../assets/images/users/4.jpg)"></span>
                        <div class="mt-1">
                            <a href="#" class="font-weight-semibold fs-16">Liam <span
                                    class="text-muted font-weight-normal">Sent Message</span></a>
                            <span class="clearfix"></span>
                            <span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>30
                                mins ago</span>
                        </div>
                        <div class="ms-auto">
                            <a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="feather feather-more-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                <li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
                                <li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
                                <li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
                                <li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->
        <!--/sidebar-right-->
    </div>

    <a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>
    <script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/sidemenu/sidemenu.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/datatables.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
    <link href="{{ asset('admin_assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin_assets/js/formelementadvnced.js') }}"></script>
    <script src="{{ asset('admin_assets/js/form-elements.js') }}"></script>
    <script src="{{ asset('admin_assets/js/select2.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.content').each(function() {
                $(this).richText({
                    bold: true,
                    italic: true,
                    underline: true,
                    strikeThrough: true,
                    ol: true,
                    ul: true,
                    heading: true,
                    fontColor: true,
                    fontSize: true,
                    imageUpload: true,
                    fileUpload: true,
                    videoEmbed: true,
                    urls: true,
                    table: true,
                    removeStyles: true,
                    code: true,
                    youtube: true,
                    align: true,
                    leftAlign: true,
                    centerAlign: true,
                    rightAlign: true,
                    justify: true,
                });
            });

            $('#datatable').DataTable();
            $('#responsive-datatable').DataTable();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @session('success')
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endsession
    @session('error')
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endsession
    <script>
        $('form').each(function() {
            $(this).on('submit', function() {
                var button = $(this).find('button[type="submit"]');
                button.prop('disabled', true).html(`
                    <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                    Loading...
                `);
                return true;
            });
        });
    </script>

</body>

</html>
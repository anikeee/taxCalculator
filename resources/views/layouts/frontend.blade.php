<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tax Calculator | Dashboard </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
</head>


<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div id="app">
        <div class="wrapper">

            <nav class="main-header navbar navbar-expand navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->

            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="" class="brand-link">
                    <img src="{{ asset('assets/img/logo.png/') }}" alt="" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">Tax Calculator</span>

                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->

                    <!-- SidebarSearch Form -->
                    {{-- <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="{{route('dashboard')}}" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Tax Calculator
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">@yield('page-title',"Page Title")</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                                    @yield('breadcrumb')

                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        @yield('page-content')
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Anikeee</a>.</strong> All rights
                reserved.
            </footer>
        </div>
    </div>


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->

    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>

    <!-- jQuery Knob -->
    <script src="{{ asset('assets/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--    <script>--}}
{{--        $(function() {--}}
{{--            /* jQueryKnob */--}}

{{--            $('.knob').knob({--}}
{{--                /*change : function (value) {--}}
{{--                 //console.log("change : " + value);--}}
{{--                 },--}}
{{--                 release : function (value) {--}}
{{--                 console.log("release : " + value);--}}
{{--                 },--}}
{{--                 cancel : function () {--}}
{{--                 console.log("cancel : " + this.value);--}}
{{--                 },*/--}}
{{--                format: function(value) {--}}
{{--                    return value + '%';--}}
{{--                },--}}
{{--                draw: function() {--}}

{{--                    // "tron" case--}}
{{--                    if (this.$.data('skin') == 'tron') {--}}

{{--                        var a = this.angle(this.cv) // Angle--}}
{{--                            ,--}}
{{--                            sa = this.startAngle // Previous start angle--}}
{{--                            ,--}}
{{--                            sat = this.startAngle // Start angle--}}
{{--                            ,--}}
{{--                            ea // Previous end angle--}}
{{--                            ,--}}
{{--                            eat = sat + a // End angle--}}
{{--                            ,--}}
{{--                            r = true--}}

{{--                        this.g.lineWidth = this.lineWidth--}}

{{--                        this.o.cursor &&--}}
{{--                            (sat = eat - 0.3) &&--}}
{{--                            (eat = eat + 0.3)--}}

{{--                        if (this.o.displayPrevious) {--}}
{{--                            ea = this.startAngle + this.angle(this.value)--}}
{{--                            this.o.cursor &&--}}
{{--                                (sa = ea - 0.3) &&--}}
{{--                                (ea = ea + 0.3)--}}
{{--                            this.g.beginPath()--}}
{{--                            this.g.strokeStyle = this.previousColor--}}
{{--                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)--}}
{{--                            this.g.stroke()--}}
{{--                        }--}}

{{--                        this.g.beginPath()--}}
{{--                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor--}}
{{--                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)--}}
{{--                        this.g.stroke()--}}

{{--                        this.g.lineWidth = 2--}}
{{--                        this.g.beginPath()--}}
{{--                        this.g.strokeStyle = this.o.fgColor--}}
{{--                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth *--}}
{{--                            2 / 3, 0, 2 * Math.PI, false)--}}
{{--                        this.g.stroke()--}}

{{--                        return false--}}
{{--                    }--}}
{{--                }--}}
{{--            })--}}
{{--            /* END JQUERY KNOB */--}}

{{--        })--}}
{{--    </script>--}}
{{--    <script src="{{ asset('js/library/modal.js') }}"></script>--}}
{{--    <script src="{{ asset('js/library/url.js') }}"></script>--}}
{{--    <script src="{{ asset('js/library/form.js') }}"></script>--}}
{{--    <script src="{{ asset('js/library/eventHandeler.js') }}"></script>--}}
    @yield('page-script')
</body>

</html>

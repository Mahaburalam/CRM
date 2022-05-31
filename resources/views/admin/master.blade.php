<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Digicon CRM</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('admin_dash/assets/images/users/Digicon_Transparent_Logo.png')}}">
    <!-- Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('admin_dash/assets/plugins/morris/morris.css')}}">
    <link href="{{ asset('admin_dash/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_dash/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_dash/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{ asset('admin_dash/assets/js/fontawesome6.0.js')}}"></script>




</head>

<body class="fixed-left">

    <div id="wrapper">

        @include('admin.body.header')

        @include('admin.body.sidebar')

        @yield('admin')

        @include('admin.body.footer')
    </div><!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('admin_dash/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/modernizr.min.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/detect.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/fastclick.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/waves.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/jquery.scrollTo.min.js')}}"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <!-- <script src="//code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script src="//cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <!--Morris Chart-->
    <script src="{{ asset('admin_dash/assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/pages/dashboard.js')}}"></script>
    <script src="{{ asset('admin_dash/assets/js/app.js')}}"></script>
    <script type="text/javascript">
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('a');
        const menuLength = menuItem.length
        for (let i = 0; i < menuLength; i++) {

            if (menuItem[i].href === currentLocation) {

                menuItem[i].className = "active"
            }
        }
    </script>




    @yield('scripts')




    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                "searching": true,
                "paging": true,
                "order": [[0,"asc"]],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

        });
    </script>
</body>

</html>
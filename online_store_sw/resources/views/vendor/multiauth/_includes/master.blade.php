<!DOCTYPE html>
<html lang="en">
<title>@yield('title')</title>
@include('multiauth::_includes.head')
<body>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Top Bar Start -->
    @include('multiauth::_includes.header')
    <!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    @include('multiauth::_includes.aside')
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    
    @yield('content')

    
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
  </div>
  <!-- END wrapper -->
  <!-- jQuery  -->
  
  <script src="{{ asset('assets/back/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/js/jquery.slimscroll.js') }}"></script>
  <script src="{{ asset('assets/back/assets/js/waves.min.js') }}"></script>
  <!--Chartist Chart-->
  <script src="{{ asset('assets/back/assets/plugins/chartist/js/chartist.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
  <!-- peity JS -->
  <script src="{{ asset('assets/back/assets/plugins/peity-chart/jquery.peity.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/pages/dashboard.js') }}"></script>
  <!-- App js -->
  <script src="{{ asset('assets/back/assets/js/app.js') }}"></script>
  <!-- Required datatable js -->
  <script src="{{ asset('assets/back/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <!-- Buttons examples -->
  <script src="{{ asset('assets/back/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
  <!-- Responsive examples -->
  <script src="{{ asset('assets/back/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/back/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
  <!-- Datatable init js -->
  <script src="{{ asset('assets/back/assets/pages/datatables.init.js') }}"></script>
</body>
</html>
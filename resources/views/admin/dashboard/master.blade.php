<!DOCTYPE html>
<!--
Template Name: NobleUI - Admin & Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: You must have a valid license purchased only from above link or https://themeforest.net/user/nobleui/portfolio/ in order to legally use the theme for your project.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{  asset('adminAsset') }}/assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{  asset('adminAsset') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{  asset('adminAsset') }}/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{  asset('adminAsset') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{  asset('adminAsset') }}/assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{  asset('adminAsset') }}/assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{  asset('adminAsset') }}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
</head>
<body>
<div class="main-wrapper">
@include('admin.dashboard.include.sidebar')
    <!-- partial:partials/_sidebar.html -->
@include('admin.dashboard.include.header')
<!-- partial -->

    <div class="page-wrapper" style="margin-top: 10px;">
        @yield('content')
    <!-- partial:partials/_footer.html -->
         @include('admin.dashboard.include.footer')
    <!-- partial -->
    </div>
</div>

<!-- core:js -->
<script src="{{  asset('adminAsset') }}/assets/vendors/core/core.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{  asset('adminAsset') }}/assets/vendors/chartjs/Chart.min.js"></script>
<script src="{{  asset('adminAsset') }}/assets/vendors/jquery.flot/jquery.flot.js"></script>
<script src="{{  asset('adminAsset') }}/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
<script src="{{  asset('adminAsset') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{  asset('adminAsset') }}/assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="{{  asset('adminAsset') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
<!-- end plugin js for this page -->
<!-- inject:js -->
<script src="{{  asset('adminAsset') }}/assets/vendors/feather-icons/feather.min.js"></script>
<script src="{{  asset('adminAsset') }}/assets/js/template.js"></script>
<!-- endinject -->
<!-- custom js for this page -->
<script src="{{  asset('adminAsset') }}/assets/js/dashboard.js"></script>
<script src="{{  asset('adminAsset') }}/assets/js/datepicker.js"></script>
<!-- end custom js for this page -->

<!-- plugin js for this page -->
<script src="{{  asset('adminAsset') }}/assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{  asset('adminAsset') }}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- end plugin js for this page -->
<script src="{{  asset('adminAsset') }}/assets/js/data-table.js"></script>
<!-- end custom js for this page -->
</body>
</html>

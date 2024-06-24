<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/admin/') }}"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard {{ config('app.name') }} - @yield('title')</title>

    <meta name="description" content="Jtrip - Mobil, Guide, Tur, dan Segala Keperluan pergi ke Jepang">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Jtrip">
    <meta itemprop="description" content="Jtrip - Mobil, Guide, Tur, dan Segala Keperluan pergi ke Jepang">
    
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Jtrip">
    <meta property="og:description" content="Jtrip - Mobil, Guide, Tur, dan Segala Keperluan pergi ke Jepang">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jtrip">
    <meta name="twitter:description" content="Jtrip - Mobil, Guide, Tur, dan Segala Keperluan pergi ke Jepang">

    <!-- Favicon -->
    <link href="{{ asset('assets/landing-page/images/favicon.jpg') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('assets/landing-page/images/webclip.jpg') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" /> --}}

    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/pages/page-profile.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/iziToast/css/iziToast.min.css') }}">

    {{-- Datatables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables/checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables/button.css') }}"> --}}
    
    {{-- Select2 CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/select2/css/select2.min.css') }}">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/admin/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/admin/js/config.js') }}"></script>

    @stack('head')
  </head>

  <body>
    <div class="pre-loader is-load">
        <div class="circle-loader"></div>
    </div>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('admin.components.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
        
          <!-- Navbar -->
          @include('admin.components.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.components.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/iziToast/js/iziToast.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    {{-- <script src="{{ asset('assets/admin/vendor/libs/datatables/datatables.js') }}"></script> --}}
    <script src="{{ asset('assets/admin/vendor/libs/chartjs/chartjs.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/chartjs/charts-chartjs.js') }}"></script>

    {{-- Select2 JS --}}
    <script src="{{ asset('assets/admin/vendor/libs/select2/js/select2.full.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/admin/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    @include('admin.components.notification')

    @stack('script')
  </body>
</html>

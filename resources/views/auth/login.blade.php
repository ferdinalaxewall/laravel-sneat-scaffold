<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/admin/') }}"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name') }} - Sign In</title>

    <!-- Google / Search Engine Tags -->
    <meta content="Jtrip | Mobil, Guide, Tur, dan Segala Keperluan pergi ke Jepang" property="og:title">
    <meta content="Jtrip | Mobil, Guide, Tur, dan Segala Keperluan pergi ke Jepang" property="twitter:title">

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

    {{-- DataTables CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables/checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/datatables/button.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/select2/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/iziToast/css/iziToast.min.css') }}">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/admin/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/admin/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mt-3 mb-4">
                            <a href="#" class="app-brand-link gap-2">
                                <img src="{{ asset('assets/landing-page/images/J-Tripロゴ.svg') }}" width="85" alt="">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <div class="text-center">
                            <h4 class="mb-2">Selamat Datang 👋</h4>
                            <p class="mb-4">Silakan masuk ke akun Anda dan mulai petualangan</p>
                        </div>

                        <form id="formAuthentication" class="mb-3" action="#" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    placeholder="Masukkan Email"
                                    value="{{ old('email') }}"
                                    autofocus
                                    required />
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    {{-- <a href="auth-forgot-password-basic.html">
                                        <small>Forgot Password?</small>
                                    </a> --}}
                                </div>

                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" required />
                                    <span class="input-group-text cursor-pointer see-password" data-target="#password">
                                        <i class="bx bx-hide"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign In</button>
                            </div>
                        </form>

                        {{-- <p class="text-center">
                            <span>Belum mempunyai akun?</span>
                            <a href="{{ route("auth.register") }}">
                                <span>Daftar disini</span>
                            </a>
                        </p> --}}
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/js/menu.js') }}"></script>

    <!-- DataTables JS -->
    <script src="{{ asset('assets/admin/vendor/libs/datatables/datatables.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/admin/vendor/libs/select2/js/select2.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/iziToast/js/iziToast.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    <!-- Page JS -->
    @include('admin.components.notification')

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

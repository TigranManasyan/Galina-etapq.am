<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('admin/assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('admin/assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/pickers/daterangepicker.js') }}"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/js/demo_pages/dashboard.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

<div class="page-content pt-2">
    @include('admin.includes.top_sidebar')

    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">
            <div class="row mb-2">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('admin.logout') }}" class="btn btn-primary btn-sm">Դուրս գալ</a>
                    <a href="{{ route('reset.view') }}" class="btn ml-2 btn-secondary btn-sm">Փոխել ծածկագիրը</a>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

</footer>
<!-- /footer -->
@stack('scripts')
</body>
</html>

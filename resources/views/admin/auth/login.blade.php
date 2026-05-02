<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Մուտք</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="./assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="./assets/js/main/jquery.min.js"></script>
    <script src="./assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="./assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="./assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="./assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="./assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="./assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="./assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->
</head>
<body>
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->
            <form class="login-form" action="{{  route('admin.login') }}" method="POST">
                @csrf
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <h6 class="mb-0">etapq.am</h6>
                            <h5 class="mb-0">Մուտք գործեք համակարգ</h5>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control" placeholder="Username" name='email'>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control" placeholder="Password" name='password'>
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center">
                            <div class="form-check mb-0">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-input-styled" checked >
                                    Հիշել
                                </label>
                            </div>

                            <a href="login_password_recover.html" class="ml-auto">Վերականգնել գաղտնաբառը?</a>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Մուտք <i class="icon-circle-right2 ml-2"></i></button>
                        </div>



                    </div>
                </div>
            </form>
            <!-- /login form -->

        </div>
        <!-- /content area -->


    </div>
    <!-- /main content -->

</div>
</body>
</html>

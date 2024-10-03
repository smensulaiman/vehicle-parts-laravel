<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>VPMS - Login</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.svg')}}" />
    <!-- Template CSS -->
    <script src="{{asset('assets/js/vendors/color-modes.js')}}"></script>
    <link href="{{asset('assets/css/main.css?v=6.0')}}" rel="stylesheet" type="text/css" />
</head>

<body>
<main>
    <section class="content-main">
        <div class="card mx-auto card-login mt-80 p-4">
            <div class="card-body">
                <img class="" src="{{asset('assets/imgs/theme/logo.png')}}" alt="">
                <hr class="mt-0"/>
                <h4 class="card-title mb-4">Sign in</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" id="email" name="email" placeholder="email" type="text" value="admin@gmail.com"/>
                    </div>
                    <!-- form-group// -->
                    <div class="mb-3">
                        <input class="form-control" id="password" name="password" placeholder="password" type="password" value="admin1234"/>
                    </div>
                    <!-- form-group// -->
                    <div class="mb-3">
                        <a href="#" class="float-end font-sm text-muted">Forgot password?</a>
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" checked="" />
                            <span class="form-check-label">Remember</span>
                        </label>
                    </div>
                    <!-- form-group form-check .// -->
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary w-100 d-flex justify-content-center">Login</button>
                    </div>
                    <!-- form-group// -->
                </form>
                <p class="text-center mb-4">Don't have account? <a href="#">Sign up</a></p>
            </div>
        </div>
    </section>

    <footer class="main-footer text-center">
        <p class="font-xs">
            <script>
                document.write(new Date().getFullYear());
            </script>
            &copy; Nest - HTML Ecommerce Template .
        </p>
        <p class="font-xs mb-30">All rights reserved</p>
    </footer>
</main>
<script src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/jquery.fullscreen.min.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('assets/js/main.js?v=6.0')}}" type="text/javascript"></script>
</body>
</html>

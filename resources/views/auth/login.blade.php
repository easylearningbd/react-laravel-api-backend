<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>React - Admin Login Page </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favicon.png') }} ">
    <link href="{{ asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }} " rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }} " rel="stylesheet">
  
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="{{ asset('backend/images/logo_white.png') }}" alt="">
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                   

    <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="form-group">
            <label class="mb-1"><strong>Email</strong></label>
            <input type="email" id="email" name="email" class="form-control" >
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Password</strong></label>
            <input type="password" id="password" name="password" class="form-control"  >
        </div>


        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
               <div class="custom-control custom-checkbox ml-1">
                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                    <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                </div>
            </div>
            <div class="form-group">
                <a href="page-forgot-password.html">Forgot Password?</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
        </div>
    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('backend/vendor/global/global.min.js') }} "></script>
    <script src="{{ asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }} "></script>
    <script src="{{ asset('backend/js/custom.min.js') }} "></script>
    <script src="{{ asset('backend/js/deznav-init.js') }} "></script>
    
    
</body>
</html>
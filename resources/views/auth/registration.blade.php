<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dash<span>Board</span></title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" alt="favicon" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper"></div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">Dash<span>Board</span></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Create an account.</h5>


                                        <!-- Registration Form -->
                                        <form method="POST" action="{{ route('register.post') }}" class="register-form"
                                            id="register-form">
                                            @csrf

                                            <!-- Username Field with Error Handling -->
                                            <div class="form-group">
                                                <label for="name">Username</label>
                                                <input type="text" class="form-control" id="name"
                                                    autocomplete="name" placeholder="Name" name="name" required />
                                                @error('name')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Email Field with Error Handling -->
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" autocomplete="email" required />
                                                @error('email')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Password Field with Error Handling -->
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" autocomplete="new-password" placeholder="Password"
                                                    required />
                                                @error('password')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Remember Me Checkbox -->
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="remember_me">
                                                    Remember me
                                                </label>
                                            </div>

                                            <!-- Submit and Social Signup Buttons -->
                                            <div class="mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Sign
                                                    up</button>
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                                    <i class="btn-icon-prepend" data-feather="twitter"></i>
                                                    Sign up with Twitter
                                                </button>
                                            </div>

                                            <!-- Link to Login Page -->
                                            <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already a
                                                user? Sign in</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
</body>

</html>

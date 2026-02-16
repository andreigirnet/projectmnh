<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Register'])

    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])



</head>

<body class="authentication-bg">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="/images/login/registerLogin.jpg" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand px-4 py-2">
{{--                                        <a href="" class="logo-light">--}}
{{--                                            <img src="/images/login/whiteLoginLogo.png" alt="logo" height="70">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="logo-dark">--}}
{{--                                            <img src="/images/login/darkLoginLogo.png" alt="dark logo" height="70">--}}
{{--                                        </a>--}}
                                    </div>
                                    <div class="px-4 py-2 my-auto">
                                        <h4 class="fs-20">Free Sign Up</h4>
                                        <p class="text-muted mb-3">Enter your email address and password to access
                                            account.</p>

                                        <!-- form -->
                                        <form method="POST" class="loginForm" action="{{ route('register') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <input class="form-control" type="text" name="name" id="fullname"
                                                    placeholder="Enter your name" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Phone</label>
                                                <input class="form-control" name='phone' type="text" id="phone"
                                                    placeholder="Enter your phone" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email address</label>
                                                <input class="form-control" type="email" name='email' id="emailaddress" required=""
                                                    placeholder="Enter your email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" name='password' required="" id="password"
                                                    placeholder="Enter your password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">ConfirmPassword</label>
                                                <input id="password-confirm" placeholder="Password Confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkbox-signup">
                                                    <label class="form-check-label" for="checkbox-signup">I accept <a
                                                            href="{{route('terms')}}" class="text-muted">Terms and
                                                            Conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit">SignUp</button>
                                            </div>

                                            <div class="text-center mt-4">
                                                <div class="d-flex gap-2 justify-content-center mt-3">
{{--                                                    <a href="javascript: void(0);" class="btn btn-soft-primary"><i--}}
{{--                                                            class="ri-facebook-circle-fill"></i></a>--}}
                                                    <!--<a href="{{route('google')}}"><img-->
                                                    <!--        src="{{asset('images/google.png')}}" alt=""></a>-->
{{--                                                    <a href="javascript: void(0);" class="btn btn-soft-info"><i--}}
{{--                                                            class="ri-twitter-fill"></i></a>--}}
{{--                                                    <a href="javascript: void(0);" class="btn btn-soft-dark"><i--}}
{{--                                                            class="ri-github-fill"></i></a>--}}
                                                </div>
                                            </div>

                                            @if(session('errors'))
                                                <div class="alert alert-danger" style="margin-top: 30px">
                                                    <ul>
                                                        @foreach(session('errors')->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center" style="font-size: 18px">
                    <p class="text-dark-emphasis">Already have account? <a href="{{route('login')}}" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a></p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
<script>
    window.replainSettings = { id: '026d1438-5b42-4350-b663-dcd99f150913' };
    (function(u){var s=document.createElement('script');s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
</script>

    @include('layouts.shared/footer-scripts')

</body>

</html>

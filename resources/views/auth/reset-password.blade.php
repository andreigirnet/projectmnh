@php
    $token = request('token');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Recover Password'])

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
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-block p-2">
                            <img src="/images/login/registerLogin.jpg" alt="" class="img-fluid rounded h-100">
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <div class="auth-brand p-4">
{{--                                    <a href="" class="logo-light">--}}
{{--                                        <img src="/images/login/whiteLoginLogo.png" alt="logo" height="70">--}}
{{--                                    </a>--}}
{{--                                    <a href="" class="logo-dark">--}}
{{--                                        <img src="/images/login/darkLoginLogo.png" alt="dark logo" height="70">--}}
{{--                                    </a>--}}
                                </div>
                                <div class="p-4 ">
                                    <h4 class="fs-20">Create a new password</h4>
                                    <p class="text-muted mb-3">Enter new credentials</p>


                                    <!-- form -->
                                    <form action="{{ route('password.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="mb-3">
                                            <label for="emailaddress" class="form-label">Email address</label>
                                            <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="emailaddress" class="form-label">New Password</label>
                                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="New Passowrd">
                                        </div>

                                        <div class="mb-3">
                                            <label for="emailaddress" class="form-label">Confirm New Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm New Passowrd">
                                        </div>

                                        <div class="mb-0 text-start">
                                            <button class="btn btn-soft-primary w-100" type="submit"><i class="ri-loop-left-line me-1 fw-bold"></i> <span class="fw-bold">Reset Password</span> </button>
                                        </div>
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
                <p class="text-dark-emphasis">Back To <a href="{{route('login')}}" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a></p>
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

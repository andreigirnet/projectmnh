@extends('front.app')
@section('content')
    <div class="title" data-aos="fade-up">
        <div class="titleText" id="titleCertificate">Verify a certificate</div>
        <div class="borderTitle"></div>
    </div>
    <div class="infoWrap">
        <div class="infoText">
            <h3>Please have the validation code on you. Find it in the certificate </h3><br>
            Certificate Verification: <br>
            <br>
            <div class="vrt-main-wrapper">
                <div class="vrt-glass-container">
                    <h1 class="vrt-title">Verify Credentials</h1>
                    <p class="vrt-subtitle">Enter the Unique ID to check validity</p>

                    @if(session('success'))
                        <div class="vrt-alert vrt-alert-success">
                            <strong>✓ Success:</strong> {{ session('success') }}
                        </div>
                    @endif

                    @if(session('fail'))
                        <div class="vrt-alert vrt-alert-error">
                            <strong>✕ Notice:</strong> {{ session('fail') }}
                        </div>
                    @endif

                    <form action="{{ route('certificate.verify') }}" method="POST">
                        @csrf
                        <div class="vrt-form-group">
                            <input type="text"
                                   name="unique_id"
                                   class="vrt-input-field"
                                   placeholder="Enter Certificate ID..."
                                   required>
                        </div>
                        <button type="submit" class="vrt-submit-btn">Verify Authenticity</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

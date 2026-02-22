@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
@include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
<div class="homePageAdminContent">
    @if (session('created'))
        <div class="modalRegisterComplete" id="modalRegisterEmployer">
            <div class="modalTitle">Hi there</div>
            <p>Its <a href="{{route('home')}}">manualhandlingireland.com</a> Training Centre here.</p>
            <div class="modalText">
                <div class="modalInnerText">
                    If you require any further assistance or information, please don't hesitate to reach out to us via the chat feature on our website.
                    <br><br>
                    To access the course, you can follow the steps outlined on our website once you're logged in, or return at any time later by using the email we've just sent you containing your login details (password & email). Do check your spam/junk folder, just in case.
                    <br><br>
                    Upon successful processing of your payment, you'll be able to choose the language for your training (English / Polish / Spanish / Russian / Romanian / Ukrainian).
                    <br><br>
                    Our customer support is available from 10 am to 7-8 pm every day, including weekends.
                </div>
            </div>
            <div class="modalText">
                Best regards
            </div>
            <div class="adminButtonModal" style="display: flex; align-items: center; justify-content: center; margin-top: 20px" id="understoodButton">UNDERSTOOD</div>
        </div>
    @endif
        <img src="{{asset("images/products/saleOver.png")}}" class="overImgDashBack" alt="">
        <div class="adminProductsBack">
            @foreach($products as $product)
                @if($product->status == 0)
                    <div class="adminProductBack">
                        <img src="{{ asset('images/lifting.png') }}" alt="Manual Handling Course">
                        <div class="adminProductBottomBack">
                            <div class="adminProductNameBack">{{$product->name}}</div>
                            @if (!in_array($product->id, [13, 14, 15, 16]))
                                <div style="color: #397b21; font-weight: bold" class="elearning">e-Learning Course</div>
                            @endif
                            <hr style="border: 1px solid gray; opacity: 0.8">
                            <div class="product-info-icons">
                                @if($product->id == 14)
                                    <div class="product-icons-back">
                                        <img src="images/icons/back-in-time.png" alt="">
                                        <div>Duration: {{$product->durationTraining}} Day(Half day)</div>
                                    </div>
                                @else
                                    <div class="product-icons-back">
                                        <img src="images/icons/back-in-time.png" alt="">
                                        <div style="font-weight: 600; display: flex; align-items: center; column-gap: 5px">Duration: <span style="font-weight: 500">{{$product->durationTraining}} hours</span></div>
                                    </div>
                                @endif
                                <div class="product-icons-back">
                                    <img src="images/icons/certificate.png" alt="">
                                    <div style="font-weight: 600; display: flex; align-items: center; column-gap: 5px">Validity: <span style="font-weight: 500">{{$product->certificateValidity}} Years</span></div>
                                </div>
                                <div class="product-icons-back">
                                    <img src="images/icons/money.png" alt="">
                                    <div style="font-weight: bold"><del style="color: gray">{{round($product->price * 1.31)}} €</del> <span style="color: red; font-size: 20px">{{$product->price}} €</span></div>
                                </div>
                            </div>
                            @if($product->status == 0)
                                <form action="{{route('basket.add')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$product->id}}" name="productId">
                                    <div class="productButtonsBack">
                                        @if($product->description)
                                            <a href="{{route('front.product', $product->slug)}}" class="homeInfoCourseButton">Info</a>
                                        @endif
                                        <button type="submit" class="buttonProductAdminAddBack">Add To Basket</button>
                                    </div>
                                </form>
                            @else
                                <div class="productButtons">
                                    <button type="submit" class="buttonProductAdminAdd">Coming Soon</button>
                                    @if($product->description)
                                        <a href="{{route('front.product', $product->id)}}" class="homeStartCourseButton">Info</a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="homeActionButtons">
            @if($userPackageId)
                <a href="{{route('course.index', $userPackageId[0]->id)}}" class="homeStartCourseButton">Start Course</a>
            @else
                <form action="{{route('basket.add')}}" method="POST">
                    @csrf
                    <input type="hidden" value="1" name="productId">
                    <button type="submit" class="homeStartCourseButton">Buy a course</button>
                </form>
            @endif
            @if($certificateId)
                <a href="{{route('certificate.download', $certificateId[0]->id)}}" class="homeDownloadButton">Downloand Certificate</a>
            @endif
        </div>

    <div class="adminHomePageTitle">EFFECTIVE AND ACCESIBLE</div>
    <div class="adminHomePageInformation">
        <b class="textColorTitle">{{env('APP_NAME')}}</b>
        stands as one of Ireland's premier providers of straightforward, efficient, and easily accessible training materials for occupational health and safety. Our primary focus lies in delivering exceptional customer service and ensuring regulatory compliance for our extensive clientele in Ireland and internationally. Through our user-friendly online learning platform, we facilitate seamless training experiences, whether for individuals or large groups of staff members.
    </div>
    @if($userPackageId)
        <div class="notice">
            <div class="noticeTitle">Notice:</div>
            <div class="noticeText">
                You have received the course/courses, either through your own purchase or from your employer.
                <br>
                To commence the training, please activate it by clicking the link below and then proceed by pressing the "Start Course" button to get started.
                <br><br>
                Follow the link bellow
                <br>
            </div>
            <a class="homeDownloadButton" href="{{route('package.index')}}">Link</a>
        </div>
    @endif

       <div class="homeManualProduct">
            <div class="course-card">

                <div class="course-image">
                    <!-- Replace with actual image -->
                    <img src="{{ asset('images/lifting.png') }}" alt="Manual Handling Course">
                </div>

                <div class="course-content">

                    <div class="price-wrapper">
                        <span class="old-price">€35</span>
                        <span class="new-price">€25</span>
                        <span class="discount-badge">30% OFF</span>
                    </div>

                    <h1 class="course-title">Manual Handling Course</h1>

                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label">Validity</span>
                            <span class="info-value">3 Years</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Duration</span>
                            <span class="info-value">1 Hour</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Format</span>
                            <span class="info-value">100% Online</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Certificate</span>
                            <span class="info-value">Instant</span>
                        </div>
                    </div>
                    <form action="{{route('basket.add')}}" method="POST">
                        @csrf
                        <input type="hidden" value="1" name="productId">
                                <button class="course-btn" type="submit">Buy Now</button>
                    </form>

                </div>
            </div>

       </div>
</div>
        <div style=" bottom: 30px;" id="stripeLogo"><img src="{{asset('images/brands/stripe.webp')}}" alt="" style="width: 235px"></div>


        {{--    <div class="langTitle">--}}
{{--        <div class="languageText">When you start the course, you'll have the opportunity to choose from that 6 languages:</div>--}}
{{--        <div class="languagesSection">--}}
{{--            <img src="{{asset('images/flags/en.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/pl.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/ro.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/ru.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/sp.png')}}" alt="">--}}
{{--            <img src="{{asset('images/flags/ukr.png')}}" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
<script src="{{asset('js/showModalRegisterEmployee.js')}}"></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection

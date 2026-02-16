@extends('front.app')
@section('content')
    <div id="mainBanner">
        <img src="{{asset('images/banners/BackgroundIreland.png')}}" class="warehouse" alt="">
{{--        <video autoplay muted loop class="warehouse" >--}}
{{--            <source src="video/bannerVideoBig.mp4" type="video/mp4">--}}
{{--        </video>--}}
        <div class="opacityLayer"></div>
        <div class="mainBannerContent">
            <div class="mainBannerRight">
                <h1 class="mainBannerTitle" x-html="data.videoTitle">Convenient & Effective,<br> Ensuring Your Safe Return to Work</h1>
                <div class="mainBannerDescription" x-text="data.videoContent">Providing best Online Manual Handling Training Course that delivers top-quality safety instruction, certification management, and consultative services, simplifying the task of ensuring every worker returns home safely.</div>
                <a href="{{route('register')}}"><div class="videoButton" x-text="data.registerButton">Pay / Register Here</div></a>
            </div>
        </div>
    </div>

    <div id="statsCounter">
        <div id="counterWrap">
            <div class="counterContent">
                <div class="counterNumbers" id="customersCounter"></div>
                <div class="counterDescription" x-text="data.counterLanding[0]">CUSTOMERS</div>
            </div>
            <div class="counterContent">
                <div class="counterNumbers" id="certificatesCounter"></div>
                <div class="counterDescription" x-text="data.counterLanding[1]">CERTIFICATE'S ISSUED</div>
            </div>
            <div class="counterNumbers" class="counterContent">
                <div id="instructorsCounter"></div>
                <div class="counterDescription" x-text="data.counterLanding[2]">QUALIFIED INSTRUCTORS</div>
            </div>
        </div>
    </div>

    <div class="title" data-aos="fade-up">
        <div class="titleText" x-text="data.landingProduct[0]">Awarded for Exceptional Performance in Online Learning in Ireland, UK and Europe</div>
        <div class="borderTitle"></div>
        <img src="{{asset("images/products/saleOver.png")}}" id="overImgDash" alt="">
    </div>
    <div class="productSection">
        <img src="{{asset('images/manualanimation.gif')}}" alt="Person lifting a box safely" class="gifImage">
        <div class="productWrapper">
            <div class="adminProducts">
                @foreach($products as $product)
                    @if($product->status == 0)
                    <div class="adminProduct">
                        <img src="{{asset('images/productAdd/'.$product->image)}}" alt="" class="adminProductImage">
                        <div class="adminProductBottom">
                            <div class="adminProductName">{{$product->name}}</div>
                            @if (!in_array($product->id, [13, 14, 15, 16]))
                                <div style="color: #397b21; font-weight: bold">e-Learning Course</div>
                            @endif
                            <hr>
                            <div class="product-info-icons">
                                @if($product->id == 14)
                                    <div class="product-icons">
                                        <img src="images/icons/back-in-time.png" alt="">
                                        <div>Duration: {{$product->durationTraining}} Day(Half day)</div>
                                    </div>
                                @else
                                    <div class="product-icons">
                                        <img src="images/icons/back-in-time.png" alt="">
                                        <div>Duration: {{$product->durationTraining}} hours</div>
                                    </div>
                                @endif
                                <div class="product-icons">
                                    <img src="images/icons/certificate.png" alt="">
                                    <div>Valid: {{$product->certificateValidity}} Years</div>
                                </div>
                                <div class="product-icons">
                                    <img src="images/icons/money.png" alt="">
                                    <div style="font-weight: bold"><del style="color: gray">{{round($product->price * 1.31)}} €</del> <span style="color: red; font-size: 20px">{{$product->price}} €</span></div>
                                </div>
                            </div>
                            @if($product->status == 0)
{{--                                <form action="{{route('basket.add')}}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" value="{{$product->id}}" name="productId">--}}
                                    <div class="productButtons">
                                        <a href="{{route('home')}}" class="buttonProductAdminAdd">Add To Basket</a>
                                        @if($product->description)
                                            <a href="{{route('front.product', $product->slug)}}" class="homeStartCourseButton">Info</a>
                                        @endif
                                    </div>
{{--                                </form>--}}
{{--                            @else--}}
{{--                                <div class="productButtons">--}}

{{--                                    --}}{{--                                    <button type="submit" class="buttonProductAdminAdd">Coming Soon</button>--}}

{{--                                    @if($product->description)--}}
{{--                                        <a href="{{route('front.product', $product->id)}}" class="homeStartCourseButton">Info</a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
                            @endif
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="langTitle" data-aos="fade-up">
        <div class="languageText"  x-text="data.landingProduct[5]">When you start the course, you'll have the opportunity to choose from that 6 languages:</div>
        <div class="languagesSection">
            <img src="{{asset('images/flags/en.png')}}" alt="">
            <img src="{{asset('images/flags/pl.png')}}" alt="">
            <img src="{{asset('images/flags/ro.png')}}" alt="">
            <img src="{{asset('images/flags/ru.png')}}" alt="">
            <img src="{{asset('images/flags/sp.png')}}" alt="">
            <img src="{{asset('images/flags/ukr.png')}}" alt="">
        </div>
    </div>

    <div class="bulkContainer">
        <div class="innerBulk">
            <div class="bulkLeftSide">
                <div class="bulkTitle" x-text="data.bulkSection[0]">Our online courses are designed for easy completion.</div>
                <div class="bulkLine"></div>
                <div class="bulkItems">
                    <div class="bulkItem">
                        <div class="bulkImg">
                            <img src="{{asset('images/icons/11.png')}}" alt="image">
                        </div>
                        <div class="bulkContent" x-text="data.bulkSection[1]"> Buy your course online.</div>
                    </div>
                    <div class="bulkItem">
                        <div class="bulkImg">
                            <img src="{{asset('images/icons/22.png')}}" alt="image">
                        </div>
                        <div class="bulkContent" x-text="data.bulkSection[2]"> Get started by activating your course and beginning your training.</div>
                    </div>
                    <div class="bulkItem">
                        <div class="bulkImg">
                            <img src="{{asset('images/icons/33.png')}}" alt="image">
                        </div>
                        <div class="bulkContent" x-text="data.bulkSection[3]"> Advance & Complete - Engage with the course, take the exam, and then download your certificate of completion.</div>
                    </div>
                    <div class="bulkItem">
                        <div class="bulkImg">
                            <img src="{{asset('images/icons/44.png')}}" alt="image">
                        </div>
                        <div class="bulkContent" x-text="data.bulkSection[4]"> For any help or guidance, just email us at info@Irish-ManualHandling.com.</div>
                    </div>
                </div>
            </div>
            <div class="bulkRightSide">
                <img src="{{asset('images/landingBulk.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="trustContainer">
        <div class="innerTrust">
            <div class="trustLeft">
                <img src="{{asset('images/trust.jpg')}}" alt="">
            </div>
            <div class="trustRight">
                <div class="trustTitle" x-text="data.trustSection[0]">Training you can trust</div>
                <div class="trustContent">
                    <div x-text="data.trustSection[1]">All of our courses comply with Continuing Professional Development standards and are accredited by the CPD Certification Service.
                        We go above and beyond by ensuring that our courses receive independent approval from reputable authorities such as RoSPA, IATP, IIRSM, and the Institute of Hospitality.</div>
                    <br><br>
                    <div x-text="data.trustSection[2]">The Manual Handling course is endorsed by Skills for Care, the foremost organization in workforce development for social care across Ireland, the UK, and all European countries. This respected accreditation is exclusive to top-quality learning and development providers in the social care sector.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="cpdContainer">
        <div class="cpdInner">
            <div class="paddingCpd">
                <h2 class="cpdTitle" x-text="data.certificateSection[0]">Complete this CPD and ROSPA Accredited Course to obtain your Official Certificate!</h2>
                <div class="cpdFlex">
                    <div class="cpdLeft">
                        <div class="cpdItems">
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/1.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  x-text="data.certificateSection[1]">Complete this CPD and ROSPA </div>
                                    <div class="cpdItemContent"  x-text="data.certificateSection[2]">Accredited Course to obtain your Official Certificate!</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/2.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  x-text="data.certificateSection[3]">Certify Your Skills</div>
                                    <div class="cpdItemContent"  x-text="data.certificateSection[4]">An Irish Manual Handling Diploma/Certificate, accredited by CPD and ROSPA, validates the skills you have acquired.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/3.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  x-text="data.certificateSection[5]">Stand Out From the Crowd</div>
                                    <div class="cpdItemContent"  x-text="data.certificateSection[6]">Include your Irish Manual Handling Certification on your resume to outshine competitors.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/4.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  x-text="data.certificateSection[7]">Advance in Your Career</div>
                                    <div class="cpdItemContent"  x-text="data.certificateSection[8]">Showcase your Irish Manual Handling Certification to prospective employers, highlighting your skills and capabilities.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cpdRight">
                        <img src="{{asset('images/certExample.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title" data-aos="fade-up" style="margin-bottom: 25px;">
        <div class="titleText sizeTextMobile" x-text="data.reviewTitle">What Our Customers Say</div>
        <div class="borderTitle"></div>
    </div>

    {{--    <div id="customersReviews">--}}
    {{--        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>--}}
    {{--        <div class="elfsight-app-452ee68c-8e4c-4329-bf9d-d5f4175f5d0e"></div>--}}
    {{--    </div>--}}
    {{--    <div id="customerReviewsMob">--}}
    {{--        <div class="customerReviewsMobWrap">--}}
    {{--            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>--}}
    {{--            <div class="elfsight-app-6a3ccd9b-896b-4195-946e-7cba27a27218"></div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div id="customersReviews">
        <div id="customerReviewWrap">
            <div class="main-review">
                <div class="infoReview">
                    <div class="imgReview">
                        <img src={{asset("images/avatars/av-1.png")}} alt="">
                    </div>
                    <div class="statsReview">
                        <div class="reviewerNameBadge">
                            <div class="reviewerName">John Weasley</div>
                            <div class="reviewerBadge"><img src="{{asset("images/icons/check.png")}}" alt=""></div>
                        </div>
                        <div class="reviewerStarsTime">
                            <div class="reviewerStars">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                            </div>
                            <div class="reviewerTime">24 minutes ago</div>
                        </div>
                    </div>
                </div>
                <div class="reviewText">
                    The online Manual Handling training provided by Irish-ManualHandling was comprehensive yet easy to follow. The certification process was smooth, and the practical tips were immensely helpful.
                </div>
                <div class="reviewGoogle">
                    <div class="reviewerTime">Posted on</div>
                    <img src="{{asset("images/logo/google.png")}}" alt="">
                </div>
            </div>

            <div class="main-review">
                <div class="infoReview">
                    <div class="imgReview">
                        <img src={{asset("images/avatars/av-2.png")}} alt="">
                    </div>
                    <div class="statsReview">
                        <div class="reviewerNameBadge">
                            <div class="reviewerName">Mary Andrews</div>
                            <div class="reviewerBadge"><img src="{{asset("images/icons/check.png")}}" alt=""></div>
                        </div>
                        <div class="reviewerStarsTime">
                            <div class="reviewerStars">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                            </div>
                            <div class="reviewerTime">2 hours ago</div>
                        </div>
                    </div>
                </div>
                <div class="reviewText">
                    I found the course from Irish Manual Handling to be informative and well-structured. The convenience of online learning coupled with their engaging content made the whole experience worthwhile.
                </div>
                <div class="reviewGoogle">
                    <div class="reviewerTime">Posted on</div>
                    <img src="{{asset("images/logo/google.png")}}" alt="">
                </div>
            </div>

            <div class="main-review">
                <div class="infoReview">
                    <div class="imgReview">
                        <img src={{asset("images/avatars/av-3.png")}} alt="">
                    </div>
                    <div class="statsReview">
                        <div class="reviewerNameBadge">
                            <div class="reviewerName">Choe Lee</div>
                            <div class="reviewerBadge"><img src="{{asset("images/icons/check.png")}}" alt=""></div>
                        </div>
                        <div class="reviewerStarsTime">
                            <div class="reviewerStars">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                            </div>
                            <div class="reviewerTime">7 hours ago</div>
                        </div>
                    </div>
                </div>
                <div class="reviewText">
                    The Manual Handling training exceeded my expectations. The modules were clear and concise, and the quizzes helped reinforce key concepts. Highly recommended for anyone seeking certification!
                </div>
                <div class="reviewGoogle">
                    <div class="reviewerTime">Posted on</div>
                    <img src="{{asset("images/logo/google.png")}}" alt="">
                </div>
            </div>

            <div class="main-review">
                <div class="infoReview">
                    <div class="imgReview">
                        <img src={{asset("images/avatars/av-4.png")}} alt="">
                    </div>
                    <div class="statsReview">
                        <div class="reviewerNameBadge">
                            <div class="reviewerName">Markus Low</div>
                            <div class="reviewerBadge"><img src="{{asset("images/icons/check.png")}}" alt=""></div>
                        </div>
                        <div class="reviewerStarsTime">
                            <div class="reviewerStars">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                            </div>
                            <div class="reviewerTime">10 hours ago</div>
                        </div>
                    </div>
                </div>
                <div class="reviewText">
                    I appreciated the flexibility of being able to complete the training at my own pace. Irish-ManualHandling's course was user-friendly and the material was presented in a way that was easy to understand.
                </div>
                <div class="reviewGoogle">
                    <div class="reviewerTime">Posted on</div>
                    <img src="{{asset("images/logo/google.png")}}" alt="">
                </div>
            </div>

            <div class="main-review">
                <div class="infoReview">
                    <div class="imgReview">
                        <img src={{asset("images/avatars/av-5.png")}} alt="">
                    </div>
                    <div class="statsReview">
                        <div class="reviewerNameBadge">
                            <div class="reviewerName">Vaness Spills</div>
                            <div class="reviewerBadge"><img src="{{asset("images/icons/check.png")}}" alt=""></div>
                        </div>
                        <div class="reviewerStarsTime">
                            <div class="reviewerStars">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                            </div>
                            <div class="reviewerTime">15 hours ago</div>
                        </div>
                    </div>
                </div>
                <div class="reviewText">
                    Obtaining my Manual Handling certificate through Irish-ManualHandling was a breeze. The course content was relevant and the assessments were fair. Very pleased with the overall experience.
                </div>
                <div class="reviewGoogle">
                    <div class="reviewerTime">Posted on</div>
                    <img src="{{asset("images/logo/google.png")}}" alt="">
                </div>
            </div>

            <div class="main-review">
                <div class="infoReview">
                    <div class="imgReview">
                        <img src={{asset("images/avatars/av-6.png")}} alt="">
                    </div>
                    <div class="statsReview">
                        <div class="reviewerNameBadge">
                            <div class="reviewerName">Angela Jedrynska</div>
                            <div class="reviewerBadge"><img src="{{asset("images/icons/check.png")}}" alt=""></div>
                        </div>
                        <div class="reviewerStarsTime">
                            <div class="reviewerStars">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                                <img src="{{asset("images/icons/star.png")}}" alt="">
                            </div>
                            <div class="reviewerTime">1 day ago</div>
                        </div>
                    </div>
                </div>
                <div class="reviewText">
                    The online platform provided by Irish-ManualHandling made it convenient for me to access the training from anywhere. The practical demonstrations were beneficial, and I feel more confident in applying safe manual handling practices.
                </div>
                <div class="reviewGoogle">
                    <div class="reviewerTime">Posted on</div>
                    <img src="{{asset("images/logo/google.png")}}" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="title" data-aos="fade-up">
        <div class="titleText sizeTextMobile" x-text="data.homeAboutUs[0]">About Us</div>
        <div class="borderTitle"></div>
    </div>

    <div class="aboutUs" data-aos="fade-up">
        <div class="aboutWrapper">
            <div>
                <div x-text="data.homeAboutUs[1]">Welcome to Irish-ManualHandling.com, your premier destination for top-notch online Manual Handling training in Ireland. Our platform is designed to deliver accessible, high-quality safety courses to Irish workers, no matter their location. With a focus on effectiveness and convenience, our certified courses are accessible entirely online.</div>
                <br>
                <div x-text="data.homeAboutUs[2]">At Irish Manual Handling, we take immense pride in the integrity and excellence of our safety training services. We firmly believe that proper safety education can be the crucial difference between life and death. Our commitment to developing and delivering top-tier safety courses reflects this conviction.</div>
                <br>
                <p x-text="data.homeAboutUs[3]">Our certifications hold recognition across Ireland, the UK, and the EU, ensuring credibility and compliance. Our instructors, esteemed members of CMIOSH (Chartered Member of IOSH), are IOSH certified at NFQ Level 6. Renowned for reliability, quality, and convenience, our services stand as a testament to our dedication.</p>
                <hr>
                <p x-text="data.homeAboutUs[4]">For inquiries, student support, sales, or technical assistance, utilize our chat-based support system or contact us via email at info@irish-manualhandling.com. Elevate your safety training with us today!</p>
            </div>
        </div>
    </div>

    <div class="title">
        <div class="titleText sizeTextMobile" x-text="data.getCertificate[0]">Get your Certificate</div>
        <div class="borderTitle"></div>
        <a href="{{route('register')}}"><div class="pulse-button" data-aos="fade-up">Pay / Register Here</div></a>
    </div>

    <div class="benefitsSection">
        <div class="benefitsWrapper">
            <div class="benefitsLeft" data-aos="fade-up">
                <div class="benefit">
                    <div class="benefitLeft">
                        <div class="benefitTitle" x-text="data.getCertificate[1]">STUDY AT A TIME THAT SUITS YOU</div>
                        <div class="benefitDescription" x-text="data.getCertificate[2]">You can complete your course online at a time and a place that fits in with your other commitments</div>
                    </div>
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #e60b31;">
                            <img src="{{asset("images/logo/home.svg")}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="benefitLeft">
                        <div class="benefitTitle" x-text="data.getCertificate[3]">SAVE TIME BY STUDYING ONLINE</div>
                        <div class="benefitDescription" x-text="data.getCertificate[4]">Cut out traveling time, waiting for an open-course to start, and delegates that work at different speeds</div>
                    </div>
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #c3d600;">
                            <img src="{{asset("images/logo/clock.svg")}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="benefitLeft">
                        <div class="benefitTitle" x-text="data.getCertificate[5]">SAVE MONEY BY STUDYING ONLINE</div>
                        <div class="benefitDescription" x-text="data.getCertificate[6]">Studying online cuts out the overheads associated with traditional classroom based training</div>
                    </div>
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #345cb3;">
                            <img src="{{asset("images/logo/wallet.svg")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefitsCenter" data-aos="fade-up">
                <div class="benefitTop">
                    <img src="{{asset("images/banners/laptop1.webp")}}" alt="">
                </div>
                <div class="benefitBottom">
                    <img src="{{asset("images/banners/lap_bottom.png")}}" alt="">
                </div>
            </div>
            <div class="benefitsRight" data-aos="fade-up">
                <div class="benefit">
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #f49c12;">
                            <img src="{{asset("images/logo/download.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="benefitLeftRight">
                        <div class="benefitTitle" x-text="data.getCertificate[7]">STUDY AT A TIME THAT SUITS YOU</div>
                        <div class="benefitDescription" x-text="data.getCertificate[8]">You can complete your course online at a time and a place that fits in with your other commitments</div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #356ce6;">
                            <img src="{{asset("images/logo/internet.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="benefitLeftRight">
                        <div class="benefitTitle" x-text="data.getCertificate[9]">SAVE TIME BY STUDYING ONLINE</div>
                        <div class="benefitDescription" x-text="data.getCertificate[10]">Cut out traveling time, waiting for an open-course to start, and delegates that work at different speeds</div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #f91819;">
                            <img src="{{asset("images/logo/high-quality.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="benefitLeftRight">
                        <div class="benefitTitle" x-text="data.getCertificate[11]">SAVE MONEY BY STUDYING ONLINE</div>
                        <div class="benefitDescription" x-text="data.getCertificate[12]">Studying online cuts out the overheads associated with traditional classroom based training</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title spaceTop" data-aos="fade-up" >
        <div class="titleText sizeTextMobile" x-text="data.expert[0]">Expert Online Manual Handling Training | Irish-ManualHandling.com</div>
        <div class="borderTitle"></div>
    </div>

    <div class="aboutUs" data-aos="fade-up">
        <div class="aboutWrapper">
            <div>
                <p x-text="data.expert[1]">Discover top-notch Online Manual Handling Training at Irish-ManualHandling.com. Elevate workplace safety with our comprehensive courses. Contact us at info@irish-manualhandling.com.</p>
                <br>
                <p x-text="data.expert[2]">Are you looking to enhance workplace safety and compliance? Look no further than Irish-ManualHandling.com! Our premier platform offers unparalleled Online Manual Handling Training designed to equip your team with the skills and knowledge necessary to ensure a secure and efficient work environment.</p>

                <p x-text="data.expert[3]">At Irish-ManualHandling.com, we understand the critical importance of proper manual handling techniques in preventing injuries and fostering a culture of safety within your organization. Our comprehensive online courses are crafted by industry experts, covering a wide array of topics, from risk assessment to practical demonstrations, tailored to meet your specific needs.</p>
                <br>
                <p x-text="data.expert[4]">Why Choose Irish-ManualHandling.com?</p>

                <p x-text="data.expert[5]">
                    Curriculum: Our courses encompass the latest industry standards and best practices, ensuring your team is well-versed in safe manual handling procedures.
                    Interactive Learning: Engaging modules with interactive elements make learning enjoyable and effective for all participants.
                    Certification: Upon successful completion, receive accredited certification, showcasing compliance with safety regulations.
                    Convenient Online Access: Accessible 24/7, our platform allows flexibility for your team to learn at their own pace and convenience.
                    Contact Us Today!
                </p>
                <br>
                <p x-text="data.expert[6]">Elevate your workplace safety standards with our Online Manual Handling Training. Drop us an email at info@irish-manualhandling.com to discuss your training needs. Join countless satisfied clients who have entrusted us to revolutionize their approach to manual handling safety.</p>

                <p x-text="data.expert[7]">Ensure your team's safety and efficiency—choose Irish-ManualHandling.com for comprehensive Online Manual Handling Training today!</p>
            </div>
        </div>
    </div>
    <script src="{{asset("js/counter.js")}}"></script>
@endsection

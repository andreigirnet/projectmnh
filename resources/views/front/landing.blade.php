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
{{--        code for manual handling card--}}
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

                <a href="/home" class="linkStyle"><button class="course-btn">Buy Now</button></a>
                </div>
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

    <section class="premium-bulk-wrapper">
        <div class="premium-bulk-container">

            <div class="premium-info-wing">
                <header class="premium-info-header">
                    <h2 class="premium-main-title" x-text="data.bulkSection[0]">
                        Our digital modules are built for a smooth user experience.
                    </h2>
                    <div class="premium-divider"></div>
                </header>

                <div class="premium-step-list">
                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/11.png')}}" alt="Purchase">
                        </div>
                        <p class="premium-step-text" x-text="data.bulkSection[1]">Purchase your training license online.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/22.png')}}" alt="Activate">
                        </div>
                        <p class="premium-step-text" x-text="data.bulkSection[2]">Activate your account and begin your modules immediately.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/33.png')}}" alt="Achieve">
                        </div>
                        <p class="premium-step-text" x-text="data.bulkSection[3]">Learn & Achieve - Progress through the course, pass the assessment, and instantly download your credentials.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/44.png')}}" alt="Support">
                        </div>
                        <p class="premium-step-text" x-text="data.bulkSection[4]">For technical support, please contact us at info@irelandSafetyCourse.ie.</p>
                    </div>
                </div>
            </div>

            <div class="premium-visual-wing">
                <img src="{{asset('images/landingBulk.png')}}" class="premium-promo-img" alt="Bulk Purchase Offer">
            </div>

        </div>
    </section>

    <div class="trustContainer">
        <div class="innerTrust">
            <div class="trustLeft">
                <img src="{{asset('images/trust.png')}}" alt="">
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

            <div class="premium-review-card" data-aos="fade-up">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-1.png')}}" alt="John Weasley">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">John Weasley</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">24 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "The online Manual Handling training provided by Irish-ManualHandling was comprehensive yet easy to follow. The certification process was smooth, and the practical tips were immensely helpful."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="100">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-2.png')}}" alt="Mary Andrews">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Mary Andrews</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">2 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "I found the course from Irish Manual Handling to be informative and well-structured. The convenience of online learning coupled with their engaging content made the whole experience worthwhile."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="200">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-3.png')}}" alt="Choe Lee">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Choe Lee</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">7 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "The Manual Handling training exceeded my expectations. The modules were clear and concise, and the quizzes helped reinforce key concepts. Highly recommended for anyone seeking certification!"
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="300">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-4.png')}}" alt="Markus Low">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Markus Low</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">10 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "I appreciated the flexibility of being able to complete the training at my own pace. The material was presented in a way that was easy to understand for our entire team."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="400">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-5.png')}}" alt="Vanessa Spills">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Vanessa Spills</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">15 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "Obtaining my Manual Handling certificate was a breeze. The course content was relevant and the assessments were fair. Very pleased with the overall experience."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="100">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-6.png')}}" alt="Angela Jedrynska">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Angela Jedrynska</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">1 day ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "The online platform made it convenient for me to access the training from anywhere. The practical demonstrations were beneficial and highly professional."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

        </div>
    </div>


{{--    <div class="title" data-aos="fade-up">--}}
{{--        <div class="titleText sizeTextMobile" x-text="data.homeAboutUs[0]">About Us</div>--}}
{{--        <div class="borderTitle"></div>--}}
{{--    </div>--}}

    <section class="imh-about-section" data-aos="fade-up">
        <div class="imh-container">
            <div class="imh-header">
                <span class="imh-subtitle">Excellence in Safety</span>
                <h2 class="imh-title">Who We Are</h2>
                <div class="imh-divider"></div>
            </div>

            <div class="imh-content-grid">
                <div class="imh-main-text">
                    <p class="imh-lead-para" x-text="data.homeAboutUs[1]">
                        Welcome to Irish-ManualHandling.com, your premier destination for top-notch online Manual Handling training in Ireland...
                    </p>
                    <p class="imh-body-para" x-text="data.homeAboutUs[2]">
                        At Irish Manual Handling, we take immense pride in the integrity and excellence of our safety training services...
                    </p>

                    <div class="imh-contact-box">
                        <p x-text="data.homeAboutUs[4]">For inquiries, student support, sales, or technical assistance, reach out via chat or email.</p>
                        <a href="mailto:info@irish-manualhandling.com" class="imh-email-link">info@irish-manualhandling.com</a>
                    </div>
                </div>

                <div class="imh-trust-card">
                    <div class="imh-badge-item">
                        <div class="imh-icon">🌍</div>
                        <div>
                            <strong>EU & UK Recognized</strong>
                            <p>Fully compliant certifications across borders.</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🎓</div>
                        <div>
                            <strong>CMIOSH Instructors</strong>
                            <p>IOSH certified at NFQ Level 6 expertise.</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🛡️</div>
                        <div>
                            <strong>100% Digital</strong>
                            <p>Secure, efficient, and accessible anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="title">
        <div class="titleText sizeTextMobile" x-text="data.getCertificate[0]">Get your Certificate</div>
        <div class="borderTitle"></div>
        <a href="{{route('register')}}"><div class="pulse-button" data-aos="fade-up">Pay / Register Here</div></a>
    </div>

    <section class="exclusive-benefits-area">
        <div class="exclusive-benefits-grid">

            <div class="exclusive-col" data-aos="fade-up">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #e60b31;">
                        <img src="{{asset('images/logo/home.svg')}}" alt="Home">
                    </div>
                    <h3 class="exclusive-title" x-text="data.getCertificate[1]">LEARN ON YOUR OWN SCHEDULE</h3>
                    <p class="exclusive-text" x-text="data.getCertificate[2]">Complete your training online at a time and location that fits your lifestyle.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #c3d600;">
                        <img src="{{asset('images/logo/clock.svg')}}" alt="Clock">
                    </div>
                    <h3 class="exclusive-title" x-text="data.getCertificate[3]">SAVE TIME WITH VIRTUAL LEARNING</h3>
                    <p class="exclusive-text" x-text="data.getCertificate[4]">Avoid travel time and the wait for physical classes to begin.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #345cb3;">
                        <img src="{{asset('images/logo/wallet.svg')}}" alt="Wallet">
                    </div>
                    <h3 class="exclusive-title" x-text="data.getCertificate[5]">REDUCE COSTS BY STUDYING DIGITALLY</h3>
                    <p class="exclusive-text" x-text="data.getCertificate[6]">Online education removes the overhead expenses of traditional classroom settings.</p>
                </div>
            </div>

            <div class="exclusive-hero-center" data-aos="zoom-in">
{{--                <img src="{{asset('images/banners/laptop1.webp')}}" class="exclusive-laptop-img" alt="Platform Preview">--}}
                <img src="{{asset('images/indian.png')}}" class="indianimage" alt="">
            </div>

            <div class="exclusive-col" data-aos="fade-up" data-aos-delay="100">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f49c12;">
                        <img src="{{asset('images/logo/download.svg')}}" alt="Download">
                    </div>
                    <h3 class="exclusive-title" x-text="data.getCertificate[7]">STUDY WHENEVER YOU WANT</h3>
                    <p class="exclusive-text" x-text="data.getCertificate[8]">Finish your modules at your own pace, wherever you have an internet connection.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #356ce6;">
                        <img src="{{asset('images/logo/internet.svg')}}" alt="Global">
                    </div>
                    <h3 class="exclusive-title" x-text="data.getCertificate[9]">MAXIMIZE EFFICIENCY</h3>
                    <p class="exclusive-text" x-text="data.getCertificate[10]">Skip the commute and work at the speed that is right for you.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f91819;">
                        <img src="{{asset('images/logo/high-quality.svg')}}" alt="Quality">
                    </div>
                    <h3 class="exclusive-title" x-text="data.getCertificate[11]">AFFORDABLE TRAINING</h3>
                    <p class="exclusive-text" x-text="data.getCertificate[12]">Digital learning is a cost-effective alternative to in-person training.</p>
                </div>
            </div>

        </div>
    </section>

    <div class="title spaceTop" data-aos="fade-up" >
        <div class="titleText sizeTextMobile" x-text="data.expert[0]">Expert Online Manual Handling Training | Irish-ManualHandling.com</div>
        <div class="borderTitle"></div>
    </div>

    <section class="imh-expert-section" data-aos="fade-up">
        <div class="imh-expert-container">

            <div class="imh-expert-main-grid">
                <div class="imh-expert-narrative">
                    <p x-text="data.expert[3]">At Irish-ManualHandling.com, we understand the critical importance...</p>

                    <div class="imh-expert-cta-card">
                        <h3 x-text="data.expert[6]">Elevate your workplace safety standards...</h3>
                        <a href="mailto:info@irish-manualhandling.com" class="imh-expert-btn">Email Us Today</a>
                    </div>
                </div>

                <div class="imh-expert-features">
                    <h4 class="imh-feature-heading" x-text="data.expert[4]">Why Choose Irish-ManualHandling.com?</h4>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">📋</span>
                        <div>
                            <strong>Modern Curriculum</strong>
                            <p>Latest industry standards and best practices.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">💻</span>
                        <div>
                            <strong>Interactive Learning</strong>
                            <p>Engaging modules that make safety training effective.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">🏅</span>
                        <div>
                            <strong>Accredited Certification</strong>
                            <p>Showcase compliance with recognized safety regulations.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">🕒</span>
                        <div>
                            <strong>24/7 Access</strong>
                            <p>Learn at your own pace, anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="imh-expert-footer">
                <p x-text="data.expert[7]">Ensure your team's safety and efficiency—choose Irish-ManualHandling.com today!</p>
            </div>
        </div>
    </section>
    <script src="{{asset("js/counter.js")}}"></script>
@endsection

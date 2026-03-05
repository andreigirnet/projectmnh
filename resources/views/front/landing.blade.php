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
                <h1 class="mainBannerTitle">Manual Handling Course Ireland-<br> Online Training & Certificate</h1>
                <div class="mainBannerDescription" >Our manual handling course is fully flexible and combines theory modules with a practical assessment. The training includes clear videos, helpful images, and straightforward text, making the content simple to follow and understand. It runs smoothly on mobile devices and PCs, allowing you to learn anytime and anywhere while meeting workplace safety standards in Ireland, the UK, and across Europe.</div>
                <a href="{{route('register')}}" class="modern-glow-btn">
                    Register For Manual Handling Certification
                </a>
            </div>
        </div>
    </div>

    <div id="statsCounter">
        <div id="counterWrap">
            <div class="counterContent">
                <div class="counterNumbers" id="customersCounter"></div>
                <div class="counterDescription" >CUSTOMERS</div>
            </div>
            <div class="counterContent">
                <div class="counterNumbers" id="certificatesCounter"></div>
                <div class="counterDescription" >CERTIFICATE'S ISSUED</div>
            </div>
            <div class="counterNumbers" class="counterContent">
                <div id="instructorsCounter"></div>
                <div class="counterDescription" >QUALIFIED INSTRUCTORS</div>
            </div>
        </div>
    </div>

    <div class="title" data-aos="fade-up">
        <div class="titleText" >Manual Handling Ireland Online Manual Handling Training for learners worldwide</div>
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
        <div class="languageText"  >At Manual Handling Ireland, our QQI accredited Manual Handling Course is created to be clear, welcoming, and simple for everyone to follow. The Manual Handling Training features straightforward explanations, helpful videos, and easy-to-read materials so learners can feel confident throughout the course. Our training meets HSA and HSE requirements, complies with EU legislation, and provides a recognised Manual Handling Certificate accepted across Ireland, including Dublin, as well as the UK and Europe. We also provide Manual Handling Refresher courses for individuals who need to renew or update their knowledge.</div>
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
                    <h2 class="premium-main-title" >
                        How Our Manual Handling Course Works: In 4 Easy Steps
                    </h2>
                    <div class="premium-divider"></div>
                </header>

                <div class="premium-step-list">
                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/11.png')}}" alt="Purchase">
                        </div>
                        <p class="premium-step-text" >Purchase your training license online.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/22.png')}}" alt="Activate">
                        </div>
                        <p class="premium-step-text" >Activate your account and begin your Manual Handling modules immediately.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/33.png')}}" alt="Achieve">
                        </div>
                        <p class="premium-step-text" >Learn & Achieve - Progress through the course, pass the assessment, and instantly download your Manual Handling Certificate.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/44.png')}}" alt="Support">
                        </div>
                        <p class="premium-step-text" >For technical support, please contact us at info@manualhandling-ireland.com</p>
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
                <div class="trustTitle" >QQI Acredited Manual Handling Training Dublin Ireland - You Can Trust</div>
                <div class="trustContent">
                    <div >Manual Handling Ireland is a legally registered Irish company, fully compliant with national regulations. All our Manual Handling Training follows HSA standards, holds QQI accreditation, and aligns with European legislation.</div>
                    <br><br>
                    <div >Our Manual Handling Courses are independently recognised by leading professional organisations, providing recognised, high-quality training trusted by employers across Ireland, the UK, and Europe. Choose your Manual Handling Certificate with complete confidence.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="cpdContainer">
        <div class="cpdInner">
            <div class="paddingCpd">
                <h2 class="cpdTitle" >Get Your Manual Handling Certificate Online Today - Instant Downloand</h2>
                <div class="cpdFlex">
                    <div class="cpdLeft">
                        <div class="cpdItems">
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/1.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >QQI, HSA, Rospa Approved</div>
                                    <div class="cpdItemContent"  >Accredited Course to obtain your Official Manual Handling Certificate!</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/2.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Certify Your Skills</div>
                                    <div class="cpdItemContent"  >An Irish Manual Handling Diploma/Certificate, accredited by CPD and ROSPA, validates the skills you have acquired.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/3.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Stand Out From the Crowd</div>
                                    <div class="cpdItemContent"  >Include your Manual Handling Ireland Certification on your resume to outshine competitors.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/4.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Advance in Your Career</div>
                                    <div class="cpdItemContent"  >Showcase your Manual Handling Ireland Certification to prospective employers, highlighting your skills and capabilities.</div>
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
        <div class="titleText sizeTextMobile" >Manual Handling Course Reviews - What Our Learners Say</div>
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
{{--        <div class="titleText sizeTextMobile" >About Us</div>--}}
{{--        <div class="borderTitle"></div>--}}
{{--    </div>--}}

    <section class="imh-about-section" data-aos="fade-up">
        <div class="imh-container">
            <div class="imh-header">
                <span class="imh-subtitle">Excellence in Safety</span>
                <h2 class="imh-title">What is Manual Handling Ireland?</h2>
                <div class="imh-divider"></div>
            </div>

            <div class="imh-content-grid">
                <div class="imh-main-text">
                    <p class="imh-lead-para" >
                        Welcome to manualhandling-ireland.com, your premier destination for top-notch online Manual Handling training in Ireland...
                    </p>
                    <p class="imh-body-para" >
                        At Manual Handling Ireland, we take immense pride in the integrity and excellence of our safety training services...
                    </p>

                    <div class="imh-contact-box">
                        <p >For inquiries, student support, sales, or technical assistance, reach out via chat or email.</p>
                        <a href="mailto:info@manualhandling-ireland.com" class="imh-email-link">info@manualhandling-ireland.com</a>
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
        <div class="titleText sizeTextMobile" >Get your Certificate</div>
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
                    <h3 class="exclusive-title">LEARN ON YOUR OWN SCHEDULE</h3>
                    <p class="exclusive-text">
                        Complete your <strong>Manual Handling Course in Ireland</strong> online at a time and place that suits your lifestyle while working toward your <strong>Manual Handling Certification</strong>.
                    </p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #c3d600;">
                        <img src="{{asset('images/logo/clock.svg')}}" alt="Clock">
                    </div>
                    <h3 class="exclusive-title">SAVE TIME WITH VIRTUAL LEARNING</h3>
                    <p class="exclusive-text">
                        Take your <strong>Manual Handling Course</strong> online and avoid travel time or waiting for classroom training sessions to begin.
                    </p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #345cb3;">
                        <img src="{{asset('images/logo/wallet.svg')}}" alt="Wallet">
                    </div>
                    <h3 class="exclusive-title">REDUCE COSTS BY STUDYING DIGITALLY</h3>
                    <p class="exclusive-text">
                        Our online <strong>Manual Handling Ireland training</strong> provides an affordable way to achieve your recognised <strong>Manual Handling Certification</strong>.
                    </p>
                </div>
            </div>

            <div class="exclusive-hero-center" data-aos="zoom-in">
                <img src="{{asset('images/indian.png')}}" class="indianimage" alt="Manual Handling Course Ireland">
            </div>

            <div class="exclusive-col" data-aos="fade-up" data-aos-delay="100">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f49c12;">
                        <img src="{{asset('images/logo/download.svg')}}" alt="Download">
                    </div>
                    <h3 class="exclusive-title">STUDY WHENEVER YOU WANT</h3>
                    <p class="exclusive-text">
                        Progress through your <strong>Manual Handling Course</strong> at your own pace and complete your <strong>Manual Handling Certification</strong> from anywhere with internet access.
                    </p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #356ce6;">
                        <img src="{{asset('images/logo/internet.svg')}}" alt="Global">
                    </div>
                    <h3 class="exclusive-title">MAXIMIZE EFFICIENCY</h3>
                    <p class="exclusive-text">
                        Our <strong>Manual Handling Ireland training</strong> allows you to skip commuting and focus on learning quickly and efficiently.
                    </p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f91819;">
                        <img src="{{asset('images/logo/high-quality.svg')}}" alt="Quality">
                    </div>
                    <h3 class="exclusive-title">AFFORDABLE TRAINING</h3>
                    <p class="exclusive-text">
                        This online <strong>Manual Handling Course in Ireland</strong> offers a cost-effective way to gain a recognised <strong>Manual Handling Certification</strong>.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <div class="title spaceTop" data-aos="fade-up" >
        <div class="titleText sizeTextMobile" >Expert Online Manual Handling Training | manualhandling-ireland.com</div>
        <div class="borderTitle"></div>
    </div>

    <section class="imh-expert-section" data-aos="fade-up">
        <div class="imh-expert-container">

            <div class="imh-expert-main-grid">
                <div class="imh-expert-narrative">
                    <p >At manualhandling-ireland.com, we understand the critical importance...</p>

                    <div class="imh-expert-cta-card">
                        <h3 >Elevate your workplace safety standards...</h3>
                        <a href="mailto:info@manualhandling-ireland.com" class="imh-expert-btn">Email Us Today</a>
                    </div>
                </div>

                <div class="imh-expert-features">
                    <h4 class="imh-feature-heading" >Why Choose manualhandling-ireland.com?</h4>

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
                <p >Ensure your team's safety and efficiency—choose manualhandling-ireland.com today!</p>
            </div>
        </div>
    </section>
    <script src="{{asset("js/counter.js")}}"></script>
@endsection

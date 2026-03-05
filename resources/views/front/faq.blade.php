@extends('front.app')
@section('content')

    <div class="fq-page-wrapper">
        <div class="fq-hero-banner">
            <h1 class="fq-page-title">Manual Handling Training in Ireland – Frequently Asked Questions</h1>
            <div class="fq-title-underline"></div>
        </div>

        <div class="fq-container">

            <!-- MANUAL HANDLING FAQ -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/info.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Manual Handling Course – Complete Guide</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Top Questions About Our Online Training</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div class="fq-accordion-content" x-show="open" x-transition>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>Your Irish manual handling certification is available for immediate download once you complete the course successfully.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>After finishing the theory modules of your manual handling training online Ireland, you can schedule a short virtual practical assessment with a qualified assessor.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>The total fee of €35 covers the full manual handling course Ireland, final assessment, and certification — no hidden charges.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>The course is available 24/7 online, allowing you to complete your manual handling training Ireland at your own pace.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>The course is fully compatible with smartphones, tablets, laptops, and desktop computers.</span></div>
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Practical Skills Assessment</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Once you pass the theory exam, contact us via Online Chat to schedule your live practical session. This is included in your manual handling certification Ireland.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Accreditation & Standards</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            This manual handling training in Ireland follows NFQ Level 6 standards and meets workplace safety compliance Ireland requirements.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Certificate Access</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Your certificate will be emailed and stored in your account for easy access and printing — part of your Irish manual handling certification.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Are there extra fees for the practical assessment?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            No, the full fee covers theory, practical assessment, and manual handling certification Ireland.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Satisfaction Guarantee</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            We offer a 15-day refund policy if the course is not suitable for you, provided training has not been completed and the certificate not issued.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Managing training for a team</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Business accounts allow employers to assign manual handling training Ireland courses, monitor employee progress, and store certifications in one dashboard, ensuring compliance in Ireland.
                        </div>
                    </div>

                </div>
            </div>

            <!-- ABOUT COURSES -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/info.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">About Our Manual Handling Training</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Which devices can I use?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Any modern device with internet access can be used to complete your manual handling training online Ireland.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Are the instructors qualified?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, all instructors hold recognized Irish manual handling certification and deliver training in line with manual handling compliance Ireland.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Can I review the material after completing the course?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, you will continue to have access to your manual handling training Ireland materials and Irish manual handling certification.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Is there a time limit to complete the course?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            No, you can complete your manual handling course Ireland at your own pace. Progress is saved automatically.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Can I take the course from outside Ireland?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, the manual handling training online Ireland is accessible globally, though it meets Irish workplace compliance standards.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Do you offer group discounts?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, a 10% discount is applied when purchasing 10 or more manual handling course Ireland licenses.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">What languages are available?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Theory content is available in multiple languages. The practical assessment is conducted in English.
                        </div>
                    </div>

                </div>
            </div>

            <!-- ENROLLMENT & PAYMENTS -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/carts.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Enrollment & Payments</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">How do I start?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Select your manual handling course Ireland, register online, and begin training immediately.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Buying for staff members?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Add multiple licenses to your cart and assign courses to employees for full compliance.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Payment options</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            We accept all major debit and credit cards. Businesses may request an invoice for bank transfer payments.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Bulk discounts</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Automatic discounts apply for larger orders to support company-wide manual handling training Ireland compliance.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Can I purchase the course for someone else?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, enter the learner’s name and email address during checkout for direct access.
                        </div>
                    </div>

                </div>
            </div>

            <!-- ACCOUNT ACCESS -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/login.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Account Access</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">I completed payment – what happens next?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Your account is activated immediately. You can start the manual handling training Ireland right away.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Forgot password?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Click “Forgot Password” on login, enter your email, and follow the link to reset access.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">How do I download my certificate?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            After passing the assessment, your Irish manual handling certification is available in your dashboard for download or printing.
                        </div>
                    </div>

                </div>
            </div>

            <!-- EXAMS & CERTIFICATION -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/certificate.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Exams & Certification</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Do I get a certificate after completion?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, you receive an official Irish manual handling certification that meets workplace compliance Ireland requirements.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Is the exam online?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, the theory exam is fully online. The practical assessment can be done remotely via video call.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">How long is the certification valid?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Your Irish manual handling certification is valid for 3 years from the date of issue.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

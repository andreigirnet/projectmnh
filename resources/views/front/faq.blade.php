@extends('front.app')
@section('content')

    <div class="fq-page-wrapper">
        <div class="fq-hero-banner">
            <h1 class="fq-page-title" x-text="faq.pageTitle">How can we assist you?</h1>
            <div class="fq-title-underline"></div>
        </div>

        <div class="fq-container">

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/info.png')}}" class="fq-category-icon">
                    <span class="fq-category-title" x-text="faq.manualFaq[0]">Manual Handling FAQ's</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.manualFaq[1]">Key FAQs</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span x-text="faq.manualFaq[2]"></span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span x-text="faq.manualFaq[3]"></span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span x-text="faq.manualFaq[4]"></span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span x-text="faq.manualFaq[5]"></span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span x-text="faq.manualFaq[6]"></span></div>
                        </div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.manualFaq[7]">Manual Handling Practical Part</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.manualFaq[8]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.manualFaq[9]">Approval for Manual Handling Certificate</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.manualFaq[10]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.manualFaq[11]">Certification Delivery</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.manualFaq[12]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.manualFaq[13]">Do I need to pay additional charge for practical part?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.manualFaq[14]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.manualFaq[15]">Money-Back Guarantee</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.manualFaq[16]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.manualFaq[17]">Group Training Sessions</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.manualFaq[18]"></div>
                    </div>
                </div>
            </div>

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/info.png')}}" class="fq-category-icon">
                    <span class="fq-category-title" x-text="faq.aboutFaq[0]">About our courses</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.aboutFaq[1]">Devices Compatibility</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.aboutFaq[2]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.aboutFaq[3]">Are your instructors accredited?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.aboutFaq[4]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.aboutFaq[5]">Post-completion access</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.aboutFaq[6]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.aboutFaq[7]">Access duration</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.aboutFaq[8]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.aboutFaq[9]">Non-resident enrollment</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.aboutFaq[10]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.aboutFaq[11]">Looking for a discount?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.aboutFaq[12]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.aboutFaq[13]">Available Languages</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.aboutFaq[14]"></div>
                    </div>
                </div>
            </div>

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/carts.png')}}" class="fq-category-icon">
                    <span class="fq-category-title" x-text="faq.purchaseFaq[0]">Purchasing courses</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.purchaseFaq[1]">How can I get started?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.purchaseFaq[2]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.purchaseFaq[3]">Buy for employees</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.purchaseFaq[4]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.purchaseFaq[5]">Payment options (Invoice vs Direct)</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.purchaseFaq[6]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.purchaseFaq[7]">Bulk Discounts</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.purchaseFaq[8]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.purchaseFaq[9]">Buy for someone else?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.purchaseFaq[10]"></div>
                    </div>
                </div>
            </div>

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/login.png')}}" class="fq-category-icon">
                    <span class="fq-category-title" x-text="faq.loginFaq[0]">Logging in</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.loginFaq[1]">Next steps after purchase</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-html="faq.loginFaq[2]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.loginFaq[3]">Forgotten Password</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-html="faq.loginFaq[4]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.loginFaq[5]">Difficulties completing training</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-html="faq.loginFaq[6]"></div>
                    </div>
                </div>
            </div>

            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/sunny.png')}}" class="fq-category-icon">
                    <span class="fq-category-title" x-text="faq.assesFaq[0]">Assessments & Certificates</span>
                </div>
                <div class="fq-accordion-list">
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.assesFaq[1]">Retake the final test?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.assesFaq[2]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.assesFaq[3]">How to receive certificate?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.assesFaq[4]"></div>
                    </div>
                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text" x-text="faq.assesFaq[5]">Certificate loss & access</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition x-text="faq.assesFaq[6]"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

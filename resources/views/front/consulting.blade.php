@extends('front.app')
@section('content')

    <div class="cns-page-wrapper">
        <div class="cns-hero-section" data-aos="fade-up">
            <h1 class="cns-main-title" x-text="consult.title">Consulting Services for Safety</h1>
        </div>

        <div class="cns-container">
            <div class="cns-info-block" data-aos="fade-up">
                <div class="cns-text-lead" x-text="consult.line1">
                    Our extensive experience positions us as leaders in staying updated with the latest corporate safety standards...
                </div>
            </div>

            <div class="cns-info-block" data-aos="fade-up">
                <div class="cns-highlight-box">
                    <h4 x-text="consult.dublin">Safety Consultancy Services in Dublin</h4>
                    <div class="cns-body-text" x-text="consult.line3">We conduct Health & Safety Consultancy across Dublin...</div>
                </div>
                <div class="cns-body-text" x-text="consult.line4">
                    Furthermore, we specialize in investigating accidents and their root causes...
                </div>
            </div>

            <div class="cns-info-block" data-aos="fade-up">
                <h2 class="cns-section-label" x-text="consult.services">Our Services:</h2>

                <div class="cns-services-grid">
                    <template x-for="(item, index) in consult.list" :key="index">
                        <div class="cns-service-item">
                            <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="arrow">
                            <div class="cns-service-label" x-text="item"></div>
                        </div>
                    </template>
                </div>
            </div>

            <div class="cns-info-block" data-aos="fade-up">
                <div class="cns-body-text" x-text="consult.line5">We collaborate with you to identify your goals...</div>

                <h2 class="cns-section-label" style="margin-top: 40px;" x-text="consult.services">Our Approach:</h2>

                <div class="cns-body-text" x-text="consult.line6">We offer assistance to employers seeking third-party support...</div>
                <div class="cns-body-text" x-text="consult.line7">Through our collaborative discovery process...</div>
                <div class="cns-body-text" x-text="consult.line8">At Irish Manual Handling we partner with organizations...</div>
            </div>

            <div class="cns-contact-banner" data-aos="fade-up">
                <div class="cns-body-text" x-text="consult.line9">For inquiries about our Advisory services or clarifications write in the chat...</div>
            </div>
        </div>
    </div>

@endsection

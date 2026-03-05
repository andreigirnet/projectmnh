@extends('front.app')
@section('content')

    <div class="tmt-page-container">

        <!-- HERO SECTION -->
        <div class="tmt-hero-banner">
            <h1 class="tmt-hero-title">Team Manual Handling Training Solutions in Ireland</h1>
        </div>

        <!-- INTRO SECTION -->
        <div class="tmt-intro-section">
            <div class="tmt-intro-text">
                At Manual Handling Ireland, we deliver scalable manual handling training in Ireland designed specifically for employers. Our 100% online system allows your staff to complete certified training at their own pace, ensuring workplace safety compliance without interrupting daily operations. Whether you are onboarding new hires or renewing certifications, our platform supports fast, flexible deployment across your organisation.
            </div>
        </div>

        <div class="tmt-main-wrapper">

            <!-- BULK DISCOUNT -->
            <div class="tmt-feature-row">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title">Volume Licensing for Employers</h2>
                    <div class="tmt-section-description">
                        Reduce costs while maintaining full manual handling compliance in Ireland. Discounts apply automatically to bulk and mixed-course orders, with no expiration date on licenses. Save 10% on 10+ courses. For enterprise-level requirements (500+ staff), we offer tailored solutions including a dedicated account manager, licence reallocation for staff turnover, and detailed reporting through your corporate management dashboard. Contact our team via Online Chat to discuss custom pricing.
                    </div>
                </div>
                <div class="tmt-column-image">
                    <img src="{{asset('images/training/tr-img-1.png')}}" class="tmt-feature-img" alt="Training Support">
                </div>
            </div>

            <!-- INVOICE PAYMENT -->
            <div class="tmt-feature-row tmt-row-reverse">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title">Corporate Invoicing & 30-Day Terms</h2>
                    <div class="tmt-section-description">
                        We support B2B invoicing for companies requiring structured payment processes. Benefits include 30-day payment terms, PO number integration, and immediate access to online training modules*. This allows your team to begin their manual handling certification without delay. *Certificates are released once payment has been confirmed.
                    </div>
                </div>
                <div class="tmt-column-image">
                    <img src="{{asset('images/training/tr-img-2.png')}}" class="tmt-feature-img" alt="Invoice Payment">
                </div>
            </div>

            <!-- URGENT CERTIFICATION -->
            <div class="tmt-feature-row">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title">Need Fast Certification for Your Team?</h2>
                    <div class="tmt-section-description">
                        Our automated learning portal and instant certificate generation are built for speed. Employees can begin their training within minutes and complete required certification in hours—not days. This is ideal for audits, contract compliance, site access requirements, or urgent onboarding situations.
                    </div>
                </div>
                <div class="tmt-column-image">
                    <img src="{{asset('images/training/tr-img-3.png')}}" class="tmt-feature-img" alt="Urgent Training">
                </div>
            </div>

            <!-- MINIMISE DISRUPTION -->
            <div class="tmt-feature-row tmt-row-reverse">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title">Minimise Operational Downtime with Online Training</h2>
                    <div class="tmt-section-description">
                        Traditional classroom-based training disrupts workflow and increases travel costs. Our online manual handling training removes logistical barriers by allowing staff to complete modules from any location, at any time. Progress is saved automatically, enabling flexible completion during scheduled work periods or outside standard hours.
                    </div>
                </div>
                <div class="tmt-column-image">
                    <img src="{{asset('images/training/tr-img-4.png')}}" class="tmt-feature-img" alt="Efficient Learning">
                </div>
            </div>

        </div>
    </div>

@endsection

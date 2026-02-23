@extends('front.app')
@section('content')

    <div class="tmt-page-container">

        <div class="tmt-hero-banner">
            <h1 class="tmt-hero-title" x-text="team.teamTitle">Train teams effectively and efficiently</h1>
        </div>

        <div class="tmt-intro-section">
            <div class="tmt-intro-text" x-text="team.teamDescription">
                At Irish Manual Handling...
            </div>
        </div>

        <div class="tmt-main-wrapper">

            <div class="tmt-feature-row">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title" x-text="team.bulkDiscount[0]">Bulk Discounts</h2>
                    <div class="tmt-section-description" x-text="team.bulkDiscount[1]">Loading description...</div>
                </div>
                <div class="tmt-column-image">
                    <img src="{{asset('images/training/tr-img-1.png')}}" class="tmt-feature-img" alt="Training Support">
                </div>
            </div>

            <div class="tmt-feature-row tmt-row-reverse">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title" x-text="team.invoice[0]">Can I pay by invoice?</h2>
                    <div class="tmt-section-description" x-text="team.invoice[1]">Loading description...</div>
                </div>
                <div class="tmt-column-image">
                    <img src="{{asset('images/training/tr-img-2.png')}}" class="tmt-feature-img" alt="Invoice Payment">
                </div>
            </div>

            <div class="tmt-feature-row">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title" x-text="team.urgent[0]">Urgent training requirements?</h2>
                    <div class="tmt-section-description" x-text="team.urgent[1]">Loading description...</div>
                </div>
                <div class="tmt-column-image">
                    <img src="{{asset('images/training/tr-img-3.png')}}" class="tmt-feature-img" alt="Urgent Training">
                </div>
            </div>

            <div class="tmt-feature-row tmt-row-reverse">
                <div class="tmt-column-text">
                    <h2 class="tmt-section-title" x-text="team.minim[0]">Minimise disruption</h2>
                    <div class="tmt-section-description" x-text="team.minim[1]">Loading description...</div>
                </div>
                <div class="tmt-column-image">
                    <img src="{{asset('images/training/tr-img-4.png')}}" class="tmt-feature-img" alt="Efficient Learning">
                </div>
            </div>

        </div>
    </div>

@endsection

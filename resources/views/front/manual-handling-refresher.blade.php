@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Compliance Renewal Hub</span>
                    <h1>Manual Handling <br>Refresher Training</h1>
                    <p class="mh-lead-text">
                        Renew your **Irish manual handling certification** in just 45 minutes.
                        Stay aligned with **Manual Handling Compliance Ireland** through our 2026 updated curriculum. Instant certificate download upon completion.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Renew Now — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Corporate Bulk Renewals</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Is a Manual Handling Refresher Legally Required?</h2>
            <p>Under the **Safety, Health and Welfare at Work Act 2005**, training is not a "once-off" event. The Health and Safety Authority (HSA) guidelines suggest that **Manual Handling Training Ireland** should be refreshed at least every three years, or sooner if workplace tasks change significantly.</p>

            <p>A **Manual Handling Refresher** ensures that employees maintain a high level of competency and are aware of any updates to the **General Application Regulations 2007**. Our **Manual Handling Online** refresher course provides a focused review of safe lifting principles, dynamic risk assessment, and the latest ergonomic best practices.</p>

            <div class="mh-feature-list">
                <li><strong>Fast-Track Learning:</strong> Optimized for those who have previously held certification.</li>
                <li><strong>Up-to-Date Content:</strong> Reflects the latest 2026 HSA safety standards.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔄</div>
                        <h4>Skills Reinforcement</h4>
                        <p>Combat "safety drift" by reinforcing the **8 Principles of Safe Lifting** to prevent bad habits.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📉</div>
                        <h4>Risk Mitigation</h4>
                        <p>Reduce the likelihood of workplace injuries and subsequent insurance premium hikes.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📑</div>
                        <h4>Audit Continuity</h4>
                        <p>Maintain an uninterrupted paper trail of **Manual Handling Compliance Ireland** for HSA inspectors.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🌍</div>
                        <h4>Anywhere Access</h4>
                        <p>Complete your **manual handling training online Ireland** from home, the office, or on-site.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Prevention: A Scientific Review</h2>
            <p>The goal of a **manual handling course Ireland** is to minimize the mechanical stress placed on the musculoskeletal system. During refresher training, we revisit the critical concept of the "Center of Gravity" and the "Lever Effect". Even a minor lapse in posture can lead to acute spinal compression.</p>



            <p>Our refresher curriculum emphasizes the TILE method to ensure risk assessment becomes second nature for every Dublin professional. By evaluating the Task, Individual, Load, and Environment, workers can effectively mitigate the hazards that lead to back pain and long-term disability.</p>

            <h3>Refresher Learning Outcomes:</h3>
            <ul class="mh-feature-list">
                <li><strong>Updated Legislation:</strong> Reviewing the latest duties of employers and employees.</li>
                <li><strong>Injury Statistics:</strong> Analyzing how and why handling injuries still occur in Ireland.</li>
                <li><strong>Practical Adjustments:</strong> Implementing ergonomics to reduce physical strain in the 2026 workplace.</li>
                <li><strong>Assessment Mastery:</strong> Verifying knowledge through a comprehensive online exam.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Enterprise-Grade Renewal Systems</h2>
            <p>Managing the expiry dates of an entire workforce's **Irish manual handling certification** is a logistical challenge. Our platform offers automated expiry alerts and a centralized dashboard for HR managers to track **Manual Handling Compliance Ireland** across multiple sites.</p>

            <p>Ensure that your team's certification never lapses. With our bulk licensing options, you can renew dozens of employees simultaneously, providing them with instant access to the **manual handling training online Ireland** portal and ensuring total continuity of safety.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Renew Your Certificate — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection

@extends('front.app')

@section('content')
<div class="mh-leadership-page">
    <header class="mh-hero-corporate">
        <div class="mh-container">
            <div class="mh-hero-content">
                <span class="mh-top-badge">Accredited Verification Portal</span>
                <h1>Manual Handling <br>Certificate Ireland</h1>
                <p class="mh-lead-text">
                    Instant, HSA-compliant **Irish manual handling certification**.
                    Our digital certificates are recognized nationwide, valid for 3 years, and include unique verification IDs for total **Manual Handling Compliance Ireland**.
                </p>
                <div class="mh-btn-row">
                    <a href="{{route('home')}}" class="btn-exclusive-teal">Get Your Certificate — €{{ config('global.course_price') }}</a>
                    <a href="{{route('home')}}" class="btn-exclusive-ghost">Verify a Certificate</a>
                </div>
            </div>
        </div>
    </header>

    <article class="mh-container-content">
        <h2>Is a Digital Manual Handling Certificate Legally Valid?</h2>
        <p>The **Manual Handling Certificate Ireland** issued by our platform is a fully recognized legal document under the **Safety, Health and Welfare at Work Act 2005**. The Health and Safety Authority (HSA) accepts digital certification provided the training is comprehensive, appropriate, and meets the standards of the **General Application Regulations 2007**.</p>

        <p>Our **Manual Handling Online** certificates are identical in legal standing to those issued in classroom settings. Every certificate is generated as a high-resolution PDF and includes a unique verification code, allowing employers to confirm the trainee's credentials in real-time through our global database.</p>

        <div class="mh-feature-list">
            <li><strong>Instant Delivery:</strong> Download your PDF immediately upon passing.</li>
            <li><strong>3-Year Validity:</strong> Fully compliant with HSA refresher guidelines.</li>
        </div>
    </article>

    <section class="mh-pillar-section">
        <div class="mh-container">
            <div class="mh-pillar-grid">
                <div class="pillar-card">
                    <div class="pillar-icon">🎓</div>
                    <h4>QQI Standard</h4>
                    <p>Modules designed by QQI Level 6 instructors to ensure the highest educational quality in your **manual handling course Ireland**.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">🎖️</div>
                    <h4>RoSPA Approved</h4>
                    <p>Our curriculum is approved by the Royal Society for the Prevention of Accidents, providing international prestige.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">📱</div>
                    <h4>Digital Wallet</h4>
                    <p>Access your **Irish manual handling certification** anytime, anywhere on your smartphone or tablet.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon">💰</div>
                    <h4>Refund Policy</h4>
                    <p>We offer a 100% money-back guarantee if your employer does not accept our accredited certificate.</p>
                </div>
            </div>
        </div>
    </section>

    <article class="mh-container-content">
        <h2>What Your Certificate Represents: Mastery of Safety</h2>
        <p>Your **Manual Handling Certificate** is more than just a document; it is proof of your mastery over spinal biomechanics. The human spine, specifically the lumbar region, is subjected to immense compression forces during lifting tasks. Failure to apply the **8 Principles of Safe Lifting** can result in permanent intervertebral disc damage.</p>

        [Image of the human spine showing intervertebral discs under pressure]

        <p>To earn your **manual handling certification Ireland**, you must demonstrate competency in the TILE risk assessment method. This ensures that before any physical task begins, the worker has evaluated the Task, Individual, Load, and Environment. This proactive approach is what truly builds **manual handling compliance Ireland** in the workplace.</p>

        <h3>Core Skills Verified:</h3>
        <ul class="mh-feature-list">
            <li><strong>Hazard Identification:</strong> Spotting risks in the environment before they cause harm.</li>
            <li><strong>Postural Alignment:</strong> Maintaining a neutral spine during lifting and carrying.</li>
            <li><strong>Leverage & Center of Gravity:</strong> Keeping loads close to the body to reduce spinal torque.</li>
            <li><strong>Leg Strength Utilization:</strong> Powering the lift with the quadriceps and glutes.</li>
        </ul>
    </article>

    <article class="mh-container-content">
        <h2>Enterprise Certificate Management</h2>
        <p>For Dublin HR managers and nationwide enterprises, our platform provides a dedicated Employer Dashboard. This allows for the bulk purchase of **manual handling training online Ireland** licenses, real-time progress tracking, and centralized certificate storage.</p>

        <p>Ensure your company remains HSA-audit ready at all times. Our system automatically alerts you when an employee's **Irish manual handling certification** is nearing its 3-year expiry, allowing for seamless refresher training and continuous safety compliance.</p>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{route('home')}}" class="btn-gold">Get Certified Now — €{{ config('global.course_price') }}</a>
        </div>
    </article>
</div>
@endsection

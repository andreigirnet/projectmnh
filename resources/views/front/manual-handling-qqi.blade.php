@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">QQI Level 6 Standards</span>
                    <h1>Manual Handling <br>QQI Training Excellence</h1>
                    <p class="mh-lead-text">
                        The highest standard of **Manual Handling Compliance Ireland**. Our **Manual Handling Course Ireland** is designed by QQI Level 6 instructors to ensure your workforce meets every HSA legal requirement.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start QQI Aligned Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Corporate Team Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling QQI Standards: The Legal Framework</h2>
            <p>In the Republic of Ireland, workplace safety is governed by a rigorous set of legislative requirements. Under the **Safety, Health and Welfare at Work Act 2005**, employers are legally mandated to provide appropriate training to any employee involved in manual handling activities. The **General Application Regulations 2007** (Chapter 4) further define **Manual Handling Online** training as an acceptable medium for delivering the theoretical and biomechanical knowledge required for compliance.</p>

            <p>Our **Manual Handling Course Ireland** is developed in strict alignment with QQI Level 6 instructional standards. While QQI (Quality and Qualifications Ireland) provides the framework for education, the HSA (Health and Safety Authority) provides the framework for compliance. By choosing our platform, you ensure that your **Irish Manual Handling Certification** is not just a document, but a verified record of professional competence.</p>

            <div class="mh-feature-list">
                <li><strong>Verified Authority:</strong> Content curated by QQI Level 6 Safety Instructors.</li>
                <li><strong>HSA Audit Ready:</strong> Instant verification codes for all safety inspections.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🏗️</div>
                        <h4>Industry Standard</h4>
                        <p>Recognized across construction, healthcare, and retail sectors for total **manual handling compliance Ireland**.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🎓</div>
                        <h4>Academic Rigor</h4>
                        <p>Modules based on the latest ergonomic research and HSA safety updates for 2026.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🛡️</div>
                        <h4>Liability Shield</h4>
                        <p>Protect your organization from HSA fines and personal injury claims through documented training.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>
                        <h4>Digital Efficiency</h4>
                        <p>Complete the full **Manual Handling Training Online Ireland** curriculum in just 45 minutes.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Science of Safety: Spinal Biomechanics</h2>
            <p>At the core of our **Manual Handling QQI** aligned course is a deep dive into spinal anatomy. The human spine is a complex lever system. When a load is lifted incorrectly, the "compression force" on the intervertebral discs—particularly in the lumbar region (L5/S1)—can be devastating.</p>



            <p>Our HD video modules demonstrate the **8 Principles of Safe Lifting**. We teach learners how to maintain a neutral spine, secure a firm grip, and utilize the body's strongest muscles—the quadriceps and glutes—to power the lift. This biomechanical approach is essential for preventing Musculoskeletal Disorders (MSDs), which account for one-third of all workplace injuries in Ireland.</p>

            <h3>Dynamic Risk Assessment: The TILE Method</h3>
            <p>A professional **Manual Handling Online** course must equip workers with the ability to assess risks in real-time. We utilize the TILE principle as the gold standard for workplace safety:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Does it involve twisting, stooping, or excessive reaching?</li>
                <li><strong>Individual:</strong> Does the person have the physical capacity or training?</li>
                <li><strong>Load:</strong> Is it heavy, awkward, hot, or unstable?</li>
                <li><strong>Environment:</strong> Are there trip hazards or poor lighting conditions?</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>The Advantage of Online QQI Level Alignment</h2>
            <p>For modern Irish businesses, the transition to **Manual Handling Training Online Ireland** has provided unprecedented flexibility. Traditional classroom settings often suffer from varying instructor quality and high logistical costs. By contrast, our digital platform delivers a consistent, high-fidelity curriculum to every employee, regardless of their location in Dublin or beyond.</p>

            <p>Upon passing the final assessment—which features unlimited retries to ensure total concept mastery—students receive their **Irish Manual Handling Certification** instantly. This certificate is valid for 3 years and is stored in our secure cloud, allowing HR managers to manage compliance across large teams with ease.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Get QQI Aligned Certification — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection

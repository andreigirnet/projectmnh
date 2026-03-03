@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Accredited Nationwide Safety</span>
                    <h1>Manual Handling <br>Ireland</h1>
                    <p class="mh-lead-text">
                        The definitive resource for **Manual Handling Compliance Ireland**.
                        Over 349,500 professionals have secured their **Irish manual handling certification** through our HSA-compliant digital ecosystem.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start Online Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Corporate Compliance Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Compliance Ireland: The Legal Framework</h2>
            <p>In the Republic of Ireland, the safety of employees engaged in the movement of loads is governed by the **Safety, Health and Welfare at Work Act 2005**. This legislation places a strict "Duty of Care" on employers to identify, evaluate, and mitigate risks associated with manual handling tasks.</p>

            <p>Under the **General Application Regulations 2007** (Chapter 4), **Manual Handling Online** training is recognized as a valid method for providing employees with the theoretical and biomechanical knowledge required to perform their duties safely. Our **manual handling course Ireland** is meticulously updated for 2026, ensuring that every student receives the latest Health and Safety Authority (HSA) guidance.</p>

            <div class="mh-feature-list">
                <li><strong>Nationwide Accreditation:</strong> Recognized by all major Irish insurers and the HSA.</li>
                <li><strong>Digital Verification:</strong> Every certificate includes a unique ID for instant safety audits.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🏛️</div>
                        <h4>HSA Compliant</h4>
                        <p>Our curriculum meets every standard set out by the Health and Safety Authority for **manual handling training Ireland**.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📈</div>
                        <h4>Industry Standard</h4>
                        <p>The preferred certification for Ireland's healthcare, construction, retail, and logistics sectors.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🛡️</div>
                        <h4>MSD Prevention</h4>
                        <p>Targeted training to reduce Musculoskeletal Disorders, which account for 33% of Irish work-related illness.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💻</div>
                        <h4>24/7 Availability</h4>
                        <p>The most flexible **manual handling training online Ireland** platform, accessible from any location.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Science of Safety: Biomechanics of the Spine</h2>
            <p>A professional **manual handling course Ireland** must prioritize the anatomical safety of the individual. The human spine, specifically the intervertebral discs, acts as a complex shock-absorption system. When a load is lifted away from the center of gravity, the compression forces on the lumbar vertebrae (L5/S1) increase exponentially, often leading to acute or chronic injury.</p>



            <p>Our training focuses on the **8 Principles of Safe Lifting**. We utilize high-fidelity video demonstrations to teach students how to maintain a neutral spine, secure a firm base of support, and utilize the powerful muscles of the legs to drive the lift. This educational rigor is essential for achieving true **manual handling compliance Ireland**.</p>

            <h3>Dynamic Risk Assessment (TILE)</h3>
            <p>Before any physical task is performed, we train workers to apply the TILE assessment methodology. This is the industry-standard tool for identifying hazards in real-time:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Does it involve twisting, stooping, or reaching?</li>
                <li><strong>Individual:</strong> Does the person have the capacity or pre-existing injuries?</li>
                <li><strong>Load:</strong> Is it heavy, awkward, hot, or sharp?</li>
                <li><strong>Environment:</strong> Are there slippery floors or poor lighting?</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Why Join 50,000+ Students Certified Online?</h2>
            <p>For HR and Safety Managers across Ireland, the logistics of classroom training represent a significant operational hurdle. Our **Manual Handling Online** platform eliminates the need for travel, venue hire, and scheduling conflicts. By providing 24/7 access on any device, we ensure that your team gets certified on their terms, without compromising on quality or legal standing.</p>

            <p>Upon completion of the theory and assessment, your **Irish manual handling certification** is instantly generated for download as a PDF. Join the modern workforce and move toward a safer, more efficient, and fully compliant future.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Start Your Certification — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection

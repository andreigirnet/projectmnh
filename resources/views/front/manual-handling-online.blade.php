@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Strategic Safety Leadership</span>
                    <h1>Manual Handling <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        Establish total **Manual Handling Compliance Ireland** with our 2026 enterprise solution.
                        Accredited **Irish manual handling certification** designed for risk mitigation and workforce longevity.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Enrol Your Team — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Download Legal Whitepaper</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Is Online Manual Handling Training Legally Allowed?</h2>
            <p>The short answer is **yes**. **Manual Handling Online** training is a fully recognized and HSA-compliant method of instruction under current Irish Health and Safety law. Under the <strong>Safety, Health and Welfare at Work Act 2005</strong>, employers are strictly mandated to provide "appropriate" training to any staff member involved in the movement of loads.</p>

            <p>The **General Application Regulations 2007** (Chapter 4) further define the requirements for **manual handling compliance Ireland**. While these regulations stipulate the *content* of the training—such as risk assessment and biomechanics—they do not mandate that such training must occur in a physical classroom. In fact, the HSA recognizes that digital delivery often provides more consistent quality control and auditability than traditional methods.</p>

            <div class="mh-feature-list">
                <li><strong>Verified Certification:</strong> Each certificate features a unique ID for HSA inspectors.</li>
                <li><strong>Audit Readiness:</strong> Digital records are kept for 3 years to ensure compliance.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">⚖️</div>
                        <h4>Legal Safeguard</h4>
                        <p>Shield your organization from litigation and HSA fines by ensuring every employee holds a valid **Irish manual handling certification**.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📈</div>
                        <h4>Reduced Liability</h4>
                        <p>Lower your insurance premiums by demonstrating proactive risk management through our **manual handling course Ireland**.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🛡️</div>
                        <h4>Workforce Protection</h4>
                        <p>Prevent Musculoskeletal Disorders (MSDs), which currently account for 33% of all reported workplace injuries in Ireland.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⚡</div>
                        <h4>Operational Speed</h4>
                        <p>Our **manual handling training online Ireland** takes only 45 minutes, minimizing downtime while maximizing safety.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Science of Injury: Biomechanics of the Spine</h2>
            <p>A central pillar of any professional **manual handling course Ireland** is the study of spinal biomechanics. The human spine is an intricate structure of vertebrae and intervertebral discs that act as shock absorbers. When a load is lifted incorrectly—specifically when bending from the waist—the force exerted on the lower back (L5/S1 region) increases exponentially.</p>



            <p>Our training utilizes HD video and 3D animations to demonstrate how "shear force" and "compression" can lead to permanent disc herniation. By teaching the <strong>8 Principles of Safe Lifting</strong>, we ensure that your staff maintains a neutral spine and utilizes the powerful muscles of the legs to manage weight safely.</p>

            <h3>The TILE Principle of Risk Assessment</h3>
            <p>Effective **Manual Handling Online** training must empower the individual to make split-second safety decisions. We teach the TILE method as the primary tool for dynamic risk assessment:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Does the movement involve twisting or stooping?</li>
                <li><strong>Individual:</strong> Does the worker have the physical capacity for this specific lift?</li>
                <li><strong>Load:</strong> Is the object bulky, hot, or unstable?</li>
                <li><strong>Environment:</strong> Is the floor slippery or the lighting inadequate?</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Why Enterprises Choose Our Manual Handling Training Ireland</h2>
            <p>For HR and Safety Managers, the logistics of classroom training are a significant burden. Coordinating schedules, travel expenses, and lost productivity can double the actual cost of the training. Our **manual handling training online Ireland** platform removes these barriers entirely.</p>

            <p>Learners can access the portal 24/7 on any device—smartphone, tablet, or desktop. This flexibility is particularly vital for shift workers or remote teams who cannot attend traditional 9-to-5 sessions. Furthermore, our platform allows for unlimited retries on the final assessment, ensuring that the **manual handling certification Ireland** is only issued when the student has truly mastered the material.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Get Your Corporate Quote Today</a>
            </div>
        </article>
    </div>
@endsection

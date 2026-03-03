@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Dublin's #1 Safety Provider</span>
                    <h1>Manual Handling <br>Training Dublin</h1>
                    <p class="mh-lead-text">
                        The premium choice for **Manual Handling Compliance Dublin**.
                        Fast-track your **Irish manual handling certification** with HSA-compliant training for individuals and teams across the capital.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start Online Now — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Dublin Team Training</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Compliance Dublin: The Legal Standard</h2>
            <p>In the fast-paced Dublin commercial sector, **Manual Handling Online** training has become the essential standard for legal adherence. Under the **Safety, Health and Welfare at Work Act 2005**, Dublin-based employers are strictly mandated to provide appropriate safety training to any staff involved in moving loads.</p>

            <p>Whether you are operating in warehousing, healthcare, or retail, the **General Application Regulations 2007** apply to your workplace. Our **Manual Handling Course Dublin** is designed to satisfy these Irish Health and Safety Authority (HSA) requirements entirely through a digital format, ensuring your staff receives the highest quality training without the need for classroom travel.</p>

            <div class="mh-feature-list">
                <li><strong>Nationwide Recognition:</strong> Our Dublin-issued certificates are valid across Ireland.</li>
                <li><strong>HSA Audit Ready:</strong> Instant digital verification for workplace safety inspections.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📍</div>
                        <h4>No Dublin Traffic</h4>
                        <p>Avoid the commute to training centers. Complete your **Manual Handling Course Dublin** 100% online from any location.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⏱️</div>
                        <h4>45-Min Certification</h4>
                        <p>Get certified in under an hour. Our streamlined platform is the fastest path to **Irish manual handling certification**.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏗️</div>
                        <h4>Sector Specific</h4>
                        <p>Tailored modules for Dublin's construction, retail, and healthcare sectors to ensure **manual handling compliance Ireland**.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💳</div>
                        <h4>Best Value</h4>
                        <p>At just €{{ config('global.course_price') }}, we offer the most competitive rates for professional **manual handling training online Ireland**.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Protecting the Dublin Workforce: Spinal Biomechanics</h2>
            <p>A core element of our **Manual Handling Training Dublin** is the scientific study of the spine. The human back is highly vulnerable to compression forces when lifting loads away from the center of gravity. Incorrect lifting techniques can lead to long-term Musculoskeletal Disorders (MSDs), which account for over 30% of workplace injuries in the Dublin region.</p>



            <p>Our training focuses on the **8 Principles of Safe Lifting**, including maintaining a neutral spine and utilizing the powerful muscles of the legs. By visualizing these biomechanical forces through our HD video modules, learners gain a practical understanding of how to protect their health while meeting **manual handling compliance Dublin** standards.</p>

            <h3>Dynamic Risk Assessment (TILE)</h3>
            <p>Before any physical movement occurs, we train Dublin workers to perform a TILE risk assessment:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Analyzing if the lift involves twisting or stooping.</li>
                <li><strong>Individual:</strong> Assessing the worker's physical capacity and training history.</li>
                <li><strong>Load:</strong> Identifying if the object is bulky, sharp, or unstable.</li>
                <li><strong>Environment:</strong> Checking for slippery floors or restrictive spaces.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Why 50,000+ Students Chose Our Online Training</h2>
            <p>For Dublin HR managers and business owners, the logistics of traditional training are a nightmare. Our **Manual Handling Online** platform removes the cost of travel, venue hire, and lost productivity. With 24/7 access on smartphones and tablets, your team can get certified whenever it suits the work schedule.</p>

            <p>Upon completion, your **Irish manual handling certification** is available for instant download as a PDF. Join the thousands of Dublin professionals who have moved to a faster, safer, and more compliant training model.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection

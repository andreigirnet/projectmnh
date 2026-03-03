@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Practical Safety Guide</span>
                    <h1>Safe Lifting <br>Techniques & Principles</h1>
                    <p class="mh-lead-text">
                        Master the biomechanics of movement. Our guide to **Safe Lifting Techniques** ensures total **Manual Handling Compliance Ireland** while protecting your long-term musculoskeletal health.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Get Certified — €{{ config('global.course_price') }}</a>
                        <a href="/" class="btn-exclusive-ghost">Start Now</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>The Physics of a Safe Lift</h2>
            <p>Before executing any manual handling task, it is vital to understand the "Lever Effect" on the human body. When you lift a load, your back acts as a lever with the fulcrum at the base of the spine. If a load is held just a few inches away from the body, the pressure on your lower lumbar region (L5/S1 vertebrae) can be ten times the weight of the actual object.</p>



            <p>Our **Manual Handling Online** course teaches you to keep the load as close to your center of gravity as possible. This minimizes "torque" on the spine and ensures that the compression forces are distributed evenly across the intervertebral discs, preventing the acute herniations that lead to chronic back pain.</p>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 8 Pillars of Manual Handling</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">👣</div>
                        <h4>1. Base of Support</h4>
                        <p>Keep your feet hip-width apart with one foot slightly forward for maximum stability.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧘</div>
                        <h4>2. Neutral Spine</h4>
                        <p>Maintain the natural S-curve of your back. Do not stoop or round your shoulders.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🦵</div>
                        <h4>3. Leg Power</h4>
                        <p>Use your quadriceps and glutes—the strongest muscles in your body—to drive the lift.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🤝</div>
                        <h4>4. Firm Grip</h4>
                        <p>Use the palms of your hands, not just your fingers, to secure the load.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Risk Assessment: The TILE Principle</h2>
            <p>A safe lift starts before you touch the load. In Ireland, the HSA mandates that every worker performs a dynamic risk assessment using the TILE principle. This mental checklist is a cornerstone of **Manual Handling Compliance Ireland**.</p>



            <ul class="mh-feature-list">
                <li><strong>Task:</strong> Does the lift involve repetitive movement or twisting?</li>
                <li><strong>Individual:</strong> Do you have the physical capacity or a pre-existing injury?</li>
                <li><strong>Load:</strong> Is it unstable, sharp, or too heavy for one person?</li>
                <li><strong>Environment:</strong> Are there slippery floors, steps, or poor lighting?</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Common Mistakes & The Danger Zone</h2>
            <p>Many workplace injuries occur during "Static Loading" or "Asymmetrical Lifting". Static loading happens when you hold a heavy object for an extended period without moving, causing muscle fatigue and reduced blood flow to the spinal tissues. Asymmetrical lifting—or twisting while holding a weight—is the leading cause of "shear force" injuries in the Dublin logistics sector.</p>

            <p>Our **Manual Handling Training Online Ireland** demonstrates these hazards through HD video, showing you exactly how to pivot with your feet instead of twisting your torso. This simple adjustment is the difference between a safe workday and a debilitating spinal injury.</p>

            <div style="background: #f1f5f9; padding: 30px; border-radius: 12px; margin-top: 40px;">
                <h4 style="color: var(--corporate-teal-dark); margin-top: 0;">Pro Tip: The "Hug" Technique</h4>
                <p style="margin-bottom: 0;">Always "hug" the load. Bringing the weight in toward your chest reduces the lever arm effect and keeps the center of gravity aligned with your spine, reducing back strain by up to 70%.</p>
            </div>
        </article>

        <article class="mh-container-content">
            <h2>Certified Mastery: Start Your Training Today</h2>
            <p>Understanding **Safe Lifting Techniques** is a life-long skill that extends beyond the workplace. Whether you are at home or on-site, these principles protect your mobility and quality of life. By completing our accredited **Manual Handling Course Ireland**, you secure an **Irish manual handling certification** that proves your competence to any employer or HSA inspector.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Enrol Now & Get Certified — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection

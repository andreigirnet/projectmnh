@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">The Definitive Definition</span>
                    <h1>What is <br>Manual Handling?</h1>
                    <p class="mh-lead-text">
                        An in-depth guide to the legal definitions, physical mechanics, and safety standards of **Manual Handling Compliance Ireland**. Get certified today and protect your career.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start Online Training — €{{ config('global.course_price') }}</a>
                        <a href="/" class="btn-exclusive-ghost">More Details</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Defining Manual Handling in the Irish Workplace</h2>
            <p>At its core, **Manual Handling** is defined as the physical transporting or supporting of a load by one or more employees. This includes a wide range of activities such as lifting, putting down, pushing, pulling, carrying, or moving a load by hand or bodily force.</p>

            <p>In accordance with the **Safety, Health and Welfare at Work Act 2005**, the definition extends to any activity that, by reason of its characteristics or unfavorable ergonomic conditions, involves a risk of injury, particularly to the back. Understanding this definition is the first step toward achieving total **manual handling compliance Ireland**.</p>

            <div class="mh-feature-list">
                <li><strong>Broad Scope:</strong> It covers everything from lifting heavy boxes to moving office files.</li>
                <li><strong>Legal Duty:</strong> Employers must train staff even for "light" handling if risk is present.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">What Constitutes a "Load"?</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📦</div>
                        <h4>Inanimate Objects</h4>
                        <p>Boxes, equipment, tools, and raw materials used in construction, retail, or logistics.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">👥</div>
                        <h4>People & Animals</h4>
                        <p>In healthcare and veterinary sectors, "Manual Handling" includes the movement of patients.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🚜</div>
                        <h4>Mechanical Aids</h4>
                        <p>The definition also covers the use of trolleys, pallet trucks, and carts.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⚖️</div>
                        <h4>Variable Weight</h4>
                        <p>Weight isn't the only factor; the shape, grip, and stability of the load matter equally.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Why is Manual Handling Training Necessary?</h2>
            <p>Manual handling is the leading cause of non-fatal injuries in the Irish workplace, accounting for roughly **one-third of all HSA-reported incidents**. When we ask "what is manual handling," we must also ask how it affects the human body.</p>



            <p>The human back is a masterpiece of engineering, but it is not a crane. When you perform a lift, your spine experiences "Axial Loading". If your posture is incorrect, this load becomes unevenly distributed across your intervertebral discs. Over time, this results in Musculoskeletal Disorders (MSDs), ranging from minor strains to permanent disc herniations.</p>

            <h3>The TILE Risk Assessment Model</h3>
            <p>To mitigate these risks, every **Manual Handling Course Ireland** focuses on the TILE model—a method for evaluating a handling task before it begins:</p>

            <ul class="mh-feature-list">
                <li><strong>Task:</strong> The nature of the movement (twisting, reaching, frequency).</li>
                <li><strong>Individual:</strong> The physical capability and health of the worker.</li>
                <li><strong>Load:</strong> The characteristics of the object being moved.</li>
                <li><strong>Environment:</strong> The workspace conditions (lighting, floor surface).</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Achieving Irish Manual Handling Certification</h2>
            <p>Because the risks are so high, the HSA requires that all staff receive appropriate training. Our **Manual Handling Training Online Ireland** platform provides the most efficient route to compliance. Our 45-minute curriculum covers the 8 Principles of Safe Lifting, legal duties, and ergonomic best practices.</p>

            <p>Upon completion, you receive an accredited **Irish manual handling certification** valid for 3 years. This document proves to employers and inspectors that you understand the definition of manual handling and possess the skills to perform it without risk to yourself or others.</p>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{route('home')}}" class="btn-gold">Start Your Training Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection

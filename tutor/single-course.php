<?php

get_header();
while(have_posts()):
    the_post();
    
?>


    <main>
        <!-- ============================================
            SINGLE COURSE - HERO (upa-snglcrs-hi-*)
            Mobile: course image on top. lg+: text only, the image
            is in the purchase card, which is pulled up over the
            right side of this band.
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-snglcrs-hi-wrap">

                    <!-- Mobile only: course image -->
                    <div class="upa-snglcrs-hi-image">
                        <!-- DYNAMIC: course_thumbnail (also in the purchase card) -->
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Food Hygiene course">
                        <!-- DYNAMIC: cpd_points -->
                        <span class="upa-snglcrs-hi-cpd">5 CPD Points</span>
                        <!-- CONDITIONAL: sale ribbon, discounted courses only -->
                        <div class="upa-snglcrs-sale-clip">
                            <div class="upa-snglcrs-sale-ribbon">Sale</div>
                        </div>
                    </div>

                    <!-- DYNAMIC: course_title -->
                    <h1 class="upa-page-header">Food Hygiene</h1>
                    <!-- DYNAMIC: course_excerpt -->
                    <p class="upa-txt-normal mt-2">This CPD-accredited Fire Safety Training course provides you with
                        vital knowledge to prevent, identify, and respond to fire emergencies.</p>

                    <div class="upa-snglcrs-hi-rating">
                        <!-- DYNAMIC: course_rating -->
                        <span class="flex items-center gap-0.5" role="img" aria-label="Rated 4.8 out of 5">
                            <svg class="w-4 h-4 fill-upa-peach" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                            </svg><svg class="w-4 h-4 fill-upa-peach" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                            </svg><svg class="w-4 h-4 fill-upa-peach" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                            </svg><svg class="w-4 h-4 fill-upa-peach" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                            </svg><svg class="w-4 h-4 fill-upa-peach" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                            </svg>
                        </span>
                        <span class="text-sm font-bold text-upa-navy" aria-hidden="true">4.8</span>
                        <!-- CONDITIONAL: badges -->
                        <span class="upa-snglcrs-hi-badge bg-upa-green">Best Seller</span>
                        <span class="upa-snglcrs-hi-badge bg-upa-red">Limited Time Offer</span>
                    </div>

                    <div class="upa-snglcrs-hi-meta">
                        <!-- DYNAMIC: last_updated -->
                        <span class="upa-snglcrs-hi-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 8v.01M12 11v5" />
                            </svg>
                            <span><strong>Last Updated</strong> 26th January 2026</span>
                        </span>
                        <!-- DYNAMIC: enrolled_count -->
                        <span class="upa-snglcrs-hi-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <path d="M17 21v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2" />
                                <circle cx="10" cy="7" r="4" />
                            </svg>
                            352 Enrolled
                        </span>
                        <!-- DYNAMIC: language -->
                        <span class="upa-snglcrs-hi-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18" />
                            </svg>
                            English
                        </span>
                        <span class="upa-snglcrs-hi-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <rect x="3" y="4" width="18" height="17" rx="2" />
                                <path d="M3 9h18M8 3v3M16 3v3" />
                            </svg>
                            Flexible Schedule
                        </span>
                        <!-- DYNAMIC: cpd_points (lg+; on mobile it sits on the image) -->
                        <span class="upa-snglcrs-hi-cpd hidden lg:inline-flex">5 CPD Points</span>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================
            SINGLE COURSE - BODY
            upa-snglcrs-layout: main column + sticky purchase card.
            overflow-x-clip (not hidden) stops the mobile stacked
            sliders causing sideways scroll without breaking sticky
            or clipping the card where it overlaps the hero.
        ============================================ -->
        <section class="w-full bg-white overflow-x-clip">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-snglcrs-layout">

                    <!-- ============================================
                        PURCHASE CARD (upa-snglcrs-card-*)
                        Sticky on lg. Order differs by breakpoint - see
                        the grid areas in single-course.css.
                    ============================================ -->
                    <aside class="upa-snglcrs-aside" aria-label="Buy this course">
                        <div class="upa-snglcrs-card">

                            <!-- lg+ only: course image -->
                            <div class="upa-snglcrs-card-image">
                                <!-- DYNAMIC: course_thumbnail -->
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="Food Hygiene course" loading="lazy">
                                <!-- CONDITIONAL: sale ribbon, discounted courses only -->
                                <div class="upa-snglcrs-sale-clip">
                                    <div class="upa-snglcrs-sale-ribbon">Sale</div>
                                </div>
                            </div>

                            <div class="upa-snglcrs-card-price">
                                <div class="flex items-baseline gap-2">
                                    <!-- DYNAMIC: regular_price, sale_price -->
                                    <span class="upa-snglcrs-card-price-old">£115</span>
                                    <span class="upa-snglcrs-card-price-new">£29</span>
                                </div>
                            </div>

                            <p class="upa-snglcrs-card-guarantee">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z" />
                                    <path d="M9 12l2 2 4-4" />
                                </svg>
                                14 Days Money-Back Guarantee
                            </p>

                            <div class="upa-snglcrs-card-accred">
                                <ul class="upa-snglcrs-card-accred-logos" aria-label="Accreditations">
                                    <li><img src="assets/imgs/accred-incensu.png" alt="incensu Registered Education Supplier" loading="lazy"></li>
                                    <li><img src="assets/imgs/accred-aoht.png" alt="Association of Healthcare Trainers member" loading="lazy"></li>
                                    <li><img src="assets/imgs/accred-cpd.png" alt="The CPD Group approved provider #790985" loading="lazy"></li>
                                    <li><img src="assets/imgs/accred-disability-confident.png" alt="Disability Confident Committed" loading="lazy"></li>
                                </ul>
                            </div>

                            <!-- DYNAMIC: add-to-cart URL -->
                            <a href="#" class="upa-btn upa-snglcrs-card-get">Get this Course</a>

                            <!-- DYNAMIC: course includes -->
                            <ul class="upa-snglcrs-card-list">
                                <li>100% online training</li>
                                <li>5 Hours on-demand video</li>
                                <li>Pay by invoice</li>
                                <li>Instant assessment and result</li>
                                <li>Accredited Certificate &amp; Transcript</li>
                            </ul>

                            <!-- DYNAMIC: gift URL -->
                            <a href="#" class="upa-btn upa-btn-navy_green upa-snglcrs-card-gift">Gift this Course</a>
                        </div>
                    </aside>

                    <div class="upa-snglcrs-main">

                        <!-- Tabs (md+) - in-page links -->
                        <nav class="upa-snglcrs-tabs" aria-label="Course sections">
                            <a href="#snglcrs-overview">Overview</a>
                            <a href="#snglcrs-curriculum">Curriculum</a>
                            <a href="#snglcrs-reviews">Reviews</a>
                            <a href="#snglcrs-faq">FAQ</a>
                        </nav>

                        <!-- Membership upsell strip -->
                        <p class="upa-snglcrs-strip">Access to 1500+ Courses with free CPD Certificates for
                            <strong>Only £99</strong> <a href="#">Get Now</a></p>

                        <!-- ============================================
                            WHAT YOU WILL LEARN (upa-snglcrs-learn-*)
                        ============================================ -->
                        <section id="snglcrs-overview" class="upa-snglcrs-block">
                            <h2 class="upa-sec-header">What you will learn</h2>
                            <!-- DYNAMIC: learning outcomes -->
                            <ul class="upa-snglcrs-learn-list">
                                <li>The value and functionality of fire detection systems</li>
                                <li>Procedures for fire safety in commercial and industrial settings</li>
                                <li>Use and operate various kinds of fire extinguishers correctly</li>
                                <li>Fire safety guidelines for technological environments and transportation</li>
                                <li>Electrical fire management and prevention techniques</li>
                                <li>Psychological aspects impact people's actions during fire situations</li>
                            </ul>
                        </section>

                        <!-- ============================================
                            DESCRIPTION (upa-snglcrs-desc-*)
                        ============================================ -->
                        <section class="upa-snglcrs-block">
                            <h2 class="upa-sec-header">Description</h2>
                            <!-- DYNAMIC: course_description -->
                            <div id="snglcrs-desc-body" class="upa-snglcrs-desc-body">
                                <p>Fire safety involves measures and practices that prevent the outbreak of fires. A
                                    fire safety training course is essential to gain the critical knowledge and skills
                                    needed to prevent, identify, and respond to fire emergencies effectively. This
                                    course from Care Skills Training will empower you to safeguard lives and property,
                                    whether you are a business owner, manager, safety officer or anyone responsible for
                                    safe precautions. Our fire safety training online will be beneficial in building a
                                    proactive culture of fire safety in workplaces and communities across the UK.</p>
                                <p>This fire safety training course begins with a thorough introduction to key fire
                                    safety principles, including the fire triangle, common fire causes, and strategies
                                    for risk prevention. It offers in-depth fire safe training on assessing fire hazards
                                    and implementing tailored fire prevention measures across various settings, from
                                    homes to industrial workplaces. You'll also gain experience using essential
                                    equipment like fire extinguishers and fire blankets, while mastering the operation
                                    of fire detection systems and alarms.</p>
                            </div>
                            <button type="button" class="upa-snglcrs-desc-more" aria-expanded="false"
                                aria-controls="snglcrs-desc-body" data-snglcrs-more>
                                <span data-snglcrs-more-label>Show More</span>
                                <span class="upa-snglcrs-chev" aria-hidden="true">
                                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 9l6 6 6-6" />
                                    </svg>
                                </span>
                            </button>
                        </section>

                        <!-- ============================================
                            COURSE CURRICULUM (upa-snglcrs-curr-*)
                            Native <details> - no script. Add `open` to
                            expand a topic by default.
                        ============================================ -->
                        <section id="snglcrs-curriculum" class="upa-snglcrs-block">
                            <h2 class="upa-sec-header">Course Curriculum</h2>
                            <div class="upa-snglcrs-curr">
                                <!-- LOOP START: curriculum topic -->
                                <details class="upa-snglcrs-curr-item" open>
                                    <summary>
                                        <!-- DYNAMIC: topic_title -->
                                        <span>An overview of Food hygiene</span>
                                        <span class="upa-snglcrs-curr-details">Details
                                            <span class="upa-snglcrs-chev" aria-hidden="true">
                                                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M6 9l6 6 6-6" />
                                                </svg>
                                            </span>
                                        </span>
                                    </summary>
                                    <ul class="upa-snglcrs-curr-lessons">
                                        <!-- LOOP START: lesson -->
                                        <li>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" aria-hidden="true">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M10 8.5l5 3.5-5 3.5z" fill="currentColor" />
                                            </svg>
                                            <!-- DYNAMIC: lesson_title -->
                                            An overview of Food hygiene
                                        </li>
                                        <!-- LOOP END -->
                                    </ul>
                                </details>
                                <!-- LOOP END -->
                                <details class="upa-snglcrs-curr-item">
                                    <summary>
                                        <span>An overview of Food hygiene</span>
                                        <span class="upa-snglcrs-curr-details">Details
                                            <span class="upa-snglcrs-chev" aria-hidden="true">
                                                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M6 9l6 6 6-6" />
                                                </svg>
                                            </span>
                                        </span>
                                    </summary>
                                    <ul class="upa-snglcrs-curr-lessons">
                                        <li>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" aria-hidden="true">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M10 8.5l5 3.5-5 3.5z" fill="currentColor" />
                                            </svg>
                                            An overview of Food hygiene
                                        </li>
                                    </ul>
                                </details>
                                <details class="upa-snglcrs-curr-item">
                                    <summary>
                                        <span>An overview of Food hygiene</span>
                                        <span class="upa-snglcrs-curr-details">Details
                                            <span class="upa-snglcrs-chev" aria-hidden="true">
                                                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M6 9l6 6 6-6" />
                                                </svg>
                                            </span>
                                        </span>
                                    </summary>
                                    <ul class="upa-snglcrs-curr-lessons">
                                        <li>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" aria-hidden="true">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M10 8.5l5 3.5-5 3.5z" fill="currentColor" />
                                            </svg>
                                            An overview of Food hygiene
                                        </li>
                                    </ul>
                                </details>
                                <details class="upa-snglcrs-curr-item">
                                    <summary>
                                        <span>An overview of Food hygiene</span>
                                        <span class="upa-snglcrs-curr-details">Details
                                            <span class="upa-snglcrs-chev" aria-hidden="true">
                                                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M6 9l6 6 6-6" />
                                                </svg>
                                            </span>
                                        </span>
                                    </summary>
                                    <ul class="upa-snglcrs-curr-lessons">
                                        <li>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" aria-hidden="true">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M10 8.5l5 3.5-5 3.5z" fill="currentColor" />
                                            </svg>
                                            An overview of Food hygiene
                                        </li>
                                    </ul>
                                </details>
                                <details class="upa-snglcrs-curr-item">
                                    <summary>
                                        <span>An overview of Food hygiene</span>
                                        <span class="upa-snglcrs-curr-details">Details
                                            <span class="upa-snglcrs-chev" aria-hidden="true">
                                                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M6 9l6 6 6-6" />
                                                </svg>
                                            </span>
                                        </span>
                                    </summary>
                                    <ul class="upa-snglcrs-curr-lessons">
                                        <li>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" aria-hidden="true">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M10 8.5l5 3.5-5 3.5z" fill="currentColor" />
                                            </svg>
                                            An overview of Food hygiene
                                        </li>
                                    </ul>
                                </details>
                                <details class="upa-snglcrs-curr-item">
                                    <summary>
                                        <span>An overview of Food hygiene</span>
                                        <span class="upa-snglcrs-curr-details">Details
                                            <span class="upa-snglcrs-chev" aria-hidden="true">
                                                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M6 9l6 6 6-6" />
                                                </svg>
                                            </span>
                                        </span>
                                    </summary>
                                    <ul class="upa-snglcrs-curr-lessons">
                                        <li>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" aria-hidden="true">
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M10 8.5l5 3.5-5 3.5z" fill="currentColor" />
                                            </svg>
                                            An overview of Food hygiene
                                        </li>
                                    </ul>
                                </details>
                            </div>
                        </section>

                        <!-- ============================================
                            WHO SHOULD TAKE THE COURSE (upa-snglcrs-who-*)
                        ============================================ -->
                        <section class="upa-snglcrs-block">
                            <h2 class="upa-sec-header">Who should take the course</h2>
                            <!-- DYNAMIC: target audience -->
                            <ul class="upa-snglcrs-who-list">
                                <li>Business owners responsible for workplace safety</li>
                                <li>Managers and supervisors overseeing teams or operations</li>
                                <li>Safety officers and fire wardens</li>
                                <li>Employees across all sectors responsible for fire safety procedures</li>
                                <li>Individuals interested in enhancing their fire safety knowledge</li>
                                <li>Facility managers in charge of maintaining safe environments</li>
                                <li>Health and safety professionals seeking specialized training in fire safety</li>
                                <li>Caregivers or those working in environments with vulnerable individuals</li>
                            </ul>
                        </section>

                        <!-- ============================================
                            CERTIFICATE (upa-crtifi-cta-*) - in the main column
                            @2xl (column 42rem+): text + CTA left, image right.
                            Narrower: heading, list, image, CTA.
                        ============================================ -->
                        <section class="upa-snglcrs-block @container">
                            <div class="grid grid-cols-1 @2xl:grid-cols-2 gap-x-10 gap-y-6 items-center">
                                <div class="flex flex-col gap-4 @2xl:self-end">
                                    <h2 class="upa-sec-header">Certificate for Success at Every Step</h2>
                                    <ul class="upa-crtifi-cta-list">
                                        <li>No expiry date. You can keep and use the certificate forever.</li>
                                        <li>Recognised across various UK industries.</li>
                                        <li>Increases your chances of employability.</li>
                                        <li>Boosts your professional credibility.</li>
                                        <li>Shows you're up to date with industry knowledge.</li>
                                    </ul>
                                </div>
                                <div class="upa-crtifi-cta-image-wrap @2xl:col-start-2 @2xl:row-start-1 @2xl:row-span-2">
                                    <img src="assets/imgs/upa-certificate.png"
                                        alt="Framed Upskilling Academy certificates of completion" loading="lazy">
                                </div>
                                <div class="@2xl:col-start-1 @2xl:self-start">
                                    <a href="#" class="upa-btn upa-btn-peach_green">Get Your Certificate</a>
                                </div>
                            </div>
                        </section>

                        <!-- ============================================
                            COURSE REVIEWS (upa-snglcrs-rev-*)
                            md+: grid. Mobile: stacked Swiper. Same D3 card
                            in both, so the loop is written once, printed twice.
                        ============================================ -->
                        <section id="snglcrs-reviews" class="upa-snglcrs-block">
                            <h2 class="upa-sec-header">Course Reviews</h2>

                            <!-- md+: grid -->
                            <div class="hidden md:grid grid-cols-3 gap-4">
                                <!-- LOOP START: course review -->
                                <article class="upa-snglcrs-rev-card">
                                    <!-- DYNAMIC: reviewer_name -->
                                    <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                    <!-- DYNAMIC: review_date (relative) -->
                                    <p class="upa-snglcrs-rev-time">8 months ago</p>
                                    <!-- DYNAMIC: review_text -->
                                    <p class="upa-snglcrs-rev-text">Good course so far</p>
                                </article>
                                <!-- LOOP END -->
                                <article class="upa-snglcrs-rev-card">
                                    <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                    <p class="upa-snglcrs-rev-time">8 months ago</p>
                                    <p class="upa-snglcrs-rev-text">Good course so far</p>
                                </article>
                                <article class="upa-snglcrs-rev-card">
                                    <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                    <p class="upa-snglcrs-rev-time">8 months ago</p>
                                    <p class="upa-snglcrs-rev-text">Good course so far</p>
                                </article>
                                <article class="upa-snglcrs-rev-card">
                                    <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                    <p class="upa-snglcrs-rev-time">8 months ago</p>
                                    <p class="upa-snglcrs-rev-text">Good course so far</p>
                                </article>
                                <article class="upa-snglcrs-rev-card">
                                    <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                    <p class="upa-snglcrs-rev-time">8 months ago</p>
                                    <p class="upa-snglcrs-rev-text">Good course so far</p>
                                </article>
                            </div>

                            <!-- Mobile: stacked Swiper -->
                            <div class="md:hidden">
                                <div class="swiper upa-stack-swiper upa-snglcrs-rev-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <article class="upa-snglcrs-rev-card">
                                                <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                                <p class="upa-snglcrs-rev-time">8 months ago</p>
                                                <p class="upa-snglcrs-rev-text">Good course so far</p>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article class="upa-snglcrs-rev-card">
                                                <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                                <p class="upa-snglcrs-rev-time">8 months ago</p>
                                                <p class="upa-snglcrs-rev-text">Good course so far</p>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article class="upa-snglcrs-rev-card">
                                                <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                                <p class="upa-snglcrs-rev-time">8 months ago</p>
                                                <p class="upa-snglcrs-rev-text">Good course so far</p>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article class="upa-snglcrs-rev-card">
                                                <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                                <p class="upa-snglcrs-rev-time">8 months ago</p>
                                                <p class="upa-snglcrs-rev-text">Good course so far</p>
                                            </article>
                                        </div>
                                        <div class="swiper-slide">
                                            <article class="upa-snglcrs-rev-card">
                                                <h3 class="upa-snglcrs-rev-name">Emmanuel Olufemi</h3>
                                                <p class="upa-snglcrs-rev-time">8 months ago</p>
                                                <p class="upa-snglcrs-rev-text">Good course so far</p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="upa-snglcrs-rev-pagination flex justify-center gap-1.5 mt-4"></div>
                            </div>

                            <div class="flex justify-center md:justify-end mt-4">
                                <!-- DYNAMIC: all reviews URL -->
                                <a href="#" class="upa-snglcrs-rev-all">Show All Reviews</a>
                            </div>
                        </section>

                        <!-- Quality accreditation (upa-accred-*) as a panel in the column -->
                        <section class="upa-snglcrs-block upa-accred upa-accred-panel">
                            <h2 class="upa-sec-header text-center">Quality Accreditation</h2>
                            <ul class="upa-accred-grid">
                                <li class="upa-accred-card"><img src="assets/imgs/accred-incensu.png" alt="incensu Registered Education Supplier" loading="lazy"></li>
                                <li class="upa-accred-card"><img src="assets/imgs/accred-aoht.png" alt="Association of Healthcare Trainers member" loading="lazy"></li>
                                <li class="upa-accred-card"><img src="assets/imgs/accred-cpd.png" alt="The CPD Group approved provider #790985" loading="lazy"></li>
                                <li class="upa-accred-card"><img src="assets/imgs/accred-disability-confident.png" alt="Disability Confident Committed" loading="lazy"></li>
                            </ul>
                        </section>

                        <!-- ============================================
                            FAQ (upa-snglcrs-faq-*)
                            Native <details name="..."> - opening one closes
                            the others, no script.
                        ============================================ -->
                        <section id="snglcrs-faq" class="upa-snglcrs-block">
                            <!-- DYNAMIC: course_title in heading -->
                            <h2 class="upa-sec-header">FAQ for Food Hygiene Course</h2>
                            <div class="upa-snglcrs-faq-list">
                                <!-- LOOP START: faq -->
                                <details class="upa-snglcrs-faq-item" name="snglcrs-faq" open>
                                    <summary>
                                        <!-- DYNAMIC: question -->
                                        How often is the course content updated?
                                        <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                                    </summary>
                                    <!-- DYNAMIC: answer -->
                                    <div class="upa-snglcrs-faq-answer">
                                        <p>The course content is regularly updated to ensure relevance and accuracy.
                                            Updates occur periodically to incorporate new information, developments, or
                                            improvements in the subject matter.</p>
                                    </div>
                                </details>
                                <!-- LOOP END -->
                                <details class="upa-snglcrs-faq-item" name="snglcrs-faq">
                                    <summary>
                                        How often is the course content updated?
                                        <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                                    </summary>
                                    <div class="upa-snglcrs-faq-answer">
                                        <p>The course content is regularly updated to ensure relevance and accuracy.
                                            Updates occur periodically to incorporate new information, developments, or
                                            improvements in the subject matter.</p>
                                    </div>
                                </details>
                                <details class="upa-snglcrs-faq-item" name="snglcrs-faq">
                                    <summary>
                                        How often is the course content updated?
                                        <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                                    </summary>
                                    <div class="upa-snglcrs-faq-answer">
                                        <p>The course content is regularly updated to ensure relevance and accuracy.
                                            Updates occur periodically to incorporate new information, developments, or
                                            improvements in the subject matter.</p>
                                    </div>
                                </details>
                                <details class="upa-snglcrs-faq-item" name="snglcrs-faq">
                                    <summary>
                                        How often is the course content updated?
                                        <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                                    </summary>
                                    <div class="upa-snglcrs-faq-answer">
                                        <p>The course content is regularly updated to ensure relevance and accuracy.
                                            Updates occur periodically to incorporate new information, developments, or
                                            improvements in the subject matter.</p>
                                    </div>
                                </details>
                                <details class="upa-snglcrs-faq-item" name="snglcrs-faq">
                                    <summary>
                                        How often is the course content updated?
                                        <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                                    </summary>
                                    <div class="upa-snglcrs-faq-answer">
                                        <p>The course content is regularly updated to ensure relevance and accuracy.
                                            Updates occur periodically to incorporate new information, developments, or
                                            improvements in the subject matter.</p>
                                    </div>
                                </details>
                                <details class="upa-snglcrs-faq-item" name="snglcrs-faq">
                                    <summary>
                                        How often is the course content updated?
                                        <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                                    </summary>
                                    <div class="upa-snglcrs-faq-answer">
                                        <p>The course content is regularly updated to ensure relevance and accuracy.
                                            Updates occur periodically to incorporate new information, developments, or
                                            improvements in the subject matter.</p>
                                    </div>
                                </details>
                            </div>
                        </section>

                        <!-- ============================================
                            FREQUENTLY BOUGHT TOGETHER (upa-snglcrs-fbt-*)
                            Up to 3 courses, course card (B1, upa-alcrs-card-*).
                            md+: grid. Mobile: stacked Swiper.
                        ============================================ -->
                        <section class="upa-snglcrs-block">
                            <h2 class="upa-sec-header">Frequently Bought Together</h2>

                            <!-- md+: grid -->
                            <div class="hidden md:grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                                <!-- LOOP START: course card (max 3) -->
                                <div class="upa-alcrs-card">
                                    <div class="upa-alcrs-card-image-wrap">
                                        <!-- DYNAMIC: course_thumbnail -->
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="Food Hygiene course">
                                        <!-- CONDITIONAL: sale ribbon, discounted courses only -->
                                        <div class="upa-alcrs-card-sale-clip">
                                            <div class="upa-alcrs-card-sale-ribbon">Sale</div>
                                        </div>
                                    </div>
                                    <div class="upa-alcrs-card-body">
                                        <!-- DYNAMIC: course_title -->
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <!-- DYNAMIC: course_excerpt -->
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                                        <!-- DYNAMIC: course_rating -->
                                        <div class="upa-alcrs-card-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg>
                                        </div>
                                        <div class="upa-alcrs-card-price-row">
                                            <div class="flex items-center gap-2">
                                                <!-- DYNAMIC: sale_price, regular_price -->
                                                <span class="upa-alcrs-card-price-new">£29</span>
                                                <span class="upa-alcrs-card-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- LOOP END -->
                                <div class="upa-alcrs-card">
                                    <div class="upa-alcrs-card-image-wrap">
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="Food Hygiene course">
                                    </div>
                                    <div class="upa-alcrs-card-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                                        <div class="upa-alcrs-card-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg>
                                        </div>
                                        <div class="upa-alcrs-card-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-alcrs-card-price-new">£29</span>
                                                <span class="upa-alcrs-card-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="upa-alcrs-card">
                                    <div class="upa-alcrs-card-image-wrap">
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="Food Hygiene course">
                                        <div class="upa-alcrs-card-sale-clip">
                                            <div class="upa-alcrs-card-sale-ribbon">Sale</div>
                                        </div>
                                    </div>
                                    <div class="upa-alcrs-card-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                                        <div class="upa-alcrs-card-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                            </svg>
                                        </div>
                                        <div class="upa-alcrs-card-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-alcrs-card-price-new">£29</span>
                                                <span class="upa-alcrs-card-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile: stacked Swiper -->
                            <div class="md:hidden">
                                <div class="swiper upa-stack-swiper upa-snglcrs-fbt-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="upa-alcrs-card">
                                                <div class="upa-alcrs-card-image-wrap">
                                                    <img src="assets/imgs/course-food-hygiene.jpg" alt="Food Hygiene course">
                                                    <div class="upa-alcrs-card-sale-clip">
                                                        <div class="upa-alcrs-card-sale-ribbon">Sale</div>
                                                    </div>
                                                </div>
                                                <div class="upa-alcrs-card-body">
                                                    <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                                    <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                                                    <div class="upa-alcrs-card-stars">
                                                        <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="upa-alcrs-card-price-row">
                                                        <div class="flex items-center gap-2">
                                                            <span class="upa-alcrs-card-price-new">£29</span>
                                                            <span class="upa-alcrs-card-price-old">£115</span>
                                                        </div>
                                                        <a href="#" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="upa-alcrs-card">
                                                <div class="upa-alcrs-card-image-wrap">
                                                    <img src="assets/imgs/course-food-hygiene.jpg" alt="Food Hygiene course">
                                                </div>
                                                <div class="upa-alcrs-card-body">
                                                    <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                                    <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                                                    <div class="upa-alcrs-card-stars">
                                                        <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="upa-alcrs-card-price-row">
                                                        <div class="flex items-center gap-2">
                                                            <span class="upa-alcrs-card-price-new">£29</span>
                                                            <span class="upa-alcrs-card-price-old">£115</span>
                                                        </div>
                                                        <a href="#" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="upa-alcrs-card">
                                                <div class="upa-alcrs-card-image-wrap">
                                                    <img src="assets/imgs/course-food-hygiene.jpg" alt="Food Hygiene course">
                                                    <div class="upa-alcrs-card-sale-clip">
                                                        <div class="upa-alcrs-card-sale-ribbon">Sale</div>
                                                    </div>
                                                </div>
                                                <div class="upa-alcrs-card-body">
                                                    <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                                    <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                                                    <div class="upa-alcrs-card-stars">
                                                        <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                            <path d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="upa-alcrs-card-price-row">
                                                        <div class="flex items-center gap-2">
                                                            <span class="upa-alcrs-card-price-new">£29</span>
                                                            <span class="upa-alcrs-card-price-old">£115</span>
                                                        </div>
                                                        <a href="#" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upa-snglcrs-fbt-pagination flex justify-center gap-1.5 mt-4"></div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {

                    // Purchase card height, for its sticky offset (see .upa-snglcrs-card
                    // in single-course.css). Kept current as the card resizes.
                    var card = document.querySelector('.upa-snglcrs-card');
                    function setCardHeight() {
                        card.style.setProperty('--upa-snglcrs-card-h', card.offsetHeight + 'px');
                    }
                    setCardHeight();
                    new ResizeObserver(setCardHeight).observe(card);

                    // Description: Show More / Show Less. Hidden when the text
                    // already fits, so short descriptions don't get a dead button.
                    document.querySelectorAll('[data-snglcrs-more]').forEach(function (btn) {
                        var body = document.getElementById(btn.getAttribute('aria-controls'));
                        if (body.scrollHeight <= body.clientHeight + 1) {
                            body.classList.add('is-expanded');
                            btn.hidden = true;
                            return;
                        }
                        btn.addEventListener('click', function () {
                            var open = body.classList.toggle('is-expanded');
                            btn.setAttribute('aria-expanded', open);
                            btn.querySelector('[data-snglcrs-more-label]').textContent = open ? 'Show Less' : 'Show More';
                        });
                    });

                    // Mobile stacked sliders (the blocks are md:hidden). Loop needs a
                    // spare slide on each side, so with 3 or fewer cards use rewind
                    // and start on the middle one instead.
                    function stack(selector, paginationEl) {
                        var el = document.querySelector(selector);
                        if (!el) return;
                        var count = el.querySelectorAll('.swiper-slide').length;
                        var loop = count > 3;
                        new Swiper(el, {
                            effect: 'creative',
                            slidesPerView: 1,
                            centeredSlides: true,
                            loop: loop,
                            rewind: !loop,
                            initialSlide: loop ? 0 : Math.floor(count / 2),
                            loopAdditionalSlides: 1,
                            grabCursor: true,
                            creativeEffect: {
                                limitProgress: 1,
                                prev: { translate: ['-28%', 0, 0], scale: 0.8 },
                                next: { translate: ['28%', 0, 0], scale: 0.8 },
                            },
                            pagination: {
                                el: paginationEl,
                                clickable: true,
                                bulletClass: 'upa-snglcrs-dot',
                                bulletActiveClass: 'upa-snglcrs-dot-active',
                            },
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                            observer: true,
                            observeParents: true,
                        });
                    }

                    stack('.upa-snglcrs-rev-swiper', '.upa-snglcrs-rev-pagination');
                    stack('.upa-snglcrs-fbt-swiper', '.upa-snglcrs-fbt-pagination');
                });
            </script>
        </section>
    </main>

<?php
endwhile;
wp_reset_postdata();
get_footer();
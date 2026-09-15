<?php

get_header();
while(have_posts()):
    the_post();
?>

    <main>
        <!-- ============================================
            SINGLE BLOG - HERO (upa-snglblg-hi-*)
            lg+: featured image over the Relevant Courses slider on
            the left, title block on the right. Below lg: image,
            title block, slider - centred.
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-snglblg-hi">

                    <div class="upa-snglblg-hi-image">
                        <!-- DYNAMIC: post featured image -->
                        <img src="assets/imgs/course-food-hygiene.jpg" alt="A table of cooked food dishes">
                    </div>

                    <div class="upa-snglblg-hi-text">
                        <!-- DYNAMIC: post title -->
                        <h1 class="upa-snglblg-hi-title">Build Essential Skills for Safety, Confidence &amp; Everyday
                            Life</h1>
                        <!-- DYNAMIC: post excerpt -->
                        <p class="upa-txt-normal max-w-xl">Expert tips, practical guides, and actionable checklists
                            to help you develop skills and apply what you learn.</p>
                        <!-- DYNAMIC: post date -->
                        <time class="upa-snglblg-hi-date" datetime="2026-08-22">22 August, 2026</time>
                    </div>

                    <!-- Relevant courses: small slider -->
                    <div class="upa-snglblg-hi-rel">
                        <h2 class="upa-snglblg-hi-rel-title">Relevant Courses</h2>
                        <div class="swiper upa-snglblg-hi-rel-swiper">
                            <div class="swiper-wrapper">
                                <!-- LOOP START: relevant course -->
                                <div class="swiper-slide h-auto">
                                    <!-- DYNAMIC: course URL -->
                                    <a href="#" class="upa-snglblg-hi-rel-card">
                                        <!-- DYNAMIC: course thumbnail -->
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                        <!-- DYNAMIC: course title -->
                                        <span class="upa-snglblg-hi-rel-name">Food Hygiene Training</span>
                                    </a>
                                </div>
                                <!-- LOOP END -->
                                <div class="swiper-slide h-auto">
                                    <a href="#" class="upa-snglblg-hi-rel-card">
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                        <span class="upa-snglblg-hi-rel-name">Food Hygiene Training</span>
                                    </a>
                                </div>
                                <div class="swiper-slide h-auto">
                                    <a href="#" class="upa-snglblg-hi-rel-card">
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                        <span class="upa-snglblg-hi-rel-name">Food Hygiene Training</span>
                                    </a>
                                </div>
                                <div class="swiper-slide h-auto">
                                    <a href="#" class="upa-snglblg-hi-rel-card">
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                        <span class="upa-snglblg-hi-rel-name">Food Hygiene Training</span>
                                    </a>
                                </div>
                                <div class="swiper-slide h-auto">
                                    <a href="#" class="upa-snglblg-hi-rel-card">
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                        <span class="upa-snglblg-hi-rel-name">Food Hygiene Training</span>
                                    </a>
                                </div>
                                <div class="swiper-slide h-auto">
                                    <a href="#" class="upa-snglblg-hi-rel-card">
                                        <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                        <span class="upa-snglblg-hi-rel-name">Food Hygiene Training</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="upa-snglblg-hi-rel-nav">
                            <button type="button" class="upa-snglblg-hi-rel-btn upa-snglblg-hi-rel-prev"
                                aria-label="Previous course">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M15 6l-6 6 6 6" />
                                </svg>
                            </button>
                            <button type="button" class="upa-snglblg-hi-rel-btn upa-snglblg-hi-rel-next"
                                aria-label="Next course">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M9 6l6 6-6 6" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <script>
                // Relevant courses: centred with a peek either side below lg,
                // left-aligned with a peek on the right from lg (as the design)
                document.addEventListener('DOMContentLoaded', function () {
                    new Swiper('.upa-snglblg-hi-rel-swiper', {
                        slidesPerView: 1.3,
                        centeredSlides: true,
                        spaceBetween: 12,
                        loop: true,
                        navigation: {
                            prevEl: '.upa-snglblg-hi-rel-prev',
                            nextEl: '.upa-snglblg-hi-rel-next',
                        },
                        breakpoints: {
                            1024: { slidesPerView: 1.2, centeredSlides: false },
                        },
                        observer: true,
                        observeParents: true,
                    });
                });
            </script>
        </section>

        <!-- ============================================
            SINGLE BLOG - ARTICLE + SIDEBAR (upa-snglblg-layout)
            Below lg (DOM order): article, lifetime promo, course card.
            lg+: article and course card left, promo right (sticky).
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-snglblg-layout">

                    <!-- DYNAMIC: post content (the_content) - the .upa-snglblg-content
                         rules style plain editor output, no classes needed inside -->
                    <article class="upa-snglblg-content">
                        <p>Understanding <strong>why HACCP training is essential</strong> is fundamental for any UK
                            business that prepares, manufactures, stores, transports, serves or sells food. Food safety
                            cannot depend solely on staff being careful or premises appearing clean. Instead, businesses
                            need a structured, evidence-based approach to identifying what could make food unsafe,
                            determining where control is critical, and taking prompt action when something goes wrong.
                        </p>

                        <h3>Quick Overview</h3>
                        <p>Why HACCP Training Is Essential for UK food businesses is a key consideration for
                            organisations that prepare, manufacture, store, transport, serve or sell food. HACCP
                            training helps employees understand food safety risks, apply HACCP principles and maintain
                            effective hazard control procedures.</p>

                        <p>This guide covers:</p>
                        <ul>
                            <li>Why HACCP Training Is Essential and how it supports effective food safety management
                            </li>
                            <li>What HACCP is, why it is important and how HACCP principles help identify and control
                                food safety hazards</li>
                            <li>Who needs HACCP training, the different training levels and which roles require greater
                                HACCP knowledge</li>
                            <li>The seven principles of HACCP, including hazard analysis, Critical Control Points,
                                monitoring and corrective actions</li>
                            <li>UK HACCP requirements, legal responsibilities, training expectations and choosing the
                                right HACCP course</li>
                            <li>How HACCP training helps businesses improve food safety practices, protect consumers and
                                maintain reliable food safety systems</li>
                        </ul>

                        <figure>
                            <img src="assets/imgs/course-food-hygiene.jpg" alt="A table of cooked food dishes"
                                loading="lazy">
                        </figure>

                        <h2>What Is HACCP and Why Does It Matter?</h2>
                        <!-- PLACEHOLDER: article continues -->
                        <p>Text Goes On</p>
                    </article>

                    <!-- Sidebar: lifetime membership (same image as the hot deals page) -->
                    <aside class="upa-snglblg-aside" aria-label="Lifetime membership offer">
                        <!-- DYNAMIC: lifetime membership URL -->
                        <a href="#" class="upa-snglblg-aside-promo">
                            <img src="assets/imgs/htdl-plan-lifetime.png"
                                alt="Lifetime Membership Plan - £99 for lifetime access to all courses and unlimited digital certificates, 90% off the regular £2000. Start now"
                                loading="lazy">
                        </a>
                    </aside>

                    <!-- Featured course (B3 promo) -->
                    <div class="upa-snglblg-course">
                        <div class="upa-snglblg-course-image">
                            <!-- DYNAMIC: course thumbnail -->
                            <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                        </div>
                        <div class="upa-snglblg-course-body">
                            <!-- DYNAMIC: course title -->
                            <h2 class="upa-snglblg-course-title">Food Hygiene Training Level 3</h2>
                            <!-- DYNAMIC: course excerpt -->
                            <p class="upa-snglblg-course-text">Master the essentials of food hygiene and gain practical
                                knowledge to help prevent contamination, protect customers, and maintain safer food
                                standards.</p>
                            <!-- DYNAMIC: course URL -->
                            <a href="#" class="upa-btn upa-btn-peach_green mt-1">Enroll Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================
            SINGLE BLOG - NEWSLETTER
            Reuses the blog listing section (upa-alblg-lead-*), on mint here.
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-alblg-lead">
                    <img src="assets/imgs/alblg-lead-graphic.png" alt="" class="upa-alblg-lead-graphic"
                        loading="lazy">
                    <h2 class="upa-alblg-lead-title">Subscribe for Course Discounts, Free Resources &amp; Expert
                        Insights</h2>
                    <!-- DYNAMIC: newsletter form - swap action/fields for the newsletter plugin's form -->
                    <form action="#" method="post" class="upa-alblg-lead-form">
                        <label for="upa-alblg-lead-email" class="sr-only">Email address</label>
                        <input type="email" id="upa-alblg-lead-email" name="email" class="upa-alblg-lead-input"
                            placeholder="Your email address" autocomplete="email" required>
                        <button type="submit" class="upa-btn upa-alblg-lead-btn">Subscribe Now</button>
                    </form>
                    <p class="upa-alblg-lead-note">No spam, ever. Just useful updates, exclusive offers, and practical
                        tips.</p>
                </div>
            </div>
        </section>
    </main>

<?php
endwhile;
wp_reset_postdata();
get_footer();
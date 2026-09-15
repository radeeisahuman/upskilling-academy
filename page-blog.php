<?php get_header(); ?>

    <main>
        <!-- ============================================
            BLOG LISTING - PAGE HEADER (upa-alblg-hi-*)
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16 text-center">
                <h1 class="upa-page-header">Knowledge &amp; Learning Hub</h1>
                <p class="upa-txt-normal mt-2 max-w-xl mx-auto">Discover the latest education and training trends,
                    expert advice, and insights designed to help you grow professionally.</p>
            </div>
        </section>

        <!-- ============================================
            BLOG LISTING - FEATURED SLIDER (upa-alblg-feat-*)
            md+: coverflow, active card centred with 2 smaller cards
            each side. Below md: the stacked slider used site-wide.
            Clicking a side card brings it to the centre instead of
            following its link. overflow-hidden clips the outer cards.
        ============================================ -->
        <section class="w-full bg-white overflow-hidden">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="swiper upa-stack-swiper upa-alblg-feat-swiper" aria-label="Featured topics">
                    <div class="swiper-wrapper">
                        <!-- LOOP START: featured topic (blog category) -->
                        <div class="swiper-slide">
                            <!-- DYNAMIC: category archive URL -->
                            <a href="#" class="upa-alblg-feat-card">
                                <!-- DYNAMIC: category image -->
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                <span class="upa-alblg-feat-body">
                                    <!-- DYNAMIC: category name -->
                                    <span class="upa-alblg-feat-title">Food Hygiene</span>
                                    <!-- DYNAMIC: category description -->
                                    <span class="upa-alblg-feat-text">Essential food handling, Hygiene, safety and
                                        nutrition training</span>
                                </span>
                            </a>
                        </div>
                        <!-- LOOP END -->
                        <div class="swiper-slide">
                            <a href="#" class="upa-alblg-feat-card">
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                <span class="upa-alblg-feat-body">
                                    <span class="upa-alblg-feat-title">Food Hygiene</span>
                                    <span class="upa-alblg-feat-text">Essential food handling, Hygiene, safety and
                                        nutrition training</span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="upa-alblg-feat-card">
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                <span class="upa-alblg-feat-body">
                                    <span class="upa-alblg-feat-title">Food Hygiene</span>
                                    <span class="upa-alblg-feat-text">Essential food handling, Hygiene, safety and
                                        nutrition training</span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="upa-alblg-feat-card">
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                <span class="upa-alblg-feat-body">
                                    <span class="upa-alblg-feat-title">Food Hygiene</span>
                                    <span class="upa-alblg-feat-text">Essential food handling, Hygiene, safety and
                                        nutrition training</span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="upa-alblg-feat-card">
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                <span class="upa-alblg-feat-body">
                                    <span class="upa-alblg-feat-title">Food Hygiene</span>
                                    <span class="upa-alblg-feat-text">Essential food handling, Hygiene, safety and
                                        nutrition training</span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="upa-alblg-feat-card">
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                <span class="upa-alblg-feat-body">
                                    <span class="upa-alblg-feat-title">Food Hygiene</span>
                                    <span class="upa-alblg-feat-text">Essential food handling, Hygiene, safety and
                                        nutrition training</span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="upa-alblg-feat-card">
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                <span class="upa-alblg-feat-body">
                                    <span class="upa-alblg-feat-title">Food Hygiene</span>
                                    <span class="upa-alblg-feat-text">Essential food handling, Hygiene, safety and
                                        nutrition training</span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="upa-alblg-feat-card">
                                <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                                <span class="upa-alblg-feat-body">
                                    <span class="upa-alblg-feat-title">Food Hygiene</span>
                                    <span class="upa-alblg-feat-text">Essential food handling, Hygiene, safety and
                                        nutrition training</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="upa-alblg-feat-pagination flex justify-center gap-1.5 mt-6"></div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var el = document.querySelector('.upa-alblg-feat-swiper');
                    var desktop = window.matchMedia('(min-width: 768px)');
                    var swiper = null;

                    // Below md: the stacked look - one card each side
                    var mobile = {
                        loopAdditionalSlides: 1,
                        creativeEffect: {
                            limitProgress: 1,
                            prev: { translate: ['-28%', 0, 0], scale: 0.8 },
                            next: { translate: ['28%', 0, 0], scale: 0.8 },
                        },
                    };

                    // md+: coverflow - two cards each side, each step smaller
                    // (progress 1 = 85%, progress 2 = 70%) and overlapping the last
                    var coverflow = {
                        loopAdditionalSlides: 2,
                        creativeEffect: {
                            limitProgress: 2,
                            prev: { translate: ['-62%', 0, 0], scale: 0.85 },
                            next: { translate: ['62%', 0, 0], scale: 0.85 },
                        },
                    };

                    // Both are the creative effect, but the loop needs a different
                    // number of spare slides, so rebuild when crossing md
                    function build() {
                        if (swiper) swiper.destroy(true, true);
                        swiper = new Swiper(el, Object.assign({
                            effect: 'creative',
                            slidesPerView: 1,
                            // Makes the loop keep slides before the active one, so the left cards exist
                            centeredSlides: true,
                            loop: true,
                            grabCursor: true,
                            keyboard: { enabled: true, onlyInViewport: true },
                            pagination: {
                                el: '.upa-alblg-feat-pagination',
                                clickable: true,
                                bulletClass: 'upa-alblg-feat-dot',
                                bulletActiveClass: 'upa-alblg-feat-dot-active',
                            },
                            autoplay: {
                                delay: 4000,
                                disableOnInteraction: false,
                                pauseOnMouseEnter: true,
                            },
                            observer: true,
                            observeParents: true,
                        }, desktop.matches ? coverflow : mobile));
                    }

                    // A side card is a "go here" target, not a link
                    el.addEventListener('click', function (e) {
                        var slide = e.target.closest('.swiper-slide');
                        if (!slide || slide.classList.contains('swiper-slide-active')) return;
                        e.preventDefault();
                        swiper.slideToLoop(parseInt(slide.getAttribute('data-swiper-slide-index'), 10));
                    });

                    build();
                    desktop.addEventListener('change', build);
                });
            </script>
        </section>

        <!-- ============================================
            BLOG LISTING - POSTS (upa-alblg-list-*)
            E1 post card: md+ a row (date box, image, text);
            below md a bordered card with the date as a pill.
            Same markup at every size.
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 pb-12 lg:pb-16">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="upa-alblg-list-title">Build Essential Skills for Safety, Confidence &amp; Everyday Life
                    </h2>
                    <p class="upa-txt-normal mt-2">Expert tips, practical guides, and actionable checklists to help you
                        develop skills and apply what you learn.</p>
                </div>

                <div class="upa-alblg-list">
                    <!-- LOOP START: blog post -->
                    <article class="upa-alblg-post">
                        <!-- DYNAMIC: post date (md+ box) -->
                        <time class="upa-alblg-post-datebox" datetime="2026-08-22">
                            <span class="upa-alblg-post-day">22</span>
                            <span class="upa-alblg-post-month">Aug</span>
                        </time>
                        <!-- DYNAMIC: post URL, featured image -->
                        <a href="#" class="upa-alblg-post-image" tabindex="-1" aria-hidden="true">
                            <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                        </a>
                        <div class="upa-alblg-post-body">
                            <!-- DYNAMIC: post date (mobile pill) -->
                            <time class="upa-alblg-post-date" datetime="2026-08-22">22 Aug, 2026</time>
                            <!-- DYNAMIC: category name + archive URL -->
                            <a href="#" class="upa-alblg-post-cat">Food Hygiene &amp; Safety</a>
                            <!-- DYNAMIC: post title + URL -->
                            <h3 class="upa-alblg-post-title"><a href="#">Food Safety Made Simple: Expert Tips for Safer
                                    Food Handling</a></h3>
                            <!-- DYNAMIC: post excerpt -->
                            <p class="upa-alblg-post-excerpt">Discover expert food hygiene tips and practical guidance
                                to help you handle, prepare, and store food safely with confidence.</p>
                            <!-- DYNAMIC: post URL; sr-only text = post title -->
                            <a href="#" class="upa-alblg-post-more">View details<span class="sr-only">: Food Safety
                                    Made Simple: Expert Tips for Safer Food Handling</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 12h15M14 7l5 5-5 5" />
                                </svg>
                            </a>
                        </div>
                    </article>
                    <!-- LOOP END -->
                    <article class="upa-alblg-post">
                        <time class="upa-alblg-post-datebox" datetime="2026-08-22">
                            <span class="upa-alblg-post-day">22</span>
                            <span class="upa-alblg-post-month">Aug</span>
                        </time>
                        <a href="#" class="upa-alblg-post-image" tabindex="-1" aria-hidden="true">
                            <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                        </a>
                        <div class="upa-alblg-post-body">
                            <time class="upa-alblg-post-date" datetime="2026-08-22">22 Aug, 2026</time>
                            <a href="#" class="upa-alblg-post-cat">Food Hygiene &amp; Safety</a>
                            <h3 class="upa-alblg-post-title"><a href="#">Food Safety Made Simple: Expert Tips for Safer
                                    Food Handling</a></h3>
                            <p class="upa-alblg-post-excerpt">Discover expert food hygiene tips and practical guidance
                                to help you handle, prepare, and store food safely with confidence.</p>
                            <a href="#" class="upa-alblg-post-more">View details<span class="sr-only">: Food Safety
                                    Made Simple: Expert Tips for Safer Food Handling</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 12h15M14 7l5 5-5 5" />
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="upa-alblg-post">
                        <time class="upa-alblg-post-datebox" datetime="2026-08-22">
                            <span class="upa-alblg-post-day">22</span>
                            <span class="upa-alblg-post-month">Aug</span>
                        </time>
                        <a href="#" class="upa-alblg-post-image" tabindex="-1" aria-hidden="true">
                            <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                        </a>
                        <div class="upa-alblg-post-body">
                            <time class="upa-alblg-post-date" datetime="2026-08-22">22 Aug, 2026</time>
                            <a href="#" class="upa-alblg-post-cat">Food Hygiene &amp; Safety</a>
                            <h3 class="upa-alblg-post-title"><a href="#">Food Safety Made Simple: Expert Tips for Safer
                                    Food Handling</a></h3>
                            <p class="upa-alblg-post-excerpt">Discover expert food hygiene tips and practical guidance
                                to help you handle, prepare, and store food safely with confidence.</p>
                            <a href="#" class="upa-alblg-post-more">View details<span class="sr-only">: Food Safety
                                    Made Simple: Expert Tips for Safer Food Handling</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 12h15M14 7l5 5-5 5" />
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="upa-alblg-post">
                        <time class="upa-alblg-post-datebox" datetime="2026-08-22">
                            <span class="upa-alblg-post-day">22</span>
                            <span class="upa-alblg-post-month">Aug</span>
                        </time>
                        <a href="#" class="upa-alblg-post-image" tabindex="-1" aria-hidden="true">
                            <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                        </a>
                        <div class="upa-alblg-post-body">
                            <time class="upa-alblg-post-date" datetime="2026-08-22">22 Aug, 2026</time>
                            <a href="#" class="upa-alblg-post-cat">Food Hygiene &amp; Safety</a>
                            <h3 class="upa-alblg-post-title"><a href="#">Food Safety Made Simple: Expert Tips for Safer
                                    Food Handling</a></h3>
                            <p class="upa-alblg-post-excerpt">Discover expert food hygiene tips and practical guidance
                                to help you handle, prepare, and store food safely with confidence.</p>
                            <a href="#" class="upa-alblg-post-more">View details<span class="sr-only">: Food Safety
                                    Made Simple: Expert Tips for Safer Food Handling</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 12h15M14 7l5 5-5 5" />
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="upa-alblg-post">
                        <time class="upa-alblg-post-datebox" datetime="2026-08-22">
                            <span class="upa-alblg-post-day">22</span>
                            <span class="upa-alblg-post-month">Aug</span>
                        </time>
                        <a href="#" class="upa-alblg-post-image" tabindex="-1" aria-hidden="true">
                            <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                        </a>
                        <div class="upa-alblg-post-body">
                            <time class="upa-alblg-post-date" datetime="2026-08-22">22 Aug, 2026</time>
                            <a href="#" class="upa-alblg-post-cat">Food Hygiene &amp; Safety</a>
                            <h3 class="upa-alblg-post-title"><a href="#">Food Safety Made Simple: Expert Tips for Safer
                                    Food Handling</a></h3>
                            <p class="upa-alblg-post-excerpt">Discover expert food hygiene tips and practical guidance
                                to help you handle, prepare, and store food safely with confidence.</p>
                            <a href="#" class="upa-alblg-post-more">View details<span class="sr-only">: Food Safety
                                    Made Simple: Expert Tips for Safer Food Handling</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 12h15M14 7l5 5-5 5" />
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ============================================
            BLOG LISTING - NEWSLETTER (upa-alblg-lead-*)
        ============================================ -->
        <section class="w-full bg-white">
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

<?php get_footer(); 
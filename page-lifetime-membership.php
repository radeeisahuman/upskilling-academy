<?php get_header(); ?>

    <main>
        <!-- ============================================
            LIFETIME SUBSCRIPTION - HERO (upa-lftsub-hi-*)
            Left: package graphic, benefits, stats. Right: plan
            card (F3) with the looping 48-hour offer countdown.
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                    <!-- Left: intro -->
                    <div class="upa-lftsub-hi-intro">
                        <h1 class="upa-lftsub-hi-badge">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/lftsub-hero-badge.png'; ?>"
                                alt="Lifetime Membership Package - one time offer, lifetime access">
                        </h1>
                        <p class="upa-txt-normal">All Our Courses. All Future Releases. Yours for Life.</p>
                        <ul class="upa-lftsub-hi-benefits">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M8.5 12l2.5 2.5 4.5-5" />
                                </svg>
                                All Courses Access for Lifetime
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M8.5 12l2.5 2.5 4.5-5" />
                                </svg>
                                Unlimited Digital Certificate
                            </li>
                        </ul>
                        <!-- DYNAMIC: course and category counts -->
                        <ul class="upa-lftsub-hi-stats">
                            <li><span class="upa-lftsub-hi-stat-num">1500+</span>
                                <span class="upa-lftsub-hi-stat-label">Online Courses</span></li>
                            <li><span class="upa-lftsub-hi-stat-num">33+</span>
                                <span class="upa-lftsub-hi-stat-label">Categories</span></li>
                            <li><span class="upa-lftsub-hi-stat-num">CPD</span>
                                <span class="upa-lftsub-hi-stat-label">Accreditation</span></li>
                        </ul>
                    </div>

                    <!-- Right: plan card -->
                    <div class="upa-lftsub-hi-plan">
                        <div class="upa-lftsub-hi-plan-ribbon-clip">
                            <div class="upa-lftsub-hi-plan-ribbon">Special Offer</div>
                        </div>

                        <h2 class="upa-lftsub-hi-plan-title">Lifetime Membership Plan</h2>
                        <!-- DYNAMIC: membership price, regular price -->
                        <p class="upa-lftsub-hi-plan-price">
                            <span class="upa-lftsub-hi-plan-amount">£99</span>
                            <span class="upa-lftsub-hi-plan-per">/Lifetime</span>
                        </p>
                        <p class="upa-lftsub-hi-plan-regular">Regular Price: <s>£2000</s></p>
                        <p class="upa-lftsub-hi-plan-guarantee">14-Day Money-Back Guarantee</p>

                        <p class="upa-lftsub-hi-plan-offer">Offer Changes In:</p>
                        <!-- Countdown: ends at 00:00 UK time every data-cycle-days days,
                             counted from data-anchor-date (a UK date). Same for every visitor;
                             restarts on its own. The numbers below are replaced on load. -->
                        <div class="upa-lftsub-hi-timer" role="timer" aria-label="Time left on this offer"
                            data-lftsub-countdown data-anchor-date="2026-01-01" data-cycle-days="2">
                            <div class="upa-lftsub-hi-timer-unit">
                                <span class="upa-lftsub-hi-timer-num" data-unit="days">01</span>
                                <span class="upa-lftsub-hi-timer-label">Days</span>
                            </div>
                            <div class="upa-lftsub-hi-timer-unit">
                                <span class="upa-lftsub-hi-timer-num" data-unit="hours">13</span>
                                <span class="upa-lftsub-hi-timer-label">Hours</span>
                            </div>
                            <div class="upa-lftsub-hi-timer-unit">
                                <span class="upa-lftsub-hi-timer-num" data-unit="mins">18</span>
                                <span class="upa-lftsub-hi-timer-label">Mins</span>
                            </div>
                            <div class="upa-lftsub-hi-timer-unit">
                                <span class="upa-lftsub-hi-timer-num" data-unit="secs">57</span>
                                <span class="upa-lftsub-hi-timer-label">Secs</span>
                            </div>
                        </div>

                        <!-- DYNAMIC: add-to-cart URL for the membership -->
                        <a href="#" class="upa-btn upa-btn-peach_green upa-lftsub-hi-plan-btn">Add To Cart</a>
                    </div>

                </div>
            </div>
            <script>
                // Offer countdown - a repeating cycle that ends at 00:00 UK time every
                // `data-cycle-days` days, counted from `data-anchor-date`. The end is
                // worked out from the real date, so every visitor sees the same time
                // left, and the next cycle starts as soon as one ends.
                document.addEventListener('DOMContentLoaded', function () {
                    var DAY = 86400000;

                    // UTC instant of 00:00 UK time on a date. London is UTC+0 (GMT)
                    // or UTC+1 (BST); the UK hour at 00:00 UTC says which.
                    function ukMidnight(y, m, d) {
                        var utcMidnight = Date.UTC(y, m, d);
                        var ukHour = parseInt(new Intl.DateTimeFormat('en-GB', {
                            timeZone: 'Europe/London', hour: 'numeric', hourCycle: 'h23'
                        }).format(utcMidnight), 10);
                        return utcMidnight - ukHour * 3600000;
                    }

                    // Today's date in the UK as [year, monthIndex, day]
                    function ukToday(now) {
                        var parts = {};
                        new Intl.DateTimeFormat('en-GB', {
                            timeZone: 'Europe/London', year: 'numeric', month: 'numeric', day: 'numeric'
                        }).formatToParts(now).forEach(function (p) { parts[p.type] = parseInt(p.value, 10); });
                        return [parts.year, parts.month - 1, parts.day];
                    }

                    function pad(n) { return (n < 10 ? '0' : '') + n; }

                    document.querySelectorAll('[data-lftsub-countdown]').forEach(function (el) {
                        var cycle = parseInt(el.getAttribute('data-cycle-days'), 10) || 2;
                        var a = el.getAttribute('data-anchor-date').split('-').map(Number);
                        var anchorDay = Date.UTC(a[0], a[1] - 1, a[2]);
                        var units = {};
                        el.querySelectorAll('[data-unit]').forEach(function (n) {
                            units[n.getAttribute('data-unit')] = n;
                        });
                        var end = 0;

                        // Next UK midnight that closes a cycle
                        function nextEnd() {
                            var t = ukToday(new Date());
                            var dayIndex = Math.round((Date.UTC(t[0], t[1], t[2]) - anchorDay) / DAY);
                            var daysLeft = cycle - (((dayIndex % cycle) + cycle) % cycle);
                            return ukMidnight(t[0], t[1], t[2] + daysLeft);
                        }

                        function tick() {
                            var left = end - Date.now();
                            if (left <= 0) {
                                end = nextEnd();
                                left = end - Date.now();
                            }
                            var s = Math.floor(left / 1000);
                            units.days.textContent = pad(Math.floor(s / 86400));
                            units.hours.textContent = pad(Math.floor(s % 86400 / 3600));
                            units.mins.textContent = pad(Math.floor(s % 3600 / 60));
                            units.secs.textContent = pad(s % 60);
                        }

                        tick();
                        setInterval(tick, 1000);
                    });
                });
            </script>
        </section>

        <!-- ============================================
            QUALITY ACCREDITATION (upa-accred-*)
            Shared section - see accreditation.css.
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-accred">
                    <h2 class="upa-sec-header text-center">Quality Accreditation</h2>
                    <!-- DYNAMIC/STATIC: accreditation logos -->
                    <ul class="upa-accred-grid">
                        <li class="upa-accred-card"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/accred-incensu.png'; ?>" alt="incensu Registered Education Supplier" loading="lazy"></li>
                        <li class="upa-accred-card"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/accred-aoht.png'; ?>" alt="Association of Healthcare Trainers member" loading="lazy"></li>
                        <li class="upa-accred-card"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/accred-cpd.png'; ?>" alt="The CPD Group approved provider #790985" loading="lazy"></li>
                        <li class="upa-accred-card"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/accred-disability-confident.png'; ?>" alt="Disability Confident Committed" loading="lazy"></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ============================================
            COURSE CATEGORIES
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <h2 class="upa-sec-header">Explore Our Popular Course Categories</h2>
                <p class="upa-txt-normal mt-2">Choose your desired course from our extensive course library to gain
                    personal and professional skills</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 mt-8">
                    <?php
                    $terms = get_terms(['taxonomy' => 'course-category']);
                    foreach($terms as $term):
                    ?>
                    <a href="<?php echo get_term_link($term); ?>" class="upa-crcat-card">
                        <div class="upa-crcat-icon">
                            <svg class="w-6 h-6 text-upa-green" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" />
                                <path
                                    d="M12 7v10M8.5 9c0-1.5 1.5-2.5 3.5-2.5s3.5 1 3.5 2.5-1.5 2-3.5 2.5-3.5 1-3.5 2.5 1.5 2.5 3.5 2.5 3.5-1 3.5-2.5"
                                    stroke="currentColor" stroke-width="1.3" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div>
                            <p class="upa-txt-normal font-bold text-upa-navy"><?php echo $term->name?></p>
                            <p class="hidden md:block upa-txt-sm"><?php echo $term->description?></p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </section>

        <!-- ============================================
            LIFETIME SUBSCRIPTION - HOW TO START (upa-lftsub-steps-*)
            Stacked below lg with a down arrow between steps,
            three across on lg with a right arrow between.
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <h2 class="upa-sec-header text-center">How to Start</h2>
                <ol class="upa-lftsub-steps">
                    <li class="upa-lftsub-steps-item">
                        <div class="upa-lftsub-steps-image">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/lftsub-step-1.jpg'; ?>" alt="Paying for the membership online by card"
                                loading="lazy">
                        </div>
                        <div class="upa-lftsub-steps-body">
                            <h3 class="upa-lftsub-steps-title">1. Purchase The Membership</h3>
                            <ul class="upa-lftsub-steps-list">
                                <li>Pay once in a lifetime</li>
                                <li>No hidden charge</li>
                                <li>Login to your account and get instant access to our courses library</li>
                            </ul>
                        </div>
                        <span class="upa-lftsub-steps-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 6l6 6-6 6" />
                            </svg>
                        </span>
                    </li>
                    <li class="upa-lftsub-steps-item">
                        <div class="upa-lftsub-steps-image">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/lftsub-step-2.jpg'; ?>" alt="Learning on a laptop" loading="lazy">
                        </div>
                        <div class="upa-lftsub-steps-body">
                            <h3 class="upa-lftsub-steps-title">2. Start Learning</h3>
                            <ul class="upa-lftsub-steps-list">
                                <li>Search for your preferable courses from 1500+ courses</li>
                                <li>Start Learning from anywhere</li>
                                <li>Take all the time you need to finish the course</li>
                            </ul>
                        </div>
                        <span class="upa-lftsub-steps-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 6l6 6-6 6" />
                            </svg>
                        </span>
                    </li>
                    <li class="upa-lftsub-steps-item">
                        <div class="upa-lftsub-steps-image">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/lftsub-step-3.jpg'; ?>" alt="A course certificate on screen"
                                loading="lazy">
                        </div>
                        <div class="upa-lftsub-steps-body">
                            <h3 class="upa-lftsub-steps-title">3. Get Certified</h3>
                            <ul class="upa-lftsub-steps-list">
                                <li>Take notes while learning</li>
                                <li>Complete tests</li>
                                <li>And get your certificate and transcript instantly</li>
                            </ul>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <!-- ============================================
            CHECK OUR LEARNERS REVIEWS
            Always-on Swiper: stacked cards below md, then a row of
            2 (md), 3 (lg), 4 (xl). overflow-hidden clips the stacked
            side cards on narrow phones.
        ============================================ -->
        <section class="w-full bg-upa-gray overflow-hidden">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <h2 class="upa-sec-header text-center">Check Our Learners Reviews</h2>
                <p class="upa-txt-normal mt-2 text-center">Read the reviews from our satisfied clients and make your
                    decision.</p>

                <div class="swiper upa-stack-swiper upa-reviews-swiper mt-8">
                    <div class="swiper-wrapper">

                        <!-- LOOP START: review card -->
                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <!-- DYNAMIC: rating - fill width = rating / 5 * 100% -->
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">5</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <!-- DYNAMIC: course_title 
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>-->
                                    <!-- DYNAMIC: review_text -->
                                    <blockquote class="upa-txt-normal">My experience with you was fantastic and easy to navigate. I'm looking forward to taking the course.</blockquote>
                                    <div class="upa-reviews-author">
                                        <!-- DYNAMIC: reviewer_name -->
                                        <p class="upa-txt-normal font-bold">Christine Ferguson</p>
                                        <!-- DYNAMIC: reviewer_role 
                                        <p class="upa-txt-sm">Social Care Worker</p>-->
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- LOOP END -->

                        <!-- LOOP START: review card -->
                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <!-- DYNAMIC: rating - fill width = rating / 5 * 100% -->
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">5</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <!-- DYNAMIC: course_title 
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>-->
                                    <!-- DYNAMIC: review_text -->
                                    <blockquote class="upa-txt-normal">Provided highly informative and helpful responses, with quick and efficient replies.</blockquote>
                                    <div class="upa-reviews-author">
                                        <!-- DYNAMIC: reviewer_name -->
                                        <p class="upa-txt-normal font-bold">Jesse Harding</p>
                                        <!-- DYNAMIC: reviewer_role 
                                        <p class="upa-txt-sm">Social Care Worker</p>-->
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- LOOP END -->

                        <!-- LOOP START: review card -->
                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <!-- DYNAMIC: rating - fill width = rating / 5 * 100% -->
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">5</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <!-- DYNAMIC: course_title 
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>-->
                                    <!-- DYNAMIC: review_text -->
                                    <blockquote class="upa-txt-normal">The course selection is broad, engaging, easy to follow, and offers a good challenge.</blockquote>
                                    <div class="upa-reviews-author">
                                        <!-- DYNAMIC: reviewer_name -->
                                        <p class="upa-txt-normal font-bold">Gary Schwartz</p>
                                        <!-- DYNAMIC: reviewer_role 
                                        <p class="upa-txt-sm">Social Care Worker</p>-->
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- LOOP END -->

                        <!-- LOOP START: review card -->
                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <!-- DYNAMIC: rating - fill width = rating / 5 * 100% -->
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">5</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <!-- DYNAMIC: course_title 
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>-->
                                    <!-- DYNAMIC: review_text -->
                                    <blockquote class="upa-txt-normal">Excellent course with user-friendly website navigation, making it easy to follow. I'm really enjoying the experience.</blockquote>
                                    <div class="upa-reviews-author">
                                        <!-- DYNAMIC: reviewer_name -->
                                        <p class="upa-txt-normal font-bold">Bailey Burrows</p>
                                        <!-- DYNAMIC: reviewer_role 
                                        <p class="upa-txt-sm">Social Care Worker</p>-->
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- LOOP END -->

                        <!-- LOOP START: review card -->
                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <!-- DYNAMIC: rating - fill width = rating / 5 * 100% -->
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">5</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <!-- DYNAMIC: course_title 
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>-->
                                    <!-- DYNAMIC: review_text -->
                                    <blockquote class="upa-txt-normal">Great course with valuable information. Easy to follow, and I appreciated the flexibility to work at my own pace.</blockquote>
                                    <div class="upa-reviews-author">
                                        <!-- DYNAMIC: reviewer_name -->
                                        <p class="upa-txt-normal font-bold">Benjamin Moreno</p>
                                        <!-- DYNAMIC: reviewer_role 
                                        <p class="upa-txt-sm">Social Care Worker</p>-->
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- LOOP END -->

                    </div>
                </div>
                <div class="upa-reviews-pagination flex justify-center gap-1.5 mt-6"></div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var el = document.querySelector('.upa-reviews-swiper');
                    var desktop = window.matchMedia('(min-width: 768px)');
                    var swiper = null;

                    // Below md: active card on top, previous/next scaled down behind it
                    var mobile = {
                        effect: 'creative',
                        slidesPerView: 1,
                        // Makes the loop keep a slide before the active one, so the left card exists
                        centeredSlides: true,
                        loopAdditionalSlides: 1,
                        grabCursor: true,
                        creativeEffect: {
                            limitProgress: 1,
                            prev: { translate: ['-28%', 0, 0], scale: 0.8 },
                            next: { translate: ['28%', 0, 0], scale: 0.8 },
                        },
                    };

                    // md and up: plain row of 2 (md), 3 (lg), 4 (xl) cards
                    var row = {
                        slidesPerView: 2,
                        spaceBetween: 20,
                        breakpoints: {
                            1024: { slidesPerView: 3, spaceBetween: 24 },
                            1280: { slidesPerView: 4, spaceBetween: 24 },
                        },
                    };

                    // Swiper can't switch effect through breakpoints, so rebuild at md
                    function build() {
                        if (swiper) swiper.destroy(true, true);
                        swiper = new Swiper(el, Object.assign({
                            // Loop needs at least slidesPerView + 1 slides (5 at xl)
                            loop: true,
                            pagination: {
                                el: '.upa-reviews-pagination',
                                clickable: true,
                                bulletClass: 'upa-reviews-dot',
                                bulletActiveClass: 'upa-reviews-dot-active',
                            },
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                                pauseOnMouseEnter: true,
                            },
                            observer: true,
                            observeParents: true,
                        }, desktop.matches ? row : mobile));
                    }

                    build();
                    desktop.addEventListener('change', build);
                });
            </script>
        </section>

        <!-- ============================================
            LIFETIME SUBSCRIPTION - 14 DAY GUARANTEE (upa-lftsub-grnt-*)
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-lftsub-grnt">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/lftsub-guarantee-badge.png'; ?>" alt="14 days money back guarantee"
                        loading="lazy">
                    <div>
                        <h2 class="upa-sec-header">Our 14 Day Money Back Guarantee</h2>
                        <p class="upa-txt-normal mt-3">Experience our Lifetime Membership Package with total
                            confidence. You'll have 14 days to explore everything included. If you decide it isn't the
                            right fit for you, simply let us know and we'll issue a full refund — with no questions
                            asked.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================
            LIFETIME SUBSCRIPTION - FAQ
            Reuses the single course FAQ (upa-snglcrs-faq-*):
            native <details name="..."> - one open at a time.
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <h2 class="upa-sec-header text-center">Frequently Asked Questions</h2>
                <div class="upa-snglcrs-faq-list max-w-3xl mx-auto mt-8">
                    <!-- LOOP START: faq -->
                    <details class="upa-snglcrs-faq-item" name="lftsub-faq" open>
                        <summary>
                            <!-- DYNAMIC: question -->
                            What is the Lifetime Membership?
                            <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                        </summary>
                        <!-- DYNAMIC: answer -->
                        <div class="upa-snglcrs-faq-answer">
                            <p>The Lifetime Membership gives you long-term access to a wide range of courses available through Upskilling Academy, allowing you to learn and develop new skills at your own pace.</p>
                        </div>
                    </details>
                    <!-- LOOP END -->
                    <details class="upa-snglcrs-faq-item" name="lftsub-faq">
                        <summary>
                            What courses are included?
                            <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="upa-snglcrs-faq-answer">
                            <p>Your membership includes access to the courses listed as part of the Lifetime Membership. The available course catalogue may be updated over time as new courses are added.</p>
                        </div>
                    </details>
                    <details class="upa-snglcrs-faq-item" name="lftsub-faq">
                        <summary>
                            How long does my membership last?
                            <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="upa-snglcrs-faq-answer">
                            <p>As the name suggests, the Lifetime Membership provides lifetime access, subject to the applicable terms and conditions.</p>
                        </div>
                    </details>
                    <details class="upa-snglcrs-faq-item" name="lftsub-faq">
                        <summary>
                            Can I study at my own pace?
                            <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="upa-snglcrs-faq-answer">
                            <p>Yes. You can access your courses online and learn at a pace that fits your schedule.</p>
                        </div>
                    </details>
                    <details class="upa-snglcrs-faq-item" name="lftsub-faq">
                        <summary>
                            Will I receive certificates?
                            <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="upa-snglcrs-faq-answer">
                            <p>Certificate availability and requirements may vary between courses. Please check the individual course information for details.</p>
                        </div>
                    </details>
                    <details class="upa-snglcrs-faq-item" name="lftsub-faq">
                        <summary>
                            Can I access my membership on mobile devices?
                            <span class="upa-snglcrs-faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="upa-snglcrs-faq-answer">
                            <p>Yes. You can access your learning account from compatible computers, tablets, and mobile devices with an internet connection.</p>
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <!-- ============================================
            LIFETIME SUBSCRIPTION - READY TO START (upa-lftsub-cta-*)
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16 text-center">
                <h2 class="upa-lftsub-cta-title"><strong>Ready to Start?</strong> Enrol in Our<br
                        class="hidden md:inline"> Premium Lifetime Membership</h2>
                <p class="upa-txt-normal mt-3 max-w-xl mx-auto">Join thousands of learners who have advanced their
                    careers with our accredited bundle courses.</p>
                <!-- DYNAMIC: add-to-cart URL for the membership -->
                <a href="#" class="upa-btn upa-btn-peach_green mt-6">Enrol Now - £99/Onetime</a>
            </div>
        </section>

        <!-- ============================================
            LIFETIME SUBSCRIPTION - QUESTION FORM (upa-lftsub-form-*)
            md+: illustration left, form right. Mobile: form only.
        ============================================ -->
        <section class="w-full bg-white -z-20">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16 relative">
                    <div class="upa-lftsub-form-graphic absolute top-0 left-0 w-auto h-full hidden md:block pointer-events-none z-0">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/lftsub-form-bg.png'; ?>" alt="" loading="lazy">
                    </div>
                <div class="upa-lftsub-form mx-auto">

                    <div class="upa-lftsub-form-body">
                        <h2 class="upa-lftsub-form-title">Have more questions? We'd love to hear from you.</h2>
                        <!-- DYNAMIC: question form - swap for the form plugin's markup/action -->
                        <form action="#" method="post" class="flex flex-col gap-3">
                            <label for="upa-lftsub-form-question" class="sr-only">Your question</label>
                            <textarea id="upa-lftsub-form-question" name="question" rows="4" required
                                class="upa-lftsub-form-field" placeholder="Your Question"></textarea>
                            <label for="upa-lftsub-form-email" class="sr-only">Email address</label>
                            <input type="email" id="upa-lftsub-form-email" name="email" autocomplete="email" required
                                class="upa-lftsub-form-field" placeholder="Email Address">
                            <button type="submit" class="upa-btn upa-btn-peach_green w-fit">Submit</button>
                            <?php if(isset($_POST['email'])): ?>
                            <p class="text-green">Thanks for your submission. We'll reach out to you in 24-48 hours</p>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer();
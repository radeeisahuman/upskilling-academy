<?php get_header(); ?>

<main>
        <!-- ============================================
            HOT DEALS - HERO (upa-htdl-hi-*)
            Background photo behind everything. md+: coupon block
            left, sale graphic right. Mobile: sale graphic on top.
        ============================================ -->
        <section class="relative w-full overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/htdl-hero-bg.jpg'; ?>" alt="" class="upa-htdl-hi-bg">
            <div class="relative max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

                    <!-- Left: offer + coupon -->
                    <div class="upa-htdl-hi-content">
                        <!-- DYNAMIC: offer price -->
                        <h1 class="upa-htdl-hi-title">
                            Get Courses For
                            <span class="upa-htdl-hi-price">£9.99</span>
                        </h1>

                        <span class="upa-htdl-hi-label">Copy the Coupon and Apply to Cart</span>

                        <!-- DYNAMIC: coupon code (value) -->
                        <div class="upa-htdl-hi-coupon" data-htdl-coupon>
                            <label for="upa-htdl-hi-code" class="sr-only">Coupon code</label>
                            <input type="text" id="upa-htdl-hi-code" class="upa-htdl-hi-code" value="SUM9" readonly>
                            <button type="button" class="upa-btn upa-btn-navy_green upa-htdl-hi-copy"
                                data-htdl-copy>Copy</button>
                        </div>
                        <!-- Screen-reader announcement for the copy result -->
                        <p class="sr-only" aria-live="polite" data-htdl-copy-status></p>

                        <a href="<?php echo home_url('our-courses'); ?>" class="upa-btn upa-btn-navy_green">Browse Courses</a>
                    </div>

                    <!-- Right: sale graphic (on top on mobile) -->
                    <div class="upa-htdl-hi-sale order-first md:order-none">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/htdl-hero-sale.png'; ?>" alt="Hot Summer Sale - save up to 90%">
                    </div>

                </div>
            </div>
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
            HOT DEALS - COURSE LIBRARY (upa-htdl-crs-*)
            Header + category chips, then course cards (B1,
            upa-popcrs-*): md+ grid, mobile stacked Swiper.
            overflow-hidden clips the stacked side cards on
            narrow phones.
        ============================================ -->
        <section class="w-full bg-white overflow-hidden">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-htdl-crs-head">
                    <div class="md:max-w-3xl">
                        <h2 class="upa-sec-header">Most Popular Safety Training Library</h2>
                        <p class="upa-txt-normal mt-2">Explore the world's most popular safety training library,
                            featuring over 300+ top-rated courses in Food Hygiene, Education, Safeguarding, Health &amp;
                            Safety, Compliance, and Professional Development. Whether you're training yourself, your
                            team, or your entire organisation, our expert-led online courses are designed to help you
                            achieve your goals.</p>
                    </div>
                    <a href="#" class="upa-btn hidden md:inline-block shrink-0">Browse Categories</a>
                </div>

                <!-- Category chips. Mobile shows the first 6 until "Show All Categories". -->
                <ul id="upa-htdl-crs-chips" class="upa-htdl-crs-chips">
                    <?php
                    $terms = get_terms(['taxonomy' => 'course-category']);
                    ?>
                    <!-- DYNAMIC: aria-current="true" on the current category -->
                    <li><a href="#" class="upa-htdl-crs-chip" aria-current="true">All</a></li>
                    <!-- LOOP START: course category -->
                     <?php foreach($terms as $term): ?>
                    <li><a href="<?php echo get_term_link($term); ?>" class="upa-htdl-crs-chip"><?php echo $term->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <div class="flex justify-center mt-4 md:hidden">
                    <button type="button" class="upa-btn upa-htdl-crs-more" aria-expanded="false"
                        aria-controls="upa-htdl-crs-chips" data-htdl-chips-toggle>
                        <span data-htdl-chips-label>Show All Categories</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M6 9l6 6 6-6" />
                        </svg>
                    </button>
                </div>

                <?php
                $courses = new WP_Query([
                    'post_type' => 'courses',
                    'post_status' => 'publish',
                    'posts_per_page' => 12
                ]);
                ?>

                <!-- md+: grid -->
                <div class="hidden md:grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-8">
                    <?php
                    while($courses->have_posts()):
                        $courses->the_post();
                    ?>
                    <!-- LOOP START: course card -->
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <!-- DYNAMIC: course_thumbnail -->
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?> Thumbnail">
                            <!-- CONDITIONAL: sale ribbon, discounted courses only -->
                            <div class="upa-popcrs-sale-clip">
                                <div class="upa-popcrs-sale-ribbon">Sale</div>
                            </div>
                        </div>
                        <div class="upa-popcrs-body">
                            <!-- DYNAMIC: course_title -->
                            <h3 class="text-upa-green font-bold upa-txt-normal"><?php echo get_the_title(); ?></h3>
                            <!-- DYNAMIC: course_excerpt -->
                            <p class="upa-txt-sm"><?php echo wp_trim_words(get_the_excerpt(), 7); ?></p>
                            <!-- DYNAMIC: course_rating -->
                            <div class="upa-popcrs-stars">
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
                            <div class="upa-popcrs-price-row">
                                <?php
                                $product_id = tutor_utils()->get_course_product_id();
                                if($product_id):
                                    $product = wc_get_product($product_id);
                                ?>
                                <div class="flex items-center gap-2">
                                    <!-- DYNAMIC: sale_price, regular_price -->
                                    <span class="upa-popcrs-price-new"><?php echo wc_price($product->get_price()); ?></span>
                                    <span class="upa-popcrs-price-old"><?php if($product->get_sale_price()) echo wc_price($product->get_regular_price()); ?></span>
                                </div>
                                <?php
                                endif;
                                ?>
                                <a href="<?php echo get_the_permalink(); ?>" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                            </div>
                        </div>
                    </div>
                    <!-- LOOP END -->
                     <?php endwhile; wp_reset_postdata(); ?>
                </div>

                <!-- Mobile: stacked Swiper, same card markup -->
                <div class="md:hidden mt-8">
                    <div class="swiper upa-stack-swiper upa-htdl-crs-swiper">
                        <div class="swiper-wrapper">
                            <?php
                            while($courses->have_posts()):
                                $courses->the_post();
                            ?>
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?> Thumbnail">
                                        <div class="upa-popcrs-sale-clip">
                                            <div class="upa-popcrs-sale-ribbon">Sale</div>
                                        </div>
                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal"><?php echo get_the_title(); ?></h3>
                                        <p class="upa-txt-sm"><?php wp_trim_words(get_the_excerpt(), 7); ?></p>
                                        <div class="upa-popcrs-stars">
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
                                        <div class="upa-popcrs-price-row">
                                            <?php
                                            $product_id = tutor_utils()->get_course_product_id();
                                            if($product_id):
                                                $product = wc_get_product($product_id);
                                            ?>
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new"><?php echo wc_price($product->get_price()); ?></span>
                                                <span class="upa-popcrs-price-old"><?php if($product->get_sale_price()) echo wc_price($product->get_regular_price()); ?></span>
                                            </div>
                                            <?php endif; ?>
                                            <a href="<?php echo get_the_permalink(); ?>" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="upa-htdl-crs-pagination flex justify-center gap-1.5 mt-4"></div>
                </div>

                <div class="flex justify-center mt-8">
                    <a href="<?php echo home_url('our-courses'); ?>" class="upa-btn">View All Courses</a>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {

                    // Category chips (mobile): reveal the rest. Hidden when there
                    // are 6 or fewer chips, since they all fit already.
                    var chips = document.getElementById('upa-htdl-crs-chips');
                    var chipsToggle = document.querySelector('[data-htdl-chips-toggle]');
                    if (chips.children.length <= 6) {
                        chipsToggle.parentElement.hidden = true;
                    } else {
                        chipsToggle.addEventListener('click', function () {
                            var open = chips.classList.toggle('is-expanded');
                            chipsToggle.setAttribute('aria-expanded', open);
                            chipsToggle.querySelector('[data-htdl-chips-label]').textContent =
                                open ? 'Show Fewer Categories' : 'Show All Categories';
                        });
                    }

                    // Course cards (mobile only - the block is md:hidden): stacked look
                    new Swiper('.upa-htdl-crs-swiper', {
                        effect: 'creative',
                        slidesPerView: 1,
                        // Makes the loop keep a slide before the active one, so the left card exists
                        centeredSlides: true,
                        loop: true,
                        loopAdditionalSlides: 1,
                        grabCursor: true,
                        creativeEffect: {
                            limitProgress: 1,
                            prev: { translate: ['-28%', 0, 0], scale: 0.8 },
                            next: { translate: ['28%', 0, 0], scale: 0.8 },
                        },
                        pagination: {
                            el: '.upa-htdl-crs-pagination',
                            clickable: true,
                            bulletClass: 'upa-popcrs-dot',
                            bulletActiveClass: 'upa-popcrs-dot-active',
                        },
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        observer: true,
                        observeParents: true,
                    });
                });
            </script>
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
            JOIN OUR MEMBERSHIP CTA
        ============================================ -->
        <section class="w-full bg-upa-green">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">

                    <!-- Text + checklist -->
                    <div class="flex flex-col gap-4 text-white max-w-xl">
                        <h2 class="text-page-header font-bold">Join Our Membership</h2>
                        <p class="text-normal">Get unlimited access to 1500+ Courses and more!</p>

                        <div class="flex flex-col gap-2 mt-2">
                            <div class="upa-hmlftcta-check">
                                <span class="upa-hmlftcta-check-icon">
                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.5 6.5L4.5 8.5L9.5 3.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                1500+ CPD Accredited Courses
                            </div>
                            <div class="upa-hmlftcta-check">
                                <span class="upa-hmlftcta-check-icon">
                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.5 6.5L4.5 8.5L9.5 3.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Free Unlimited PDF Certificates
                            </div>
                            <div class="upa-hmlftcta-check">
                                <span class="upa-hmlftcta-check-icon">
                                    <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.5 6.5L4.5 8.5L9.5 3.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                14-Day Money Back Guarantee
                            </div>
                        </div>
                    </div>

                    <!-- Offer card -->
                    <div class="flex justify-center lg:justify-end">
                        <a href="<?php echo home_url('lifetime-membership'); ?>" class="flex justify-center items-center no-underline text-inherit max-w-sm">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/lifetime-cta.png'; ?>" alt="Lifetime Membership Plan"
                                class="upa-hmlftcta-card-img h-full w-auto object-cover rounded-lg shadow-lg">
                        </a>

                        <!-- <div class="upa-hmlftcta-card">

                            <div class="upa-hmlftcta-ribbon-clip">
                                <div class="upa-hmlftcta-ribbon">Special Offer</div>
                            </div>

                            <span class="upa-hmlftcta-off-badge">90% OFF</span>

                            <h3 class="text-sec-header font-bold text-upa-navy">Lifetime Membership Plan</h3>

                            <div class="flex items-end gap-1 mt-3">
                                <span class="upa-hmlftcta-price">£99</span>
                                <span class="upa-hmlftcta-price-unit mb-1">/Lifetime</span>
                            </div>

                            <p class="text-normal text-upa-navy mt-2">
                                Regular Price: <span class="upa-hmlftcta-price-old">£2000</span>
                            </p>

                            <p class="text-normal font-bold text-upa-navy mt-1">Lifetime Access</p>

                            <a href="#" class="upa-btn upa-btn-peach_green mt-5 w-fit">Start Now</a>
                        </div> -->
                    </div>
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
                    <?php foreach($terms as $term): ?>
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
                            <p class="upa-txt-normal font-bold text-upa-navy"><?php echo $term->name; ?></p>
                            <p class="hidden md:block upa-txt-sm"><?php echo $term->description; ?></p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER: template part, see header-footer.html -->

    <script>
        // Hero coupon: Copy puts the code on the clipboard. Uses the Clipboard
        // API where allowed (https/localhost), else selects the field and
        // falls back to execCommand. If both fail the code is left selected
        // so the visitor can press Ctrl+C.
        document.addEventListener('DOMContentLoaded', function () {
            var status = document.querySelector('[data-htdl-copy-status]');

            document.querySelectorAll('[data-htdl-coupon]').forEach(function (box) {
                var input = box.querySelector('input');
                var btn = box.querySelector('[data-htdl-copy]');
                var label = btn.textContent;
                var timer;

                input.addEventListener('focus', function () { input.select(); });

                function show(ok) {
                    btn.textContent = ok ? 'Copied!' : 'Press Ctrl+C';
                    status.textContent = ok ? 'Coupon code ' + input.value + ' copied' : 'Copy failed. The code is selected, press Ctrl+C to copy it.';
                    clearTimeout(timer);
                    timer = setTimeout(function () { btn.textContent = label; }, 2000);
                }

                function fallback() {
                    input.focus();
                    input.setSelectionRange(0, input.value.length);
                    var ok = false;
                    try { ok = document.execCommand('copy'); } catch (e) { }
                    show(ok);
                }

                btn.addEventListener('click', function () {
                    if (navigator.clipboard && window.isSecureContext) {
                        navigator.clipboard.writeText(input.value).then(function () { show(true); }, fallback);
                    } else {
                        fallback();
                    }
                });
            });
        });
    </script>


<?php get_footer(); ?>
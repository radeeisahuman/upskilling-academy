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
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?> thubmnail">
                    </div>

                    <div class="upa-snglblg-hi-text">
                        <!-- DYNAMIC: post title -->
                        <h1 class="upa-snglblg-hi-title"><?php echo get_the_title(); ?></h1>
                        <!-- DYNAMIC: post excerpt -->
                        <p class="upa-txt-normal max-w-xl"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                        <!-- DYNAMIC: post date -->
                        <time class="upa-snglblg-hi-date" datetime="2026-08-22"><?php echo get_the_modified_date('d M, Y')?></time>
                    </div>

                    <!-- Relevant courses: small slider -->
                    <div class="upa-snglblg-hi-rel">
                        <h2 class="upa-snglblg-hi-rel-title">Recent Courses</h2>
                        <div class="swiper upa-snglblg-hi-rel-swiper">
                            <div class="swiper-wrapper">
                                <?php 
                                $courses = new WP_Query([
                                    'post_type' => 'courses',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 5
                                ]);
                                while($courses->have_posts()):
                                    $courses->the_post();
                                ?>
                                <!-- LOOP START: relevant course -->
                                <div class="swiper-slide h-auto">
                                    <!-- DYNAMIC: course URL -->
                                    <a href="<?php echo get_the_permalink(); ?>" class="upa-snglblg-hi-rel-card">
                                        <!-- DYNAMIC: course thumbnail -->
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" loading="lazy">
                                        <!-- DYNAMIC: course title -->
                                        <span class="upa-snglblg-hi-rel-name"><?php echo get_the_title(); ?></span>
                                    </a>
                                </div>
                                <!-- LOOP END -->
                                <?php endwhile; wp_reset_postdata(); ?>
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
                        <?php the_content(); ?>
                    </article>

                    <!-- Sidebar: lifetime membership (same image as the hot deals page) -->
                    <aside class="upa-snglblg-aside" aria-label="Lifetime membership offer">
                        <!-- DYNAMIC: lifetime membership URL -->
                        <a href="<?php echo home_url('lifetime-membership'); ?>" class="upa-snglblg-aside-promo">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/htdl-plan-lifetime.png'; ?>"
                                alt="Lifetime Membership Plan - £99 for lifetime access to all courses and unlimited digital certificates, 90% off the regular £2000. Start now"
                                loading="lazy">
                        </a>
                    </aside>

                    <!-- Featured course (B3 promo) 
                    <div class="upa-snglblg-course">
                        <div class="upa-snglblg-course-image">
                             DYNAMIC: course thumbnail 
                            <img src="assets/imgs/course-food-hygiene.jpg" alt="" loading="lazy">
                        </div>
                        <div class="upa-snglblg-course-body">
                             DYNAMIC: course title 
                            <h2 class="upa-snglblg-course-title">Food Hygiene Training Level 3</h2>
                             DYNAMIC: course excerpt 
                            <p class="upa-snglblg-course-text">Master the essentials of food hygiene and gain practical
                                knowledge to help prevent contamination, protect customers, and maintain safer food
                                standards.</p>
                             DYNAMIC: course URL 
                            <a href="#" class="upa-btn upa-btn-peach_green mt-1">Enroll Now</a>
                        </div>
                    </div>
                                -->

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
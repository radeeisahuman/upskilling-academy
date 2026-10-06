<?php get_header(); ?>

<main>
        <!-- ============================================
            ALL COURSES - PAGE HEADER (upa-alcrs-hi-*)
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16 text-center">
                <h1 class="upa-page-header">Searching for <?php echo sanitize_text_field($_GET['s']); ?></h1>
                <!--<p class="upa-txt-normal mt-2">1500+ UK-Focused Courses. Skills for Today's Job Market.</p>-->
            </div>
        </section>

        <!-- ============================================
            ALL COURSES - LISTING
            Grid areas (all-courses-card.css):
            below lg - search / count / categories + sort / grid / pages
            lg+      - categories sidebar left, everything else right
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-alcrs-card-layout">

                    <!-- Search -->
                    <!-- DYNAMIC: course search form - action/name for the course archive search -->
                    <form role="search" action="<?php echo home_url(); ?>" method="GET" class="upa-alcrs-card-search">
                        <label for="upa-alcrs-card-search-input" class="sr-only">Search courses</label>
                        <input type="search" id="upa-alcrs-card-search-input" name="s"
                            class="upa-alcrs-card-search-input" placeholder="e.g. food hygiene">
                        <button type="submit" class="upa-alcrs-card-search-btn" aria-label="Search">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" aria-hidden="true">
                                <circle cx="11" cy="11" r="7" />
                                <path d="M20 20l-3.5-3.5" />
                            </svg>
                        </button>
                    </form>

                    <?php
                    $paged = intval(get_query_var('paged')) ?? 1;
                    $args= [
                        'post_type' => 'courses',
                        'posts_per_page' => 15,
                        'paged' => $paged
                    ];

                    if(isset($_GET['s'])):
                        $args['s'] = sanitize_text_field($_GET['s']);
                    endif;
                    $courses = new WP_Query($args);

                    $first_course = (15 * intval($paged)) + 1;
                    $page_count = $courses->post_count;
                    $last_course = (15 * intval($paged)) + $page_count;
                    $total = $courses->found_posts;
                    ?>

                    <!-- DYNAMIC: result count -->
                    <p class="upa-alcrs-card-count"><?php echo "Showing " . $first_course . "-" . $last_course . " of " . $total . " Courses"; ?></p>

                    <!-- ============================================
                        CATEGORY FILTER (upa-alcrs-cats-*)
                        Below lg: dropdown button + overlay list.
                        lg+: sidebar with the title bar.
                    ============================================ -->
                    <div class="upa-alcrs-cats" data-alcrs-dropdown>
                        <button type="button" class="upa-alcrs-cats-toggle" aria-expanded="false"
                            aria-controls="upa-alcrs-cats-panel" data-alcrs-dropdown-toggle>
                            Course Categories
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>
                        <h2 class="upa-alcrs-cats-title">Course Categories</h2>
                        <?php $terms = get_terms(['taxonomy' => 'course-category', 'number' => 15]); ?>

                        <!-- DYNAMIC: category filter form - submit/URL handling for the course archive -->
                        <form id="upa-alcrs-cats-panel" action="#" method="get" class="upa-alcrs-cats-panel">
                            <ul class="upa-alcrs-cats-list">
                                <?php foreach($terms as $term): ?>
                                <!-- LOOP START: course category -->
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <!-- DYNAMIC: category_slug -->
                                        <a href="<?php echo get_term_link($term); ?>"><input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <!-- DYNAMIC: category_name, course_count -->
                                        <span><?php echo $term->name; ?><span
                                                class="upa-alcrs-cats-count">(<?php echo $term->count; ?>)</span></span></a>
                                    </label>
                                </li>
                                <!-- LOOP END -->
                                 <?php endforeach; ?>
                            </ul>
                        </form>
                    </div>

                    <!-- Sort dropdown -->
                    <div class="upa-alcrs-card-sort" data-alcrs-dropdown>
                        <button type="button" class="upa-alcrs-card-sort-toggle" aria-expanded="false"
                            aria-controls="upa-alcrs-card-sort-panel" data-alcrs-dropdown-toggle>
                            <span class="upa-alcrs-card-sort-icon" aria-hidden="true">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round">
                                    <path d="M4 7h16M4 17h16" />
                                    <circle cx="9" cy="7" r="2.2" fill="white" />
                                    <circle cx="15" cy="17" r="2.2" fill="white" />
                                </svg>
                            </span>
                            <span class="upa-alcrs-card-sort-label">Select Order</span>
                            <svg class="upa-alcrs-card-sort-chevron" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>

                        <!-- DYNAMIC: order links - href = archive URL with the orderby arg;
                             aria-current="true" on the active one -->
                        <ul id="upa-alcrs-card-sort-panel" class="upa-alcrs-card-sort-panel">
                            <li><a href="#" class="upa-alcrs-card-sort-option">Newly Published</a></li>
                            <li><a href="#" class="upa-alcrs-card-sort-option" aria-current="true">Alphabetical</a>
                            </li>
                            <li><a href="#" class="upa-alcrs-card-sort-option">Most Members</a></li>
                            <li><a href="#" class="upa-alcrs-card-sort-option">Top Rated</a></li>
                        </ul>
                    </div>

                    <!-- Course card grid -->
                    <div class="upa-alcrs-card-grid">
                        <?php
                        while($courses->have_posts()):
                            $courses->the_post();
                            ?>
                        <!-- LOOP START: course card -->
                        <div class="upa-alcrs-card">
                            <div class="upa-popcrs-image-wrap flex items-center justify-center"
                                style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">

                                <div class="w-full" style="background: rgba(0,0,0,0.6);">
                                    <h2 class="text-center text-white text-[28px]">
                                        <?php echo get_the_title(); ?>
                                    </h2>
                                </div>

                                <div class="upa-alcrs-card-sale-clip">
                                    <div class="upa-alcrs-card-sale-ribbon">Sale</div>
                                </div>

                            </div>
                            <div class="upa-alcrs-card-body">
                                <!-- DYNAMIC: course_title -->
                                <a href="<?php echo get_the_permalink(); ?>"><h3 class="text-upa-green font-bold upa-txt-normal"><?php echo get_the_title(); ?></h3></a>
                                <!-- DYNAMIC: course_excerpt -->
                                <p class="upa-txt-sm"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
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
                                <?php
                                $product_id = tutor_utils()->get_course_product_id();
                                ?>
                                <div class="upa-alcrs-card-price-row">
                                    <div class="flex items-center gap-2">
                                        <?php if($product_id): $product = wc_get_product($product_id); ?>
                                        <!-- DYNAMIC: sale_price, regular_price -->
                                        <span class="upa-alcrs-card-price-new"><?php echo wc_price($product->get_price()); ?></span>
                                        <span class="upa-alcrs-card-price-old"><?php if($product->get_sale_price()) echo $product->get_regular_price(); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php echo get_the_permalink(); ?>" class="upa-btn text-sm! py-2! px-4!">View Course</a>
                                </div>
                            </div>
                        </div>
                        <!-- LOOP END -->
                         <?php endwhile; ?>
                    </div>

                    <!-- DYNAMIC: pagination - current page gets aria-current="page" -->
                    <nav class="upa-alcrs-card-pages" aria-label="Course pages">
                        <?php echo paginate_links([
                            'previous' => 'Previous',
                            'next' => 'Next',
                            'mid_size' => 1,
                            'end_size' => 1,
                            'total' => $courses->max_num_pages,
                        ]);  wp_reset_postdata(); ?>
                        <!--<a href="#" class="upa-alcrs-card-page" aria-current="page">1</a>
                        <a href="#" class="upa-alcrs-card-page">2</a>
                        <a href="#" class="upa-alcrs-card-page">3</a>
                        <a href="#" class="upa-alcrs-card-page">4</a>
                        <a href="#" class="upa-alcrs-card-page">5</a>
                        <a href="#" class="upa-alcrs-card-page">6</a>
                        <a href="#" class="upa-alcrs-card-page">7</a>
                        <span class="upa-alcrs-card-page-dots" aria-hidden="true">&hellip;</span>
                        <a href="#" class="upa-alcrs-card-page">100</a>
                        <a href="#" class="upa-alcrs-card-page upa-alcrs-card-page-next" aria-label="Next page">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <path d="M9 6l6 6-6 6" />
                            </svg>
                        </a>-->
                    </nav>

                </div>
            </div>
            <script>
                // Category (below lg) and sort dropdowns: one open at a time,
                // closed by an outside click or Escape.
                document.addEventListener('DOMContentLoaded', function () {
                    var dropdowns = document.querySelectorAll('[data-alcrs-dropdown]');

                    function close(dd) {
                        dd.classList.remove('is-open');
                        dd.querySelector('[data-alcrs-dropdown-toggle]').setAttribute('aria-expanded', 'false');
                    }

                    dropdowns.forEach(function (dd) {
                        var toggle = dd.querySelector('[data-alcrs-dropdown-toggle]');
                        toggle.addEventListener('click', function () {
                            var opening = !dd.classList.contains('is-open');
                            dropdowns.forEach(close);
                            if (opening) {
                                dd.classList.add('is-open');
                                toggle.setAttribute('aria-expanded', 'true');
                            }
                        });
                    });

                    document.addEventListener('click', function (e) {
                        dropdowns.forEach(function (dd) {
                            if (!dd.contains(e.target)) close(dd);
                        });
                    });

                    document.addEventListener('keydown', function (e) {
                        if (e.key !== 'Escape') return;
                        dropdowns.forEach(function (dd) {
                            if (!dd.classList.contains('is-open')) return;
                            close(dd);
                            // Return focus to the button if it was inside the open list
                            if (dd.contains(document.activeElement)) {
                                dd.querySelector('[data-alcrs-dropdown-toggle]').focus();
                            }
                        });
                    });
                });
            </script>
        </section>
    </main>

<?php get_footer(); ?>
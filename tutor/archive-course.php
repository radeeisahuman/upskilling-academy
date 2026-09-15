<?php get_header(); ?>

<main>
        <!-- ============================================
            ALL COURSES - PAGE HEADER (upa-alcrs-hi-*)
        ============================================ -->
        <section class="w-full bg-upa-green-2">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16 text-center">
                <h1 class="upa-page-header">Learn Skills That Matter</h1>
                <p class="upa-txt-normal mt-2">1500+ UK-Focused Courses. Skills for Today's Job Market.</p>
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
                    <form role="search" action="#" method="get" class="upa-alcrs-card-search">
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

                    <!-- DYNAMIC: result count -->
                    <p class="upa-alcrs-card-count">Showing 1-15 of 1500 Courses</p>

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

                        <!-- DYNAMIC: category filter form - submit/URL handling for the course archive -->
                        <form id="upa-alcrs-cats-panel" action="#" method="get" class="upa-alcrs-cats-panel">
                            <ul class="upa-alcrs-cats-list">
                                <!-- LOOP START: course category -->
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <!-- DYNAMIC: category_slug -->
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <!-- DYNAMIC: category_name, course_count -->
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <!-- LOOP END -->
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="upa-alcrs-cats-item">
                                        <input type="checkbox" name="course_category[]" value="admin-secretarial-pa"
                                            class="upa-alcrs-cats-check">
                                        <span>Admin, Secretarial &amp; PA <span
                                                class="upa-alcrs-cats-count">(28)</span></span>
                                    </label>
                                </li>
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
                        <!-- LOOP START: course card -->
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <!-- DYNAMIC: course_thumbnail -->
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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

                        <!-- Cards 2-15: placeholder repeats of the loop above -->
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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
                        <div class="upa-alcrs-card">
                            <div class="upa-alcrs-card-image-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
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

                    <!-- DYNAMIC: pagination - current page gets aria-current="page" -->
                    <nav class="upa-alcrs-card-pages" aria-label="Course pages">
                        <a href="#" class="upa-alcrs-card-page" aria-current="page">1</a>
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
                        </a>
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
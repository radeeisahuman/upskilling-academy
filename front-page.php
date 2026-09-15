<?php get_header(); ?>

    <main class="">
        <!-- ============================================
            HOME HERO
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-x-14 items-center">

                    <!-- Eyebrow -->
                    <p class="upa-hmhi-eyebrow order-1 lg:col-start-1 lg:row-start-1">
                        Join Millions of learners to transform lives with
                    </p>

                    <!-- Heading -->
                    <h1 class="upa-page-header order-2 lg:col-start-1 lg:row-start-2 mt-2">
                        UK's One Of the Top Safety & Compliance Training Provider
                    </h1>

                    <!-- Image (appears between heading and paragraph on mobile;
           spans the full right column on desktop) -->
                    <div
                        class="upa-hmhi-image-frame order-3 lg:col-start-2 lg:row-start-1 lg:row-span-4 w-full mt-6 lg:mt-0">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/hero-training-team.jpg'; ?>"
                            alt="Safety training team wearing hard hats and hi-vis vests"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Paragraph -->
                    <p class="upa-txt-normal order-4 lg:col-start-1 lg:row-start-3 mt-6 lg:mt-4">
                        Get certified with CPD-accredited training, Help businesses and individuals grow, stay
                        compliant, and develop skills with easy-to-use online courses in health and safety, leadership,
                        regulations, and more
                    </p>

                    <!-- Search + quick filter chips -->
                    <div class="order-5 lg:col-start-1 lg:row-start-4 w-full mt-6 flex flex-col gap-3">
                        <form class="upa-hmhi-search">
                            <input type="text" placeholder="e.g. food hygiene" class="upa-hmhi-search-input">
                            <button type="submit" class="upa-hmhi-search-btn" aria-label="Search">
                                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="1.5" />
                                    <path d="M17 17L13.5 13.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                        </form>

                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="upa-hmhi-chip">
                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="1.5" />
                                    <path d="M17 17L13.5 13.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                                All Courses
                            </a>
                            <a href="#" class="upa-hmhi-chip">
                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="1.5" />
                                    <path d="M17 17L13.5 13.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                                Best Selling Courses
                            </a>
                            <a href="#" class="upa-hmhi-chip">
                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="1.5" />
                                    <path d="M17 17L13.5 13.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                                CPD Accredited Courses
                            </a>
                        </div>
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
            COURSE CATEGORIES
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <h2 class="upa-sec-header">Explore Our Popular Course Categories</h2>
                <p class="upa-txt-normal mt-2">Choose your desired course from our extensive course library to gain
                    personal and professional skills</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 mt-8">
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="upa-crcat-card">
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
                            <p class="upa-txt-normal font-bold text-upa-navy">Food Hygiene</p>
                            <p class="hidden md:block upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                training</p>
                        </div>
                        <span class="upa-crcat-arrow">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ============================================
            OUR POPULAR COURSES
            overflow-hidden clips the stacked side cards on narrow phones.
        ============================================ -->
        <section class="w-full bg-white overflow-hidden">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <h2 class="upa-sec-header">Our Popular Courses</h2>

                <!-- ============================================
                    POPULAR COURSES - DESKTOP
                    Plain CSS grid, 4 cols x 2 rows.
                ============================================ -->
                <div class="hidden md:grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-8">
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                        </div>
                        <div class="upa-popcrs-body">
                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                            <div class="upa-popcrs-stars">
                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg>
                            </div>
                            <div class="upa-popcrs-price-row">
                                <div class="flex items-center gap-2">
                                    <span class="upa-popcrs-price-new">£29</span>
                                    <span class="upa-popcrs-price-old">£115</span>
                                </div>
                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
                            <div class="upa-popcrs-sale-clip">
                                <div class="upa-popcrs-sale-ribbon">Sale</div>
                            </div>
                        </div>
                        <div class="upa-popcrs-body">
                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                            <div class="upa-popcrs-stars">
                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg>
                            </div>
                            <div class="upa-popcrs-price-row">
                                <div class="flex items-center gap-2">
                                    <span class="upa-popcrs-price-new">£29</span>
                                    <span class="upa-popcrs-price-old">£115</span>
                                </div>
                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                        </div>
                        <div class="upa-popcrs-body">
                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                            <div class="upa-popcrs-stars">
                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg>
                            </div>
                            <div class="upa-popcrs-price-row">
                                <div class="flex items-center gap-2">
                                    <span class="upa-popcrs-price-new">£29</span>
                                    <span class="upa-popcrs-price-old">£115</span>
                                </div>
                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                        </div>
                        <div class="upa-popcrs-body">
                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                            <div class="upa-popcrs-stars">
                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg>
                            </div>
                            <div class="upa-popcrs-price-row">
                                <div class="flex items-center gap-2">
                                    <span class="upa-popcrs-price-new">£29</span>
                                    <span class="upa-popcrs-price-old">£115</span>
                                </div>
                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                        </div>
                        <div class="upa-popcrs-body">
                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                            <div class="upa-popcrs-stars">
                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg>
                            </div>
                            <div class="upa-popcrs-price-row">
                                <div class="flex items-center gap-2">
                                    <span class="upa-popcrs-price-new">£29</span>
                                    <span class="upa-popcrs-price-old">£115</span>
                                </div>
                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                        </div>
                        <div class="upa-popcrs-body">
                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                            <div class="upa-popcrs-stars">
                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg>
                            </div>
                            <div class="upa-popcrs-price-row">
                                <div class="flex items-center gap-2">
                                    <span class="upa-popcrs-price-new">£29</span>
                                    <span class="upa-popcrs-price-old">£115</span>
                                </div>
                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
                            <div class="upa-popcrs-sale-clip">
                                <div class="upa-popcrs-sale-ribbon">Sale</div>
                            </div>

                        </div>
                        <div class="upa-popcrs-body">
                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                            <div class="upa-popcrs-stars">
                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg>
                            </div>
                            <div class="upa-popcrs-price-row">
                                <div class="flex items-center gap-2">
                                    <span class="upa-popcrs-price-new">£29</span>
                                    <span class="upa-popcrs-price-old">£115</span>
                                </div>
                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="upa-popcrs-card">
                        <div class="upa-popcrs-image-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                        </div>
                        <div class="upa-popcrs-body">
                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition training</p>
                            <div class="upa-popcrs-stars">
                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                </svg>
                            </div>
                            <div class="upa-popcrs-price-row">
                                <div class="flex items-center gap-2">
                                    <span class="upa-popcrs-price-new">£29</span>
                                    <span class="upa-popcrs-price-old">£115</span>
                                </div>
                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================
                    POPULAR COURSES - MOBILE
                    Stacked Swiper: active card on top, previous/next
                    scaled down behind it and peeking out each side.
                ============================================ -->
                <div class="md:hidden mt-8">
                    <div class="swiper upa-stack-swiper upa-popcrs-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                            training</p>
                                        <div class="upa-popcrs-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg>
                                        </div>
                                        <div class="upa-popcrs-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new">£29</span>
                                                <span class="upa-popcrs-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
                                        <div class="upa-popcrs-sale-clip">
                                            <div class="upa-popcrs-sale-ribbon">Sale</div>
                                        </div>

                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                            training</p>
                                        <div class="upa-popcrs-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg>
                                        </div>
                                        <div class="upa-popcrs-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new">£29</span>
                                                <span class="upa-popcrs-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                            training</p>
                                        <div class="upa-popcrs-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg>
                                        </div>
                                        <div class="upa-popcrs-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new">£29</span>
                                                <span class="upa-popcrs-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                            training</p>
                                        <div class="upa-popcrs-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg>
                                        </div>
                                        <div class="upa-popcrs-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new">£29</span>
                                                <span class="upa-popcrs-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                            training</p>
                                        <div class="upa-popcrs-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg>
                                        </div>
                                        <div class="upa-popcrs-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new">£29</span>
                                                <span class="upa-popcrs-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                            training</p>
                                        <div class="upa-popcrs-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg>
                                        </div>
                                        <div class="upa-popcrs-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new">£29</span>
                                                <span class="upa-popcrs-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">
                                        <div class="upa-popcrs-sale-clip">
                                            <div class="upa-popcrs-sale-ribbon">Sale</div>
                                        </div>

                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                            training</p>
                                        <div class="upa-popcrs-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg>
                                        </div>
                                        <div class="upa-popcrs-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new">£29</span>
                                                <span class="upa-popcrs-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upa-popcrs-card">
                                    <div class="upa-popcrs-image-wrap">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>" alt="Food Hygiene course">

                                    </div>
                                    <div class="upa-popcrs-body">
                                        <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                        <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                            training</p>
                                        <div class="upa-popcrs-stars">
                                            <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg><svg class="w-3.5 h-3.5 fill-gray-300" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                            </svg>
                                        </div>
                                        <div class="upa-popcrs-price-row">
                                            <div class="flex items-center gap-2">
                                                <span class="upa-popcrs-price-new">£29</span>
                                                <span class="upa-popcrs-price-old">£115</span>
                                            </div>
                                            <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upa-popcrs-pagination flex justify-center gap-1.5 mt-4"></div>
                </div>

                <div class="flex justify-center mt-8">
                    <a href="#" class="upa-btn-outline-green upa-btn">Explore All Courses</a>
                </div>
            </div>
            <script>
                // Only Swiper (mobile), the desktop grid is plain CSS - no JS needed for it.
                document.addEventListener('DOMContentLoaded', function () {
                    new Swiper('.upa-popcrs-swiper', {
                        loop: true,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        observer: true,
                        observeParents: true,
                        // Stacked: active card on top, previous/next scaled down behind it
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
                        pagination: {
                            el: '.upa-popcrs-pagination',
                            clickable: true,
                            bulletClass: 'upa-popcrs-dot',
                            bulletActiveClass: 'upa-popcrs-dot-active',
                        },
                    });
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
                        <a href="#" class="flex justify-center items-center no-underline text-inherit max-w-sm">
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
            WHY CHOOSE US
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-x-14 items-center">

                    <!-- Photo (with soft CSS circle behind + underline) -->
                    <div class="order-1 lg:col-start-2 lg:row-start-1 lg:row-span-2 w-full max-w-sm mx-auto ">
                        <div class="relative">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wcu-photo.png'; ?>" alt="Confident professional giving a thumbs up"
                                class="w-full h-auto relative z-10">
                        </div>
                    </div>

                    <!-- Heading -->
                    <h2 class="upa-sec-header order-2 lg:col-start-1 lg:row-start-1 mt-8 lg:mt-0">
                        Why Choose Us
                    </h2>

                    <!-- Cards -->
                    <div class="order-3 lg:col-start-1 lg:row-start-2 w-full flex flex-col gap-4 mt-6">

                        <div class="upa-wcu-card">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wcu-accreditation.svg'; ?>" alt="" class="upa-wcu-icon">
                            <div>
                                <p class="upa-txt-normal font-bold text-upa-navy">Industry Recognised Accreditation</p>
                                <p class="upa-txt-sm mt-1">Our courses meet the highest professional standards, ensuring
                                    credibility and career advancement.</p>
                            </div>
                        </div>

                        <div class="upa-wcu-card">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wcu-flexible.svg'; ?>" alt="" class="upa-wcu-icon">
                            <div>
                                <p class="upa-txt-normal font-bold text-upa-navy">Flexible & Accessible Learning</p>
                                <p class="upa-txt-sm mt-1">100% online courses designed to fit your schedule, allowing
                                    you to learn anytime, anywhere.</p>
                            </div>
                        </div>

                        <div class="upa-wcu-card">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wcu-expert.svg'; ?>" alt="" class="upa-wcu-icon">
                            <div>
                                <p class="upa-txt-normal font-bold text-upa-navy">Expert-Led & Up-to-Date Content</p>
                                <p class="upa-txt-sm mt-1">Developed by professionals to align with industry
                                    requirements and compliance standards.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================
            EXPLORE OUR CAREER ORIENTED BUNDLE COURSES
            overflow-hidden clips the stacked side cards on narrow phones.
        ============================================ -->
        <section class="w-full bg-upa-gray overflow-hidden">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="grid grid-cols-1 md:grid-cols-[1fr_2fr] gap-10 md:gap-8 items-center">

                    <!-- Left: heading + copy + CTA -->
                    <div class="flex flex-col gap-4 justify-center md:justify-start items-center md:items-start text-center md:text-left">
                        <h2 class="upa-sec-header">Explore Our Career Oriented Bundle Courses</h2>
                        <p class="upa-txt-normal">High Skills Training provides a range of bundle courses covering
                            everything from basic to advanced levels. If you're looking for a comprehensive learning
                            solution to acquire multiple skills on a single topic, consider our bundle courses. They are
                            cost-effective, well-organised, and save you time in your course search.</p>
                        <a href="#" class="upa-btn w-fit mt-2">View All Bundles</a>
                    </div>

                    <!-- Right: Swiper slider (overflow visible below md so the stacked side cards show) -->
                    <div class="min-w-0 md:overflow-hidden">
                        <div class="swiper upa-stack-swiper upa-hmbndlcta-swiper">
                            <div class="swiper-wrapper">

                                <!-- Slide 1 - sale + countdown -->
                                <div class="swiper-slide h-auto">
                                    <div class="upa-hmbndlcta-card">
                                        <div class="upa-hmbndlcta-image-wrap">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>"
                                                alt="Food Hygiene bundle course">
                                            <span class="upa-hmbndlcta-count-badge">8 Courses</span>
                                            <div class="upa-hmbndlcta-sale-clip">
                                                <div class="upa-hmbndlcta-sale-ribbon">Sale</div>
                                            </div>
                                        </div>
                                        <div class="upa-hmbndlcta-body">
                                            <div class="upa-hmbndlcta-timer" data-bundle-timer>
                                                <div class="upa-hmbndlcta-timer-unit"><span>04</span><sub>H</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>36</span><sub>M</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>45</span><sub>S</sub>
                                                </div>
                                            </div>
                                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                                training</p>
                                            <div class="upa-hmbndlcta-stars">
                                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg>
                                            </div>
                                            <div class="upa-hmbndlcta-price-row">
                                                <div class="flex items-center gap-2">
                                                    <span class="upa-hmbndlcta-price-new">£29</span>
                                                    <span class="upa-hmbndlcta-price-old">£115</span>
                                                </div>
                                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Slide 2 - sale + countdown -->
                                <div class="swiper-slide h-auto">
                                    <div class="upa-hmbndlcta-card">
                                        <div class="upa-hmbndlcta-image-wrap">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>"
                                                alt="Food Hygiene bundle course">
                                            <span class="upa-hmbndlcta-count-badge">8 Courses</span>
                                            <div class="upa-hmbndlcta-sale-clip">
                                                <div class="upa-hmbndlcta-sale-ribbon">Sale</div>
                                            </div>
                                        </div>
                                        <div class="upa-hmbndlcta-body">
                                            <div class="upa-hmbndlcta-timer" data-bundle-timer>
                                                <div class="upa-hmbndlcta-timer-unit"><span>04</span><sub>H</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>36</span><sub>M</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>45</span><sub>S</sub>
                                                </div>
                                            </div>
                                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                                training</p>
                                            <div class="upa-hmbndlcta-stars">
                                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg>
                                            </div>
                                            <div class="upa-hmbndlcta-price-row">
                                                <div class="flex items-center gap-2">
                                                    <span class="upa-hmbndlcta-price-new">£29</span>
                                                    <span class="upa-hmbndlcta-price-old">£115</span>
                                                </div>
                                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Slide 3 - sale + countdown -->
                                <div class="swiper-slide h-auto">
                                    <div class="upa-hmbndlcta-card">
                                        <div class="upa-hmbndlcta-image-wrap">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>"
                                                alt="Food Hygiene bundle course">
                                            <span class="upa-hmbndlcta-count-badge">8 Courses</span>
                                            <div class="upa-hmbndlcta-sale-clip">
                                                <div class="upa-hmbndlcta-sale-ribbon">Sale</div>
                                            </div>
                                        </div>
                                        <div class="upa-hmbndlcta-body">
                                            <div class="upa-hmbndlcta-timer" data-bundle-timer>
                                                <div class="upa-hmbndlcta-timer-unit"><span>04</span><sub>H</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>36</span><sub>M</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>45</span><sub>S</sub>
                                                </div>
                                            </div>
                                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                                training</p>
                                            <div class="upa-hmbndlcta-stars">
                                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg>
                                            </div>
                                            <div class="upa-hmbndlcta-price-row">
                                                <div class="flex items-center gap-2">
                                                    <span class="upa-hmbndlcta-price-new">£29</span>
                                                    <span class="upa-hmbndlcta-price-old">£115</span>
                                                </div>
                                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Slide 4 - sale + countdown -->
                                <div class="swiper-slide h-auto">
                                    <div class="upa-hmbndlcta-card">
                                        <div class="upa-hmbndlcta-image-wrap">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>"
                                                alt="Food Hygiene bundle course">
                                            <span class="upa-hmbndlcta-count-badge">8 Courses</span>
                                            <div class="upa-hmbndlcta-sale-clip">
                                                <div class="upa-hmbndlcta-sale-ribbon">Sale</div>
                                            </div>
                                        </div>
                                        <div class="upa-hmbndlcta-body">
                                            <div class="upa-hmbndlcta-timer" data-bundle-timer>
                                                <div class="upa-hmbndlcta-timer-unit"><span>04</span><sub>H</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>36</span><sub>M</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>45</span><sub>S</sub>
                                                </div>
                                            </div>
                                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                                training</p>
                                            <div class="upa-hmbndlcta-stars">
                                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg>
                                            </div>
                                            <div class="upa-hmbndlcta-price-row">
                                                <div class="flex items-center gap-2">
                                                    <span class="upa-hmbndlcta-price-new">£29</span>
                                                    <span class="upa-hmbndlcta-price-old">£115</span>
                                                </div>
                                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Slide 5 - sale + countdown -->
                                <div class="swiper-slide h-auto">
                                    <div class="upa-hmbndlcta-card">
                                        <div class="upa-hmbndlcta-image-wrap">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/course-food-hygiene.jpg'; ?>"
                                                alt="Food Hygiene bundle course">
                                            <span class="upa-hmbndlcta-count-badge">8 Courses</span>
                                            <div class="upa-hmbndlcta-sale-clip">
                                                <div class="upa-hmbndlcta-sale-ribbon">Sale</div>
                                            </div>
                                        </div>
                                        <div class="upa-hmbndlcta-body">
                                            <div class="upa-hmbndlcta-timer" data-bundle-timer>
                                                <div class="upa-hmbndlcta-timer-unit"><span>04</span><sub>H</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>36</span><sub>M</sub>
                                                </div>
                                                <span class="upa-hmbndlcta-timer-sep">:</span>
                                                <div class="upa-hmbndlcta-timer-unit"><span>45</span><sub>S</sub>
                                                </div>
                                            </div>
                                            <h3 class="text-upa-green font-bold upa-txt-normal">Food Hygiene</h3>
                                            <p class="upa-txt-sm">Essential food handling, Hygiene, safety and nutrition
                                                training</p>
                                            <div class="upa-hmbndlcta-stars">
                                                <svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg><svg class="w-3.5 h-3.5 fill-upa-peach" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 1.5l2.6 5.6 6.1.6-4.5 4.1 1.3 6-5.5-3.1-5.5 3.1 1.3-6L1.3 7.7l6.1-.6z" />
                                                </svg>
                                            </div>
                                            <div class="upa-hmbndlcta-price-row">
                                                <div class="flex items-center gap-2">
                                                    <span class="upa-hmbndlcta-price-new">£29</span>
                                                    <span class="upa-hmbndlcta-price-old">£115</span>
                                                </div>
                                                <a href="#" class="upa-btn !text-sm !py-2 !px-4">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="upa-hmbndlcta-pagination flex justify-center gap-1.5 mt-4"></div>
                    </div>

                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var el = document.querySelector('.upa-hmbndlcta-swiper');
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

                    // md and up: plain row of 1 (md), 2 (lg), 3 (xl) cards
                    var row = {
                        slidesPerView: 1,
                        spaceBetween: 16,
                        breakpoints: {
                            1024: { slidesPerView: 2, spaceBetween: 20 },
                            1280: { slidesPerView: 3, spaceBetween: 20 },
                        },
                    };

                    // Swiper can't switch effect through breakpoints, so rebuild at md
                    function build() {
                        if (swiper) swiper.destroy(true, true);
                        swiper = new Swiper(el, Object.assign({
                            loop: true,
                            pagination: {
                                el: '.upa-hmbndlcta-pagination',
                                clickable: true,
                                bulletClass: 'upa-hmbndlcta-dot',
                                bulletActiveClass: 'upa-hmbndlcta-dot-active',
                            },
                            autoplay: {
                                delay: 4000,
                                disableOnInteraction: false,
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
            TRAIN YOUR TEAM WITH US
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12 items-center">

                    <!-- Left: image -->
                    <div class="upa-trtmcta-image-wrap">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/train-your-team.png'; ?>" alt="Team training session">
                    </div>

                    <!-- Right: heading + copy + CTA -->
                    <div class="flex flex-col gap-4">
                        <h2 class="upa-sec-header">Train Your Team With Us</h2>
                        <p class="upa-txt-normal">Empower your staff with the knowledge and skills they need to excel.
                            Our CPD-accredited online courses make team training simple, flexible, and cost-effective.
                            With instant access, easy-to-use dashboards, and certificates for every learner, you can
                            ensure your team stays compliant, confident, and ready to perform at their best.</p>
                        <a href="#" class="upa-btn w-fit mt-2">Get a Quote</a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================
            CHECK OUR LEARNERS REVIEWS
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
                                    <span class="upa-reviews-score" aria-hidden="true">4.8</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <!-- DYNAMIC: course_title -->
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>
                                    <!-- DYNAMIC: review_text -->
                                    <blockquote class="upa-txt-normal">Brilliant course, it was really helpful and
                                        engaging content</blockquote>
                                    <div class="upa-reviews-author">
                                        <!-- DYNAMIC: reviewer_name -->
                                        <p class="upa-txt-normal font-bold">Emma Chapman</p>
                                        <!-- DYNAMIC: reviewer_role -->
                                        <p class="upa-txt-sm">Social Care Worker</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- LOOP END -->

                        <!-- Slides 2-6: placeholder repeats of the loop above -->
                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">4.8</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>
                                    <blockquote class="upa-txt-normal">Brilliant course, it was really helpful and
                                        engaging content</blockquote>
                                    <div class="upa-reviews-author">
                                        <p class="upa-txt-normal font-bold">Emma Chapman</p>
                                        <p class="upa-txt-sm">Social Care Worker</p>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">4.8</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>
                                    <blockquote class="upa-txt-normal">Brilliant course, it was really helpful and
                                        engaging content</blockquote>
                                    <div class="upa-reviews-author">
                                        <p class="upa-txt-normal font-bold">Emma Chapman</p>
                                        <p class="upa-txt-sm">Social Care Worker</p>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">4.8</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>
                                    <blockquote class="upa-txt-normal">Brilliant course, it was really helpful and
                                        engaging content</blockquote>
                                    <div class="upa-reviews-author">
                                        <p class="upa-txt-normal font-bold">Emma Chapman</p>
                                        <p class="upa-txt-sm">Social Care Worker</p>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">4.8</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>
                                    <blockquote class="upa-txt-normal">Brilliant course, it was really helpful and
                                        engaging content</blockquote>
                                    <div class="upa-reviews-author">
                                        <p class="upa-txt-normal font-bold">Emma Chapman</p>
                                        <p class="upa-txt-sm">Social Care Worker</p>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article class="upa-reviews-card">
                                <div class="upa-reviews-rating">
                                    <span class="upa-reviews-stars" role="img" aria-label="Rated 4.8 out of 5">
                                        <span class="upa-reviews-stars-fill" style="width: 96%"></span>
                                    </span>
                                    <span class="upa-reviews-score" aria-hidden="true">4.8</span>
                                </div>
                                <div class="upa-reviews-body">
                                    <h3 class="upa-txt-normal font-bold">Moving and Handling People in Health and
                                        Social Care</h3>
                                    <blockquote class="upa-txt-normal">Brilliant course, it was really helpful and
                                        engaging content</blockquote>
                                    <div class="upa-reviews-author">
                                        <p class="upa-txt-normal font-bold">Emma Chapman</p>
                                        <p class="upa-txt-sm">Social Care Worker</p>
                                    </div>
                                </div>
                            </article>
                        </div>

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
            CERTIFICATE FOR SUCCESS AT EVERY STEP
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 items-center">

                    <!-- Left: heading + benefits -->
                    <div class="flex flex-col gap-6 md:self-end">
                        <h2 class="upa-sec-header text-center md:text-left">Certificate for Success at Every Step</h2>
                        <ul class="upa-crtifi-cta-list">
                            <li>No expiry date. You can keep and use the certificate forever.</li>
                            <li>Recognised across various UK industries.</li>
                            <li>Increases your chances of employability.</li>
                            <li>Boosts your professional credibility.</li>
                            <li>Shows you're up to date with industry knowledge.</li>
                        </ul>
                    </div>

                    <!-- Right: certificate image -->
                    <div class="upa-crtifi-cta-image-wrap md:col-start-2 md:row-start-1 md:row-span-2">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/upa-certificate.png'; ?>" alt="Framed Upskilling Academy certificates of completion"
                            loading="lazy">
                    </div>

                    <!-- CTA: under the image on mobile, under the list on md+ -->
                    <div class="flex justify-center md:justify-start md:col-start-1 md:self-start">
                        <a href="#" class="upa-btn upa-btn-peach_green">Get Your Certificate</a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============================================
            SUBSCRIBE TO OUR NEWSLETTERS
        ============================================ -->
        <section class="w-full bg-white">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 lg:py-16">
                <div class="upa-hmleadfrm-box">
                    <h2 class="upa-sec-header text-white">Subscribe to <br>Our Newsletters</h2>

                    <!-- DYNAMIC: newsletter form - swap action/fields for the newsletter plugin's form -->
                    <form action="#" method="post" class="upa-hmleadfrm-form">
                        <label for="upa-hmleadfrm-email" class="sr-only">Email address</label>
                        <input type="email" id="upa-hmleadfrm-email" name="email" class="upa-hmleadfrm-input"
                            placeholder="Your email address" autocomplete="email" required>
                        <button type="submit" class="upa-btn upa-hmleadfrm-btn">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
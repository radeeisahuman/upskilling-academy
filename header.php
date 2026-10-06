<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name') . ' - ' . get_the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="relative bg-white border-b border-gray-100 w-full py-5">
            <div class="max-w-[1440px] flex items-center justify-between gap-4 px-4 md:px-8 py-3 mx-auto w-full">

                <!-- Logo -->
                <a href="<?php echo home_url(); ?>" class="flex-shrink-0">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/upa-logo.svg'; ?>" alt="Upskilling Academy" class="h-12 md:h-14 w-auto">
                </a>

                <!-- Desktop nav -->
                <nav class="hidden lg:flex items-center gap-8 upa-txt-normal font-medium">

                    <!-- Courses dropdown -->
                    <!-- ============================================
                    DESKTOP: Courses hover mega-menu
                    Replaces the old click-toggle 3-link dropdown.
                    "group" + "group-hover" = pure CSS show/hide,
                    no JS needed to open/close on desktop.
                ============================================ -->
                    <div class=" group" id="courses-dropdown">
                        <button id="courses-btn"
                            class="flex items-center gap-1 text-upa-navy group-hover:text-upa-green transition-colors"
                            aria-haspopup="true">
                            Courses
                            <svg class="w-3 h-3 mt-0.5 transition-transform group-hover:rotate-180" viewBox="0 0 12 8"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <!-- Invisible bridge closes the hover gap between button and panel -->
                        <div
                            class="hidden group-hover:block group-focus-within:block absolute left-0 right-0 top-[62%] w-screen h-3">
                        </div>

                        <!-- Full-bleed mega panel — shutter/blinds animation via CSS grid-rows collapse -->
                        <div id="courses-menu"
                            class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] group-focus-within:grid-rows-[1fr] transition-[grid-template-rows] duration-500 ease-in-out absolute left-0 right-0 top-[62%] mt-3 w-screen z-50">
                            <div class="overflow-hidden ">
                                <div
                                    class="max-w-[1280px] mx-auto bg-white shadow-upa-md rounded-upa-md overflow-hidden flex">

                                    <!-- Promo panel -->
                                    <div class="w-[38%] bg-upa-green-2 flex items-center">
                                        <div class="p-10 flex flex-col gap-4 max-w-[420px]">
                                            <p class="upa-txt-normal">
                                                Our range of over 180 online courses are fully accredited, trusted by
                                                more
                                                than 3 million learners and ideal for training you and your team.
                                            </p>
                                            <a href="<?php echo home_url('our-courses'); ?>" class="upa-btn upa-btn-peach_green !text-sm w-fit">See all
                                                courses</a>
                                        </div>
                                    </div>

                                    <!-- Course links grid -->
                                    <div class="flex-1 p-8">
                                        <div class="grid grid-cols-3 gap-x-8 gap-y-1">
                                            <a href="https://upskillingacademy.co.uk/course-category/food-safety/?tutor-course-filter-category=56"
                                                class="upa-nav-link flex! justify-between items-center px-2 py-3 upa-txt-normal text-upa-navy  transition-colors">
                                                Food Hygiene
                                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a href="https://upskillingacademy.co.uk/course-category/health-safety/?tutor-course-filter-category=26"
                                                class="upa-nav-link flex! justify-between items-center px-2 py-3 upa-txt-normal text-upa-navy  transition-colors">
                                                Health & Safety
                                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a href="https://upskillingacademy.co.uk/course-category/safeguarding/?tutor-course-filter-category=96"
                                                class="upa-nav-link flex! justify-between items-center px-2 py-3 upa-txt-normal text-upa-navy  transition-colors">
                                                Safeguarding
                                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a href="https://upskillingacademy.co.uk/course-category/first-aid/?tutor-course-filter-category=97"
                                                class="upa-nav-link flex! justify-between items-center px-2 py-3 upa-txt-normal text-upa-navy  transition-colors">
                                                First Aid
                                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a href="https://upskillingacademy.co.uk/course-category/leadership-management/?tutor-course-filter-category=45"
                                                class="upa-nav-link flex! justify-between items-center px-2 py-3 upa-txt-normal text-upa-navy  transition-colors">
                                                Leadership and Management
                                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a href="https://upskillingacademy.co.uk/course-category/mental-health/?tutor-course-filter-category=22"
                                                class="upa-nav-link flex! justify-between items-center px-2 py-3 upa-txt-normal text-upa-navy  transition-colors">
                                                Mental Health
                                                <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo home_url('hot-deals'); ?>" class="upa-nav-link <?php if(is_page('hot-deals')) echo "active"; ?>">
                        Hot Deals 🔥
                    </a>

                    <a href="<?php echo home_url('lifetime-membership'); ?>" class="upa-nav-link <?php if(is_page('lifetime-membership')) echo "active"; ?>">
                        Lifetime Membership
                    </a>
                </nav>

                <!-- Search (desktop only) -->
                <div class="hidden lg:block flex-1 max-w-[300px]">
                    <div class="relative">
                        <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-500" viewBox="0 0 20 20"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="1.5" />
                            <path d="M17 17L13.5 13.5" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                        <input type="text" placeholder="e.g. food hygiene"
                            class="w-full bg-gray-300 rounded-lg pl-10 pr-4 py-2.5 text-sm text-upa-navy placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-upa-green">
                    </div>
                </div>

                <!-- Right cluster: divider + cart + login + hamburger -->
                <div class="flex items-center gap-4 lg:gap-5">

                    <div class="hidden lg:block w-px h-8 bg-gray-200"></div>

                    <a href="<?php echo home_url('cart'); ?>" class="relative flex-shrink-0" aria-label="Cart">
                        <svg class="w-6 h-6 text-upa-navy" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 3H5L5.4 5M5.4 5H21L19 13H7M5.4 5L7 13M7 13L5.6 15.8C5.2 16.6 5.8 17.5 6.7 17.5H19"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <circle cx="9" cy="21" r="1.3" fill="currentColor" />
                            <circle cx="18" cy="21" r="1.3" fill="currentColor" />
                        </svg>
                        <!--<span
                            class="absolute -top-2 -right-2 bg-upa-red text-white text-[11px] leading-none font-bold w-5 h-5 rounded-full flex items-center justify-center">3</span>-->
                    </a>

                    <a href="<?php echo home_url('dashboard'); ?>" class="upa-btn upa-btn-navy_green text-sm! !py-2 !px-5 flex-shrink-0">
                        <?php 
                        if(!is_user_logged_in())
                            echo "Log in";
                        else
                        echo "Dashboard"; ?>
                    </a>

                    <!-- Hamburger (mobile only) -->
                    <button id="hamburger-btn" class="lg:hidden flex-shrink-0" aria-label="Toggle menu"
                        aria-expanded="false" aria-controls="mobile-menu">
                        <svg id="hamburger-icon-open" class="w-7 h-7 text-gray-400" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <path d="M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <svg id="hamburger-icon-close" class="hidden w-7 h-7 text-upa-navy" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile menu panel -->
            <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100">
                <div class="flex flex-col">

                    <!-- Search (mobile only) -->
                    <div class="lg:hidden block flex-1 w-2/3 py-4 px-2 mx-auto">
                        <div class="relative ">
                            <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-500"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="1.5" />
                                <path d="M17 17L13.5 13.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                            <input type="text" placeholder="e.g. food hygiene"
                                class="w-full bg-gray-300 rounded-lg pl-10 pr-4 py-2.5 text-sm text-upa-navy placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-upa-green">
                        </div>
                    </div>

                    <!-- ============================================
                    MOBILE: Courses accordion mega-menu
                    Same content, stacked. Still click-to-toggle
                    since hover doesn't exist on touch.
                ============================================ -->
                    <button id="mobile-courses-btn"
                        class="flex items-center justify-between w-full px-4 py-4 text-upa-navy upa-txt-normal font-medium"
                        aria-expanded="false" aria-controls="mobile-courses-menu">
                        Courses
                        <svg id="mobile-courses-chevron" class="w-3 h-3 transition-transform" viewBox="0 0 12 8"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <div id="mobile-courses-menu" class="hidden flex-col bg-upa-gray">

                        <!-- Promo panel -->
                        <div class="bg-upa-green-2 p-6 flex flex-col gap-3">
                            <p class="upa-txt-sm">
                                Our range of over 180 online courses are fully accredited, trusted by more than 3
                                million
                                learners and ideal for training you and your team.
                            </p>
                            <a href="<?php echo home_url('our-courses'); ?>" class="upa-btn upa-btn-peach_green !text-sm w-fit">See all courses</a>
                        </div>

                        <!-- Course links -->
                        <a href="#"
                            class="upa-nav-link flex! justify-between items-center px-8 py-3 text-upa-navy upa-txt-normal">
                            Food Hygiene
                            <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a href="#"
                            class="upa-nav-link flex! justify-between items-center px-8 py-3 text-upa-navy upa-txt-normal">
                            Health & Safety
                            <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a href="#"
                            class="upa-nav-link flex! justify-between items-center px-8 py-3 text-upa-navy upa-txt-normal">
                            Safeguarding
                            <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a href="#"
                            class="upa-nav-link flex! justify-between items-center px-8 py-3 text-upa-navy upa-txt-normal">
                            First Aid
                            <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 2.5L8 6L4.5 9.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>

                    <div id="mobile-courses-menu" class="hidden flex-col bg-upa-gray">
                        <a href="#" class="block px-8 py-3 text-upa-navy">Course category 1</a>
                        <a href="#" class="block px-8 py-3 text-upa-navy">Course category 2</a>
                        <a href="#" class="block px-8 py-3 text-upa-navy">Course category 3</a>
                    </div>

                    <!-- active item — move this "upa-nav-active" styling to whichever item is current -->
                    <a href="<?php echo home_url('hot-deals'); ?>" class="px-4 py-4 bg-upa-green text-white upa-txt-normal font-medium">Hot Deals 🔥</a>

                    <a href="<?php echo home_url('lifetime-membership'); ?>" class="px-4 py-4 text-upa-navy upa-txt-normal font-medium">Lifetime Membership</a>
                </div>
            </div>
            <script>
                // Mobile hamburger menu toggle
                (function () {
                    const btn = document.getElementById('hamburger-btn');
                    const menu = document.getElementById('mobile-menu');
                    const iconOpen = document.getElementById('hamburger-icon-open');
                    const iconClose = document.getElementById('hamburger-icon-close');

                    btn.addEventListener('click', function () {
                        const isOpen = btn.getAttribute('aria-expanded') === 'true';
                        btn.setAttribute('aria-expanded', String(!isOpen));
                        menu.classList.toggle('hidden');
                        iconOpen.classList.toggle('hidden');
                        iconClose.classList.toggle('hidden');
                    });
                })();

                // Mobile "Courses" accordion
                (function () {
                    const btn = document.getElementById('mobile-courses-btn');
                    const menu = document.getElementById('mobile-courses-menu');
                    const chevron = document.getElementById('mobile-courses-chevron');

                    btn.addEventListener('click', function () {
                        const isOpen = btn.getAttribute('aria-expanded') === 'true';
                        btn.setAttribute('aria-expanded', String(!isOpen));
                        menu.classList.toggle('hidden');
                        menu.classList.toggle('flex');
                        chevron.classList.toggle('rotate-180');
                    });
                })();
            </script>
        </div>
        <!-- USP's -->
        <div class="w-full bg-upa-green">
            <div class="max-w-7xl mx-auto w-full">

                <!-- Desktop: static row, same layout as before but green bg / white text+icons -->
                <ul
                    class="hidden lg:flex flex-wrap gap-6 justify-between items-center w-full uppercase text-sm font-semibold text-white px-10 py-2">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        Trusted by 3 million learners
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                        </svg>
                        24/7 online training
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 300.005 300.005">
                            <path
                                d="M150,0C67.159,0,0.002,67.159,0.002,150c0,82.838,67.157,150.005,149.997,150.005S300.003,232.841,300.003,150 C300,67.159,232.841,0,150,0z M235.661,168.822c-6.756,42.93-43.939,73.662-86.101,73.662c-4.487,0-9.028-0.35-13.598-1.066 c-47.497-7.485-80.063-52.215-72.593-99.707c3.621-23.011,15.985-43.236,34.814-56.946c16.21-11.801,35.538-17.543,55.286-16.607 l-14.527-13.834l9.521-9.991l22.29,21.239l0.005-0.003l9.97,9.513l-9.513,9.991l-0.005-0.008l-21.237,22.295l-9.98-9.521 l13.456-14.112c-16.457-0.934-32.605,3.789-46.107,13.619c-15.471,11.264-25.628,27.879-28.603,46.784 c-6.134,39.019,20.622,75.768,59.643,81.915c39.019,6.131,75.765-20.617,81.904-59.641c4.054-25.76-6.225-51.72-26.834-67.751 l9.56-12.281C228.083,105.877,240.595,137.47,235.661,168.822z M121.096,175.443l-0.511-1.196l12.823-5.436l0.506,1.198 c2.039,4.84,9.088,8.489,16.394,8.489c3.284,0,13.995-0.599,13.995-8.339c0-4.054-4.58-6.481-14.415-7.641 c-11.036-1.237-26.162-2.928-26.162-19.587c0-10.214,7.641-17.354,20.508-19.255v-7.851h13.821v7.885 c5.973,1.05,13.855,3.652,18.251,12.644l0.584,1.19l-11.804,5.46l-0.597-0.993c-2.067-3.413-8.147-6.092-13.834-6.092 c-3.836,0-12.755,0.685-12.755,7.011c0,4.547,5.747,5.594,13.264,6.494c11.752,1.447,27.84,3.429,27.84,20.733 c0,12.735-10.328,19.439-20.946,20.627v8.953H144.24v-8.523C133.09,189.903,124.893,184.329,121.096,175.443z" />
                        </svg>
                        Money back guarantee
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 fill-white" viewBox="0 -0.21 16.001 16.001"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M-4.146,12.146l-1.871-1.87a1.48,1.48,0,0,0,.484-.6,2.4,2.4,0,0,0-.214-1.792A2.882,2.882,0,0,1-6,7a2.726,2.726,0,0,1,.247-.841,2.433,2.433,0,0,0,.219-1.838A2.428,2.428,0,0,0-6.988,3.177a2.73,2.73,0,0,1-.768-.421,2.887,2.887,0,0,1-.45-.805A2.4,2.4,0,0,0-9.321.533a2.386,2.386,0,0,0-1.792.214A2.882,2.882,0,0,1-12,1a2.726,2.726,0,0,1-.841-.247A2.428,2.428,0,0,0-14.679.533a2.428,2.428,0,0,0-1.144,1.455,2.73,2.73,0,0,1-.421.768,2.887,2.887,0,0,1-.805.45,2.4,2.4,0,0,0-1.418,1.115,2.4,2.4,0,0,0,.214,1.792A2.882,2.882,0,0,1-18,7a2.726,2.726,0,0,1-.247.841,2.433,2.433,0,0,0-.219,1.838,1.517,1.517,0,0,0,.48.6l-1.867,1.866a.5.5,0,0,0-.14.434.5.5,0,0,0,.27.367l1.851.926.926,1.851a.5.5,0,0,0,.367.27A.549.549,0,0,0-16.5,16a.5.5,0,0,0,.354-.146l2.313-2.314a4.664,4.664,0,0,0,.946-.287A2.882,2.882,0,0,1-12,13a2.726,2.726,0,0,1,.841.247,4.514,4.514,0,0,0,1.005.305l2.3,2.3A.5.5,0,0,0-7.5,16a.549.549,0,0,0,.08-.006.5.5,0,0,0,.367-.27l.926-1.851,1.851-.926a.5.5,0,0,0,.27-.367A.5.5,0,0,0-4.146,12.146ZM-12,12a3.535,3.535,0,0,0-1.25.32c-.4.157-.815.318-1.046.222s-.41-.5-.583-.9a3.5,3.5,0,0,0-.658-1.11A3.373,3.373,0,0,0-16.616,9.9c-.4-.175-.822-.356-.927-.609s.063-.677.225-1.086A3.409,3.409,0,0,0-17,7a3.535,3.535,0,0,0-.32-1.25c-.157-.4-.318-.815-.222-1.046s.5-.41.9-.583a3.5,3.5,0,0,0,1.11-.658A3.373,3.373,0,0,0-14.9,2.384c.175-.4.356-.822.609-.927a1.808,1.808,0,0,1,1.086.225A3.409,3.409,0,0,0-12,2a3.535,3.535,0,0,0,1.25-.32c.4-.157.812-.321,1.046-.222s.41.5.583.9a3.5,3.5,0,0,0,.658,1.11,3.373,3.373,0,0,0,1.079.632c.4.175.822.356.927.609s-.063.677-.225,1.086A3.409,3.409,0,0,0-7,7a3.535,3.535,0,0,0,.32,1.25c.157.4.318.815.222,1.046s-.5.41-.9.583a3.5,3.5,0,0,0-1.11.658A3.373,3.373,0,0,0-9.1,11.616c-.175.4-.356.822-.609.927s-.676-.063-1.086-.225A3.409,3.409,0,0,0-12,12Zm-4.363,2.655-.69-1.38a.5.5,0,0,0-.223-.223l-1.38-.69,1.572-1.572.072.032a2.73,2.73,0,0,1,.768.421,2.887,2.887,0,0,1,.45.8,3.006,3.006,0,0,0,.812,1.226Zm9.639-1.6a.5.5,0,0,0-.223.223l-.69,1.38-1.38-1.38a3.012,3.012,0,0,0,.84-1.264,2.73,2.73,0,0,1,.421-.768,2.887,2.887,0,0,1,.8-.45l.026-.012,1.581,1.581ZM-8,7a4,4,0,0,0-4-4,4,4,0,0,0-4,4,4,4,0,0,0,4,4A4,4,0,0,0-8,7Zm-4,3a3,3,0,0,1-3-3,3,3,0,0,1,3-3A3,3,0,0,1-9,7,3,3,0,0,1-12,10Z"
                                transform="translate(20 -0.423)" />
                        </svg>
                        Fully accredited courses
                    </li>
                </ul>

                <!-- Mobile: auto-scrolling ticker (content duplicated 2x for seamless loop) -->
                <div class="lg:hidden overflow-hidden py-3">
                    <div
                        class="upa-marquee flex items-center gap-10 w-max whitespace-nowrap uppercase text-xs font-semibold text-white">

                        <!-- Set 1 -->
                        <span class="flex items-center gap-2 flex-shrink-0">
                            <svg class="w-4 h-4 fill-white flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            Trusted by 3 million learners
                        </span>
                        <span class="flex items-center gap-2 flex-shrink-0">
                            <svg class="w-4 h-4 fill-white flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <path
                                    d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                            </svg>
                            24/7 online training
                        </span>
                        <span class="flex items-center gap-2 flex-shrink-0">
                            <svg class="w-4 h-4 fill-white flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 300.005 300.005">
                                <path
                                    d="M150,0C67.159,0,0.002,67.159,0.002,150c0,82.838,67.157,150.005,149.997,150.005S300.003,232.841,300.003,150 C300,67.159,232.841,0,150,0z M235.661,168.822c-6.756,42.93-43.939,73.662-86.101,73.662c-4.487,0-9.028-0.35-13.598-1.066 c-47.497-7.485-80.063-52.215-72.593-99.707c3.621-23.011,15.985-43.236,34.814-56.946c16.21-11.801,35.538-17.543,55.286-16.607 l-14.527-13.834l9.521-9.991l22.29,21.239l0.005-0.003l9.97,9.513l-9.513,9.991l-0.005-0.008l-21.237,22.295l-9.98-9.521 l13.456-14.112c-16.457-0.934-32.605,3.789-46.107,13.619c-15.471,11.264-25.628,27.879-28.603,46.784 c-6.134,39.019,20.622,75.768,59.643,81.915c39.019,6.131,75.765-20.617,81.904-59.641c4.054-25.76-6.225-51.72-26.834-67.751 l9.56-12.281C228.083,105.877,240.595,137.47,235.661,168.822z M121.096,175.443l-0.511-1.196l12.823-5.436l0.506,1.198 c2.039,4.84,9.088,8.489,16.394,8.489c3.284,0,13.995-0.599,13.995-8.339c0-4.054-4.58-6.481-14.415-7.641 c-11.036-1.237-26.162-2.928-26.162-19.587c0-10.214,7.641-17.354,20.508-19.255v-7.851h13.821v7.885 c5.973,1.05,13.855,3.652,18.251,12.644l0.584,1.19l-11.804,5.46l-0.597-0.993c-2.067-3.413-8.147-6.092-13.834-6.092 c-3.836,0-12.755,0.685-12.755,7.011c0,4.547,5.747,5.594,13.264,6.494c11.752,1.447,27.84,3.429,27.84,20.733 c0,12.735-10.328,19.439-20.946,20.627v8.953H144.24v-8.523C133.09,189.903,124.893,184.329,121.096,175.443z" />
                            </svg>
                            Money back guarantee
                        </span>
                        <span class="flex items-center gap-2 flex-shrink-0">
                            <svg class="w-4 h-4 fill-white flex-shrink-0" viewBox="0 -0.21 16.001 16.001"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M-4.146,12.146l-1.871-1.87a1.48,1.48,0,0,0,.484-.6,2.4,2.4,0,0,0-.214-1.792A2.882,2.882,0,0,1-6,7a2.726,2.726,0,0,1,.247-.841,2.433,2.433,0,0,0,.219-1.838A2.428,2.428,0,0,0-6.988,3.177a2.73,2.73,0,0,1-.768-.421,2.887,2.887,0,0,1-.45-.805A2.4,2.4,0,0,0-9.321.533a2.386,2.386,0,0,0-1.792.214A2.882,2.882,0,0,1-12,1a2.726,2.726,0,0,1-.841-.247A2.428,2.428,0,0,0-14.679.533a2.428,2.428,0,0,0-1.144,1.455,2.73,2.73,0,0,1-.421.768,2.887,2.887,0,0,1-.805.45,2.4,2.4,0,0,0-1.418,1.115,2.4,2.4,0,0,0,.214,1.792A2.882,2.882,0,0,1-18,7a2.726,2.726,0,0,1-.247.841,2.433,2.433,0,0,0-.219,1.838,1.517,1.517,0,0,0,.48.6l-1.867,1.866a.5.5,0,0,0-.14.434.5.5,0,0,0,.27.367l1.851.926.926,1.851a.5.5,0,0,0,.367.27A.549.549,0,0,0-16.5,16a.5.5,0,0,0,.354-.146l2.313-2.314a4.664,4.664,0,0,0,.946-.287A2.882,2.882,0,0,1-12,13a2.726,2.726,0,0,1,.841.247,4.514,4.514,0,0,0,1.005.305l2.3,2.3A.5.5,0,0,0-7.5,16a.549.549,0,0,0,.08-.006.5.5,0,0,0,.367-.27l.926-1.851,1.851-.926a.5.5,0,0,0,.27-.367A.5.5,0,0,0-4.146,12.146ZM-12,12a3.535,3.535,0,0,0-1.25.32c-.4.157-.815.318-1.046.222s-.41-.5-.583-.9a3.5,3.5,0,0,0-.658-1.11A3.373,3.373,0,0,0-16.616,9.9c-.4-.175-.822-.356-.927-.609s.063-.677.225-1.086A3.409,3.409,0,0,0-17,7a3.535,3.535,0,0,0-.32-1.25c-.157-.4-.318-.815-.222-1.046s.5-.41.9-.583a3.5,3.5,0,0,0,1.11-.658A3.373,3.373,0,0,0-14.9,2.384c.175-.4.356-.822.609-.927a1.808,1.808,0,0,1,1.086.225A3.409,3.409,0,0,0-12,2a3.535,3.535,0,0,0,1.25-.32c.4-.157.812-.321,1.046-.222s.41.5.583.9a3.5,3.5,0,0,0,.658,1.11,3.373,3.373,0,0,0,1.079.632c.4.175.822.356.927.609s-.063.677-.225,1.086A3.409,3.409,0,0,0-7,7a3.535,3.535,0,0,0,.32,1.25c.157.4.318.815.222,1.046s-.5.41-.9.583a3.5,3.5,0,0,0-1.11.658A3.373,3.373,0,0,0-9.1,11.616c-.175.4-.356.822-.609.927s-.676-.063-1.086-.225A3.409,3.409,0,0,0-12,12Zm-4.363,2.655-.69-1.38a.5.5,0,0,0-.223-.223l-1.38-.69,1.572-1.572.072.032a2.73,2.73,0,0,1,.768.421,2.887,2.887,0,0,1,.45.8,3.006,3.006,0,0,0,.812,1.226Zm9.639-1.6a.5.5,0,0,0-.223.223l-.69,1.38-1.38-1.38a3.012,3.012,0,0,0,.84-1.264,2.73,2.73,0,0,1,.421-.768,2.887,2.887,0,0,1,.8-.45l.026-.012,1.581,1.581ZM-8,7a4,4,0,0,0-4-4,4,4,0,0,0-4,4,4,4,0,0,0,4,4A4,4,0,0,0-8,7Zm-4,3a3,3,0,0,1-3-3,3,3,0,0,1,3-3A3,3,0,0,1-9,7,3,3,0,0,1-12,10Z"
                                    transform="translate(20 -0.423)" />
                            </svg>
                            Fully accredited courses
                        </span>

                        <!-- Set 2 (duplicate, hidden from screen readers - purely visual for the loop) -->
                        <span aria-hidden="true" class="flex items-center gap-2 flex-shrink-0">
                            <svg class="w-4 h-4 fill-white flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            Trusted by 3 million learners
                        </span>
                        <span aria-hidden="true" class="flex items-center gap-2 flex-shrink-0">
                            <svg class="w-4 h-4 fill-white flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <path
                                    d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                            </svg>
                            24/7 online training
                        </span>
                        <span aria-hidden="true" class="flex items-center gap-2 flex-shrink-0">
                            <svg class="w-4 h-4 fill-white flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 300.005 300.005">
                                <path
                                    d="M150,0C67.159,0,0.002,67.159,0.002,150c0,82.838,67.157,150.005,149.997,150.005S300.003,232.841,300.003,150 C300,67.159,232.841,0,150,0z M235.661,168.822c-6.756,42.93-43.939,73.662-86.101,73.662c-4.487,0-9.028-0.35-13.598-1.066 c-47.497-7.485-80.063-52.215-72.593-99.707c3.621-23.011,15.985-43.236,34.814-56.946c16.21-11.801,35.538-17.543,55.286-16.607 l-14.527-13.834l9.521-9.991l22.29,21.239l0.005-0.003l9.97,9.513l-9.513,9.991l-0.005-0.008l-21.237,22.295l-9.98-9.521 l13.456-14.112c-16.457-0.934-32.605,3.789-46.107,13.619c-15.471,11.264-25.628,27.879-28.603,46.784 c-6.134,39.019,20.622,75.768,59.643,81.915c39.019,6.131,75.765-20.617,81.904-59.641c4.054-25.76-6.225-51.72-26.834-67.751 l9.56-12.281C228.083,105.877,240.595,137.47,235.661,168.822z M121.096,175.443l-0.511-1.196l12.823-5.436l0.506,1.198 c2.039,4.84,9.088,8.489,16.394,8.489c3.284,0,13.995-0.599,13.995-8.339c0-4.054-4.58-6.481-14.415-7.641 c-11.036-1.237-26.162-2.928-26.162-19.587c0-10.214,7.641-17.354,20.508-19.255v-7.851h13.821v7.885 c5.973,1.05,13.855,3.652,18.251,12.644l0.584,1.19l-11.804,5.46l-0.597-0.993c-2.067-3.413-8.147-6.092-13.834-6.092 c-3.836,0-12.755,0.685-12.755,7.011c0,4.547,5.747,5.594,13.264,6.494c11.752,1.447,27.84,3.429,27.84,20.733 c0,12.735-10.328,19.439-20.946,20.627v8.953H144.24v-8.523C133.09,189.903,124.893,184.329,121.096,175.443z" />
                            </svg>
                            Money back guarantee
                        </span>
                        <span aria-hidden="true" class="flex items-center gap-2 flex-shrink-0">
                            <svg class="w-4 h-4 fill-white flex-shrink-0" viewBox="0 -0.21 16.001 16.001"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M-4.146,12.146l-1.871-1.87a1.48,1.48,0,0,0,.484-.6,2.4,2.4,0,0,0-.214-1.792A2.882,2.882,0,0,1-6,7a2.726,2.726,0,0,1,.247-.841,2.433,2.433,0,0,0,.219-1.838A2.428,2.428,0,0,0-6.988,3.177a2.73,2.73,0,0,1-.768-.421,2.887,2.887,0,0,1-.45-.805A2.4,2.4,0,0,0-9.321.533a2.386,2.386,0,0,0-1.792.214A2.882,2.882,0,0,1-12,1a2.726,2.726,0,0,1-.841-.247A2.428,2.428,0,0,0-14.679.533a2.428,2.428,0,0,0-1.144,1.455,2.73,2.73,0,0,1-.421.768,2.887,2.887,0,0,1-.805.45,2.4,2.4,0,0,0-1.418,1.115,2.4,2.4,0,0,0,.214,1.792A2.882,2.882,0,0,1-18,7a2.726,2.726,0,0,1-.247.841,2.433,2.433,0,0,0-.219,1.838,1.517,1.517,0,0,0,.48.6l-1.867,1.866a.5.5,0,0,0-.14.434.5.5,0,0,0,.27.367l1.851.926.926,1.851a.5.5,0,0,0,.367.27A.549.549,0,0,0-16.5,16a.5.5,0,0,0,.354-.146l2.313-2.314a4.664,4.664,0,0,0,.946-.287A2.882,2.882,0,0,1-12,13a2.726,2.726,0,0,1,.841.247,4.514,4.514,0,0,0,1.005.305l2.3,2.3A.5.5,0,0,0-7.5,16a.549.549,0,0,0,.08-.006.5.5,0,0,0,.367-.27l.926-1.851,1.851-.926a.5.5,0,0,0,.27-.367A.5.5,0,0,0-4.146,12.146ZM-12,12a3.535,3.535,0,0,0-1.25.32c-.4.157-.815.318-1.046.222s-.41-.5-.583-.9a3.5,3.5,0,0,0-.658-1.11A3.373,3.373,0,0,0-16.616,9.9c-.4-.175-.822-.356-.927-.609s.063-.677.225-1.086A3.409,3.409,0,0,0-17,7a3.535,3.535,0,0,0-.32-1.25c-.157-.4-.318-.815-.222-1.046s.5-.41.9-.583a3.5,3.5,0,0,0,1.11-.658A3.373,3.373,0,0,0-14.9,2.384c.175-.4.356-.822.609-.927a1.808,1.808,0,0,1,1.086.225A3.409,3.409,0,0,0-12,2a3.535,3.535,0,0,0,1.25-.32c.4-.157.812-.321,1.046-.222s.41.5.583.9a3.5,3.5,0,0,0,.658,1.11,3.373,3.373,0,0,0,1.079.632c.4.175.822.356.927.609s-.063.677-.225,1.086A3.409,3.409,0,0,0-7,7a3.535,3.535,0,0,0,.32,1.25c.157.4.318.815.222,1.046s-.5.41-.9.583a3.5,3.5,0,0,0-1.11.658A3.373,3.373,0,0,0-9.1,11.616c-.175.4-.356.822-.609.927s-.676-.063-1.086-.225A3.409,3.409,0,0,0-12,12Zm-4.363,2.655-.69-1.38a.5.5,0,0,0-.223-.223l-1.38-.69,1.572-1.572.072.032a2.73,2.73,0,0,1,.768.421,2.887,2.887,0,0,1,.45.8,3.006,3.006,0,0,0,.812,1.226Zm9.639-1.6a.5.5,0,0,0-.223.223l-.69,1.38-1.38-1.38a3.012,3.012,0,0,0,.84-1.264,2.73,2.73,0,0,1,.421-.768,2.887,2.887,0,0,1,.8-.45l.026-.012,1.581,1.581ZM-8,7a4,4,0,0,0-4-4,4,4,0,0,0-4,4,4,4,0,0,0,4,4A4,4,0,0,0-8,7Zm-4,3a3,3,0,0,1-3-3,3,3,0,0,1,3-3A3,3,0,0,1-9,7,3,3,0,0,1-12,10Z"
                                    transform="translate(20 -0.423)" />
                            </svg>
                            Fully accredited courses
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </header>
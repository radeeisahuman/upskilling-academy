<footer class="bg-upa-gray ">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-6">

                <!-- Column 1: Logo + contact -->
                <div class="flex flex-col gap-4">
                    <a href="<?php echo home_url(); ?>" class="flex-shrink-0 w-fit">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/upa-logo.svg'; ?>" alt="Upskilling Academy" class="h-20 w-auto">
                    </a>
                    <div class="flex flex-col gap-2 upa-txt-normal text-upa-navy">
                        <a href="tel:" class="hover:text-upa-green transition-colors">Phone Number</a>
                        <a href="#" class="hover:text-upa-green transition-colors">Address</a>
                    </div>
                </div>

                <!-- Column 2: Links -->
                <nav class="flex flex-col gap-3 upa-txt-normal text-upa-navy">
                    <a href="#" class="hover:text-upa-green transition-colors">About Us</a>
                    <a href="#" class="hover:text-upa-green transition-colors">All Courses</a>
                    <a href="#" class="hover:text-upa-green transition-colors">Privacy & Policy</a>
                    <a href="#" class="hover:text-upa-green transition-colors">Terms & Conditions</a>
                    <a href="#" class="hover:text-upa-green transition-colors">Blog</a>
                    <a href="#" class="hover:text-upa-green transition-colors">Write for Us</a>
                </nav>

                <!-- Column 3: Certificate validator + payment icons -->
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-3">
                        <p class="upa-txt-normal text-upa-navy">Certificate Validator</p>
                        <form
                            class="flex items-stretch border border-gray-300 rounded-full overflow-hidden bg-white w-full max-w-2xs">
                            <input type="text" placeholder=""
                                class="flex-1 min-w-0 pl-4 pr-2 py-2.5 text-sm text-upa-navy outline-none bg-transparent">
                            <button type="submit" class="upa-btn !rounded-none !px-6 !py-2.5 text-sm">
                                Validate
                            </button>
                        </form>
                    </div>

                    <div class="flex flex-col gap-3">
                        <p class="upa-txt-normal text-upa-navy">Pay With Confidence</p>
                        <div class="flex items-center gap-2 flex-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/footer-pay.svg'; ?>" alt="Visa" class="h-10 w-auto">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>

</html>
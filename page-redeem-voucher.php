<?php get_header(); ?>

<div class="w-full bg-upa-green-2">
    <div class="py-12 skills-section">
        <h2 class="text-center">Voucher Redeem</h2>
    </div>
</div>

<div class="container mx-auto">
    <div class="px-12 py-4 flex flex-row justify-center items-center">
        <form id="cert_voucher_form" class="py-4 px-4 flex flex-col justify-center">
            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" placeholder="John Smith">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="john@upskillingacademy.co.uk">

            <label for="voucher_code">Voucher Code:</label>
            <input type="text" name="voucher_code" id="voucher_code" placeholder="VX-1234-5678">

            <label for="security_code">Security Code:</label>
            <input type="text" name="security_code" id="security_code" placeholder="1234567">

            <input type="submit" name="submit" id="submit" value="Submit">

            <p id="results_message"></p>
        </form>
    </div>
</div>

<?php get_footer(); ?>

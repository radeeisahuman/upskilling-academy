<?php get_header(); ?>

<div class="w-full bg-upa-green-2">
    <div class="py-12 skills-section">
        <h2 class="text-center">Certificate Order</h2>
    </div>
</div>

<div class="container mx-auto">
    <div class="px-12 py-4 flex flex-row justify-center items-center">
        <form id="cert_voucher_form" class="py-4 px-4 flex flex-col justify-center">
            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" placeholder="John Smith">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="john@upskillingacademy.co.uk">

            <label for="course_name">Course Name:</label>
            <input type="text" name="course_name" id="course_name" placeholder="Data Analysis Level 3">

            <label for="orderid">Order ID (If Applicable):</label>
            <input type="text" name="orderid" id="orderid" placeholder="#12345">

            <input type="submit" name="submit" id="submit" value="Submit">

            <p id="results_message"></p>
        </form>
    </div>
</div>

<?php get_footer(); ?>
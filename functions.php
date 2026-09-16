<?php
/*
*<!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
*
*/
add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

function enqueue_theme_styles(){
    wp_enqueue_style('theme-build', get_stylesheet_directory_uri() . '/assets/css/dist/output.css', [], wp_get_theme()->get('Version'));
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com', [], wp_get_theme()->get('Version'));
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com', [], wp_get_theme()->get('Version'));
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', [], wp_get_theme()->get('Version'));

    if(is_page('certificate-order') || is_page('redeem-voucher')):
        wp_enqueue_style('certificate-order', get_stylesheet_directory_uri() . '/assets/css/certificate.css', [], wp_get_theme()->get('Version'));
    endif;

    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11', true);

    if(is_page('home')):
        wp_enqueue_script('home', get_stylesheet_directory_uri() . '/assets/js/home.js', [], wp_get_theme()->get('Version'), true);
    endif;

    if(is_page('certificate-order')):
        wp_enqueue_script('certificate-order', get_stylesheet_directory_uri() . '/assets/js/certificate.js', [], wp_get_theme()->get('Version'), true);
        wp_localize_script('certificate-order', 'certificateObj', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('certificate_nonce')
        ]);
    endif;

    if(is_page('redeem-voucher')):
        wp_enqueue_script('voucher-redeem', get_stylesheet_directory_uri() . '/assets/js/voucher.js', [], wp_get_theme()->get('Version'), true);
        wp_localize_script('voucher-redeem', 'voucherObj', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('voucher_nonce')
        ]);
    endif;
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

function certificate_ajax(){
    check_ajax_referer('certificate_nonce', 'security');

    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['course_name'])):
        wp_send_json_error([
            'message' => 'Missing fields. Name, Email, and Course Name are required'
        ]);
    endif;

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $course_name = sanitize_text_field($_POST['course_name']);

    if (!is_email($email)) {
        wp_send_json_error([
            'message' => 'Please enter a valid email address.'
        ]);
    }

    if ($name === '' || $course_name === '') {
        wp_send_json_error([
            'message' => 'All fields are required.'
        ]);
    }

    $to = "forms@upskillingacademy.co.uk";
    $subject = "Upskilling Academy - You've received a certificate order";
    $message = "
    <p>The details of the request are:</p>
    <ul>
        <li>Name: " . $name . "</li>
        <li>Email: " . $email . "</li>
        <li>Course Name: " . $course_name . "</li>
    </ul>
    ";
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Upskilling Academy <info@upskillingacademy.co.uk>'
    ];

    $sent = wp_mail($to, $subject, $message, $headers);

    if($sent):
        wp_send_json_success([
            'message' => 'Thank you for your submission. We will send you the certificate to your email in 24-48 hours.',
            'name' => $name,
            'email' => $email,
            'course' => $course_name
        ]);
    else:
        wp_send_json_error([
            'message' => 'Something went wrong. Please try again.'
        ]);
    endif;
}
add_action('wp_ajax_certificate_action', 'certificate_ajax');
add_action('wp_ajax_nopriv_certificate_action', 'certificate_ajax');


function voucher_ajax(){
    check_ajax_referer('voucher_nonce', 'security');

    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['voucher_code']) || !isset($_POST['security_code'])):
        wp_send_json_error([
            'message' => 'Missing fields. Name, Email, Voucher Code, and Security Code are all required'
        ]);
    endif;

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $voucher_code = sanitize_text_field($_POST['voucher_code']);
    $security_code = sanitize_text_field($_POST['security_code']);

    if (!is_email($email)) {
        wp_send_json_error([
            'message' => 'Please enter a valid email address.'
        ]);
    }

    if ($name === '' || $email === '' || $voucher_code === '' || $security_code === '') {
        wp_send_json_error([
            'message' => 'All fields are required.'
        ]);
    }

    $to = "forms@upskillingacademy.co.uk";
    $subject = "Upskilling Academy - You've received a voucher redemption";
    $message = "
    <p>The details of the request are:</p>
    <ul>
        <li>Name: " . $name . "</li>
        <li>Email: " . $email . "</li>
        <li>Voucher Code: " . $voucher_code . "</li>
        <li>Security Code: " . $security_code . "</li>
    </ul>
    ";
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Upskilling Academy <info@upskillingacademy.co.uk>'
    ];

    $sent = wp_mail($to, $subject, $message, $headers);

    if($sent):
        wp_send_json_success([
            'message' => 'Thank you for your submission. We will verify the voucher and send the details to your email in 24-48 hours.',
            'name' => $name,
            'email' => $email,
            'voucher' => $voucher_code
        ]);
    else:
        wp_send_json_error([
            'message' => 'Something went wrong. Please try again.'
        ]);
    endif;
}
add_action('wp_ajax_voucher_action', 'voucher_ajax');
add_action('wp_ajax_nopriv_voucher_action', 'voucher_ajax');
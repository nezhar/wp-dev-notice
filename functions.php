<?php

# Load notice styles
function wp_dev_notice_styles() {
    wp_enqueue_style( 'wp-dev-notice', plugins_url('wp-dev-notice.css',__FILE__ ) );
}

# Inject notice markup
function wp_dev_notice_scripts() {
    $wpDevNoticeMessage =  (defined('WP_DEV_NOTICE_MESSAGE')) ? WP_DEV_NOTICE_MESSAGE : 'You are working on a dev environment';
    $wpDevNoticeClass =  (defined('WP_DEV_NOTICE_CLASS')) ? WP_DEV_NOTICE_CLASS : 'wp-dev-notice wp-dev-notice-warning';
    echo "<script>document.body.innerHTML += \"<div class='{$wpDevNoticeClass}'>{$wpDevNoticeMessage}</div>\";</script>";
}

# Display notice in frontend
if (!defined('WP_DEV_NOTICE_HIDE_IN_FRONTEND') or !WP_DEV_NOTICE_HIDE_IN_FRONTEND) {
    add_action( 'wp_enqueue_scripts', 'wp_dev_notice_styles', 999 );
    add_action( 'wp_footer', 'wp_dev_notice_scripts', 999 );
}

# Display notice in backend
if (!defined('WP_DEV_NOTICE_HIDE_IN_BACKEND') or !WP_DEV_NOTICE_HIDE_IN_BACKEND)  {
    add_action( 'admin_enqueue_scripts', 'wp_dev_notice_styles', 999 );
    add_action( 'admin_footer', 'wp_dev_notice_scripts', 999 );
}

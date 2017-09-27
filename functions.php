<?php

# Load notice styles
function wp_dev_notice_styles() {
    wp_enqueue_style( 'wp-dev-notice', plugins_url('wp-dev-notice.css',__FILE__ ) );
}

# Inject notice
function wp_dev_notice_scripts(){
  ?>
  <script>
    document.body.innerHTML += "<div class='<?php echo WP_DEV_NOTICE_CLASS; ?>'><?php echo WP_DEV_NOTICE_MESSAGE; ?></div>";
  </script>
  <?php
}

# Display notice in frontend
if (!WP_DEV_NOTICE_HIDE_IN_FRONTEND) {
    add_action( 'wp_enqueue_scripts', 'wp_dev_notice_styles' );
    add_action( 'wp_footer', 'wp_dev_notice_scripts' );
}

# Display notice in backend
if (!WP_DEV_NOTICE_HIDE_IN_BACKEND) {
    add_action( 'admin_enqueue_scripts', 'wp_dev_notice_styles' );
    add_action( 'admin_footer', 'wp_dev_notice_scripts' );
}

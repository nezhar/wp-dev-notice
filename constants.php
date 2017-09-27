<?php

# Ovewrite the notice message
if (!defined('WP_DEV_NOTICE_MESSAGE')) {
    define('WP_DEV_NOTICE_MESSAGE', 'You are working on a dev environment');
}

# Ovewrite the notice display classes
if (!defined('WP_DEV_NOTICE_CLASS')) {
    define('WP_DEV_NOTICE_CLASS', 'wp-dev-notice wp-dev-notice-warning');
}

# Hide notice in frontend
if (!defined('WP_DEV_NOTICE_HIDE_IN_FRONTEND')) {
    define('WP_DEV_NOTICE_HIDE_IN_FRONTEND', false);
}

# Hide notice in backend
if (!defined('WP_DEV_NOTICE_HIDE_IN_BACKEND')) {
    define('WP_DEV_NOTICE_HIDE_IN_BACKEND', false);
}

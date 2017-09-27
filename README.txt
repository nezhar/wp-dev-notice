=== WP Dev Notice ===
Contributors: nezhar
Tags: notice, development
License: MIT

A WordPress plugin that displays a notification if you are working in a development environment

== Description ==
A WordPress plugin that displays a notification if you are working on a dev environment

You can configure the message that the notice displays, and the notice CSS class. The plugin comes with 3 notice levels:

* wp-dev-notice-info
* wp-dev-notice-warning
* wp-dev-notice-danger

== Installation ==
Install and activate the plugin. Overite the defaults in the wp-config.php if required.

	define('WP_DEV_NOTICE_MESSAGE', 'You are working on a dev environment');
	define('WP_DEV_NOTICE_CLASS', 'wp-dev-notice wp-dev-notice-warning');
	define('WP_DEV_NOTICE_HIDE_IN_FRONTEND', false);
	define('WP_DEV_NOTICE_HIDE_IN_BACKEND', false);

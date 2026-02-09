=== Easy Increase Upload Limit ===
Contributors: oleraj09
Tags: upload limit, increase upload, file size, media library, admin
Requires at least: 5.0
Tested up to: 6.9
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily increase the WordPress upload size limit dynamically from the admin dashboard without touching server configuration files.

== Description ==

**Easy Increase Upload Limit** allows you to increase the maximum file upload size for your WordPress site directly from the dashboard. This is perfect for shared hosting environments where you don't have access to `php.ini` or `.htaccess` files.

### Key Features
*   **Simple Interface**: Just enter the desired limit in MB.
*   **No Coding**: No need to edit config files.
*   **Safe**: Uses standard WordPress filters to adjust the upload limit.
*   **Lightweight**: Minimal code, maximum performance.

== Installation ==

1.  Upload the plugin files to the `/wp-content/plugins/easy-increase-upload-limit` directory, or install the plugin through the WordPress plugins screen directly.
2.  Activate the plugin through the 'Plugins' screen in WordPress.
3.  Go to Settings -> Upload Limit to set your desired file size limit.

== Frequently Asked Questions ==

= Does this work on all hosts? =
It works on most hosting environments. However, some hosts have hard limits set at the server level (e.g., in `php.ini` or Nginx config) that cannot be overridden by WordPress plugins. If this plugin doesn't work, you may need to contact your hosting provider.

= How do I use it? =
Navigate to **Settings > Upload Limit** in your WordPress dashboard, enter the size in Megabytes (MB), and click Save Changes.

== Changelog ==

= 1.0.0 =
*   Initial release.

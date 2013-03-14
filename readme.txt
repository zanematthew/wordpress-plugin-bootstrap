===  WordPress Plugin Bootstrap ===

Contributors: Zane Matthew
Donate link:
Tags:
Requires at least: latest
Tested up to: latest
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
This boilerplate attempts to cut down on the number of repetitive steps needed
to get a solid WordPress plugin up and running.

With this bootstrapping approach you no longer have to write code that does the following:

1. Add the plugin version number to the database (activation)
1. Remove the plugin version number from the database (de-activation)
1. Creates admin-tags.php (auto included)
1. Creates template-tags.php (auto included)
1. Creates functions.php (auto included)
1. Creates style.css (auto registered)
1. Creates script.css (auto registered)
1. Creates a readme.txt (template)

*Note the file structure and naming convention is based solely on the WordPress
directory structure. With the exception of `wp-includes/` being shorten to `inc/`
and losing the prefix.*

This plugin derives your Plugin Version Number and Plugin Name from your [WordPress Plugin File Headers](https://codex.wordpress.org/Writing_a_Plugin#File_Headers).


== Installation ==
1. Download the plugin
1. Rename the folder `zm-plugin-bootstrap/` to `my-awesome-plugin/`
1. Open plugins.php and fill out the plugin name, description, version, etc.
1. Go to the WordPress admin an activate your plugin, you'll see that the following files are created:
`my-plugin/admin/admin-tags.php`
`my-plugin/inc/template-tags.php`
`my-plugin/inc/functions.php`
`my-plugin/inc/js/script.js`
`my-plugin/inc/css/style.css`

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 0.1-alpha =
* Initial release
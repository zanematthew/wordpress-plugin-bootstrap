Description
===========

This is a basic boilerplate plate for creating a WordPress plugin. At most all this plugin
does is derive your version number and plugin name from your plugin headers, add/remove the plugin version
number from the database during activation/deactivation, and auto-include useful files (functions.php,
admin-tags.php, template-tags.php).


Features
========

* Dynamically adds the plugin version number to the WordPress options table on activation
* Removes the plugin version number from the WordPress options table on de-activation
* Dynamically includes useful files if they exists:
    * functions.php // Shared functions between admin and templates
    * admin-tags.php // Functions used only on the WordPress admin
    * template-tags.php // Functions used only in WordPress themes


Usage
=====

1. Download to wp-content/plugins/
1. Rename the folder `zm-plugin-boilerplate/` to the name of your plugin
1. Open the file plugin.php
1. Edit the plugin headers, i.e., Name, Version, Description, etc.
1. Verify in the WordPress options table that the version number is saved with the key will be "zm_plugin_boiler_plate"
1. Start developing...
** When the plugin is deactivate the entry for the version number will be removed. **


Requirements
============

* WordPress (Latest)


Where To Get Help
=================

http://wordpress.org/extend/plugins/about/readme.txt
http://zanematthew.com/blog/autonomy-of-a-plugin


Contributing, Bugs, Features
============================

Fork, Pull, Star, Add Issues, etc.


Authors
=======

**Zane Matthew**

* [http://twitter.com/zanematthew](http://twitter.com/zanematthew)
* [http://github.com/zanematthew](http://github.com/zanematthew)
* [http://zanematthew.com](http://zanematthew.com)


Copyright and license
=====================

Copyright 2013 Zane Matthew

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
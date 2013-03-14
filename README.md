Description
===========

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

**Note the file structure and naming convention is based solely on the WordPress
directory structure. With the exception of `wp-includes/` being shorten to `inc/`
and losing the prefix.**

This plugin derives your Plugin Version Number and Plugin Name from your [WordPress Plugin File Headers](https://codex.wordpress.org/Writing_a_Plugin#File_Headers).


Features
========

* Dynamically adds the Plugin Version Number to the WordPress options table on activation
* Removes the Plugin Version Number from the WordPress options table on de-activation
* Dynamically includes useful files if they exists:
    * functions.php // Shared functions between admin and templates
    * admin-tags.php // Functions used only on the WordPress admin
    * template-tags.php // Functions used only in WordPress themes


Usage
=====

1. Download to wp-content/plugins/
1. Rename the folder `zm-plugin-bootstrap/` to the name of your plugin
1. Open the file plugin.php
1. Edit the plugin headers, i.e., Name, Version, Description, etc.
1. Open functions.php add shared code between the admin and theme
1. Open admin-tags.php add code only to be used on the admin
1. Open template-tags.php add code to be used only by the theme
** When the plugin is deactivate the entry for the version number will be removed. **


Requirements
============

* WordPress (Latest)


Where To Get Help
=================

* http://zanematthew.com/blog/plugins/zm-plugin-bootstrap/
* [http://twitter.com/zanematthew](http://twitter.com/zanematthew)

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

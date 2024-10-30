=== InsiderData360 Express Installer ===
Contributors: InsiderData360
Tags : insiderdata360 express installer, plugin
Requires at least : 4.7
Tested up to : 5.2
Requires PHP : 5.2.4
Stable tag : 1.0.0
License: LGPL v2.1
License URI: http://www.gnu.org/licenses/lgpl-2.1.html

== Description ==

When activated this plugin will insert the InsiderData360 initialization code to the header of your website. If you deactivate it, the code will not be placed anywhere on your website
Developer Note: This uses the wp_head hook to insert or not insert the initialization code upon rendering the closing </head> tag
Since we are using a hook to initialize our plugin, we do not need to include a remove_insiderData360_init_code method
because once the user disables the plugin this code will not run and nothing is hooked.

== Installation ==

This section describes how to install the plugin and get it working.
If you have the .zip or .rar file you can extract the contents of the file 
into your wp/wp-content/plugins folder. Once extracted, you will be able to enable the plugin
via the wordpress admin dashboard.

== Changelog ==

= 1.0.0 (July 2, 2019) =
*[Bug-Fix] formatted correct readme file.


== Frequently Asked Questions ==
1. How do I uninstall this plugin?
*** Once you deactivate the plugin the initialization code will no longer be rendered on your website. ***
2. What do I do if I have deleted the plugin?
*** You can either download it from the wordpress plugin repository at wordpress.com/plugins/ by searching InsiderData360 OR
you can download the .zip or .rar file from this website  https://insiderdata360analytics.com/ ***


== Screenshots ==

** (July 2, 2019) No Available screenshots at this time **

== Upgrade Notice ==

= 1.0.0 =
Upgrade notices describe the reason a user should upgrade. 
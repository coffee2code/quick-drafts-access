=== Quick Drafts Access ===
Contributors: coffee2code
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6ARCFJ9TX3522
Tags: draft, drafts, admin, menu, multiuser, post, page, post_type, shortcut, coffee2code
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 4.6
Tested up to: 5.8
Stable tag: 2.2.4

Adds links to 'All Drafts' and 'My Drafts' under Posts, Pages, and other custom post type sections in the admin menu.


== Description ==

By default in WordPress, accessing the drafts listing of any given post type (including posts and pages) in the admin requires multiple clicks. Then filtering the drafts listing by a particular user (generally to view only your drafts) additionally requires some non-obvious manual URL hacking.

This plugin allows you one click access to all drafts, as well as to just your drafts, of each post type via the main admin menu.

In addition, the plugin provides a count of the number of current drafts for that post type in the link (i.e. the link could read "All Drafts (3)" to indicate there are three drafts for that post type, and "My Drafts (1)" to indicate you only have one draft for that post type).

When the user is responsible for all of the drafts of a given post type (and the "My Drafts" link is not disabled via a hook) then only the "My Drafts" links will appear. It would be redundant to show both the "All Drafts" and "My Drafts" links in this situation. This behavior also ensures only one link is present for single-author blogs.

Also, the draft link(s) only appear for users who have the capability to edit posts of that post type.

The plugin hides the two types of draft links when no related drafts for that post type are present. See the Filters section for how to override this behavior. Filters are also provided to disable the plugin from ever showing the "All Drafts" or the "My Drafts" links.

On plugin admin listings of only draft posts, this plugin also adds a dropdown above the table that allows for the listing to be filtered by the selected draft author. (Only users who actually have a draft post are included in the dropdown.)

Links: [Plugin Homepage](https://coffee2code.com/wp-plugins/quick-drafts-access/) | [Plugin Directory Page](https://wordpress.org/plugins/quick-drafts-access/) | [GitHub](https://github.com/coffee2code/quick-drafts-access/) | [Author Homepage](https://coffee2code.com)


== Installation ==

1. Install via the built-in WordPress plugin installer. Or download and unzip `quick-drafts-access.zip` inside the plugins directory for your site (typically `wp-content/plugins/`)
1. Activate the plugin through the 'Plugins' admin menu in WordPress


== Screenshots ==

1. A screenshot of the main admin menu (with the menu expanded) showing the "All Drafts" and "My Drafts" link (with pending draft counts) for both posts (in the sidebar menu popup) and pages (in the expanded sidebar menu). Note that for pages, the "All Drafts" link is not shown because the current user is responsible for all of the current page drafts.
2. When viewing a listing of drafts, the plugin introduces a dropdown above the posts table that allows filtering the drafts by post author.


== Frequently Asked Questions ==

= Why don't I see an "All Drafts" or "My Drafts" link in my menu after activating the plugin? =

Does that post type have any drafts?  By default, the plugin does NOT display the drafts links if no drafts are present for that post type. This behavior can be overridden (see the Filters section).

The "All Drafts" link is always hidden for users who are responsible for all drafts of a given post type, assuming the "My Drafts" link is configured to be displayed (which it is by default).

= Why don't you show the "All Drafts" and "My Drafts" links for post types that don't have any drafts? =

Like the Posts and Pages admin tables in WordPress, the default behavior of the plugin is to not show the drafts link if none are present for the post type since there isn't anything meaningful to link to. Bear in mind that the behavior can be overridden (see the Filters section).

= For my single author site, isn't it redundant to display both the "All Drafts" and "My Drafts" links since they are effectively identical? =

Yes, which is why the plugin hides the "All Drafts" link when the "My Drafts" link is configured to be displayed (which it is by default) and the user is responsible for all of the drafts for a given post type.


== Developer Documentation ==

Developer documentation can be found in [DEVELOPER-DOCS.md](https://github.com/coffee2code/quick-drafts-access/blob/master/DEVELOPER-DOCS.md). That documentation covers the numerous hooks provided by the plugin. Those hooks are listed below to provide an overview of what's available.

* `c2c_quick_drafts_access_post_types` : Customize the list of post_types for which the draft links will be shown
* `c2c_quick_drafts_access_show_all_drafts_menu_link` : Customize whether the 'All Drafts' link will appear at all for a post type.
* `c2c_quick_drafts_access_show_my_drafts_menu_link` : Customize whether the 'My Drafts' link will appear at all for a post type.
* `c2c_quick_drafts_access_show_if_empty` : Customize whether the 'All Drafts' and/or 'My Drafts' links will appear for a post type _when that post type currently has no drafts_.
* `c2c_quick_drafts_access_disable_filter_dropdown` : removal of the 'Drafts By' dropdown from drafts post list table.


== Changelog ==

= 2.2.4 (2021-03-27) =
* Fix: Fix plugin name defined in README.md
* Change: Note compatibility through WP 5.7+
* Change: Update copyright date (2021)

= 2.2.3 (2020-07-12) =
Highlights:

* This minor release fixes the post type support check to prevent display of dropdown for unsupported post types, adds a TODO.md file, updates a few URLs to be HTTPS, tweaks formatting of output markup, and notes compatibility through WP 5.4+.

Details:

* New: Add TODO.md and move existing TODO list from top of main plugin file into it
* Change: Use HTTPS for link to WP SVN repository in bin script for configuring unit tests
* Change: Note compatibility through WP 5.4+
* Change: Update links to coffee2code.com to be HTTPS
* Change: Unit tests: Remove unnecessary unregistering of hooks and thusly `tearDown()`

= 2.2.2 (2019-12-15) =
* New: Unit tests: Add test to verify plugin hooks `plugins_loaded` action to initialize itself
* Change: Note compatibility through WP 5.3+
* Change: Update copyright date (2020)

_Full changelog is available in [CHANGELOG.md](https://github.com/coffee2code/quick-drafts-access/blob/master/CHANGELOG.md)._


== Upgrade Notice ==

= 2.2.4 =
Trivial update: noted compatibility through WP 5.7+ and updated copyright date (2021)

= 2.2.3 =
Minor update: Fixed post type support check to prevent display of dropdown for unsupported post types, added TODO.md file, updated a few URLs to be HTTPS, tweaked formatting of output markup, and noted compatibility through WP 5.4+.

= 2.2.2 =
Trivial update: noted compatibility through WP 5.3+ and updated copyright date (2020)

= 2.2.1 =
Trivial update: modernized unit tests, added screenshot for draft author filter dropdown, and noted compatibility through WP 5.2+

= 2.2 =
Minor update: added dropdown to filter listing of drafts by author, noted compatibility through WP 5.1+, updated copyright date (2019), and more.

= 2.1.1 =
Trivial update: ensured filtered values are booleans, added README.md, noted compatibility through WP 4.9+, and updated copyright date (2018)

= 2.1 =
Minor update: noted compatibility through WP 4.7+, dropped compatibility with versions of WP older than 4.6, and updated copyright date

= 2.0.2 =
Trivial update: adjustments to utilize language packs, minor unit test tweaks, noted compatibility through WP 4.4+, and updated copyright date

= 2.0.1 =
Minor update: minor security hardening; actually load textdomain; noted compatibility through WP 4.3+

= 2.0 =
Substantial update: now there is the potential for 'All Drafts' and/or 'My Drafts' menu links; added localization support; noted compatibility through WP 4.1+; more

= 1.1.4 =
Trivial update: noted compatibility through WP 3.8+

= 1.1.3 =
Trivial update: noted compatibility through WP 3.5+

= 1.1.2 =
Trivial update: noted compatibility through WP 3.4+; explicitly stated license

= 1.1.1 =
Trivial update: noted compatibility through WP 3.3+; updated screenshots

= 1.1 =
Moderate update: noted compatibility through WP 3.2+; dropped support for versions of WP older than 3.1; improved internationalization support

= 1.0.2 =
Trivial update: add link to plugin homepage to description in readme.txt

= 1.0.1 =
Trivial update: noted compatibility with WP 3.1+ and updated copyright date.

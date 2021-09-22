# Developer Documentation

## Hooks

The plugin exposes a number of filters for hooking. Code using these filters should ideally be put into a mu-plugin or site-specific plugin (which is beyond the scope of this readme to explain). Less ideally, you could put them in your active theme's functions.php file.

### `c2c_quick_drafts_access_post_types` _(filter)_

The `c2c_quick_drafts_access_post_types` filter allows you to customize the list of post_types for which the draft links will be shown. By default, draft links will be shown for all public post types, which includes the default post types of 'post' and 'page'. If other post types have been added to your site, they will also automatically be taken into consideration. If you want to explicitly add or remove particular post types, use this filter.

#### Arguments:

* **$post_types** _(array)_: Array of post type objects

#### Example:

```php
/**
 * Prevents the drafts menu link(s) from being displayed for the 'event' post type.
 *
 * @param array  $post_types The post types that will show drafts menu links by default.
 * @return array
 */
function my_qda_mods( $post_types ) {
    $acceptable_post_types = array();
    foreach ( (array) $post_types as $post_type ) {
        // Don't show the Drafts link for 'event' post type
        if ( ! in_array( $post_type->name, array( 'event' ) ) ) {// More post types can be added to this array
            $acceptable_post_types[] = $post_type;
        }
    }
    return $acceptable_post_types;
}
add_filter( 'c2c_quick_drafts_access_post_types', 'my_qda_mods' );
```

### `c2c_quick_drafts_access_show_all_drafts_menu_link` _(filter)_

The `c2c_quick_drafts_access_show_all_drafts_menu_link` filter allows you to customize whether the 'All Drafts' link will appear at all for a post type. If true, then the 'c2c_quick_drafts_access_show_if_empty' filter would ultimately determine if the link should appear based on the presence of actual drafts.

#### Arguments:

* **$show** _(bool)_: The default boolean indicating if the 'All Drafts' link should be shown at all. Default is truee.
* **$post_type** _(object)_: The post_type object

#### Example:

```php
// Completely disable the 'All Drafts' link for all post types.
add_filter( 'c2c_quick_drafts_access_show_all_drafts_menu_link', '__return_false' );
```

### `c2c_quick_drafts_access_show_my_drafts_menu_link` _(filter)_

The `c2c_quick_drafts_access_show_my_drafts_menu_link` filter allows you to customize whether the 'My Drafts' link will appear at all for a post type. If true, then the `c2c_quick_drafts_access_show_if_empty` filter would ultimately determine if the link should appear based on the presence of actual drafts.

#### Arguments:

* **$show** _(bool)_: The default boolean indicating if the 'My Drafts' link should be shown at all. Default is truee.
* **$post_type** _(object)_: The post_type object

#### Example:

```php
// Completely disable the 'My Drafts' link for all post types.
add_filter( 'c2c_quick_drafts_access_show_my_drafts_menu_link', '__return_false' );
```

### `c2c_quick_drafts_access_show_if_empty` _(filter)_

The `c2c_quick_drafts_access_show_if_empty` filter allows you to customize whether the 'All Drafts' and/or 'My Drafts' links will appear for a post type _when that post type currently has no drafts_.

#### Arguments:

* **$show** _(bool)_: The default boolean indicating if the Drafts link should be shown if the post type does not have any drafts. Default is false.
* **$post_type_name** _(string)_: The post_type name
* **$post_type** _(object)_: The post_type object
* **$menu_type** _(string)_: The type of draft menu link. Either 'all' for 'All Drafts' or 'my' for 'My Drafts'.

#### Example:

```php
// Show the links to drafts even if no drafts exist for the post type or the user.
add_filter( 'c2c_quick_drafts_access_show_if_empty', '__return_true' );
```

### `c2c_quick_drafts_access_disable_filter_dropdown` _(filter)_

The `c2c_quick_drafts_access_disable_filter_dropdown` filter allowing for removal of the 'Drafts By' dropdown from drafts post list table.

#### Arguments:

* **$disable** _(bool)_: Disable the 'drafts by' dropdown? Default false.
* **$post_type** _(string)_: The post type slug.

#### Example:

```php
// Hide the dropdown filter for draft authors above the admin post listing
// table in draft views.
add_filter( 'c2c_quick_drafts_access_disable_filter_dropdown', '__return_true' );
```

<?php

include("inc/class-enqueue-css-js.php");
new Enqueue();

include("inc/theme-option/class-theme-support.php");
new MoonCart_theme_support();


include("inc/theme-option/class-theme-option.php");
new MoonCart_theme_options();

include("inc/theme-option/class-customizer.php");
new MoonCart_customizer();

include("inc/theme-option/class-setting-api.php");
new MoonCart_setting_api();

include("inc/theme-option/custom-post-type.php");
new MoonCart_custom_post_type();


// // Function to register the settings section and field
// function my_custom_settings() {
//     // Add a new section to the General Settings page
//     add_settings_section(
//         'custom_settings_section',
//         __('Custom Settings Section', 'your-theme-slug'),
//         'my_custom_settings_section_callback',
//         'general'
//     );

//     // Register a new setting
//     register_setting('general', 'custom_text_field', 'esc_attr');

//     // Add a new field to the Custom Settings section
//     add_settings_field(
//         'custom_text_field',
//         __('Custom Text Field', 'your-theme-slug'),
//         'my_custom_text_field_callback',
//         'general',
//         'custom_settings_section'
//     );
// }
// add_action('admin_init', 'my_custom_settings');

// // Callback function to display the custom settings section
// function my_custom_settings_section_callback() {
//     echo '<p>'.__('This is a custom settings section.', 'your-theme-slug').'</p>';
// }

// // Callback function to display the custom text field
// function my_custom_text_field_callback() {
//     $value = get_option('custom_text_field', '');
//     echo '<input type="text" id="custom_text_field" name="custom_text_field" value="' . esc_attr($value) . '" />';
// }


<?php

//  * Plugin Name: Cool New Plugin
//  * Author: Nat
//  * Version: 1.0.0


add_action('admin_menu', 'ourPluginSettingsLink');

function ourPluginSettingsLink() {
    add_options_page('Word Count Settings', 'Word Count', 'manage_options', 'word-count-settings-page', 'ourSettingsPageHTML');
}

function ourSettingsPageHTML() { ?>
    Hello World from new plugin.
<?php }

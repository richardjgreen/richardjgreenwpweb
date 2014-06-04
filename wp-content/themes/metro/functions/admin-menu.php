<?php
	/*
	 * The options file, configures the admin options panel.
	 * This allows theme users to setup their Twitter and LinkedIn accounts,
	 * and additionally allows you to control the theme colour. 
	 * *
	 * @package WordPress
	 * @subpackage Metro
	 */

add_action('admin_menu', 'metro_theme_admin_menu');

function metro_theme_admin_menu() {
	add_options_page('Metro Theme', 'Metro Theme', 'manage_options', 'metrooptions', 'metro_options_page');
}

function metro_options_page() {
?>
	<div id="metro-options-page-wrapper">
	<div class="icon32" id="icon-themes">
	<br />
	</div><!-- #icon32 -->
	<h2>Metro Theme Customisation Options</h2>
	<form method="post" actions="options.php">
	<?php settings_fields('metro_options'); ?>
	<?php do_settings_sections('metrooptions'); ?>
	<br />	
	<input name="Submit" class="button-primary" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
	</form>
	</div><!-- #metro-options-page-wrapper -->

<?php
}
add_action('admin_init', 'plugin_admin_init');

function plugin_admin_init() {
	register_setting('metro_options', 'metro_settings', 'metro_options_validate');
	add_settings_section('metro_theme_group', 'Theme Settings', 'metro_theme_group_callback', 'metrooptions');
	add_settings_field('metro_option_theme_colour', 'Theme Colour', 'metro_option_theme_colour_string', 'metrooptions', 'metro_theme_group');
	add_settings_field('metro_option_theme_base', 'Theme Base Colour', 'metro_option_theme_base_string', 'metrooptions', 'metro_theme_group');
	add_settings_field('metro_option_theme_pickable', 'Allow Viewer Selectable Theme', 'metro_option_theme_pickable_string', 'metrooptions', 'metro_theme_group');
	add_settings_section('metro_user_group', 'User Settings', 'metro_user_group_callback', 'metrooptions');
	add_settings_field('metro_option_user_twitter', 'Your Twitter URL', 'metro_option_user_twitter_string', 'metrooptions', 'metro_user_group');
	add_settings_field('metro_option_user_linkedin', 'Your LinkedIn URL', 'metro_option_user_linkedin_string', 'metrooptions', 'metro_user_group');
	add_settings_field('metro_option_user_about', 'Your About Page URL', 'metro_option_user_about_string', 'metrooptions', 'metro_user_group');
	add_settings_field('metro_option_user_contact', 'Your Contact Page URL', 'metro_option_user_contact_string', 'metrooptions', 'metro_user_group');
}

function metro_option_theme_colour_string() {
	$options = get_option('metro_settings');
	echo "<select id='metro_option_theme_colour' name='metro_settings[theme_colour]' size='1' value='{$options['theme_colour']}' />
				<option value='metro-blue.css'>Metro Blue</option>
				<option value='metro-brown.css'>Metro Brown</option>
				<option value='metro-green.css'>Metro Green</option>
				<option value='metro-lime.css'>Metro Lime</option>
				<option value='metro-magenta.css'>Metro Magenta</option>
				<option value='metro-mango.css'>Metro Mango</option>
				<option value='metro-pink.css'>Metro Pink</option>
				<option value='metro-purple.css'>Metro Purple</option>
				<option value='metro-red.css'>Metro Red</option>
				<option value='metro-teal.css'>Metro Teal</option>
		<p>This option will configure the default colour for the Metro Theme on your blog site.<br />
		The colours available are taken from those available in the Windows Phone 7 Mango Update.</p>";
}

function metro_option_theme_base_string() {
	$options = get_option('metro_settings');
	echo "<select id='metro_option_theme_base' name='metro_settings[theme_base]' size='1' value='{$options['theme_base']}' />
				<option value='metro-light.css'>Light</option>
				<option value='metro-dark.css'>Dark</option>
		<p>This option will configure the base colour for the Metro Theme on your blog site.<br />
		The <strong>Light</strong> option will apply a white base colour, while the <strong>Dark</strong> option will apply a black base colour.</p>";
}

function metro_option_theme_pickable_string() {
	$options = get_option('metro_settings');
	echo "<input id='metro_option_theme_pickable' name='metro_settings[theme_pickable]' size='5' type='checkbox' checked='checked' value='{$options['theme_pickable']}' />
	<p>This option will determine whether or not the viewer can change the theme using client-side alternate CSS stylesheets. This setting only applies to the colour and not the base light or dark selection.<br />
	The default option for this is <strong>True</strong>.</p>";
}

function metro_option_user_twitter_string() {
	$options = get_option('metro_settings');
	echo "<input id='metro_option_user_twitter' name='metro_settings[user_twitter]' size='50' type='text' value='{$options['user_twitter']}' />
	<p>The Twitter URL should be formed http://twitter.com/<strong>username</strong>, where username is your Twitter account name.</p>";
}

function metro_option_user_linkedin_string() {
	$options = get_option('metro_settings');
	echo "<input id='metro_option_user_linkedin' name='metro_settings[user_linkedin]' size='50' type='text' value='{$options['user_linkedin']}' />
	<p>The LinkedIn URL should be formed as shown on your LinkedIn profile, for example http://linkedin.com/in/<strong>username</strong>.</p>";
}

function metro_option_user_about_string() {
	$options = get_option('metro_settings');
	echo "<input id='metro_option_user_about' name='metro_settings[user_about]' size='40' type='text' value='{$options['user_about']}' />
	<p>Enter the portion of the URL which comes after index.php in your WordPress URL which points to your about page.</p>
	<p><strong>NOTE:</strong> If you are using pretty URLs through permalink modifications then your URL may not contain the index.php portion,<br />
	and you should only therefore include the portion shown after the domain name for your blog site.</p>";
}

function metro_option_user_contact_string() {
	$options = get_option('metro_settings');
	echo "<input id='metro_option_user_contact' name='metro_settings[user_contact]' size='40' type='text' value='{$options['user_contact']}' />
	<p>Enter the portion of the URL which comes after index.php in your WordPress URL which points to your about page.</p>
	<p><strong>NOTE:</strong> If you are using pretty URLs through permalink modifications then your URL may not contain the index.php portion,<br />
	and you should only therefore include the portion shown after the domain name for your blog site.</p>";
}

function metro_options_validate($input) {
	$newinput['theme_colour'] = trim($input['theme_colour']);
	if (!preg_match("/metro/i", $options['theme_colour'])) {
		$options['theme_colour'] = '';
	} else {
	$options = get_option('metro_settings');
	wp_die('No Theme Colour was Selected.');
	}
	return $options;
}

function metro_theme_group_callback() {
}

function metro_user_group_callback() {
}
?>
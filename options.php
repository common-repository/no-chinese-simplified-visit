<?php
function no_chinese_simplified_visit_register_settings() {
	add_option('no_chinese_simplified_visit_notice', '对不起，本博客不允许浏览器语言为简体中文的访客浏览。如有不便，尽请谅解！');
	register_setting('no_chinese_simplified_visit_options', 'no_chinese_simplified_visit_notice');
}
add_action('admin_init', 'no_chinese_simplified_visit_register_settings');

function no_chinese_simplified_visit_register_options_page() {
	add_options_page(__('No Chinese Simplified Visit Options Page', NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN), __('No Chinese Simplified Visit', NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN), 'manage_options', NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN.'-options', 'no_chinese_simplified_visit_options_page');
}
add_action('admin_menu', 'no_chinese_simplified_visit_register_options_page');

function no_chinese_simplified_visit_options_page() {
?>
<div class="wrap">
	<h2><?php _e("No Chinese Simplified Visit Options Page", NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN); ?></h2>
	<form method="post" action="options.php">
		<?php settings_fields('no_chinese_simplified_visit_options'); ?>
		<h3><?php _e("General Options", NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN); ?></h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="no_chinese_simplified_visit_notice"><?php _e("Notice For Chinese Simplified Visitor: ", NO_CHINESE_SIMPLIFIED_VISIT_TEXT_DOMAIN); ?></label></th>
					<td>
						<?php wp_editor(get_option("no_chinese_simplified_visit_notice"), "no_chinese_simplified_visit_notice", array('textarea_rows' => 5)); ?>
					</td>
				</tr>
			</table>
		<?php submit_button(); ?>
	</form>
</div>
<?php
}
?>
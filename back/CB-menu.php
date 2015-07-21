<?php
function CB_render() {

	if(isset($_POST['CB-save'])) {
		require 'CB-save.php';
	}

	require 'CB-render.php';
}

function CB_menu() {

	add_menu_page('Cookies banner', 'Cookies banner', 'activate_plugins', 'CB_menu', 'CB_render', 'dashicons-flag');

}
add_action('admin_menu', 'CB_menu');
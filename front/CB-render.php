<?php
$msg_opt = get_option('CB-msg');
$msg_perso_opt = get_option('CB-msg_perso');

$link_opt = get_option('CB-link');
$link_perso_opt = get_option('CB-link_perso');

$place_opt = get_option('CB-place');

$messages = require(plugin_dir_path( __FILE__ ).'../back/_msg.php');
?>
<div id="cookiesBanner" style="<?=$place_opt?>:0;">

	<span class="txt"><?=($msg_opt=='other') ? $msg_perso_opt : $messages[$msg_opt];?></span>

	<a href="<?=($link_opt=='other') ? $link_perso_opt : get_permalink($link_opt);?>" target="_blank" class="btn_plus" id="btn_plus">En savoir plus</a>
	<a href="#ok" class="btn_ok" id="btn_ok">Ok</a>

</div>
<link rel="stylesheet" href="<?=plugins_url('/style.css', __FILE__)?>">
<script src="<?=plugins_url('/app.js', __FILE__)?>"></script>

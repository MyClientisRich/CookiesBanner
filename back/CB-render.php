<?php
$msg_opt = get_option('CB-msg');
$msg_perso_opt = get_option('CB-msg_perso');

$link_opt = get_option('CB-link');
$link_perso_opt = get_option('CB-link_perso');

$place_opt = get_option('CB-place');
?>
<div class="wrap">
	<h2>Cookies banner - Options</h2>

	<br>
	<form action="" method="post">
		<table class="form-table" cellspacing="0">
			<tr>
				<th>
					<label for="msg">Message à afficher</label>
				</th>
				<td>
					<select name="msg" id="msg">
						<?php
						$messages = require('_msg.php');

						foreach($messages as $key => $msg) {

							$selected = ($msg_opt == $key) ? 'selected' : '';

							?>
							<option <?=$selected?> value="<?=$key?>"><?=$msg?></option>
							<?php
						}
						?>
						<option <?=($msg_opt=='other') ? 'selected' : '';?> value="other">-- Message personnalisé --</option>
					</select>
					<input type="text" name="msg_perso" class="perso <?=($msg_opt=='other') ? '' : 'hidden';?>" id="msg_perso" value="<?=$msg_perso_opt?>">
				</td>
			</tr>
			<tr>
				<th style="width: 200px;">
					<label for="link">Lien "En savoir plus"</label>
				</th>
				<td>
					<select name="link" id="link">
						<?php
						$pages = get_posts(['post_type' => 'page']);

						foreach($pages as $page) {

							$selected = $link_opt == $page->ID ? 'selected' : '';

							?>
							<option <?=$selected?> value="<?=$page->ID?>"><?=get_the_title($page->ID)?></option>
							<?php
						}
						?>
						<option <?=($link_opt=='other') ? 'selected' : '';?> value="other">-- Lien personnalisé --</option>
					</select>
					<input type="text" name="link_perso" class="perso <?=($link_opt=='other') ? '' : 'hidden';?>" id="link_perso" value="<?=$link_perso_opt?>">
				</td>
			</tr>
			<tr>
				<th>
					<label for="place">Placement du bandeau</label>
				</th>
				<td>
					<label for="place_haut">
						<input <?=($place_opt=='top') ? 'checked' : '';?> type="radio" name="place" id="place_haut" value="top"> Haut
					</label>
					<label for="place_bas">
						<input <?=($place_opt=='bottom') ? 'checked' : '';?> type="radio" name="place" id="place_bas" value="bottom"> Bas
					</label>
				</td>
			</tr>
		</table>

		<input type="submit" value="Sauvegarder" name="CB-save" class="button button-primary">
	</form>
</div>
<link rel="stylesheet" href="<?=plugins_url('/style.css', __FILE__)?>">
<script src="<?=plugins_url('/app.js', __FILE__)?>"></script>
<?php

$msg = $_POST['msg'];
$msg_perso = trim(strip_tags($_POST['msg_perso']));

$link = $_POST['link'];
$link_perso = trim(strip_tags($_POST['link_perso']));

$place = $_POST['place'];

update_option( 'CB-msg', $msg );
update_option( 'CB-msg_perso', $msg_perso );
update_option( 'CB-link', $link );
update_option( 'CB-link_perso', $link_perso );
update_option( 'CB-place', $place );


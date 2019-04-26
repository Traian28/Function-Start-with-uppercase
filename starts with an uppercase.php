<?php

function star_with_uppercase ($str){
	$chr = mb_substr($str, 0, 1, "UTF-8");
	return mb_strtolower($chr, "UTF-8") != $chr;
}

if (star_with_uppercase("KlKhHlkhola")) {
	echo 'true';
}
else echo 'false';

?>
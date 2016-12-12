<?php

function verifyUrl($url) {
	return $url == filter_var($url, FILTER_VALIDATE_URL);
}

?>

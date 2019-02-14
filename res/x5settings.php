<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'https://www.KGSUniversal.de/',
	'homepage_url' => 'https://www.KGSUniversal.de/home.html',
	'icon' => '',
	'version' => '17.0.12.1',
	'sitename' => 'KGSoftware',
	'lang_code' => 'de-DE',
	'public_folder' => '',
	'salt' => 'lydy1qbferbmu2qeccopcswjefmdb5kkz',
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false,
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Wortprüfung:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_o44mgbex.png',
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);

// End of file x5settings.php
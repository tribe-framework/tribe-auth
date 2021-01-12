<?php
include_once __DIR__ . '/init.php';

if (!$session_user['id']) {
	ob_start();
	header('Location: /user/login');
	die();
}

include_once __DIR__ . '/header.php';

if (($types['webapp']['user_theme'] ?? false)) {
	if (file_exists(THEME_PATH . '/pages/user/index.php')) {
		include_once THEME_PATH . '/pages/user/index.php';
	} elseif (file_exists(THEME_PATH . '/user-index.php')) {
		include_once THEME_PATH . '/user-index.php';
	} else {
		include_once __DIR__ . '/index.php';
	}

} else {
	include_once __DIR__ . '/index.php';
}

include_once __DIR__ . '/footer.php';

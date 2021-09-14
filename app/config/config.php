<?php

$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

define('BASEURL', $base_url);

// DB
define('DB_HOST', 'molte.id');
define('DB_NAME', 'molteid_ibel');
define('DB_USER', 'molteid_root');
define('DB_PASS', '@KumahaAing2019');
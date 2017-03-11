<?php 

$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '' ;

// this configuration path for website
define('PATH', ''); //isi path dari website anda
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page=' . $page);

// this configuration for database website 
define('DB_HOST', '');	// Host yang digunakan
define('DB_USERNAME', ''); // Username host yang digunakan
define('DB_PASSWORD', ''); // PAssword host yang digunakan
define('DB_NAME', ''); // database yang digunakan

 ?>
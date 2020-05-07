<?php
// 制定允许其他域名访问
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:*');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');

defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Memcached settings
| -------------------------------------------------------------------------
| Your Memcached servers can be specified below.
|
|	See: https://codeigniter.com/user_guide/libraries/caching.html#memcached
|
*/
$config = array(
	'default' => array(
		'hostname' => '127.0.0.1',
		'port'     => '11211',
		'weight'   => '1',
	),
);

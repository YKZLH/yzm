<?php
// 制定允许其他域名访问
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:*');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['m3u8/([a-zA-Z0-9]+)/(.+)'] = 'm3u8/$1/$2';
$route['m3u8/(.+)'] = 'm3u8/index/$1';
$route['play/(\d+)'] = 'play/index/$1';
$route['share/([a-zA-Z0-9]+)'] = 'play/index/$1';
if(SELF == 'index.php'){
	$route['default_controller'] = 'home';
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Title
|--------------------------------------------------------------------------
|
| 网站标题
|
*/
$config['title'] = 'sxtech REST api document';

/*
|--------------------------------------------------------------------------
| Version
|--------------------------------------------------------------------------
|
| 版本号码
|
*/
$config['version'] = '0.1.0';

/*
|--------------------------------------------------------------------------
| Menu
|--------------------------------------------------------------------------
|
| 菜单
|
*/
$config['menu'] = [
	['name' => 'overview', 'cname' => '概览', 'version' => '0.1.0', 'builder'=> 'SmellyCat'],
	['name' => 'cgs', 'cname' => '车辆管理', 'version' => '0.1.0', 'builder'=> 'SmellyCat'],
	['name' => 'carrecg', 'cname' => '车型识别', 'version' => '2.3.1', 'builder'=> 'SmellyCat'],
	['name' => 'imgpackage', 'cname' => '图片打包', 'version' => '3.6.2', 'builder'=> 'SmellyCat'],
	['name' => 'kakou', 'cname' => '卡口', 'version' => '0.1.0', 'builder'=> 'SmellyCat']
];
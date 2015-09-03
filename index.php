<?php

require ('Placeholder.class.php');

$path = $_SERVER['REDIRECT_URL'];

// 默认展示帮助页面
if (!$path) {
	die(file_get_contents('help.html'));
}


// 参数数组
$opts = array();

// 从path中提取参数
if (preg_match('/^(.*)\.([a-z]{3,4})$/', $path, $match)) {
	list( , $path, $opts['format']) = $match;
}

list($opts['size'], $opts['bgColor'], $opts['color'], $opts['text']) = explode('/', substr($path, 1) . '///');

// 从query中提取参数
$args = ['width', 'height', 'format', 'text', 'size', 'fontSize', 'color', 'bgColor'];

foreach ($args as $arg) {
	if (isset($_GET[$arg])) {
		$opts[$arg] = $_GET[$arg];
	}
}

// 解码text参数
$opts['text'] = urldecode($opts['text']);

// 把size展开成width和height
$size = $opts['size'];

if (is_numeric($size)) {
	$opts['width'] = $opts['height'] = $size;
} elseif (preg_match('/(\d+)\s*[^\d]+\s*(\d+)/i', $size, $match)) {
	list( , $opts['width'], $opts['height']) = $match;
}

// 更新size和fontSize
if (isset($opts['fontSize'])) {
	$opts['size'] = $opts['fontSize'];
	unset($opts['fontSize']);
} else {
	unset($opts['size']);
}


// 输出图片
$placeholder = new Placeholder($opts);
$placeholder->showImage();
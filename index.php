<?php

require ('Placeholder.class.php');

// 参数数组
$opts = array(
	'width' => '',
	'height' => '',
	'size' => '',
	'format' => '',
	'text' => '',
	'fontSize' => '',
	'color' => '',
	'bgColor' => ''
);

// 如果使用了rewrite，从path中提取参数
if (isset($_SERVER['REDIRECT_URL'])) {
	$path = $_SERVER['REDIRECT_URL'];

	if (preg_match('/^(.*)\.([a-z]{3,4})$/', $path, $match)) {
		list( , $path, $opts['format']) = $match;
	}

	list($opts['size'], $opts['bgColor'], $opts['color'], $opts['text']) = explode('/', substr($path, 1) . '///');
}

// 从query中提取参数
$args = array_keys($opts);

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

// 默认展示帮助页面
if (!$opts['width']) {
	die(file_get_contents('help.html'));
}

// 输出图片
$placeholder = new Placeholder($opts);
$placeholder->showImage();
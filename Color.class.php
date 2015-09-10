<?php

class Color {

	/**
	 * @var array 颜色名称和色值的对应表
	 */
	static private $COLOR_MAP = array(
		'ALICEBLUE'            => 'F0F8FF',
		'ANTIQUEWHITE'         => 'FAEBD7',
		'AQUA'                 => '00FFFF',
		'AQUAMARINE'           => '7FFFD4',
		'AZURE'                => 'F0FFFF',
		'BEIGE'                => 'F5F5DC',
		'BISQUE'               => 'FFE4C4',
		'BLACK'                => '000000',
		'BLANCHEDALMOND'       => 'FFEBCD',
		'BLUE'                 => '0000FF',
		'BLUEVIOLET'           => '8A2BE2',
		'BROWN'                => 'A52A2A',
		'BURLYWOOD'            => 'DEB887',
		'CADETBLUE'            => '5F9EA0',
		'CHARTREUSE'           => '7FFF00',
		'CHOCOLATE'            => 'D2691E',
		'CORAL'                => 'FF7F50',
		'CORNFLOWERBLUE'       => '6495ED',
		'CORNSILK'             => 'FFF8DC',
		'CRIMSON'              => 'DC143C',
		'CYAN'                 => '00FFFF',
		'DARKBLUE'             => '00008B',
		'DARKCYAN'             => '008B8B',
		'DARKGOLDENROD'        => 'B8860B',
		'DARKGRAY'             => 'A9A9A9',
		'DARKGREEN'            => '006400',
		'DARKKHAKI'            => 'BDB76B',
		'DARKMAGENTA'          => '8B008B',
		'DARKOLIVEGREEN'       => '556B2F',
		'DARKORANGE'           => 'FF8C00',
		'DARKORCHID'           => '9932CC',
		'DARKRED'              => '8B0000',
		'DARKSALMON'           => 'E9967A',
		'DARKSEAGREEN'         => '8FBC8F',
		'DARKSLATEBLUE'        => '483D8B',
		'DARKSLATEGRAY'        => '2F4F4F',
		'DARKTURQUOISE'        => '00CED1',
		'DARKVIOLET'           => '9400D3',
		'DEEPPINK'             => 'FF1493',
		'DEEPSKYBLUE'          => '00BFFF',
		'DIMGRAY'              => '696969',
		'DODGERBLUE'           => '1E90FF',
		'FIREBRICK'            => 'B22222',
		'FLORALWHITE'          => 'FFFAF0',
		'FORESTGREEN'          => '228B22',
		'FUCHSIA'              => 'FF00FF',
		'GAINSBORO'            => 'DCDCDC',
		'GHOSTWHITE'           => 'F8F8FF',
		'GOLD'                 => 'FFD700',
		'GOLDENROD'            => 'DAA520',
		'GRAY'                 => '808080',
		'GREEN'                => '008000',
		'GREENYELLOW'          => 'ADFF2F',
		'HONEYDEW'             => 'F0FFF0',
		'HOTPINK'              => 'FF69B4',
		'INDIANRED'            => 'CD5C5C',
		'INDIGO'               => '4B0082',
		'IVORY'                => 'FFFFF0',
		'KHAKI'                => 'F0E68C',
		'LAVENDER'             => 'E6E6FA',
		'LAVENDERBLUSH'        => 'FFF0F5',
		'LAWNGREEN'            => '7CFC00',
		'LEMONCHIFFON'         => 'FFFACD',
		'LIGHTBLUE'            => 'ADD8E6',
		'LIGHTCORAL'           => 'F08080',
		'LIGHTCYAN'            => 'E0FFFF',
		'LIGHTGOLDENRODYELLOW' => 'FAFAD2',
		'LIGHTGRAY'            => 'D3D3D3',
		'LIGHTGREEN'           => '90EE90',
		'LIGHTPINK'            => 'FFB6C1',
		'LIGHTSALMON'          => 'FFA07A',
		'LIGHTSEAGREEN'        => '20B2AA',
		'LIGHTSKYBLUE'         => '87CEFA',
		'LIGHTSLATEGRAY'       => '778899',
		'LIGHTSTEELBLUE'       => 'B0C4DE',
		'LIGHTYELLOW'          => 'FFFFE0',
		'LIME'                 => '00FF00',
		'LIMEGREEN'            => '32CD32',
		'LINEN'                => 'FAF0E6',
		'MAGENTA'              => 'FF00FF',
		'MAROON'               => '800000',
		'MEDIUMAQUAMARINE'     => '66CDAA',
		'MEDIUMBLUE'           => '0000CD',
		'MEDIUMORCHID'         => 'BA55D3',
		'MEDIUMPURPLE'         => '9370DB',
		'MEDIUMSEAGREEN'       => '3CB371',
		'MEDIUMSLATEBLUE'      => '7B68EE',
		'MEDIUMSPRINGGREEN'    => '00FA9A',
		'MEDIUMTURQUOISE'      => '48D1CC',
		'MEDIUMVIOLETRED'      => 'C71585',
		'MIDNIGHTBLUE'         => '191970',
		'MINTCREAM'            => 'F5FFFA',
		'MISTYROSE'            => 'FFE4E1',
		'MOCCASIN'             => 'FFE4B5',
		'NAVAJOWHITE'          => 'FFDEAD',
		'NAVY'                 => '000080',
		'OLDLACE'              => 'FDF5E6',
		'OLIVE'                => '808000',
		'OLIVEDRAB'            => '6B8E23',
		'ORANGE'               => 'FFA500',
		'ORANGERED'            => 'FF4500',
		'ORCHID'               => 'DA70D6',
		'PALEGOLDENROD'        => 'EEE8AA',
		'PALEGREEN'            => '98FB98',
		'PALETURQUOISE'        => 'AFEEEE',
		'PALEVIOLETRED'        => 'DB7093',
		'PAPAYAWHIP'           => 'FFEFD5',
		'PEACHPUFF'            => 'FFDAB9',
		'PERU'                 => 'CD853F',
		'PINK'                 => 'FFC0CB',
		'PLUM'                 => 'DDA0DD',
		'POWDERBLUE'           => 'B0E0E6',
		'PURPLE'               => '800080',
		'REBECCAPURPLE'        => '663399',
		'RED'                  => 'FF0000',
		'ROSYBROWN'            => 'BC8F8F',
		'ROYALBLUE'            => '4169E1',
		'SADDLEBROWN'          => '8B4513',
		'SALMON'               => 'FA8072',
		'SANDYBROWN'           => 'F4A460',
		'SEAGREEN'             => '2E8B57',
		'SEASHELL'             => 'FFF5EE',
		'SIENNA'               => 'A0522D',
		'SILVER'               => 'C0C0C0',
		'SKYBLUE'              => '87CEEB',
		'SLATEBLUE'            => '6A5ACD',
		'SLATEGRAY'            => '708090',
		'SNOW'                 => 'FFFAFA',
		'SPRINGGREEN'          => '00FF7F',
		'STEELBLUE'            => '4682B4',
		'TAN'                  => 'D2B48C',
		'TEAL'                 => '008080',
		'THISTLE'              => 'D8BFD8',
		'TOMATO'               => 'FF6347',
		'TURQUOISE'            => '40E0D0',
		'VIOLET'               => 'EE82EE',
		'WHEAT'                => 'F5DEB3',
		'WHITE'                => 'FFFFFF',
		'WHITESMOKE'           => 'F5F5F5',
		'YELLOW'               => 'FFFF00',
		'YELLOWGREEN'          => '9ACD32',
	);

	/**
	 * @var array RGB数组
	 */
	private $color;

	/**
	 * @var string|array 默认颜色
	 */
	private $defaultColor;


	/**
	 * @param $color string|array 颜色
	 * @param $defaultColor string|array 默认颜色（颜色不合法时使用）
	 */
	function __construct($color, $defaultColor = '') {
		$this->defaultColor = $defaultColor;
		$this->set($color);
	}

	/**
	 * 设置颜色
	 * @param $color string|array 颜色
	 */
	function set($color) {
		$this->color = self::parseColor($color);

		if (!$this->check() && $this->defaultColor && $color != $this->defaultColor) {
			$this->set($this->defaultColor);
		}
	}

	/**
	 * 校验颜色是否合法
	 * @return bool 是否合法
	 */
	function check() {
		return !!$this->color;
	}

	/**
	 * 获取RGB数组
	 * @return array RGB数组
	 */
	function getRGB() {
		return $this->color;
	}

	/**
	 * 获取红色色值
	 * @return int 红色色值
	 */
	function getR() {
		return $this->color[0];
	}

	/**
	 * 获取绿色色值
	 * @return int 绿色色值
	 */
	function getG() {
		return $this->color[1];
	}

	/**
	 * 获取蓝色色值
	 * @return int 蓝色色值
	 */
	function getB() {
		return $this->color[2];
	}

	/**
	 * 获取16进制颜色
	 * @return string 16进制颜色
	 */
	function getHex() {
		return self::RGBToHex($this->color);
	}

	/**
	 * 计算反色
	 * @return Color 反色
	 */
	function getInverse() {
		return new Color(array_map(function($int) {
			return 255 - $int;
		}, $this->color));
	}

	/**
	 * 格式化颜色
	 * @param $color string|array|Color 颜色
	 * @return array|bool 格式化结果 or false
	 */
	static private function parseColor($color) {

		if ($color instanceof Color) {
			return $color->getRGB();
		}

		if (is_array($color)) {
			$legal = array_reduce($color, function($legal, $int) {
				return $legal && is_numeric($int) && $int >=0 && $int <= 255;
			}, true);
			return $legal ? $color : false;
		}

		$color = strtoupper($color);

		// 名称转换色值
		if (isset(self::$COLOR_MAP[$color])) {
			$color = self::$COLOR_MAP[$color];
		}

		// 色值格式转换 0FF -> 00FFFF
		if (preg_match('/^[0-9A-F]{3}$/', $color)) {
			$color = preg_replace('/(.)(.)(.)/', '$1$1$2$2$3$3', $color);
		}

		// 检查是否合法
		if (preg_match('/^[0-9A-F]{6}$/', $color)) {
			return self::hexToRGB($color);
		} else {
			return false;
		}
	}

	/**
	 * 16进制颜色转换
	 * @param $color string 16进制颜色
	 * @return array
	 */
	static private function hexToRGB($color) {
		$color = hexdec($color);

		return array(
			($color & 0xFF0000) >> 16,
			($color & 0x00FF00) >> 8,
			$color & 0x0000FF,
		);
	}

	/**
	 * RGB数组转化为16进制颜色
	 * @param $color array RGB数组
	 * @return string
	 */
	static private function RGBToHex($color) {
		return array_reduce($color, function($hex, $color) {
			return $hex . substr(1, dechex($color | 0x100));
		}, '');
	}
}
<?php

require('Color.class.php');

class Placeholder {

	const MAX_WIDTH = 4096;
	const MAX_HEIGHT = 8192;

	const DEFAULT_WIDTH = 1;
	const DEFAULT_FORMAT = 'png';
	const DEFAULT_COLOR = '969696';
	const DEFAULT_BG_COLOR = 'CCCCCC';

	const CACHE_EXPIRES = 315360000;//60 * 60 * 24 * 365 * 10;

	/**
	 * @var array 允许的格式列表
	 */
	static private $PERMIT_FORMAT = array(
		'png', 'jpg', 'jpeg', 'gif', 'webp'
	);

	/**
	 * @var array 格式映射表
	 */
	static private $FORMAT_MAP = array(
		'jpg' => 'jpeg'
	);

	/**
	 * @var int 图片宽度
	 */
	private $width;

	/**
	 * @var int 图片高度
	 */
	private $height;

	/**
	 * @var string 格式
	 */
	private $format;

	/**
	 * @var string 显示文字
	 */
	private $text;

	/**
	 * @var int 字体大小
	 */
	private $size;

	/**
	 * @var string 字体名称
	 */
	private $font = './fzlthjw.ttf';

	/**
	 * @var Color 字体颜色
	 */
	private $color;

	/**
	 * @var Color 背景颜色
	 */
	private $bgColor;

	function __construct($args = array()) {
		$keys = ['width', 'height', 'format', 'text', 'size', 'color', 'bgColor'];

		foreach ($keys as $key) {
			if (!empty($args[$key])) {
				$this->$key = $args[$key];
			}
		}

		$this->check();
	}

	/**
	 * 检验并修正参数
	 */
	function check() {

		if (!$this->width || !is_numeric($this->width) || $this->width < 0 || $this-> width > self::MAX_WIDTH) {
			$this->width = 1;
		}

		if (!$this->width || !is_numeric($this->height) || $this->height < 0 || $this-> height > self::MAX_HEIGHT) {
			$this->height = $this->width;
		}

		$this->format = strtolower($this->format);
		if (isset(self::$FORMAT_MAP[$this->format])) {
			$this->format = self::$FORMAT_MAP[$this->format];
		} elseif (!in_array($this->format, self::$PERMIT_FORMAT)) {
			$this->format = self::DEFAULT_FORMAT;
		}

		if (!$this->text) {
			$this->text = "{$this->width}×{$this->height}";
		}

		if (!$this->size) {
			if ($this->width / $this->height < 5) {
				$this->size = $this->width / 10;
			} else {
				$this->size = $this->height / 2;
			}

			// 防止文字过小
			if ($this->size < 8) {
				$this->size = min($this->size * 1.5, 8);
			}

			$zoomX = $zoomY = 1;

			// 防止文字超出图片
			$location = $this->getTextLocation();
			if ($location->width > $this->width * 0.8) {
				$zoomX = $this->width / $location->width * 0.8;
			}
			if ($location->height > $this->height * 0.8) {
				$zoomY = $this->height / $location->height * 0.8;
			}

			$this->size *= min($zoomX, $zoomY, 1);
		}

		$this->bgColor = new Color($this->bgColor, self::DEFAULT_BG_COLOR);
		$this->color = new Color($this->color, $this->bgColor->getInverse());
	}

	/**
	 * 显示图片到浏览器
	 */
	function showImage() {
		header('Content-Type: ' . $this->getContentType());
		header('Expires: ' . gmdate('D, d M Y H:i:s', time() + self::CACHE_EXPIRES) . ' GMT');
		die($this->getImage());
	}

	/**
	 * 获取图片
	 * @return string
	 */
	function getImage() {
		$img = imagecreate($this->width, $this->height);

		$bgColor = imagecolorallocate($img, $this->bgColor->getR(), $this->bgColor->getG(), $this->bgColor->getB());
		$color = imagecolorallocate($img, $this->color->getR(), $this->color->getG(), $this->color->getB());

		$location = $this->getTextLocation();
		imagettftext($img, $this->size, 0, $location->x, $location->y, $color, $this->font, $this->text);

		ob_start();

		$func = 'image' . $this->format;
		$func($img);

		$image = ob_get_contents();
		ob_end_clean();

		imagedestroy($img);

		return $image;
	}

	/**
	 * 获取Base64编码后的图片
	 * @return string
	 */
	function getBase64() {
		return 'data:' . $this->getContentType() . ';base64,' . base64_encode($this->getImage());
	}

	/**
	 * 获取图片对应的Content-Type
	 * @return string Content-Type
	 */
	function getContentType() {
		return 'image/' . $this->format;
	}

	/**
	 * 计算文字坐标
	 * @return object {x: int, y: int} 文字左上角坐标
	 */
	private function getTextLocation() {
		list( , , $x2, $y2, , , $x1, $y1) = imagettfbbox($this->size, 0, $this->font, $this->text);

		return (Object)Array(
			'x' => ($this->width - ($x2 - $x1)) / 2,
			'y' => ($this->height - ($y1 + $y2)) / 2,
			'width' => $x2 - $x1,
			'height' => $y2 - $y1
		);
	}
}

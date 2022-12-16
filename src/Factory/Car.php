<?php
namespace Drupestre\Designpattern\Factory;

class Car {
	private $color = null;
	public function __construct() {
		$this->color = "white";
	}
	public function setColor($color) {
		$this->color = $color;
	}
	public function getColor() {
		return $this->color;
	}
}
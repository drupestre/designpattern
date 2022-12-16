<?php

namespace Drupestre\Designpattern\Factory;

class CarFactory {
	public static function getBlueCar() {
		return self::getCar("blue");
	}
	public static function getRedCar() {
		return self::getCar("red");
	}
	private static function getCar($color) {
		$car = new Car();
		$car->setColor($color);
		return $car;
	}
}
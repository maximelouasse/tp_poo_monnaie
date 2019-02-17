<?php

	namespace Devise;

	class Object
	{
		private $name;
		private $quantity;
		private $price;
		private $base;

		public function __construct($name, $quantity, $price, $base)
		{
			$this->name = $name;
			$this->price = $price;
			$this->quantity = $quantity;
			$this->base = $base;
		}

		public function getProperty($nameProperty)
		{
			return $this->$nameProperty;
		}

		public function getTotalObject()
		{
			return $this->price * $this->quantity;
		}
	}
<?php

	namespace Devise;

	class Panier
	{
		private $panier = [];

		public function __construct()
		{

		}

		public function addObject(Object $object)
		{
			$this->panier[] = $object;
		}

		public function getAllObject()
		{
			return $this->panier;
		}

		public function getTotal($devise)
		{
			$somme = 0;

			foreach($this->panier as $object)
			{
				$rate = getRate($object->getProperty('base'), $devise);
				$somme += $object->getTotalObject() * $rate;
			}

			return $somme;
		}

		public function displayTable($devise)
		{
			$table = "<table border='1'>";
			$table .= "<tr>";
			$table .= "<th>Produit</th>";
			$table .= "<th>Quantité</th>";
			$table .= "<th>Prix</th>";
			$table .= "<th>Total</th>";
			$table .= "</tr>";

			foreach($this->panier as $object)
			{
				$baseObject = $object->getProperty('base');

				$table .= "<tr>";
				$table .= "<td>" . $object->getProperty('name') . "</td>";
				$table .= "<td>" . $object->getProperty('quantity') . "</td>";
				$table .= "<td>" . $object->getProperty('price') . " " . getSymbol($baseObject) . "</td>";
				$table .= "<td>" . $object->getProperty('price') * $object->getProperty('quantity') . " " . getSymbol($baseObject) . "</td>";
				$table .= "</tr>";
			}

			$table .= "<tr>";
			$table .= "<td></td>";
			$table .= "<td></td>";
			$table .= "<td><strong>Total en " . getSymbol($devise) . "</strong></td>";
			$table .= "<td>" . round($this->getTotal($devise), 2) . " " . getSymbol($devise) . "</td>";
			$table .= "</tr>";
			$table .= "</table>";

			return $table;
		}
	}
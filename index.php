<?php

	require_once __DIR__ . "/vendor/autoload.php";
	require_once __DIR__ . "/functions.php";

	use Devise\Panier;
	use Devise\Object;

	$panier = new Panier();

	$object1 = new Object('Ducky Channel One 2 TKL Skyline', 1, 99.99, 'EUR');
	$object2 = new Object('Echo (2nd Generation)', 2, 69.99, 'USD');
	$object3 = new Object('Google Home', 6, 109.99, 'USD');

	$panier->addObject($object1);
	$panier->addObject($object2);
	$panier->addObject($object3);

	echo $panier->displayTable('EUR');

	echo '<br>/*******************************************************************************************/<br>';

	$object1->setProperty('quantity', 5);
	$object2->setProperty('name', 'Echo (3nd Generation)');
	$object3->setProperty('base', 'CAD');

	echo $panier->displayTable('EUR');
<?php

	function getRate($base, $devise)
	{
		$rate = 1;

		if($devise != $base)
		{
			$response = file_get_contents('https://api.exchangeratesapi.io/latest?base=' . $base . '');
			$return = json_decode($response);
			$rate = $return->rates->$devise;
		}

		return $rate;
	}

	function getSymbol($devise)
	{
		$symbol = array(
			'EUR' => '€',
			'JPY' => '¥',
			'ISK' => 'kr',
			'CAD' => 'C$',
			'MXN' => '$',
			'CHF' => 'CHF',
			'AUD' => '$',
			'CNY' => '¥',
			'GBP' => '£',
			'USD' => '$',
		);

		return $symbol[$devise];
	}
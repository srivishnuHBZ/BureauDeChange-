<?php

class Converter{

	private $rateValue;

	private $rates = [
		
		'Malaysian Ringgit (MYR)' => 1.0000,
		'US Dollar (USD)' => 0.2406,
		'Europe Euro (EUR)' => 0.2016,
		'Singapore Dollar (SGD)' => 0.3230,
		'Australia Dollar (AUD)' => 0.3168,
		'Indonesia Rupiah (IDR)' => 3476.6844,
		'Bangladesh Taka (BDT)' => 20.4204,
		'Japan Yen (JPY)' => 26.6563,
		'China Yuan (CNY)' => 1.5531,
		'Hong Kong Dollar (HKD)' => 1.8675,
		'South Korea Won (KRW)' => 271.2409,
		
	];

	public function setConvert($amount, $currency_from){
		$this->rateValue = $amount/$this->rates[$currency_from];
	}

	public function getConvert($currency_to){
        return round($this->rates[$currency_to] * $this->rateValue, 4);
	}

	public function getRates(){
		return $this->rates;
	}
}

?>
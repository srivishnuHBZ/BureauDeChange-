<?php

class Converter{

	private $rateValue;

	private $rates = [
		
		'Malaysian Ringgit (MYR)' => 1.0000,
		'US Dollar (USD)' => 4.2150,
		'Europe Euro (EUR)' => 5.0430,
		'Singapore Dollar (SGD)' => 3.1420,
		'Australia Dollar (AUD)' => 3.2210,
		'Indonesia Rupiah (IDR)' => 0.0302,
		'Bangladesh Taka (BDT)' => 5.0770,
		'Japan Yen (JPY)' => 3.8090,
		'China Yuan (CNY)' => 65.300,
		'Hong Kong Dollar (HKD)' => 54.960,
		'South Korea Won (KRW)' => 0.3700,
		
	];

	public function setConvert($amount, $currency_from){
		$this->rateValue = $amount*$this->rates[$currency_from];
	}

	public function getConvert($currency_to){
        return round($this->rates[$currency_to] * $this->rateValue, 4);
	}

	public function getRates(){
		return $this->rates;
	}
}

?>
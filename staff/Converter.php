<?php

class Converter{

	private $rateValue;

	private $rates = [
		
		'Malaysian Ringgit (MYR)' => 1.0000,
		'US Dollar (USD)' => 0.2500,
		'Europe Euro (EUR)' => 0.190,
		'Singapore Dollar (SGD)' => 0.3200,
		'Australia Dollar (AUD)' => 0.3112,
		'Indonesia Rupiah (IDR)' => 3472.2545,
		'Bangladesh Taka (BDT)' => 20.2815,
		'Japan Yen (JPY)' => 26.4652,
		'China Yuan (CNY)' => 1.4031,
		'Hong Kong Dollar (HKD)' => 1.7665,
		'South Korea Won (KRW)' => 270.5628,
		
		
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
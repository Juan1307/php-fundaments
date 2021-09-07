<?php declare(strict_types = 1);
	/**
	 * Class Car php 8.0.1 lasted
	 */
	class Car 
	{
		// colors
		private string $currentColor = 'cyan';
		private array $arrayColors = ['red','white','yellow'];

		// extra
		private int $year = 2000;
		private string $sponsor;

		public string $enterprise = 'Cocacola';

		public function setYear(int|bool $val)
		{
			// var_dump($val);
			$this->year = 	($val === true ) ? 2010 : 
					  		  (($val === false ) ? 2012 : $val); 
		}
		
		public function getYear() : int
		{
			return $this->year;
		}

		public function setColor(string $val)
		{
			if(in_array($val, $this->arrayColors)) {
				$this->currentColor = $val;
			}
		}

		public function getColor() : string
		{
			return $this->currentColor;
		}
	}
	// intancia de clase
	$myCar = new Car();	
	//clone crea una nueva instancia
	$otherCar = clone $myCar; // ( & ) operador de referencia
	// $myCar->enterprise = 'Crami';
	// $myCar = NULL;

	// referencia de clase
	var_dump($myCar === $otherCar);
	var_dump($myCar, $otherCar);


	/*$myCar->setYear(true);
	$myCar->getYear(2011);*/
	// print_r($myCar->setYear(2011));
/*	print_r($myCar->getYear().PHP_EOL);
	print_r($myCar->setColor('asd'));
	print_r($myCar->getColor());

	$obj = ['key' => 'I am the key'.PHP_EOL , 123 => [1,2,4] ];
	$output = $obj['key'] ? : 'not found KEY '; //no sirve error
	print_r($output);
	$output_1 = $obj['1223'] ?? $obj['keay'] ?? 'new 123';
	print_r($output_1);
*/
?>
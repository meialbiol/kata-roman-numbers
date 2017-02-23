<?php 

namespace Kata;

class RomanNumber
{
	protected $number;

	protected $table = [
		1000 => 'M',
		500 => 'D',
		100 => 'C',
		50 => 'L',
		10 => 'X',
		5 => 'V',
		1 => 'I',
	];


	function __construct($number)
	{
		$this->number = $number;
	}

	public function getNumber()
	{
		$romanized = '';

		foreach ($this->table as $numeral => $roman) {
				while ($this->number >= $numeral) {
					$romanized = $romanized.$roman;
					$this->number = $this->number - $numeral;
				}
		}

		return $romanized;
	}
}

 ?>
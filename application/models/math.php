<?php 
/**
* 
*/
class Math extends CI_Model
{

	public function sum($x, $y=0)
	{
		return $x+$y;
	}

	public function subtract($x, $y=0)
	{
		return $x-$y;
	}

	public function multiple($x, $y=0)
	{
		return $x*$y;
	}

	public function divide($x, $y=0)
	{
		return $x/$y;
	}
}
?>
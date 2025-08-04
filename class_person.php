<?php

class Persons
{
	public $name;
	public $age;
	public $weight;
	public $sex;
	public $profession;



	public function __construct()
	{
		$this->age=7;
		$this->weight=50;
		$this->profession='student';

	}


	public function __destruct()
	{
		echo $this->name." is idle now.his age is ".$this->age."years and now his weights ".$this->weight;

	}






	public function shop()
	{
		echo $this->name." is now shopping";
	}
	public function cook()
	{
		echo $this->name." is now cookinging";
	}
	public function sleep()
	{
		echo $this->name." is now sleping";
	}
	function eat($food,$cal)
	{
		echo $this->name." is now Eating ".$food." with Callory is ".$cal;
		$this->weight+=($cal/1000);
	}
}




?>
<?php

namespace Core\Rooms;
use Core\Rooms\AppartmentBlock as AppartmentBlock;

class Room extends AppartmentBlock{
	public function __construct(
		protected int $number, 
		protected int $capacity, 
		protected string $description, 
		protected float $price) 
		{
			//
		}
		
	public function getRoomDetails(){
		return [
			'number' => $number,
			'capacity' => $capacity,
			'description' => $description,
			'price' => $price,
			];
	}
	
	
	
	public function assignRoom($number){
		$this->number = $number;
	}
}

abstract class AppartmentBlock{

	public function __construct(
		protected int $number, 
		protected int $capacity, 
		protected string $description, 
		protected float $price) {}
    	
	public function getNumber(){
	}
	
	public function getCapacity(){
	}
}

$room = new Room(101, 2, "closet", 1200);
var_dump($room->getNumber());



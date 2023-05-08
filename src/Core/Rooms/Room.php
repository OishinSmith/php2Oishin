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
	
	public function getNumber() : int{
		return $this->number;
	}
	
	public function getCapacity() : int{
		return $this->capacity;
	}
}

abstract class AppartmentBlock{

	public function __construct(
		protected int $number, 
		protected int $capacity, 
		protected string $description, 
		protected float $price) {}
    	
	abstract public function getNumber() : int;
	
	abstract public function getCapacity() : int;
	
	abstract protected function createRoom(): Room;
}

class Appartment extends AppartmentBlock {
    protected function createRoom(): Room {
        return new Room(1, 2, "A cozy bedroom", 1000.00);
    }
}

$room = new AppartmentBlock(101, 2, "closet", 1200);
var_dump($room->createRoom());



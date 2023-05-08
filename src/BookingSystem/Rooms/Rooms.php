<?php

namespace BookingSystem;



class Rooms {

	public function __construct(
		protected int $number, 
		protected int $capacity, 
		protected string $description, 
		protected float $price) {}
    	
	public function getNumber(){
		return $this->number;
	}
	
	public function getCapacity(){
		return $this->capacity;
	}
}

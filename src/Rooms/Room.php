<?php

namespace BookingSystem\Room;

class Room {
	public function __construct(
		protected int $number, 
		protected int $capacity, 
		protected string $description, 
		protected float $price) {}
		
	public function getRoomDetails(){
		return [
			'number' => $number,
			'capacity' => $capacity,
			'description' => $description,
			'price' => $price,
			]
	}
}


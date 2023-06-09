<?php
/*
Complete the following:
1. Turn a superclass into an abstract class.
2. In the abstract superclass, define an inheritable abstract method declaration that will instantiate an object of another class, and returns it.
3. Extend the abstract superclass with a concrete subclass implementing the inherited abstract method.
4. Instantiate a subclass instance.
5. Call the method and retrieve the object it builds.

*/

namespace Core\Rooms;

class AppartmentBlock extends AbstractAppartmentBlock implements AppartmentBlockInterface
{

	public function getNumber() : int 
	{
		return $this->number;
	}
	
	public function getCapacity() : int
	{
		return $this->capacity;
	}
	
	public function calculateTotalPrice(): float 
	{
		return $this->price + $this->price/100*12;
	}

	public function getAppartmentCapacity(): int 
	{
		return $this->capacity;
	}
}

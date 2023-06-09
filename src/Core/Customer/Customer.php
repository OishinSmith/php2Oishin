<?php

// lab 1
/* Complete the following:
1. Create a class definition that represents or models something. Give it a constant, some properties, and a few methods. Set appropriate visibilities for each.
2. Instantiate a couple of objects, and execute the methods created producing some output.
3. Create something which is realistic and appropriate to a current or future application for your domain.
*/

//lab2
/*
Complete the following:
1. Using the code from the previous exercises, add four magic methods, one of which is the magic constructor.
2. The magic constructor should accepts parameters and set those parameters into the object on instantiation.
3. Create an index.php file.
4. Load, or autoload, the created classes.
5. Instantiate object instances, and exercise the magic methods implemented.
*/

namespace Core\Customer;

use Core\Customer\Exceptions\MissingCustomerDetailsException;
use Core\Customer\Traits\HumanCustomerTrait;
use Core\Customer\Traits\GlibglobCustomerTrait;

class Customer
{
	/*
	use GlibglobCustomerTrait, HumanCustomerTrait {
		GlibglobCustomerTrait::getType insteadof HumanCustomerTrait, 
		HumanCustomerTrait::getType as getCustomerType;
	}
	*/

	private $name;
	private $age;
	private $appartmentNumber;

	public function __construct(string $name, int $age, ?int $appartmentNumber) {
		$this->name = $name;
		$this->age = $age;
	}
	
	public function __serialize(): array {
		//Return array of serialized values
		return [
			'name' => $name,
			'age' => $age
		];
	}
	
	public function __unserialize(array $data): void 
	{
		$this->name = $data["name"];
		$this->age = $data['age'];
	}
	
	public function __sleep(): array 
	{
		return ['name', 'age'];
	}

	// get the room that a guest is renting out
	public function getAppartmentNumber(){
		return $this->appartmentNumber ?? null;
	}
	
	// rent the room to a person m
	public function rentAppartment(int $appartmentNumber){
		$this->appartmentNumber = $appartmentNumber;
		echo 'appartmentNumber ' . $this->appartmentNumber . ' has been set';
	}
	
	// check if room is available
	public function isAppartmentAvailable(int $appartmentNumber){
		$roomAvailable = checkIfAppartmentAvailable($appartmentNumber);
		return $roomAvailable;
	}
	
	public function checkIfAppartmentAvailable(int $appartmentNumber){
		// check database if room is available
		return true;
	}
	
	public function getCustomerDetails(){
		if (!$this->appartmentNumber || !$this->name || !$this->age){
        		throw new MissingCustomerDetailsException();
       	}
       	return [
       		'name' => $this->name,
       		'age' => $this->age,
       		'appartmentNumber' => $this->appartmentNumber
       	];
	}
}


<?php

namespace Core\Trait\Customer;

trait HumanCustomerTrait {
	public $humanCustomer;
	
	public function setHumanCustomer(string $humanCustomer){
		$this->setEmail() = $humanCustomer;
	}
	
	public function getHumanCustomer() : int {
		return $this->setEmail();
	}
}

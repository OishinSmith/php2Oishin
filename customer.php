<?php
namespace BookingSystem;
use BookingSystem/customer;

$user1 = new Customer("John Smith", 30);
$user2 = new Customer("Joe Smith", 32);

echo $user1->getApartmentNumber() ? "User is in apartment {$user1->getApartmentNumber()}" : "User doesnt rent apartment\n";

$user1->rentAppartment(101);

var_dump($user1);

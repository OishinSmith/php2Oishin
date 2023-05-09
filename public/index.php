<?php
define('BASE', realpath(__DIR__ . '/../'));

//require '../vendor/autoload.php';
/**
 * @todo: revise this
 */
spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require BASE . '/src/' . $file;
    }
);

use Core\Rooms\Room;
use Core\Customer\Customer;

//$player = new Customer();
$room = new Room(101, 101, 'closet', 1200);

echo '<br /><hr />';

var_dump($room);

echo '<br /><hr />';

$user1 = new Customer("John Smith", 30, null);
$user2 = new Customer("Joe Smith", 32, null);

echo $user1->getAppartmentNumber() ? "User is in apartment {$user1->getApartmentNumber()}" : "User doesnt rent apartment\n";

$user1->rentAppartment(101);

var_dump($user1);

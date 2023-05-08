<?php


	
define('BASE', realpath(__DIR__ . '/../'));

//require '../vendor/autoload.php';
/**
 * @todo: revise this
 */
spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require BASE . '/php2Oishin/src/' . $file;
    }
);

use Core\Customer\Customer;
use Core\Rooms\Room;

//$player = new Customer();
$room = new Room(101, 101, 'closet', 1200);

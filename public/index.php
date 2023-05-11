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

use Core\Db\Db;
use Core\Rooms\Room;
use Core\Customer\Customer;

//$player = new Customer();
$room = new Room(101, 101, 'closet', 1200);

echo '<br /><hr />';

var_dump($room);

echo '<br /><hr />';

$rentee1 = new Customer("John Smith", 30, null);
$rentee2 = new Customer("Joe Smith", 32, null);

echo PHP_EOL;
// echo $user1->getCustomerDetails() ? "User is in apartment {$user1->getApartmentNumber()}" : "User doesnt rent apartment\n\n";
echo $rentee1->rentAppartment(101);
echo '<br />';
echo $rentee2->rentAppartment(102);
echo '<br />';
var_dump($rentee1->getCustomerDetails());

echo '<h1>Database Demos</h1>';

// Hard coded input parameters
$first = $_GET['first'] ?? 'Mark';
$last  = $_GET['last'] ?? 'Wallberg';
$first = trim(strip_tags($first));
$last  = trim(strip_tags($last));

$db = new Db();
if (!empty($db->demoInsert($first, $last))) {
	echo "New customer $first $last is now renting";
} else {
	echo "New customer $first $last is NOT renting";
}
			


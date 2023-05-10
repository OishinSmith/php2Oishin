<?php
namespace Core\Db;
use Exception;

final class Db
{
    private static $db;
    public $pdo;

    public function __construct()
    {    
    	// PREPARED STATEMENT to get value from DB
        try {
        	
		$host = 'localhost';
		$dbname = 'phpcourse';
		$user = 'vagrant';
		$password = 'vagrant';
			
		// Get the connection instance
		$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		
		// Prepare an SQL statement to retrieve all customers
		$stmt = $pdo->prepare("SELECT * FROM customers");
		
		// Hard coded input parameters
		$name = 'Mark';
		$age = 'Wallberg';
		$appartmentNumber = 105;
		
		// Execute the SQL statement
		if ($stmt->execute([$fname, $lname])) {
			echo "New customer $name is now renting $appartmentNumber";
		}
		
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$pdo = null;
		foreach ($results as $row) {
    			echo "Customer ID: {$row['id']}, Name: {$row['name']}, appartmentNumber: {$row['appartmentNumber']}<br>";
		}
		
	// TRANSACTION	
	try {
		$host = 'localhost';
		$dbname = 'phpcourse';
		$user = 'vagrant';
		$password = 'vagrant';
		
		// Get the connection instance
		$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$password,
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		// Begin the transaction
		$pdo->beginTransaction();
		// Series of SQL statements, all of which have to succeed
		// Commit success
		$pdo->commit();
	} catch (PDOException $e ){
		$pdo->rollBack(); // Rollback in case of failure
		// log and communicate error
	}
		
	// stored procedure
	try {
		$host = 'localhost';
		$dbname = 'phpcourse';
		$user = 'vagrant';
		$password = 'vagrant';
		
		// Get the connection instance
		$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$password,
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		
		// Create the stored procedure
		$stpr = $pdo->prepare("CREATE TABLE Rooms(id INT)");

		// Execute the stored procedure
		$stpr->execute();

		// Close the connection
		$pdo = null;
	} catch (PDOException $e){
		//Handle error
		echo "error, something went worong";
	}
    }

    private function __clone()
    {
        try {
            throw new Exception('This object can\'t be cloned');
        } catch (Exception $e) {
            echo "error, something went worong";
        }
    }
}

<?php
namespace Core\Db;
use PDO;
use Throwable;

final class Db
{
    public $pdo = NULL;

    public function __construct()
    {    
    	// PREPARED STATEMENT to get value from DB
        try {
        	
			$host = 'localhost';
			$dbname = 'phpcourse';
			$user = 'vagrant';
			$password = 'vagrant';
				
			// Get the connection instance
			$this->pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
			
		} catch (Throwable $t) {
			
			error_log($t->getMessage());
			exit ('Can\'t Get There from Here');
			
		}
	}
	
	public function demoInsert(string $first, string $last)
	{
		// Prepare an SQL statement to retrieve all customers
		$stmt = $this->pdo->prepare('INSERT INTO customers (firstname, lastname) VALUES (:first, :last);');
		
		// Execute the SQL statement
		$stmt->execute([':first' => $first, ':last' => $last]);
		
		return $stmt->rowCount();
	}

	/*
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
    */
}

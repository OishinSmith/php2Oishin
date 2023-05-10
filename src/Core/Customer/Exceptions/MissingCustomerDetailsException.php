<?php
/**
 * Exception Class
 */
namespace Core\Rooms\Exceptions;

use Exception;

class MissingCustomerDetailsException extends Exception
{
    public function __construct
    (
        string $message = 'Customer Details missing',
    ) {
        parent::__construct($message);
    }
}

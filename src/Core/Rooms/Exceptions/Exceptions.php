<?php
/**
 * Exception Class
 */
namespace Core\Rooms\Exceptions;

use Exception;

class MissingDetailsException extends Exception
{
    public function __construct
    (
        string $message = 'Customer Details missing',
    ) {
        parent::__construct($message);
    }
}

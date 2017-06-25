<?php
namespace HVMP\Exceptions;

class DatabaseException extends Exception {

	function __construct($message = null, $code = 0, Exception $previous = null) {
		parent::__construct('Database connection failed : '.$message, $code);
	}
}
?>
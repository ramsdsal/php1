<?php
namespace HVMP\Exceptions;

class DatabaseQueryExecuteException extends Exception {

		function __construct($message = null, $code = 0, Exception $previous = null) {
			parent::__construct('Database Query execution failde : '.$message, $code);
		}
}	
?>

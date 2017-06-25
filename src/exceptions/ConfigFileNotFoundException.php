<?php
namespace HVMP\Exceptions;

class ConfigFileNotFoundException extends Exception {

		function __construct($message = null, $code = 0, Exception $previous = null) {
			parent::__construct('Config File not found: '.$message, $code);
		}
}	
?>
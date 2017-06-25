<?php
namespace HVMP\Classes;
use HVMP\Exceptions\ConfigFileNotFoundException; 
use HVMP\Exceptions\DatabaseQueryExecuteException;
use HVMP\Exceptions\DatabaseFetchAllIntoObjectException;
use HVMP\Exceptions\DatabaseFetchAllInToArrayException;
use HVMP\Exceptions\DatabaseNumCountException;


class MySqlDatabase implements Db {

	private static $instance;
	private $con;

	public function __contruct(){

	}

    /** 
    * Function that create a new instance if it dont exist, or return it self.
    * Design Patterns Singleton Pattern
    * @access public 
    * @param Void
    * @return Object $instance
    */ 
	
	public static function getInstance() {

		if(!self::$instance) {

			self::$instance = new self();
		}

		return self::$instance;
	}

    /** 
    * Function that make a connection to the database, using an config file and PDO.
    * @access public 
    * @param Void
    */ 
    public function connect() {

    	$json = file_get_contents("../../config/databaseExample.json", true);

    	if(!$json) {
    		throw new ConfigFileNotFoundException();
    	}

    	$this->con = new PDO('mysql:host='.$j['$hostname'].';dbname='.$j['$db'],$j['$user'],$j['$password']);    	   		
    	$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /** 
    * Function that executes an SQL statement in a single function call, returning the result set (if *any) returned by the statement as a PDOStatement object. 
    * @access public 
    * @param String $sql
    * @return Object $query
    */    
    
    public function doQuery($sql) {

    	$query = $this->con->query($sql);

    	if(!query) {
    		throw new DatabaseQueryExecuteException();
    	}

    	return $query;   	
    }

    /** 
    * Function that executes an SQL statement in a single function call, returning the result set (if *any) returned by the statement as a PDOStatement object. 
    * @access public 
    * @param Object $result
    * @param $string $class
    * @return Object $res
    */ 

    public function fetchAllObject($result,$class) {

    	$res = $result->fetchAll(PDO::FETCH_CLASS, $class);

    	if(!$res) {
    		throw new DatabaseFetchAllIntoObjectException();
    	}

    	return $res;
    }

    /** 
    * Function that return an array consisting of all values of a single column from the result set. 
    * @access public 
    * @param Object $result    
    * @return Object $res
    */ 

    public function fetchAllArray($result) {

    	$res = $result->fetchAll(PDO::FETCH_ASSOC);

    	if(!$res) {
    		throw new DatabaseFetchAllInToArrayException();
    	}

    	return $res;
    }

    /** 
    * Function that returns the number of rows. 
    * @access public 
    * @param Object $result    
    * @return Int $count
    */ 

	public function numRows($result) {

		$count = $result->rowCount();

		if(!$count) {
			throw new DatabaseNumCountException();
		}
        return $count;
	}

} 
?>
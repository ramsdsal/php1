<?php
namespace HVMP\Classes;

interface Db {

	public static function getInstance(); 
	public function connect();
	public function doQuery($sql);
	public function fetchAllObject($result,$class);
	public function fetchAllArray($result);
	public function numRows($result);
}
?>
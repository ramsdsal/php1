<?php 

namespace HVMP\Tests\Classes;
use HVMP\Classes\MySqlDatabase;

class MysqlDatabaseTest extends \PHPUnit_Framework_TestCase {
	public function testIfInterfaceIsBeingLoaded() {
		$mySqlInstance = new MySqlDatabase();
		$this->assertEquals($mySqlInstance->betoFunction(), "betohorta");
	}
}
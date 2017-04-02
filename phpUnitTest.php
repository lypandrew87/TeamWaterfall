<?php

namespace phpUnitTutorial\Test;
use PHPUnit\Framework\TestCase;
use phpHandling;

class phpHandlingTest extends TestCase
{


	function testDatabaseConnectionSuccess(){


		$phpHandling = new phpHandling();

		$this->assertNotNull(  $phpHandling->get_connection()); 


	}
	function testExecuteQuerySuccess(){




		$phpHandling = new phpHandling(); 


		$sql="Select firstName from users where username = 'amlyp'";
		$result = $phpHandling->execute_Query(  $phpHandling->get_connection(), $sql); 

		$row = mysqli_fetch_array($result);


		$expected = "Andrew"; 

		$this->assertEquals( $expected, $row[0]); 






	}

	function testExecuteQueryFail(){




		$phpHandling = new phpHandling(); 


		$sql="Select Not A Real SQL Statement";
		$result = $phpHandling->execute_Query(  $phpHandling->get_connection(), $sql); 
		$expected = False; 

		$this->assertEquals( $expected,$result ); 





	}




	function testCreateAccountSuccess(){

		$phpHandling = new phpHandling(); 
		$randomNumber = rand(); 
		$query = $phpHandling->createAccount($phpHandling->get_connection(), "John","Reed", "jreed" . $randomNumber, "password");

		$sql="Select firstName from users where username = 'jreed$randomNumber'";
		$result = $phpHandling->execute_Query(  $phpHandling->get_connection(), $sql); 

		$row = mysqli_fetch_array($result);


		$expected = "John"; 

		$this->assertEquals( $expected, $row[0]); 

}function testCreateAccountFail(){

		$phpHandling = new phpHandling(); 
		$randomNumber = rand(); 
		//Username is already in use
		$result = $phpHandling->createAccount($phpHandling->get_connection(), "John","Reed", "amlyp", "password");

		$expected = False; 

		$this->assertEquals( $expected,$result ); 
 

}
	function testLoginSuccess(){

		$phpHandling = new phpHandling(); 
		$query = $phpHandling->login($phpHandling->get_connection(), "amlyp","password");
		$expected = True; 

		$this->assertEquals( $expected, $query); 

}

function testLoginFail(){

		$phpHandling = new phpHandling(); 
		$query = $phpHandling->login($phpHandling->get_connection(), "amlyp","notpassword");
		$expected = False; 

		$this->assertEquals( $expected, $query); 

}







}

?>

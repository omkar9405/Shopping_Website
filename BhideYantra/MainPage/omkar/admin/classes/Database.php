<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "id12951237_omkar", "omkar@123", "id12951237_bhidestore");
		return $this->con;
	}
}

?>

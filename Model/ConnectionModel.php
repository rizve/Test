<?php

class db_Connection
{
	var $db_Connection_Statuse;

	function dbOpen()
	{
		$servername ="localhost";
		$username = "root";
		$password ="";
		
		$con = mysqli_connect($servername,$username,$password);

		if(!$con)
		{
			die("Database No Connected".mysqli_error());
		}

		mysqli_select_db($con,'LOG');
		$this->db_Connection_Statuse=$con;		
	}

	function dbClose()
	{
		mysqli_close($this->db_Connection_Statuse);
	}
}

?>
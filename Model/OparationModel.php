<?php

include 'ConnectionModel.php';

class Oparation
{
	function Ragistration($tablename,$columname,$condition)
	{
		$objConnection = new db_Connection;
		$objConnection->dbOpen();
		$conn = $objConnection->db_Connection_Statuse;
		$sql = "INSERT INTO ".$tablename."(".$columname.") VALUES (".$condition.")";
		//var_dump($sql);
		mysqli_query($conn,$sql);
		$objConnection->dbClose();
	}

}


?>
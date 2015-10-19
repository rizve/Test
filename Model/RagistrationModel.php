<?php
include 'OparationModel.php';

class RagistrationModel
{
	function SendUser($Name,$Email,$Password,$Mobile)
	{
		$tablename = "User";
		$columname = "User_Name,User_Email,User_Password,User_Mobile";
		$condition = "'".$Name."','".$Email."','".$Password."','".$Mobile."'";
		$ObjInsertUserInfo = new Oparation;
		$ObjInsertUserInfo->Ragistration($tablename,$columname,$condition);

	}
}
?>
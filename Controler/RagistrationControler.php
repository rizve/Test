<?php
session_start();

include '../Model/RagistrationModel.php';

if(isset($_POST['btnSubmit']))
{
	$UserName = $_POST['UserName'];
	$UserEmail = $_POST['UserEmail'];
	$UserPassword = $_POST['UserPassword'];
	$UserMobile = $_POST['UserMobile'];
	
	if($UserName != null && $UserEmail != null && $UserPassword != null && $UserMobile != null)
	{
		//echo "Success Fully Inserted";
		$objSendUserInfo = new RagistrationModel;
		$objSendUserInfo->pion($UserName,$UserEmail,$UserPassword,$UserMobile);
		header('Location:../View/Login.php');
	}
	else
	{
		//echo "Please Insert Data Properly";

		$_SESSION['User_Name']=$UserName;
		$_SESSION['User_Email']=$UserEmail;
		$_SESSION['User_Mobile']=$UserMobile;

		if($UserName == null)
		{
			$_SESSION['Name_error']=0;
			unset($_SESSION['User_Name']);
			header('Location:../View/Ragistration.php');
		}
		if($UserEmail == null)
		{
			$_SESSION['email_error']=0;
			unset($_SESSION['User_Email']);
			header('Location:../View/Ragistration.php');
		}
		if($UserPassword == null)
		{
			$_SESSION['password_error']=0;
			unset($_SESSION['User_Password']);
			header('Location:../View/Ragistration.php');
		}
		if($UserMobile == null)
		{
			$_SESSION['Mobile_error']=0;
			unset($_SESSION['User_Mobile']);
			header('Location:../View/Ragistration.php');
		}
	}
}
?>
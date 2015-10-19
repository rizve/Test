<?php
	session_start();

	include '../Include/Head.php';

	//echo "This is Ragistration";
?>
<div class="container Ragistration">
	<form action="../Controler/RagistrationControler.php" method="POST">
		
			<?php
				if(isset($_SESSION['Name_error']))
				{
					if($_SESSION['Name_error']==0)
					{
						?>
						<div class="form-group">
							<label>User Name</lable>
							<input type="txt" class="form-control" name="UserName" placeholder="insert Your User Name"><label style="color:red;">Please Insert Your User Name</lable>
						</div>
						<?php
						unset($_SESSION['Name_error']);
					}
				}	
				else
				{
					if(isset($_SESSION['User_Name']))
					{
						?>
						<div class="form-group">
							<label>User Name</lable>
							<input type="txt" class="form-control" name="UserName" Value="<?php echo $_SESSION['User_Name']; ?>">
						</div>
						<?php
						unset($_SESSION['User_Name']);
					}
					else
					{
						?>
						<div class="form-group">
							<label>User Name</lable>
							<input type="txt" class="form-control" name="UserName" placeholder="insert Your User Name">
						</div>
						<?php
						}
					}					
			?>	
			<?php
				if(isset($_SESSION['email_error']))
				{
					if($_SESSION['email_error']==0)
					{
						?>
						<div class="form-group">
							<label>User Email</lable>
							<input type="email" class="form-control" name="UserEmail" placeholder="insert Your Email Adress"><label style="color:red;">Please Insert Your Email Address</lable>
						</div>
						<?php
						unset($_SESSION['email_error']);
					}
				}
				else
				{
					if(isset($_SESSION['User_Email']))
					{						
						?>
						<div class="form-group">
							<label>User Email</lable>
							<input type="email" class="form-control" name="UserEmail" Value="<?php echo $_SESSION['User_Email']; ?>">
						</div>
						<?php
						unset($_SESSION['User_Email']);						
					}	
					else
					{
						?>
						<div class="form-group">
							<label>User Email</lable>
							<input type="email" class="form-control" name="UserEmail" placeholder="insert Your Email Adress">
						</div>
						<?php
					}					
				}

			?>		
			<?php
				if(isset($_SESSION['password_error']))
				{
					?>
					<div class="form-group">
						<label>User Pasword</lable>
						<input type="password" class="form-control" name="UserPassword" placeholder="insert Your Password"><label style="color:red;">Please Insert Your Password Properly</lable>
					</div>
					<?php
					unset($_SESSION['password_error']);
				}
				else
				{
					?>
					<div class="form-group">
						<label>User Pasword</lable>
						<input type="password" class="form-control" name="UserPassword" placeholder="insert Your Password">
					</div>
					<?php
				}
			?>
			<?php

				if(isset($_SESSION['Mobile_error']))
				{
					if($_SESSION['Mobile_error']==0)
					{	
					?>
					<div class="form-group">
						<label>Mobile Number</lable>
						<input type="txt" class="form-control" name="UserMobile" placeholder="insert Your Mobile Number"><label style="color:red;">Please Insert Your Mobile Number Properly</lable>
					</div>
					<?php
					unset($_SESSION['Mobile_error']);
					}
				}
				else
				{
					if(isset($_SESSION['User_Mobile']))
					{
						if($_SESSION['User_Mobile'])
						?>
						<div class="form-group">
							<label>Mobile Number</lable>
							<input type="txt" class="form-control" name="UserMobile" Value="<?php echo $_SESSION['User_Mobile']; ?>">
						</div>
						<?php
					}
					else
					{
						?>
						<div class="form-group">
							<label>Mobile Number</lable>
							<input type="txt" class="form-control" name="UserMobile" placeholder="insert Your Mobile Number">
						</div>
						<?php
					}
				}
			?>		
		
		<button class="btn btn-success" type="submit" name="btnSubmit">Submit</button>
	</form>	
</div>	
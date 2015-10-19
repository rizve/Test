<?php
	include '../Include/Head.php';
	//echo "This is Login";
?>
<div class="container Ragistration">
	<form action="../Controler/RagistrationControler.php" method="POST">		
		<div class="form-group">
			<label>User Email</lable>
			<input type="email" class="form-control" name="UserEmail" placeholder="insert Your Email Adress">
		</div>
		<div class="form-group">
			<label>User Pasword</lable>
			<input type="password" class="form-control" name="UserPassword" placeholder="insert Your Password">
		</div>		
		<button class="btn btn-success" type="submit">Submit</button>
	</form>	
</div>	
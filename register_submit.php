<?php	
	extract($_POST);	
	include "connect.php";
				
	$flag=1;
	$query = "select name from users where name='$name' and email='$email'";	
	$result=$conn->query ("$query") or die ("Error in query: $off_sql".mysqli_error($conn));
		
	if(mysqli_num_rows($result)>0)
		{
		$msg= "User name or email already exist. <br>";
		$flag=0;
		
		}

	if($password !=$password_confirmation)
		{
		$msg= "Passwords not the same <br>";
		$flag=0;
		}
	if($flag==1)
		{
			$password=password_hash($password, PASSWORD_DEFAULT);	
			mysqli_query($conn,"insert into users(name, password,email) values('$name', '$password', '$email')")or die ("Error in query failed to add user".mysqli_error($conn));
			header('Location: index.php');
		?>
			<script language = "javascript" style = "text/javascript"> 
				window.location = "home.php?user=<?php echo $user?>";	
			</script>
		<?php
		}else{
			echo"
			<div class=' row col-sm-8 pt-10' style='text-align:center;border:0; bgcolor: white;'>			
			<div class='alert alert-danger'>
				<strong>Oops!</strong> $msg 
			</div>
			<div class='alert alert-danger'>
			<a href='javascript:history.go(-1)'>
			<button class='btn btn-danger btn-sm'>Go Back</button></a>
			</div>
			</div>
			";		
		}
		
?>
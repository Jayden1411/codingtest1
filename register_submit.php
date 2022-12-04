<?php	
	include "common.php";
	if (!empty($_POST))
	{ 	extract($_POST);
		$dbh = Db::db_conn();
		$validate= Register::userValidate($dbh, $name,$email,$password,$password_confirmation);
		$checks=trim($validate);
		if(empty($checks)){
			$register= Register::userRegister($dbh, $name,$email,$password);
			header('Location: index.php');
		}else{
		echo"
			<div class=' row col-sm-8 pt-10' style='text-align:center;border:0; bgcolor: white;'>			
			<div class='alert alert-danger'>
				<strong>Oops!</strong> $validate
			</div>
			<div class='alert alert-danger'>
			<a href='javascript:history.go(-1)'>
			<button class='btn btn-danger btn-sm'>Go Back</button></a>
			</div>
			</div>
			";		
		}
	}else{
		echo"
			<div class=' row col-sm-8 pt-10' style='text-align:center;border:0; bgcolor: white;'>			
			<div class='alert alert-danger'>
				<strong>Oops!Form submit failed</strong> 
			</div>
			<div class='alert alert-danger'>
			<a href='javascript:history.go(-1)'>
			<button class='btn btn-danger btn-sm'>Go Back</button></a>
			</div>
			</div>
			";		
		}
		
?>

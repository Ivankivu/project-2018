<?php
	
	require_once 'dbconfig.php';

	if($_POST)
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['password'];
		$user_role =$_POST['user_role'];
		$joining_date =date('Y-m-d H:i:s');
		
		$password = md5($user_password);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$count = $stmt->rowCount();
			
			if($count==0){
				
			$stmt = $db_con->prepare("INSERT INTO tbl_users(first_name,last_name,user_name,user_email,user_password,user_role,joining_date) VALUES(:fname, :lname, :uname, :email, :pass, :role, :jdate)");
			$stmt->bindParam(":fname",$first_name);
			$stmt->bindParam(":lname",$last_name);
			$stmt->bindParam(":uname",$user_name);
			$stmt->bindParam(":email",$user_email);
			$stmt->bindParam(":pass",$password);
			$stmt->bindParam(":role",$user_role);
			$stmt->bindParam(":jdate",$joining_date);
					
				if($stmt->execute())
				{
					echo "new user added";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			else{
				
				echo "1"; //  not available
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>
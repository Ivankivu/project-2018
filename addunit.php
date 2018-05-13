<?php
	
	require_once 'dbconfig.php';

if ($_POST['btn-push']) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['unit_email'];
    $profession = $_POST['profession'];
    $station =$_POST['station'];
    $call_id =$_POST['call_id'];
                      
		try
		{	
		
	
			$stmt = $db_con->prepare("INSERT INTO tbl_units(first_name,last_name,unit_email,
            profession,station,call_id) VALUES(:fname, :lname, :email, :profession, :station, :call_id)"
             );

			$stmt->bindParam(":fname",$first_name);
			$stmt->bindParam(":lname",$last_name);
			$stmt->bindParam(":email",$email);
			$stmt->bindParam(":profession",$profession);
			$stmt->bindParam(":station",$station);
			$stmt->bindParam(":call_id",$call_id);
					
				if($stmt->execute())
				{
					echo "new unit added";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
		
				
		
		catch(PDOException $e){
			echo $e->getMessage();
		}
    }
	 
?>
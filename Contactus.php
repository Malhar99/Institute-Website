<?php

	$Name = $_POST['Name'];
	$Email = $_POST['email'];
	$Phone = $_POST['Phone'];
	$Subject = $_POST['Subject'];
	$Address = $_POST['Address'];
	$Comment = $_POST['Comment'];
	$servername = "localhost";
	$Address = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $Address)));
	$Comment = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $Comment)));
	$username = "admin";
	$password = "password";
	$dbname = "PGT";
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    if($Address=="" && $Comment==""){
			$sql = "INSERT INTO `Contactus`(`Name`, `Email`, `Phone_no`, `Subject`) VALUES ('$Name','$Email',$Phone,'$Subject')";
			$conn->exec($sql);
		}
		else if($Comment==""){
				$sql = "INSERT INTO `Contactus`(`Name`, `Email`, `Phone_no`, `Subject`,`Address`) VALUES ('$Name','$Email',$Phone,'$Subject','$Address')";
				$conn->exec($sql);
		}
		else if($Address==""){
				$sql = "INSERT INTO `Contactus`(`Name`, `Email`, `Phone_no`, `Subject`,`Comments`) VALUES ('$Name','$Email',$Phone,'$Subject','$Comment')";
				$conn->exec($sql);
		}
		else{
				$sql = "INSERT INTO `Contactus`(`Name`, `Email`, `Phone_no`, `Subject`,`Address`,`Comments`) VALUES ('$Name','$Email',$Phone,'$Subject','$Address','$Comment')";
				$conn->exec($sql);
		}    
    }
	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
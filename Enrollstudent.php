<?php
	$FullName = $_POST['FullName'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$Subject = $_POST['Subject'];
	$Address = $_POST['Address'];
	$Comment = $_POST['Comment'];
	$servername = "localhost";
	$username = "admin";
	$password = "password";
	$dbname = "PGT";
	$Address = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $Address)));
	$Comment = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $Comment)));
	if($_FILES["file"]["name"] != '')
	{
	 $test = explode('.', $_FILES["file"]["name"]);
	 $ext = end($test);
	 $name =  $Subject.' '.$_FILES["file"]["name"];
	 $location = './uploads/' . $name;  
	 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
	 echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
	}
	
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    if($Address=="" && $Comment==""){
			$sql = "INSERT INTO `Enrollstudent`(`Name`, `Email`, `Phone_no`, `Subject`, `Photo_location`) VALUES ('$FullName','$Email',$Phone,'$Subject','$location')";
			$conn->exec($sql);
		}
		else if($Comment==""){
			$sql = "INSERT INTO `Enrollstudent`(`Name`, `Email`, `Phone_no`, `Subject`,`Photo_location`,`Address`) VALUES ('$FullName','$Email',$Phone,'$Subject','$location','$Address')";
			$conn->exec($sql);
		}
		else if($Address==""){
			$sql = "INSERT INTO `Enrollstudent`(`Name`, `Email`, `Phone_no`, `Subject`,`Photo_location`,`Comments`) VALUES ('$FullName','$Email',$Phone,'$Subject','$location','$Comment')";
			$conn->exec($sql);
		}
		else{
			$sql = "INSERT INTO `Enrollstudent`(`Name`, `Email`, `Phone_no`, `Subject`,`Photo_location`,`Address`,`Comments`) VALUES ('$FullName','$Email',$Phone,'$Subject','$location','$Address','$Comment')";
			$conn->exec($sql);
		}
	}
	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
	
	
?>

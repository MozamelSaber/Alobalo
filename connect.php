<?php
	
	$EmployeeID = $_POST['EmployeeID'];
	$StartDate = $_POST['StartDate'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Phone = $_POST['Phone'];
	$Salary = $_POST['Salary'];
	$Title = $_POST['Title'];


	$conn = new mysqli('database-1.cqpcgrxusrai.ca-central-1.rds.amazonaws.com,1433','admin','TP8#4cpkgfFj');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into dbo.Alobalo(Employee_ID, Name, Username, Email, Password, Start_Date, Phone, Title, Salary) values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssssisi",$ID, $Name, $FirstName, $Username, $Email, $Password, $Phone, $Salary, $Title);
		$stmt->execute();
		echo"registrat";
		$stmt->close();
		$conn->close();
	}

?>
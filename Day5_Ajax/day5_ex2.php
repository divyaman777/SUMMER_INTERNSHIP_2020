<?php
	if(isset($_POST['rollno'])){
	$rollno = $_POST['rollno'] ;

	$sql = "SELECT * FROM student WHERE rollno='$rollno'";
	$cn = mysqli_connect("localhost","root","","abes");
	$result = mysqli_query($cn,$sql);
	$count = mysqli_num_rows($result) ;
	if($count == 0){
		echo "Error..!!" ;
	}
	else {
		$row = mysqli_fetch_array($result) ;
		echo "Name :: $row[1] & Course :: $row[2]" ;
	}
}
?>
<?php
	if(isset($_POST['rollno']) && isset($_POST['name']) && isset($_POST['course'])){
	$rollno = $_POST['rollno'] ;
	$name = $_POST['name'] ;
	$course = $_POST['course'] ;
	$sql = "INSERT INTO student VALUES ('$rollno','$name','$course')";
	$cn = mysqli_connect("localhost","root","","abes");
	mysqli_query($cn,$sql) or die("Error") ;
	mysqli_close($cn);
	echo "done" ;
}
?>
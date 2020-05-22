<?php
	if(isset($_POST['data'])) {
		$data = $_POST['data'] ;
		$s = json_decode($data) ;
		$bookid = $s->bookid ;
		$title = $s->title ;
		$author = $s->author ;
		$price = $s->price ;
		sleep(2) ;
		$sql = "INSERT INTO books VALUES ($bookid, '$title', '$author', '$price')" ;
		$cn = mysqli_connect("localhost", "root", "", "library") ;
		mysqli_query($cn, $sql) or die("Error") ;
		mysqli_close($cn) ;
		echo "done" ;
	}
	else
		echo "Error Php";

?>
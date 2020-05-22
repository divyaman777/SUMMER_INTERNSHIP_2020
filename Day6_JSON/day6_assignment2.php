<?php
	if(isset($_POST['bookno'])) {
		$bookno = $_POST['bookno'] ;
		$sql = "SELECT * FROM books WHERE bookid='$bookno'" ;
		$cn = mysqli_connect("localhost", "root" ,"", "library") ;
		$result = mysqli_query($cn, $sql) ;
		$count = mysqli_num_rows($result) ;
		sleep(2) ;
		if($count == 0){
		echo "Error..!!" ;
		}
		else {
			$row = mysqli_fetch_array($result) ;
			$obj = (object)[] ;
			$obj->sta = 'done' ;
			$obj->title = $row[1] ;
			$obj->author = $row[2] ;
			$obj->price = $row[3] ;
			$data = json_encode($obj) ;
			echo "$data" ;
			/*echo "done,$row[1],$row[2],$row[3]" ;*/
		}
	}

?>
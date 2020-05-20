<?php
if(isset($_POST['name']) && isset($_POST['name'])) {
	$age = $_POST['age'] ;
	$name = $_POST['name'] ;
	if($age > 18) 
		echo "$name is able to vote..!!" ;
	else
		echo "SORRY $name is not able to vote..!!" ;
}
else
	echo "Sorry NO data Provided..!!" ;
?>
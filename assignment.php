<?php
if(isset($_POST['name'])) {
	$age = $_POST['age'] ;
	if($age > 18) 
		echo "$_POST['name'] is able to vote..!!" ;
	else
		echo "SORRY $_POST['name'] is not able to vote..!!" ;
}
else
	echo "Sorry NO data Provided..!!" ;
?>
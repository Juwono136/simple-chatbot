<?php
// connecting to database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

if(mysqli_num_rows($run_query) > 0){
	// fetching replay from database
	$fetch_data = mysqli_fetch_assoc($run_query);
	$replay = $fetch_data['replies'];
	echo $replay;
}else{
	echo "Sorry, can't be able to understand you!";
}

?>
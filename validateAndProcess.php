<?php
// Getting info from POST and imputing into database
if(isset($_POST["submit"])) {
	$name = filter_user($_POST["name"]);
	$email = filter_user($_POST["email"]);
	$contactnum = filter_user($_POST["contactnum"]);
	$subject = filter_user($_POST["subject"]);
	$message = filter_user($_POST["message"], "text");

	if(insert_into_db($name, $email, $contactnum, $subject, $message)){
		if( send_email($name, $email, $contactnum, $subject, $message)) {
			$success_message = "success";
		} else {
			$success_message = "error_email";
		}
	} else {
		$success_message = "error_db";
	}
	header("Location:messageSent.php?msg=$success_message");
	// header("Location:getintouch.php?msg=$msg");	
}
//sanitising user input
function filter_user($data, $type="") {
	$data = trim($data);
	$data = strip_tags($data);
	$data = htmlspecialchars($data);
	if($type == "text") {
		$data = addslashes($data);
	}elseif ($type == "") {
		$data = stripslashes($data);
	}
	return $data;
}

//function to insert the info in the database
function insert_into_db($name, $email, $contactnum, $subject, $message) {
	global $conn; // make a connection
	$sql = "INSERT INTO order_forms(name, email, contactnum, subject, message) values ('$name','$email','$contactnum','$subject','$message')";
	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) >0){
		return true;
	} else {
		return false;
	}
}

//function to send email with data 
function send_email($name, $email, $contactnum, $customer_subject, $customer_message) {
	$to = "parusheva.marina@yahoo.com";
	$subject = "Yo have an order enquery.";
	$message = "You have received an email from: <br>"
				. $name . "<br>"
				. "Subject:" . "<br>"
				. $customer_subject . "<br>"
				. $customer_message . "<br>"
				. "Customer's contact details: <br>" 
				. $email . "<br>"
				. $contactnum;
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: parusheva.marina@yahoo.com" . "\r\n" .
    "CC: mina_a2002@yahoo.com";
	if(mail($to, $subject, $message, $headers)){
	    return true;
	} else {
	    return false;
	}
}

?>
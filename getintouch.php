<?php 
	//attach header.php file 
	include_once "header.php"; 
	include_once "messages.php";
	include_once "validateAndProcess.php";
?>

 <?php
	// if(isset($_GET["msg"]) && !empty($_GET["msg"])) {
	// 	if($_GET["msg"] == "success") {
	// 		echo "<br><br> Your message has been added!";
	// 	}
	// 	elseif($_GET["msg"] == "error_email") {
	// 		echo "<br><br> Sorry, unable to send email! Please try again";
	// 	}
	// 	elseif($_GET["msg"] == "error_db") {
	// 		echo "<br><br> Sorry, message not sent";
	// 	}
	// }
?>

<div class="bannercontact">
	<div class="banname"><h3>Get In Touch</h3></div>
</div>

<div class="main grid-container-contact">
	<div class="message welcome">
		<h1>Looking forward to making your life sweeter</h1>
    </div>
	<div class="contact elemstyle">
		<h1>CONTACT ||</h1>
	</div>
	<div class="details elemstyle">
		<ul>
			<li>address:|| 266, Cake Heaven street, Varna 9000</li>
			<li>telephone:|| +359 8787878787</li>
			<li>email:|| getCaked@hotmail.com</li>
			<li>facebook:|| cakes&macarons/facebook.com</li>
			<li>instagram:|| cakes&macarons/instagram.com</li>
		</ul>
	</div>
	<div class="contform elemstyle">
		<h1>...Or just fill in the contact form, and we will get back to you.</h1>
		<div id="form-section">
			<form action="" onsubmit="return validateForm();" method="post">
				<table>
				<tr>
					<td> <label for="name">Name<sup>*</sup> </label> </td>
					<td> <input type="text" id="name" value="<?php if(isset($name))echo $name; ?>" name="name" placeholder="cake lover" onkeypress ="clearErrorMsg('error_name');"> </td>
					<td ><span id="error_name" class="error"></span> <?php if(isset($error_name))echo $error_name?> </td>
				</tr>
				<tr>
					<td> <label for="email">Email<sup>*</sup></label> </td>
					<td> <input type="text" id="email" value="<?php if(isset($email)) echo $email; ?>" name="email" placeholder="john@gmil.com" onkeypress ="clearErrorMsg('error_email');"> </td>
					<td id="error_email" class="error"> <?php if(isset($error_email))echo $error_email?> </td>
				</tr>
				<tr>
					<td> <label for="contactnum">Contact number<sup>*</sup></label> </td>
					<td> <input type="text" id="contactnum" value="<?php if(isset($contactnum))echo $contactnum; ?>" name="contactnum" placeholder="01234567890" onkeypress ="clearErrorMsg('error_number');"> </td>
					<td id="error_number" class="error"> <?php if(isset($error_name))echo $error_contactnum?> </td>
				</tr>
				<tr>
					<td> <label for="subject">Subject<sup>*</sup></label></td>
					<td> <input type="text" name="subject" id="subject" value="<?php if(isset($subject)) echo $subject; ?>" placeholder="About..." onkeypress ="clearErrorMsg('error_subject');"> </td> 
					<td id="error_subject" class="error"> <?php if(isset($error_subject))echo $error_subject?> </td>
				</tr>
				<tr>
					<td> <label for="message">Message<sup></sup></label></td>
					<td>  <textarea name="message" id="message" rows="5" cols="40"><?php if(isset($message)) echo $message; ?></textarea></td> 
					<td> <?php if(isset($error_message))echo $error_message?> </td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td collspan="2"><input type="submit" value="Get me some cake..." name="submit"></td>
				</tr>
				
					
				</table> <!-- End of table -->
			
			</form>  <!-- End of form -->


		</div>
	</div>
</div>

<?php include_once "footer.php";
?>
<!-- sql for creating a db table if it doesnt exist -->
<!-- CREATE TABLE `requests`.`order_forms` ( `id` INT(9) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `contactnum` VARCHAR(11) NOT NULL , `subject` VARCHAR(35) NOT NULL , `message` VARCHAR(300) NOT NULL , PRIMARY KEY (`id`(9))) ENGINE = InnoDB; -->
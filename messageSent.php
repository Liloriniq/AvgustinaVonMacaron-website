<?php 
	//attach header.php file 
	include_once "header.php"; 
	include_once "messages.php";
	include_once "validateAndProcess.php";
?>

<div class="bannercontact">
	<div class="banname"><h3>Get In Touch</h3></div>
</div>

<div class="main grid-container-contact">
	<div class="message welcome">
		<h1>Looking forward to making your life sweeter</h1>
	</div>
	<?php
	if(isset($_GET["msg"]) && !empty($_GET["msg"])) {
		if($_GET["msg"] == "success") {
			echo $success_message = "<div class='message welcome success'><h1> We got your message and will get in touch within an hour!</h1></div>";
			// echo "<br><br> Your message has been added!";
		}
		elseif($_GET["msg"] == "error_email") {
			echo $success_message = "<div class='message welcome error_message'><h1> Sorry, we could not sent your email! Please try again later.</h1></div>";
		}
		elseif($_GET["msg"] == "error_db") {
			echo $success_message = "<div class='message welcome error_message'><h1> Sorry, something went wrong! Please try again!</h1></div>";
			// echo "<br><br> Sorry, message not sent";
		}
	}
	?>
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
	
	
	
</div>

<?php include_once "footer.php";
?>
<!-- sql for creating a db table if it doesnt exist -->
<!-- CREATE TABLE `requests`.`order_forms` ( `id` INT(9) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `contactnum` VARCHAR(11) NOT NULL , `subject` VARCHAR(35) NOT NULL , `message` VARCHAR(300) NOT NULL , PRIMARY KEY (`id`(9))) ENGINE = InnoDB; -->
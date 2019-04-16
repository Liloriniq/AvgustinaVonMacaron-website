

$(document).ready(function(){
	// slide show jQuery
	var arrImages = ["images/1.jpg","images/2.jpg","images/3.jpg","images/4.jpg","images/5.jpg","images/6.jpg"];
	var imageNumber = 0;
	var fadeTime = 500;
	var timerGoing = true;

	if (timerGoing==true){
	 	timer = setInterval(function() {
			imageNumber == arrImages.length-1 ? imageNumber=0 : imageNumber++;
			$("#slideImage").attr("src",arrImages[imageNumber]);
			$("#slideImage").width(500).height(350);
			$("#slideImage").fadeIn(fadeTime);
		},1500);
		timerGoing==true;
	};
	// end of slide show jQuery

	// scroll to top jQuery
	$(document).scroll(function(){
		if($(this).scrollTop() > 400) {
			$(".scroll_To_Top").fadeIn();
		} else {
			$(".scroll_To_Top").fadeOut();
		}
	});

	$(".scroll_To_Top").click(function() {
		$("html, body").animate({scrollTop : 0},700);
		return false;
	});
	//end of scroll to to jQuery

	//menu scroll to section jQuery
	$("#cheesecake").click(function() {
		$("html,body").animate({
			scrollTop: $("#cheesecakeban").offset().top},
			'slow');
	});

	$("#macarons").click(function() {
		$("html,body").animate({
			scrollTop: $("#macaronsban").offset().top},
			'slow');
	});

	$("#cakes").click(function() {
		$("html,body").animate({
			scrollTop: $("#cakesban").offset().top},
			'slow');
	});

	$("#cupcakes").click(function() {
		$("html,body").animate({
			scrollTop: $("#cupcakesban").offset().top},
			'slow');
	});

	$("#treats").click(function() {
		$("html,body").animate({
			scrollTop: $("#treatsban").offset().top},
			'slow');
	});

	$("#savoury").click(function() {
		$("html,body").animate({
			scrollTop: $("#savouryban").offset().top},
			'slow');
	});
	// end of menu scroll to section jQuery
});

//form validation JS
function validateForm() {
	var name = document.getElementById("name");
	var email = document.getElementById("email");
	var contactnum = document.getElementById("contactnum");
	var subject = document.getElementById("subject");

	atpos = email.value.indexOf("@");
	dotpos = email.value.lastIndexOf(".");
	

	if (name.value == "") {
		document.getElementById("error_name").innerHTML = "Please enter your name";
		name.focus();
		return false;
	}

	if (email.value =="") {
		document.getElementById("error_email").innerHTML = "Please, enter your email";
		email.focus();
		return false;
	}
	
	if (atpos < 1 || (dotpos - atpos < 2)) {
		document.getElementById("error_email").innerHTML = "Please, enter a valid email";
		email.focus();
		return false;
	}

	if (contactnum.value =="") {
		document.getElementById("error_number").innerHTML = "Please, enter your number";
		contactnum.focus();
		return false;
	}

	if (isNaN(contactnum.value) || contactnum.value.length < 11) {	
		document.getElementById("error_number").innerHTML = "Please enter a valid number";
		contactnum.focus();
		return false;
	}

	if(subject.value == "") {
		document.getElementById("error_subject").innerHTML = "What is your enquiery about?";
		subject.focus();
		return false;
	}
}

function clearErrorMsg(id){
    document.getElementById(id).innerHTML = '';
    }
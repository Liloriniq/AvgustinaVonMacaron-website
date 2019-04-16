<?php 
//attach header.php file 
include_once "header.php"; 
include_once "messages.php";


$sql = "SELECT * FROM about";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){

    $info = mysqli_fetch_assoc($result);
} else {
    echo "No record found in the database!";
}

//print_r($info);
?>


<div class="slide">
    <!-- slideshow with jQuery -->
    <img id="slideImage" src="images/cheesecake_5.jpg">
    </div><!--end of slideshow-->
    
<div class="main grid-container-main">
    <div class="welcome">
        <h1>Welcome message </h1>
    </div>
    <div class="text elemstyle">
        <div class="info"><?php echo $info['message'];?></div>
    </div>
    <div class="pics elemstyle">
        <img src="images/avgustina_1.jpg">
    </div>
</div>

<?php include_once "footer.php";
?>

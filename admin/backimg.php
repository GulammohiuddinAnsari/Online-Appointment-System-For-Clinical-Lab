<?php
if (isset($_SESSION["login"]) == true) { ?>
    <section id="carosul_section">
		<div class="carousel-item active">
		<img class="d-block w-100" src="images/img (8).jpg" height="590px" alt="First slide">
		</div>
	</section> 
<?php
} else {
    header("Location: login.php");
}
?>

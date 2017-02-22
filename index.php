<?php
include 'inc/header.php';
?>
<title>nine four</title>
<div class="container-fluid">
	<div class="col-xs-3 slidebar fixed">
	<?php include 'inc/slidebar.php'; ?>
	</div>
	
	<div class="col-xs-9 col-xs-push-3 dark main">

	<style>
video {
	filter: blur(3px);
	position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100vw;
    min-height: 100vh;
    width: auto;
    height: auto;
    z-index: -100;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);	
    opacity: .8;
    }
</style>

<div class="container-fluid">
	<div class="col-xs-12">
	
	
	
	<video class="col-xs-push-10" autoplay muted loop>
	<source src="img/video.mp4"> 
	</video>
	<div class="centered">
	<h1>Hello.</h1>
	<h2>I'm Manh994</h2>
	</div>
	</div>
</div>

	</div>
</div>

<?php
include 'inc/footer.php';
?>
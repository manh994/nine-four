<?php
include 'inc/header.php';
?>
<title>about 994</title>

<div class="container-fluid">
	<div class="col-xs-3 slidebar fixed">
	<?php include 'inc/slidebar.php'; ?>
	</div>
	
	<div class="col-xs-9 col-xs-push-3">
	<hr/>
	<div class="col-xs-2">
<img src="img/avatar.png" width="200" class=" img-circle img-thumbnail"/></div>
<span class="col-xs-10"><div class="lead">Manh994</div>
<address>
  <strong>Twitter, Inc.</strong><br>
  1355 Market Street, Suite 900<br>
  San Francisco, CA 94103<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>
</span>
<hr/>

<div class="lead col-xs-push-2 col-xs-10">Contact Us</div>

<form class="form-horizontal col-xs-12">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
    <div class="form-group">

      <label for="inputEmail3" class="col-sm-2 control-label">Letter</label>
          <div class="col-sm-10">
<textarea class="form-control" rows="3"></textarea>
</div>
</div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Send!</button>
    </div>
  </div>
</form>

</div>

<?php
include 'inc/footer.php';
?>
<?php
include 'inc/header.php';
?>
<title>login to 994</title>

<div class="container-fluid">
	<div class="col-xs-3 slidebar fixed">
	<?php include 'inc/slidebar.php'; ?>
	</div>
	
	<div class="col-xs-9 col-xs-push-3">
	<h1 class="col-xs-10 col-xs-push-2">Login</h1>
	<hr/>
<form class="form-horizontal col-xs-12">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
<div  class="col-xs-10 col-xs-push-2">
<button type="button" onclick="location.href='reg.php'" class="btn btn-primary">Register</button>
<button type="button" class="btn btn-primary">Forgot Pass</button>
</div>

</div>

<?php
include 'inc/footer.php';
?>
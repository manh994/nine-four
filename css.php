<?php
include 'inc/header.php';
?>
<title>css</title>
<style>
.trongsuot {
	opacity: 0.5;
	
	width: 100px;
	height: 100px;
	background: #f00;
	}
.bogoc {
	border-radius: 20px;
	
	border: 2px solid #000;
	width: 100px;
	height: 100px;
	}
.gradient {
	background: linear-gradient(-90deg, red, yellow);
	width: 100px;
	height: 100px;

}
.dobong {
	box-shadow: 2px 3px 3px #000;
	text-shadow: 2px 3px 3px #000;
	
	width: 100px;
	height: 100px;
	}
.transition {
    background: red;
    transition: width 2s;
	width: 100px;
	height: 100px;
	}
.transition:hover {
	width: 200px;
	}
.transform {
	background: red;
	width: 100px;
	height: 100px;
}
.transform:hover {
	transform: rotate(20deg);
}
.animation {
	width: 100px;
	height: 100px;
	background: red;
	animation-name: example;
    animation-duration: 1s;
    animation-iteration-count: infinite;
}
@keyframes example {
    from {background-color: red;
    transform: 0;}
    to {background-color: yellow;
    transform: rotate(360deg);
    }
}
</style>

<div class="container-fluid">
	<div class="col-xs-3 slidebar fixed">
	<?php include 'inc/slidebar.php'; ?>
	</div>
	
	<div class="col-xs-9 col-xs-push-3">
	
	<h1>CSS3</h1>
	<i class="glyphicon glyphicon-user"></i> <small>Manh994</small> / 
	<i class="glyphicon glyphicon-thumbs-up"></i> <small>50</small> / 
	<i class="glyphicon glyphicon-calendar"></i> <small>12 Dec 2016</small>
	
	<hr class="border1"/>
	
	<h2>Một vài mẫu CSS3</h2>
	
	<div class="lead">Ví dụ nho nhỏ :)</div>
	
	<p>
	<table class="table table-striped">
  	<tr>
  		<td>Tên</td>
  		<td>HTML mẫu</td>
  		<td>CSS mẫu</td>
  		<td>Hiển thị</td>
  	</tr>
  	<tr>
  		<td>Opacity</td>
  		<td><code>
  		&lt;div class="trongsuot">Trong suốt&lt;/div>
  		</code></td>
  		<td><code>
  		.trongsuot {
	opacity: 0.5;
	
	width: 100px;
	height: 100px;
	background: #f00;
	}
  		</code></td>
  		<td><div style="opacity: 0.5;
	
	width: 100px;
	height: 100px;
	background: #f00;">Trong suốt</div></td>
  	</tr>
  	<tr>
  		<td>border-radius</td>
  		<td><code>&lt;div class="bogoc">Bo góc&lt;/div></code></td>
  		<td><code>.bogoc { border-radius: 20px;
	
	border: 2px solid #000;
	width: 100px;
	height: 100px; }</code></td>
  		<td><div style="border-radius: 20px;
	
	border: 2px solid #000;
	width: 100px;
	height: 100px;">Bo góc</div></td>
  	</tr>
  	<tr>
  		<td>Gradient</td>
  		<td><code>&lt;div class="gradient">Gradient&lt;/div></code></td>
  		<td><code>.gradient { background: linear-gradient(-90deg, red, yellow);
	width: 100px;
	height: 100px; }</code></td>
  		<td><div style="background: linear-gradient(-90deg, red, yellow);
	width: 100px;
	height: 100px;">Gradient</div></td>
  	</tr>
  	<tr>
  		<td>box-shadow / text-shadow</td>
  		<td><code>&lt;div class="dobong">Đổ bóng&lt;/div></code></td>
  		<td><code>.dobong {
	box-shadow: 2px 3px 3px #000;
	text-shadow: 2px 3px 3px #000;
	
	width: 100px;
	height: 100px;
	}</code></td>
  		<td><div style="box-shadow: 2px 3px 3px #000;
	text-shadow: 2px 3px 3px #000;
	width: 100px;
	height: 100px;">Đổ bóng</div></td>
  	</tr>
  	<tr>
  		<td>Transition</td>
  		<td><code>&lt;div class="transition">Transition&lt;/div></code></td>
  		<td><code>.transition {
    background: red;
    transition: width 2s;
	width: 100px;
	height: 100px;
	}
.transition:hover {
	width: 200px;
	}</code></td>
  		<td><div class="transition">Transition</div></td>
  	</tr>
  	<tr>
  		<td>Transform</td>
  		<td><code>&lt;div class="transform">Transform&lt;/div></code></td>
  		<td><code>.transform {
	background: red;
	width: 100px;
	height: 100px;
}
.transform:hover {
	transform: rotate(20deg);
}</code></td>
  		<td><div class="transform">Transform</div></td>
  	</tr>
  	<tr>
  		<td>Animation</td>
  		<td><code>&lt;div class="Animation">Animation&lt;/div></code></td>
  		<td><code>.animation {
	width: 100px;
	height: 100px;
	background: red;
	animation-name: example;
    animation-duration: 4s;
}
@keyframes example {
    from {background-color: red;}
    to {background-color: yellow;}
}</code></td>
  		<td><div class="animation">Animation</div></td>
  	</tr>
</table>

<hr class="border1"/>
<button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-send"></i> Share</button>
<button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Print</button>
<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-bookmark"></i> Save</button>
<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-comment"></i> Add a Comment</button>
<hr class="border1"/>

<br/>
<label>Name</label>
<input type="text" class="form-control" placeholder="Name">
<label>Comment</label>
<textarea class="form-control" rows="3"></textarea>
<input class="btn btn-default" type="submit" value="Submit">
<hr class="border1"/>
</div>

<?php
include 'inc/footer.php';
?>
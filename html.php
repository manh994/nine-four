<?php
include 'inc/header.php';
?>
<title>html</title>

<div class="container-fluid">
	<div class="col-xs-3 slidebar fixed">
	<?php include 'inc/slidebar.php'; ?>
	</div>
	
	<div class="col-xs-9 col-xs-push-3">
	
	<h1>HTML5</h1>
	<i class="glyphicon glyphicon-user"></i> <small>Manh994</small> / 
	<i class="glyphicon glyphicon-thumbs-up"></i> <small>50</small> / 
	<i class="glyphicon glyphicon-calendar"></i> <small>12 Dec 2016</small>
	
	<hr class="border1"/>
	
	<h2>Form</h2>
	<h3>The &lt;input> Element</h3>
	<p>
	<table class="table table-striped">
  	<tr>
  		<td>Type</td>
  		<td>Description</td>
  		<td>Show</td>
  	</tr>
  	<tr>
  		<td>&lt;input type="text"></td>
  		<td>defines a one-line text input field</td>
  		 <td><input type="text"></td>
  	</tr>
  	<tr>
  		<td>&lt;input type="radio"></td>
  		<td>defines a radio button (for selecting one of many choices)</td>
  		<td><input type="radio"></td>
  	</tr>
  	<tr>
  		<td>&lt;input type="submit"></td>
  		<td>defines a submit button (for submitting the form)</td>
  		<td><input type="submit"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="password"></td>
  		<td>defines a password field</td>
  		<td><input type="password"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="reset"></td>
  		<td>defines a reset button that will reset all form values to their default values</td>
  		<td><input type="reset"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="checkbox"></td>
  		<td>defines a checkbox.</td>
  		<td><input type="checkbox"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="button"></td>
  		<td>defines a button</td>
  		<td><input type="button" value="button"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="color"></td>
  		<td>defines a color</td>
  		<td><input type="color"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="date"></td>
  		<td>defines a date</td>
  		<td><input type="date"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="datetime"></td>
  		<td>defines a datetime</td>
  		<td><input type="datetime"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="datetime-local"></td>
  		<td>defines a datetime-local</td>
  		<td><input type="datetime-local"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="email"></td>
  		<td>defines a email</td>
  		<td><input type="email"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="month"></td>
  		<td>defines a month</td>
  		<td><input type="month"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="number"></td>
  		<td>defines a number</td>
  		<td><input type="number"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="range"></td>
  		<td>defines a range</td>
  		<td><input type="range"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="search"></td>
  		<td>defines a search</td>
  		<td><input type="search"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="tel"></td>
  		<td>defines a tel</td>
  		<td><input type="tel"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="time"></td>
  		<td>defines a time</td>
  		<td><input type="time"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="url"></td>
  		<td>defines a url</td>
  		<td><input type="url"></td>
  	</tr>
  	 <tr>
  		<td>&lt;input type="week"></td>
  		<td>defines a week</td>
  		<td><input type="week"></td>
  	</tr>

	</table>
	</p>
	<h3>HTML5 Attributes</h3>
<i>HTML5 added the following attributes for &lt;input>:</i>
<blockquote>
autocomplete<br/>
autofocus<br/>
form<br/>
formaction<br/>
formenctype<br/>
formmethod<br/>
formnovalidate<br/>
formtarget<br/>
height and width<br/>
list<br/>
min and max<br/>
multiple<br/>
pattern (regexp)<br/>
placeholder<br/>
required<br/>
step<br/>

autocomplete<br/>
novalidate<br/>
</blockquote>

	
	<h3>The &lt;select> Element</h3>
	
	<p>
	<table class="table table-striped">
  	<tr>
  		<td>Type</td>
  		<td>Description</td>
  		<td>Show</td>
  	</tr>
  	<tr>
  		<td>&lt;select></td>
  		<td>defines a drop-down list</td>
  		<td><select name="cars">
  			<option value="volvo">Volvo</option>
  			<option value="saab">Saab</option>
  			<option value="fiat">Fiat</option>
 			 <option value="audi">Audi</option>
			</select>
		</td>
  	</tr>
  	</table>
	</p>
	
	<h3>The &lt;textarea> Element</h3>
	
	<p>
	<table class="table table-striped">
  	<tr>
  		<td>Type</td>
  		<td>Description</td>
  		<td>Show</td>
  	</tr>
  	<tr>
  		<td>&lt;textarea></td>
  		<td>defines a multi-line input field (a text area)</td>
  		<td><textarea name="message" rows="3" cols="20">
The cat was playing in the garden.
</textarea>
		</td>
  	</tr>
  	</table>
	</p>
	
	<h3>The &lt;button> Element</h3>
	
	<p>
	<table class="table table-striped">
  	<tr>
  		<td>Type</td>
  		<td>Description</td>
  		<td>Show</td>
  	</tr>
  	<tr>
  		<td>&lt;button></td>
  		<td>defines a clickable button</td>
  		<td><button type="button" onclick="alert('Hello World!')">Click Me!</button>
		</td>
  	</tr>
  	</table>
	</p>
	<h3>The &lt;datalist> Element</h3>
	
	<p>
	<table class="table table-striped">
  	<tr>
  		<td>Type</td>
  		<td>Description</td>
  		<td>Show</td>
  	</tr>
  	<tr>
  		<td>&lt;datalist></td>
  		<td>specifies a list of pre-defined options for an &lt;input> element.

Users will see a drop-down list of the pre-defined options as they input data.

The list attribute of the &lt;input> element, must refer to the id attribute of the &lt;datalist> element</td>
  		<td><form action="#">
  <input list="browsers">
  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist> 
</form>
		</td>
  	</tr>
  	</table>
	</p>
	<h3>The &lt;keygen> Element</h3>
	
	<p>
	<table class="table table-striped">
  	<tr>
  		<td>Type</td>
  		<td>Description</td>
  		<td>Show</td>
  	</tr>
  	<tr>
  		<td>&lt;keygen></td>
  		<td>provide a secure way to authenticate users.

The &lt;keygen> element specifies a key-pair generator field in a form.

When the form is submitted, two keys are generated, one private and one public.

The private key is stored locally, and the public key is sent to the server.

The public key could be used to generate a client certificate to authenticate the user in the future</td>
  		<td><form action="#">
  Username: <input type="text" name="user">
  Encryption: <keygen name="security">
  <input type="submit">
</form>
		</td>
  	</tr>
  	</table>
	</p>
	<h3>The &lt;output> Element</h3>
	
	<p>
	<table class="table table-striped">
  	<tr>
  		<td>Type</td>
  		<td>Description</td>
  		<td>Show</td>
  	</tr>
  	<tr>
  		<td>&lt;output></td>
  		<td>represents the result of a calculation (like one performed by a script)</td>
  		<td><form action="#"
  oninput="x.value=parseInt(a.value)+parseInt(b.value)">
  0
  <input type="range"  id="a" name="a" value="50">
  100 +
  <input type="number" id="b" name="b" value="50">
  =
  <output name="x" for="a b"></output>
  <br><br>
  <input type="submit">
</form>
		</td>
  	</tr>
  	</table>
	</p>
	
	<h2>HTML Canvas Reference</h2>
	<p class="lead">The HTML5 &lt;canvas> tag is used to draw graphics, on the fly, via scripting (usually JavaScript).

However, the &lt;canvas> element has no drawing abilities of its own (it is only a container for graphics) - you must use a script to actually draw the graphics.

The getContext() method returns an object that provides methods and properties for drawing on the canvas.

This reference will cover the properties and methods of the getContext("2d") object, which can be used to draw text, lines, boxes, circles, and more - on the canvas.
	</p>
	code:<br/>
	<code>&lt;canvas id="myCanvas" width="200" height="100">&lt;/canvas></code><br/>
	<h5>Example</h5>
	<canvas id="myCanvas1" width="200" height="100" style="border: 1px solid #000;"></canvas>
	<script>
	var c = document.getElementById("myCanvas1");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.arc(95,50,40,0,2*Math.PI);
ctx.stroke();
</script>
<blockquote>code: <br/><code>
var c = document.getElementById("myCanvas1");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.arc(95,50,40,0,2*Math.PI);
ctx.stroke();</code></blockquote>
	


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
<?php
include 'inc/header.php';
?>
<title>audio</title>
<script>
	$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}

var getten = decodeURIComponent($.urlParam('bh'));
var getcasi = decodeURIComponent($.urlParam('casi'));
var type = $.urlParam('type');

</script>


<div class="container-fluid">
	<div class="col-xs-3 slidebar fixed">
	<?php include 'inc/slidebar.php'; ?>
	</div>
	
	<div class="col-xs-9 col-xs-push-3">
	

<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
    	<video class="col-xs-12" src="" autoplay="1" controls>
		</video>
      <img id="thumb" src="" alt="...">
      <div class="caption">
		<audio class="col-xs-12 col-sm-12 col-md-12" controls autoplay="1" id='audio_core' src="#"  ></audio>
        <p class="col-xs-12 col-sm-12 col-md-12" id="casi"></p>
        <p>
        <a id="down" href="" class="btn btn-primary" role="button" download><i class="glyphicon glyphicon-download-alt"></i> Download</a> 
        <a href="#" class="btn btn-default" role="button"><i class="glyphicon glyphicon-share-alt"></i> Chia sẻ</a></p>
      </div>
    </div>
  </div>
</div>


<div class="music row">
<h1>Các bài hát liên quan <i class="glyphicon glyphicon-chevron-right"></i></h1>


	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play"></span>
			<a href="play.html?bh=Loi Tu Su&casi=Ung Dai Ve&type=mp3"><img src="img/thumb/cc7ed4169790aa2c71d7c194cb0ee12f_1480599063.jpg" alt=""/></a>
		
			<div class="caption">
			<b><a href="play.html?bh=Loi Tu Su&casi=Ung Dai Ve&type=mp3">Lời Tự Sự (Single)</a></b><br/>
			<small><a href="casi.html?id=1">Ưng Đại Vệ</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="play.html?bh=Mat Trai Cua Hanh Phuc&casi=Vuong Anh Tu&type=mp3"><img src="img/thumb/9f75a334117dd8cf2a263ce063150eca_1480671794.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="play.html?bh=Mat Trai Cua Hanh Phuc&casi=Vuong Anh Tu&type=mp3">Mặt Trái Của Hạnh Phúc</a></b><br/>
			<small><a href="casi.html?id=1">Vương Anh Tú</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="play.html?bh=Den Ben Em Be The One&casi=Vu Thao My Lan Vy&type=mp3"><img src="img/thumb/4c3bdefc0e66730a6a5ac0b024a4a68e_1480572888.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="play.html?bh=Den Ben Em Be The One&casi=Vu Thao My Lan Vy&type=mp3">Đến Bên Em (Be The O</a></b><br/>
			<small><a href="casi.html?id=1">Vũ Thảo My, Lan Vy</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="play.html?bh=Ha Noi Ngay Tro Ve&casi=Nguyen Hong An&type=mp3"><img src="img/thumb/fb6ca2c71f8e6c4fb5a0ecce5e52a248_1480644756.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="play.html?bh=Ha Noi Ngay Tro Ve&casi=Nguyen Hong An&type=mp3">Hà Nội Em Và Tôi</a></b><br/>
			<small><a href="casi.html?id=1">Nguyễn Hồng Ân</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="play.html?bh=Hung Dong&casi=Hoang Rob&type=mp3"><img src="img/thumb/41db2b3fe7eeef38a53c1f8c3acc8f05_1480385503.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="play.html?bh=Hung Dong&casi=Hoang Rob&type=mp3">Hừng Đông</a></b><br/>
			<small><a href="casi.html?id=1">Hoàng Rob</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="play.html?bh=No More&casi=Phuong Trinh Jolie Daniel Mastro&type=mp3"><img src="img/thumb/d62f4a280822fc3c00b573c19b90a010_1480308055.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="play.html?bh=No More&casi=Phuong Trinh Jolie Daniel Mastro&type=mp3">No More</a></b><br/>
			<small><a href="casi.html?id=1">Phương Trinh Jolie</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="play.html?bh=Mua Trong Long&casi=Trinh Dinh Quang&type=mp3"><img src="img/thumb/9f75a334117dd8cf2a263ce063150eca_1480564019.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="play.html?bh=Mua Trong Long&casi=Trinh Dinh Quang&type=mp3">Mưa Trong Lòng</a></b><br/>
			<small><a href="casi.html?id=1">Trịnh Đình Quang</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="play.html?bh=Hay Dung Do Doi Anh&casi=Chi Bang&type=mp3"><img src="img/thumb/307ae0928b0a7705987dc8a5b6a6ac47_1478529553.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="play.html?bh=Hay Dung Do Doi Anh&casi=Chi Bang&type=mp3">Hãy Đứng Đó Đợi Anh</a></b><br/>
			<small><a href="casi.html?id=1">Chí Bằng</a></small>
			</div>
		</div>
	</div>
</div>


<script>
if(type=='mp3')
{
	$('video').hide();
	$('.video').hide();

	
	var mp3="source/mp3/"+getten+" - "+getcasi+".mp3";
	var thumb="img/thumbnail/mp3/"+getten+" - "+getcasi+".jpg";
	$('#audio_core').attr('src', mp3);
	$('#thumb').attr('src', thumb);
	$('#down').attr('href', mp3);

}
	else {
	$('audio').hide();
	$('#thumb').hide();
	$('.music').hide();
	
	var video="source/video/"+getten+" - "+getcasi+" - 480p.mp4";
	$('video').attr('src', video);
	$('#down').attr('href', video);
}


var ten = document.getElementById('title');
var casi = document.getElementById('casi');
ten.innerHTML="<i class='glyphicon glyphicon-play-circle'></i> "+getten;
casi.innerHTML='Ca sĩ: '+getcasi;

</script>




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
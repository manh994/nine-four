<?php
include 'inc/header.php';
?>
<title>audio / video</title>
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
	


<h1 id="title"></h1>

<!-- audio player -->

<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
    	<video class="col-xs-12" src="" autoplay="1" controls>
		</video>
      <img id="thumb" src="" alt="...">
      <div class="caption">
		<audio class="col-xs-12 col-sm-12 col-md-12" controls autoplay="1" id='audio_core' src=""  ></audio>
        <p class="col-xs-12 col-sm-12 col-md-12" id="casi"></p>
        <p>
        <a id="down" href="" class="btn btn-primary" role="button" download><i class="glyphicon glyphicon-download-alt"></i> Download</a> 
        <a href="#" class="btn btn-default" role="button"><i class="glyphicon glyphicon-share-alt"></i> Chia sẻ</a></p>
      </div>
    </div>
  </div>
</div>

<!-- related items -->

<div class="music row">
<h1>Các bài hát liên quan <i class="glyphicon glyphicon-chevron-right"></i></h1>


	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play"></span>
			<a href="audio.php?bh=Loi Tu Su&casi=Ung Dai Ve&type=mp3"><img src="img/thumb/cc7ed4169790aa2c71d7c194cb0ee12f_1480599063.jpg" alt=""/></a>
		
			<div class="caption">
			<b><a href="audio.php?bh=Loi Tu Su&casi=Ung Dai Ve&type=mp3">Lời Tự Sự (Single)</a></b><br/>
			<small><a href="casi.html?id=1">Ưng Đại Vệ</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Mat Trai Cua Hanh Phuc&casi=Vuong Anh Tu&type=mp3"><img src="img/thumb/9f75a334117dd8cf2a263ce063150eca_1480671794.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Mat Trai Cua Hanh Phuc&casi=Vuong Anh Tu&type=mp3">Mặt Trái Của Hạnh Phúc</a></b><br/>
			<small><a href="casi.html?id=1">Vương Anh Tú</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Den Ben Em Be The One&casi=Vu Thao My Lan Vy&type=mp3"><img src="img/thumb/4c3bdefc0e66730a6a5ac0b024a4a68e_1480572888.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Den Ben Em Be The One&casi=Vu Thao My Lan Vy&type=mp3">Đến Bên Em (Be The O</a></b><br/>
			<small><a href="casi.html?id=1">Vũ Thảo My, Lan Vy</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Ha Noi Ngay Tro Ve&casi=Nguyen Hong An&type=mp3"><img src="img/thumb/fb6ca2c71f8e6c4fb5a0ecce5e52a248_1480644756.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Ha Noi Ngay Tro Ve&casi=Nguyen Hong An&type=mp3">Hà Nội Em Và Tôi</a></b><br/>
			<small><a href="casi.html?id=1">Nguyễn Hồng Ân</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Hung Dong&casi=Hoang Rob&type=mp3"><img src="img/thumb/41db2b3fe7eeef38a53c1f8c3acc8f05_1480385503.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Hung Dong&casi=Hoang Rob&type=mp3">Hừng Đông</a></b><br/>
			<small><a href="casi.html?id=1">Hoàng Rob</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=No More&casi=Phuong Trinh Jolie Daniel Mastro&type=mp3"><img src="img/thumb/d62f4a280822fc3c00b573c19b90a010_1480308055.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=No More&casi=Phuong Trinh Jolie Daniel Mastro&type=mp3">No More</a></b><br/>
			<small><a href="casi.html?id=1">Phương Trinh Jolie</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Mua Trong Long&casi=Trinh Dinh Quang&type=mp3"><img src="img/thumb/9f75a334117dd8cf2a263ce063150eca_1480564019.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Mua Trong Long&casi=Trinh Dinh Quang&type=mp3">Mưa Trong Lòng</a></b><br/>
			<small><a href="casi.html?id=1">Trịnh Đình Quang</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Hay Dung Do Doi Anh&casi=Chi Bang&type=mp3"><img src="img/thumb/307ae0928b0a7705987dc8a5b6a6ac47_1478529553.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Hay Dung Do Doi Anh&casi=Chi Bang&type=mp3">Hãy Đứng Đó Đợi Anh</a></b><br/>
			<small><a href="casi.html?id=1">Chí Bằng</a></small>
			</div>
		</div>
	</div>
</div>

<div class="video row">
<h1>Các video liên quan <i class="glyphicon glyphicon-chevron-right"></i></h1>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Neu Anh Yeu Em&casi=Ai Phuong&type=mp4"><img src="img/thumb/video/242b228d19587bc881784b97f935e741_1480672809.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Neu Anh Yeu Em&casi=Ai Phuong&type=mp4">Nếu Anh Yêu Em</a></b><br/>
			<small><a href="casi.html?id=1">Ái Phương</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Toi Cho Co Gai Do&casi=Nam Em&type=mp4"><img src="img/thumb/video/4732e64bf77c3155cb6cec910986556e_1480645248.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Toi Cho Co Gai Do&casi=Nam Em&type=mp4">Tội Cho Cô Gái Đó</a></b><br/>
			<small><a href="casi.html?id=1">Nam Em</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Chuyen Tinh Hom Qua&casi=Ha Nhi Idol&type=mp4"><img src="img/thumb/video/e2c34dbca13c4a827b80bc40386d0159_1480490187.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Chuyen Tinh Hom Qua&casi=Ha Nhi Idol&type=mp4">Chuyện Tình Hôm Qua</a></b><br/>
			<small><a href="casi.html?id=1">Hà Nhi Idol</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Phai Khoc Hay Cuoi&casi=HKT&type=mp4"><img src="img/thumb/video/b74e511185121821aece6c721ecaa0ad_1480503018.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Phai Khoc Hay Cuoi&casi=HKT&type=mp4">Phải Khóc Hay Cười</a></b><br/>
			<small><a href="casi.html?id=1">HKT</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Neu Khong La Tat Ca&casi=Ho Viet Trung Phuong Thien Hoang&type=mp4"><img src="img/thumb/video/0a44e466e187aa3b7f0f8285ef485b5e_1480929838.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Neu Khong La Tat Ca&casi=Ho Viet Trung Phuong Thien Hoang&type=mp4">Nếu Không Là Tất Cả</a></b><br/>
			<small><a href="casi.html?id=1">Hồ Việt Trung, Phương Thiên</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Alone&casi=Alan Walker&type=mp4"><img src="img/thumb/video/e5594bbf9530488c0ae2e2eb7a599bc6_1480666762.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Alone&casi=Alan Walker&type=mp4">Alone</a></b><br/>
			<small><a href="casi.html?id=1">Alan Walker</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Bad Things&casi=Machine Gun Kelly Camila Cabello&type=mp4"><img src="img/thumb/video/5a1fb21eb82f7ea1f8db8063deb7fb5d_1480907681.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Bad Things&casi=Machine Gun Kelly Camila Cabello&type=mp4">Bad Things</a></b><br/>
			<small><a href="casi.html?id=1">Machine Gun Kelly, Camila C</a></small>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="thumbnail">
		<span class="icon-play">
		</span>
			<a href="audio.php?bh=Ride Em On Down&casi=The Rolling Stones&type=mp4"><img src="img/thumb/video/95e1863046ecfd8dc823599072d14440_1480844968.jpg" alt=""/></a>
			<div class="caption">
			<b><a href="audio.php?bh=Ride Em On Down&casi=The Rolling Stones&type=mp4">Ride 'Em On Down</a></b><br/>
			<small><a href="casi.html?id=1">The Rolling Stones</a></small>
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

<?php
include 'inc/footer.php';
?>
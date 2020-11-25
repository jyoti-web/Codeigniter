<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('header');?>
	<title></title>
</head>
<body>
	<div class="top">
		<section class="event_and_party">
			<div class="event">
				<div class="inner_event">
					<div class="text">
						<h2>WE ARE GETTING MARRIED!</h2>
						<div class="calender" id="calender">
							
						</div>
						<div class="date"><h6 class="text-center"><?php echo date("F d, yy"); ?></h6></div>
					</div>
				</div>
			</div>
		</section>
		<section class="party-main mg-top">
			<div class="container ">
				<div class="row">
					<div class="col-sm-12 col-lg-6">
						<div class="party text-center">
							<div class="bg-round"><img src="/custom_site/public/img/event-img-1.png"></div>
							<h2 class="title">Main Ceremony</h2>
							<p class="blur-green">LONDON, UK
							 ST MARY’S RPISCOPAL RESTAURANT</p>
							<p class="black">OCTOBER 7, 2021 | 10:00 - 12:00</p>
							<p class="light-grey">Effectiveness truth policymakers, foundation, inclusive. Deep engagement vaccines integrity new approaches countries replicable prevention movements working alongside.</p>
							<p class="map">VIEW MAP</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12">
						<div class="party text-center">
							<div class="bg-round"><img src="/custom_site/public/img/event-img-2.png"></div>
							<h2 class="title">Wedding Party</h2>
							<p class="blur-green">LONDON, UK
							 ST MARY’S RPISCOPAL RESTAURANT</p>
							<p class="black">OCTOBER 10, 2021 | 10:00 - 2:00</p>
							<p class="light-grey">Effectiveness truth policymakers, foundation, inclusive. Deep engagement vaccines integrity new approaches countries replicable prevention movements working alongside.</p>
							<p class="map">VIEW MAP</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="food-gallery mg-top text-center">
			<div class="container">
				<div class="heading-logo">
					<img src="/custom_site/public/img/icon-line.png">
					<h3 class="title">Food & Drink</h3>
				</div>
				<div class="row">
					<?php
					foreach (glob("public/gallery/*.jpg*") as $myfiles) {
					    echo '<div class="col-sm-6 col-lg-3">';
					    	echo '<div class="img-gallery">';
					    echo '<img src=' . base_url($myfiles) . ' onclick="myFunction(this);" class="cursor img-fluid" />';
					    echo '</div>';
					    echo '</div>';
					   	}
					?>
				</div>
				<div class="mode-img">
					<div class="mode">
						<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
						<img id="expandedImg" style="width:100%">
						<div id="imgtext"></div>
					</div>
				</div>
				
			</div>
		</section>
		<section class="events mg-top text-center">
			<div class="container">
				<div class="heading-logo">
					<img src="/custom_site/public/img/icon-line.png">
					<h3 class="title">Food & Drink</h3>
				</div>
				<div class="row no-padding">
					<div class="col-lg-2 col-sm-6">
						<div class="text-3d">
							<div class="img-gallery-3d"><img src="/custom_site/public/gallery/events/image_time_1.png"></div>
							<p class="time-3d">15:00</p>
							<h6 class="title-3d">CEREMONY BEGINS</h6>
							<p class="caption">The ceremony will be held on a Johannesburg landmark with views forever and once the sun sets into the night.</p>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="text-3d">
							<div class="img-gallery-3d"><img src="/custom_site/public/gallery/events/image_time_2.png"></div>
							<p class="time-3d">16:00</p>
							<h6 class="title-3d">THE “I DO’S"</h6>
							<p class="caption">Angeli Jolie meaningful work maximize, Action Against Hunger complexity human potential legitimize altruism.</p>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="text-3d">
							<div class="img-gallery-3d"><img src="/custom_site/public/gallery/events/image_time_3.png"></div>
							<p class="time-3d">17:00</p>
							<h6 class="title-3d">MORE PHOTOS</h6>
							<p class="caption">Fellows, change citiz accelerate progress; citizens of change public institutions donors John Lennon world.</p>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="text-3d">
							<div class="img-gallery-3d"><img src="/custom_site/public/gallery/events/image_time_4.png"></div>
							<p class="time-3d">18:00</p>
							<h6 class="title-3d">COCKTAIL HOUR</h6>
							<p class="caption">Social responsibility vaccine beneficiaries opportunity reduce child mortality convener 501 respect employment.</p>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="text-3d">
							<div class="img-gallery-3d"><img src="/custom_site/public/gallery/events/image_time_5.png"></div>
							<p class="time-3d">19:00</p>
							<h6 class="title-3d">DINNER SERVED</h6>
							<p class="caption">Efficient vaccines women and children innovate frontline. Change-makers youth, poverty women's rights democracy.</p>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="text-3d">
							<div class="img-gallery-3d"><img src="/custom_site/public/gallery/events/image_time_6.png"></div>
							<p class="time-3d">20:00</p>
							<h6 class="title-3d">CAKE CUTTING</h6>
							<p class="caption">Measures cross-cultural honesty mobilize, empowerment. Freedom dedicated pride, community gender.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="reply">
			<div class="reply-data">
				<h2 class="reply-heading">Please kindly reply</h2>
				<h4 class="reply-date"><i>by</i> OCTOBER 7, 2016</h4>
				<p class="reply-para">We can’t wait to see all of our beloved friends and relatives at the wedding. If, by chance, you are prevented from coming, please let us know in advance</p>
				<button class="btn1">Contact</button>
			</div>
			
		</section>
	</div>
</body>
</html>
<?php $this->load->view('footer') ?>
<script type="text/javascript">
	var countDownDate = new Date("Jan 10, 2021 11:35:40").getTime();
	var  x = setInterval(function(){
		var now = new Date().getTime();
		var distance = countDownDate - now;
		var days = Math.floor(distance/(1000*60*60*24));
		var hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
		var minutes = Math.floor((distance%(1000*60*60)) / (1000*60));
		var seconds = Math.floor((distance%(1000*60))/1000);
		document.getElementById("calender").innerHTML = 
		"<div class='group'>" + '<p>' + days + '</p>' +  "<span class='cal'>Days</span></div>"
		 + "<div class='group'>" + '<p>' + hours + '</p>' +  "<span class='cal'>Hours</span></div>"
		 + "<div class='group'>" + '<p>' + minutes + '</p>' +  "<span class='cal'>Minutes</span></div>"
		 + "<div class='group'>" + '<p>' + seconds + '</p>' +  "<span class='cal'>seconds</span></div>";
		if(distance < 0){
			clearInterval(x);
			document.getElementById("calender").innerHTML = "Expired";
		}
	}, 1000);
</script>
<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
</script>
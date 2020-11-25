<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
	<?php $this->load->view('header');?>
<body>
<div class="top">
	<div id="em-demo-header">
		<div id="fsslideshow_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="web-product-dark-hero125" data-source="gallery">
			<div id="fsslideshow" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
				<ul>
					<li data-transition="fade" >
						<img src="public/img/bkg-header.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
						<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
							data-x="['right','right','right','right']" data-hoffset="['80','-364','-479','-553']" 
							data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-150','-155','-180','-202']" 
							data-basealign="slide" 
							data-frames='[{"from":"x:right;rZ:-45deg;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							style="z-index: 12;border-width:0px;">
							<img src="public/img/3.png" alt="" data-no-retina> 
						</div>
	
						<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
							data-x="['right','right','right','right']" data-hoffset="['250','-364','-479','-553']" 
							data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-110','-155','-180','-202']" 
							data-width="none"
							data-basealign="slide" 
							data-frames='[{"from":"x:right;rZ:-40deg;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							
							style="z-index: 12;border-width:0px;">
							<img src="public/img/2.png" alt="" data-no-retina> 
						</div>
						
						<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" 
							data-x="['right','right','right','right']" data-hoffset="['450','-364','-479','-553']" 
							data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-210','-155','-180','-202']" 
							
							data-basealign="slide" 
							data-frames='[{"from":"x:right;rZ:-35deg;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							style="z-index: 12;border-width:0px;">
							<img src="public/img/1.png" alt="" data-no-retina> 
						</div>

						<div class="tp-caption WebProduct-Title-Light rs-parallaxlevel-2 tp-resizeme" 
							data-x="['left','left','left','left']" data-hoffset="['30','30','200','80']" 
							data-y="['middle','middle','top','top']" data-voffset="['-110','-110','137','130']" 
							
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
							
							style="z-index: 11; white-space: nowrap;text-transform:left;">
							<img src="public/img/logo.png" alt=""/>
						</div>

						<div class="tp-caption WebProduct-SubTitle-Light rs-parallaxlevel-1 tp-resizeme" 
							data-x="['left','left','left','left']" data-hoffset="['30','0','0','0']" 
							data-y="['middle','middle','top','top']" data-voffset="['0','0','0','0']"  
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
							
							style="z-index: 12; white-space: nowrap;text-transform:uppercase;letter-spacing:2px;font-weight:600;color:#fff;">
							Wedding HTML5 template
						</div>
						
						<div class="tp-caption WebProduct-SubTitle-Light rs-parallaxlevel-1 tp-resizeme" 
							data-x="['left','left','left','left']" data-hoffset="['30','0','0','0']" 
							data-y="['middle','middle','top','top']" data-voffset="['40','0','0','0']" 
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
							style="z-index: 12; white-space: nowrap;text-transform:uppercase;letter-spacing:2px;font-weight:600;color:#fff;">
							RSVP, Event Planners,
						</div>
						<div class="tp-caption WebProduct-Content-Light rs-parallaxlevel-1 tp-resizeme" 
							data-x="['left','left','left','left']" data-hoffset="['30','30','200','180']" 
							data-y="['middle','middle','top','top']" data-voffset="['80','127','345','316']" 
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
							style="z-index: 12; white-space: nowrap;text-transform:uppercase;letter-spacing:2px;font-weight:600;color:#fff;">
							Ceremony, Gallery, Shop
						</div>

						<div class="tp-caption WebProduct-Button rev-btn rs-parallaxlevel-1" 
							data-x="['left','left','left','left']" data-hoffset="['30','30','200','80']" 
							data-y="['middle','middle','top','top']" data-voffset="['180','238','456','420']" 
			
							data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
							
							data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
							
							style="z-index: 14; white-space: nowrap;text-transform:uppercase;letter-spacing:1px;background-color:#fff; color:#4b7c71!important;border-radius: 20px; padding:0px 8px;">
							<button class="btn">Purchase now</button>
						</div>
					</li>
				</ul>	
			</div>
		</div>	
	</div>
	<div id="em-demo-main-store" class="main">
		<div class="html-heading">
			<img src="public/img/demo_text.png" alt="choose demo"/>
		</div>
		<div class="container-fluid">
			<div class="col-sm-12" style="width: 90%; margin: auto;">
				<div class="col-sm-12">
					<div class="row animatedParent">
						<div class="col-sm-3 col-sm-push-2 em-demo-preview-item">
							<a href="public/img/5.jpg" target="_blank" alt="Bridal">    
							<span class="image-wrap move-long" style="background-image: url('public/img/5.jpg');"></span>
							</a>
							<p class="btn-view-theme">
								<a class="view-theme new" href="public/img/5.jpg" target="_blank" alt="Home">Home 1</a>								
							</p>
						</div>
						<div class="col-sm-3 col-sm-push-2 em-demo-preview-item">
							<a href="public/img/6.jpg" target="_blank" alt="Bridal">    
							<span class="image-wrap move-long" style="background-image: url('public/img/6.jpg');"></span>
							</a>
							<p class="btn-view-theme">
								<a class="view-theme new" href="public/img/6.jpg" target="_blank" alt="Home">Home 2</a>								
							</p>
						</div>
						<div class="col-sm-3 col-sm-push-2 em-demo-preview-item">
							<a href="public/img/3.jpg" target="_blank" alt="Bridal">    
							<span class="image-wrap move-long" style="background-image: url('public/img/3.jpg');"></span>
							</a>
							<p class="btn-view-theme">
								<a class="view-theme new" href="public/img/3.jpg" target="_blank" alt="Home">Home 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row animatedParent">		
						<div class="col-sm-3 col-sm-push-2 em-demo-preview-item">
							<a href="public/img/4.jpg" target="_blank" alt="Bridal">    
							<span class="image-wrap move-long" style="background-image: url('public/img/4.jpg');"></span>
							</a>
							<p class="btn-view-theme">
								<a class="view-theme new" href="public/img/4.jpg" target="_blank" alt="Home">Home 4</a>								
							</p>
						</div>
						<div class="col-sm-3 col-sm-push-2 em-demo-preview-item">
							<a href="public/img/7.jp1" target="_blank" alt="Bridal">    
							<span class="image-wrap move-long" style="background-image: url('public/img/1.jpg');"></span>
							</a>
							<p class="btn-view-theme">
								<a class="view-theme new" href="public/img/1.jpg" target="_blank" alt="Home">Home 5</a>								
							</p>
						</div>
						<div class="col-sm-3 col-sm-push-2 em-demo-preview-item">
							<a href="public/img/2.jpg" target="_blank" alt="Bridal">    
							<span class="image-wrap move-long" style="background-image: url('public/img/2.jpg');"></span>
							</a>
							<p class="btn-view-theme">
								<a class="view-theme new" href="public/img/2.jpg" target="_blank" alt="Home">Home 6</a>								
							</p>
						</div>						
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row animatedParent">
						<div class="col-sm-3 col-sm-push-5 em-demo-preview-item">
							<a href="public/img/7.jpg" target="_blank" alt="Bridal">    
							<span class="image-wrap move-long" style="background-image: url('public/img/7.jpg');"></span>
							</a>
							<p class="btn-view-theme">
								<a class="view-theme new" href="public/img/7.jpg" target="_blank" alt="Home">Home 7</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="em-demo-love-theme">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<p class="title animated" data-animated="bounceInLeft">Like us? Rate for us now!</p>
					<p class="title-top animated" data-animated="bounceInUp">START CREATING YOUR WEBSITE TODAY <br>WITH "Bridal HTML5" NOW</p>
					<p class="btn-header animated " data-animated="bounceInLeft">
						<a class="button buy_theme effect_btn " href="https://themeforest.net/item/bridal-responsive-html5-template/19804515" id="buy_this_theme">BUY THIS THEME</a>
					</p>
					<div class="bg"></div>
				</div>
			</div>
		</div>	
	</div>
	<div class="copyright text-center  animated" data-animated="fadeInLeft">
			<address>© 2017. All Rights Reserved.<span> Bridal <a href="http://themeforshop.com/">HTML5 Template</a> by <a href="http://themeforshop.com/" title="Responsive Shopify Themes">themeforshop.com</a></span></address>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
			var tpj=jQuery;			
			var revapi1055;
			tpj(document).ready(function() {
				if(tpj("#fsslideshow").revolution == undefined){
					revslider_showDoubleJqueryError("#fsslideshow");
				}else{
					revapi1055 = tpj("#fsslideshow").show().revolution({
						sliderType:"hero",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1400,1240,778,480],
						gridheight:[768,768,960,720],
						lazyType:"none",
						parallax: {
							type:"mouse+scroll",
							origo:"slidercenter",
							speed:2000,
							levels:[1,2,3,20,25,30,35,40,45,50,46,47,48,49,50,55],
							type:"mouse+scroll",
							disable_onmobile:"on"
						},
						shadow:0,
						spinner:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							disableFocusListener:false,
						}
					});
				}
			});
		</script>		
		<html
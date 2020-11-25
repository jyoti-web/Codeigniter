<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="/custom_site/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/custom_site/public/css/settings.css">	
	<link rel="stylesheet" href="/custom_site/public/font-awesome/css/font-awesome.min.css">

	<link rel="shortcut icon" href="/custom_site/public/img/favicon.ico" type="image/x-icon"/>
	<link href="/custom_site/public/css/style.css" rel="stylesheet">
	<link href="/custom_site/public/css/main.css" rel="stylesheet">
	<link href="/custom_site/public/css/demo.css" rel="stylesheet">
	<link href="/custom_site/public/css/jquery.flipster.css" rel="stylesheet">
	<link href="/custom_site/public/css/flipsternavtabs.css" rel="stylesheet">
	<script type="text/javascript" src="/custom_site/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/custom_site/public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/custom_site/public/js/jquery.flipster.js"></script>
	<script type="text/javascript" src="/custom_site/public/js/jquery.themepunch.tools.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/custom_site/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="/custom_site/public/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="/custom_site/public/js/revolution.extension.actions.min.js"></script>		
	<script type="text/javascript" src="/custom_site/public/js/revolution.extension.layeranimation.min.js"></script>		
	<script type="text/javascript" src="/custom_site/public/js/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="/custom_site/public/js/revolution.extension.slideanims.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menubar">
		<a class="navbar-brand" href="//localhost/custom_site/index.php"><img src="/custom_site/public/img/logo-black.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto-left">
			    <li class="nav-item active">
			        <a class="nav-link" href="//localhost/custom_site/index.php">Home</a>
			    </li>
		      	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Pages
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="/custom_site/index.php/events">event & parties</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="/custom_site/index.php/gallery">gallery</a>
			    </li>
		      	<li class="nav-brand">
		      		<a class="nav-link" href="//localhost/custom_site/index.php"><img src="/custom_site/public/img/logo-black.png" id="brand-img"></a>
		      	</li>
		      	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Shop
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			    </li>
		      	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          blogs
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			    </li>
		      	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          location
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			    </li>
			    <li class="nav-item">
			      	<ul class="icons">
			      		<li class="nav-item-icons"><i class="fa fa-search nav-link" aria-hidden="true"></i></li>
			      		<li class="nav-item-icons"><i class="fa fa-shopping-bag nav-link" aria-hidden="true"></i></li>
						<li class="nav-item-icons"><i class="fa fa-user-o nav-link" aria-hidden="true"></i></li>
			      	</ul>
			   	</li>
		    </ul>
		</div>
	</nav>
</header>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

</body>
<script type="text/javascript">
var mybutton = document.getElementById("myBtn");
window.onscroll = function(){scrollFunction();}
function scrollFunction(){
	if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){
		document.getElementById('menubar').style.padding = "8px";
		document.getElementById('brand-img').style.width = "150px";
		document.getElementById('menubar').style.position = "fixed";
		mybutton.style.display = "block";


	}else{
		document.getElementById('menubar').style.padding = "14px 10px";
		document.getElementById('brand-img').style.width = "195px";
		document.getElementById('menubar').style.position = "relative";

		mybutton.style.display = "none";


	}
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</html>
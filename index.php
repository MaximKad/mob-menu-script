<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Тестирование</title>
<!--jQuery-->
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=4.8.4'></script>
<!--Мобильное меню-->
<script>
$(document).ready(function(){
	$('.menu-btn').on('click', function(){
		$(this).toggleClass('active');
		$('.navigation-bar').toggleClass('active');
	});
});
</script>
</head>
<body>
<style>
div, ul{
	padding:0;
	margin:0;
}
.page-header{
	border:1px #000 solid;
	background:#fff;
	padding:15px;
}
.navigation-bar{
	border:1px #000 solid;
	background:#fff;
}
ul.menu-navigation li{
	display:inline-block;
	padding:10px 0px;
}
ul.menu-navigation li a{
	text-decoration:none;
	font-size: 20px;
	padding:11px 21px;
	color:#000;
}
ul.menu-navigation li a:hover{
	text-decoration:underline;
	background: grey;
	color:#fff;
}
ul.menu-navigation li a:active{
	background: #333;
	color:#ddd;
}
@media (max-width:768px){
	.menu-btn:before{
		content:"...";
	}
	.menu-btn{
		padding:0 10px 5px 10px;
		text-align:left;
		width:12px;
		border:1px #000 solid;
	}
	.menu-btn.active:before{
		content:":::";
	}
	.menu-btn.active{
		padding:2px 10px 3px 10px;
	}
	.navigation-bar{
		position:absolute;
		top:65px;
		left:8px;
		display:none;
	}
	.navigation-bar.active{
		display:block;
	}
	ul.menu-navigation li{
		display:block;
	}
}
</style>
<div class="page-header">
<div class="menu-btn"></div>
<div class="navigation-bar">
<ul class="menu-navigation">
	<li><a href="#">Пункт 1</a></li>
	<li><a href="#">Пункт 2</a></li>
	<li><a href="#">Пункт 3</a></li>
</ul> 
</div>
</div>
</body>
</html>
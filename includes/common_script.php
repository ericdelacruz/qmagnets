<?php define( 'SITE', "http://".$_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['PHP_SELF']),"",$_SERVER['PHP_SELF']) ); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<!-- Title declared in meta studies ignored because of this -->
<!-- <title>Qmagnets</title> -->


<!--====================scrool part====================-->
<link  href="<?=SITE?>css/win.css" type="text/css" rel="stylesheet">
<style type="text/css">
input.styled {
}
a { color:#ccb363; text-decoration:none }
a:hover { text-decoration:underline }
.imgLeft { float:left; margin:5px 10px 0px 0px !important; }
.imgRight { float:right; margin:10px 0px 0px 10px !important; }

.tablelist1 { border:1px solid #333; margin-bottom:20px; }
.tablelist1 td { font-size:12px; text-align:left; }
.tablelist1 span { display:block; padding:5px 10px; }
.tablelist1 thead { background:#333; }
.tablelist1 thead span { font-weight:bold; text-transform:uppercase; }
.tablelist1 tbody { background:#222; }
.tablelist1 tbody tr { border-bottom:1px solid #333; }
.tablelist1 tfoot { background:#121212 }

</style>
<!--====================scrool part====================-->
<link href="<?=SITE?>css/global.css" rel="stylesheet" type="text/css">
<!--====================nav part====================-->
<link href="<?=SITE?>chrometheme/chromestyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=SITE?>chromejs/chrome.js"></script>
<!--====================nav part====================-->
<!--====================form part====================-->
<style type="text/css">
input.styled {
	display: none;
}
select.styled {
	position: relative;
	width: 190px;
	opacity: 0;
	filter: alpha(opacity=0);
	z-index: 5;
}
.disabled {
	opacity: 0.5;
	filter: alpha(opacity=50);
}
</style>
<!--script type="text/javascript" src="test.htm"></script-->
<link rel="stylesheet" href="<?=SITE?>code.css" media="screen" />
<link rel="stylesheet" href="<?=SITE?>form.css" media="screen" />
<style type="text/css">
.scrool_text {
	width: 250px;
	height: auto;
	float: left;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
	color: #b2b2b2;
	margin-left: 30px;
}
</style>
<!--====================form part====================-->
<!--====================banner part====================-->
<script type="text/javascript" src="<?=SITE?>js/jquery-1.4.1.min.js"></script>
<style type="text/css">
.slideshow1 { height:312px; width:920px; margin:0 !important; padding:0 !important;}
.slideshow1 img { padding: 0px; border:0; background-color: #eee; }
</style>

<?php ?><script type="text/javascript" src="<?=SITE?>./js/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow1').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script><?php ?>
<!--====================banner part====================-->
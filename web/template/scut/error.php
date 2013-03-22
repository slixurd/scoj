<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
	<?php require_once("oj-header.php");?>

<div class="container">
	<div class="row">
		<div class="span12">
			<div class="hero-unit">
				<?php echo $view_errors?>
			</div>
		</div>
	</div>
</div>



<div id="foot">
	<?php require_once("oj-footer.php");?>
</div>

</body>
</html>

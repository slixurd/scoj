<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
	<link href='highlight/styles/shCore.css' rel='stylesheet' type='text/css'/> 
	<link href='highlight/styles/shThemeDefault.css' rel='stylesheet' type='text/css'/> 
	<script src='highlight/scripts/shCore.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushCpp.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushCss.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushJava.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushDelphi.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushRuby.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushBash.js' type='text/javascript'></script>
	<script src='highlight/scripts/shBrushPython.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushPhp.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushPerl.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushCSharp.js' type='text/javascript'></script> 
	<script src='highlight/scripts/shBrushVb.js' type='text/javascript'></script>
	<script language='javascript'> 
		SyntaxHighlighter.config.bloggerMode = false;
		SyntaxHighlighter.config.clipboardSwf = 'highlight/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>
</head>
<body>
	<?php require_once("oj-header.php");?>
<?php //still HANVE BUG HERE>THE CODE COLOR
?>
	

<div class="container-fluid">
	<div class='row-fluid' style="margin-left:auto;margin-right:auto;margin-top:30px;">
<?php

   if ($ok==true){
		if($view_user_id!=$_SESSION['user_id'])
			echo "<a href='mail.php?to_user=$view_user_id&title=$MSG_SUBMIT $id'>Mail the auther</a>";
		$brush=strtolower($language_name[$slanguage]);
		if ($brush=='pascal') $brush='delphi';
		if ($brush=='obj-c') $brush='c';
		if ($brush=='freebasic') $brush='vb';
		echo "<pre class=\"  brush:".$brush.";\">";
		ob_start();
		echo "/**************************************************************\n";
		echo "\tProblem: $sproblem_id\n\tUser: $suser_id\n";
		echo "\tLanguage: ".$language_name[$slanguage]."\n\tResult: ".$judge_result[$sresult]."\n";
		if ($sresult==4){
			echo "\tTime:".$stime." ms\n";
			echo "\tMemory:".$smemory." kb\n";
		}
		echo "****************************************************************/\n\n";
		$auth=ob_get_contents();
		ob_end_clean();

		echo htmlspecialchars(str_replace("\n\r","\n",$view_source))."\n".$auth."</pre><div class='clearfix'></div>";
		echo "<style>.clearfix {  *zoom: 1;}.clearfix:before,.clearfix:after {  display: table;
  content: '';  line-height: 0;}.clearfix:after {  clear: both;}</style>";
		
	}else{
		echo "<div class='hero-unit container darkshadow' style='text-align: center; font-size:30px;'>I am sorry, You could not view this code!</div>";
	}
?>
</div>
</div>
<div id="foot">
	<?php require_once("oj-footer.php");?>
</div>
</body>
</html>

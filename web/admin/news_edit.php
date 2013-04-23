<?php require_once ("admin-header.php");
//UNDER CONSTRUCTION
if (!(isset($_SESSION['administrator']))){
	echo "<a href='../loginpage.php'>Please Login First!</a>";
	exit(1);
}
?>



<?php require_once("../include/db_info.inc.php");
if (isset($_POST['news_id']))
{
	require_once("../include/check_post_key.php");
$title = $_POST ['title'];
$content = $_POST ['content'];
$user_id=$_SESSION['user_id'];
$news_id=intval($_POST['news_id']);
if (get_magic_quotes_gpc ()) {
	$title = stripslashes ( $title);
	$content = stripslashes ( $content );
}
$title=mysql_real_escape_string($title);
$content=mysql_real_escape_string($content);
$user_id=mysql_real_escape_string($user_id);

	$sql="UPDATE `news` set `title`='$title',`time`=now(),`content`='$content',user_id='$user_id' WHERE `news_id`=$news_id";
	//echo $sql;
	mysql_query($sql) or die(mysql_error());
	
	exit();
}else{
	$news_id=intval($_GET['id']);
	$sql="SELECT * FROM `news` WHERE `news_id`=$news_id";
	$result=mysql_query($sql);
	if (mysql_num_rows($result)!=1){
		mysql_free_result($result);
		echo "No such Contest!";
		exit(0);
	}
	$row=mysql_fetch_assoc($result);
	
	$title=htmlspecialchars($row['title']);
	$content=$row['content'];
	mysql_free_result($result);
		
}
?>

<html>
<head>
<title>OJ Administration</title>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel=stylesheet href='admin.css' type='text/css'>
</head>
<body>


<div class="container-fluid">

	<?php require_once("admin-bar.php"); ?>
	<div class="row-fluid top-space">
		<div class="span2" >
			<div class="menu-group"  >
				<?php require_once("menu.php") ?>
			</div>
		</div>
		<div class="span10">
			<div class=" news-content">

				<form method=POST action='news_edit.php'>

				<p align=center>
					<font size=4 color=#333399>Edit News</font>
				</p>

				<input type=hidden name='news_id' value=<?php echo $news_id?> >
				<p align=center>
					Title:
					<input type=text name=title size=71 value='<?php echo $title?>'>
				</p>

				<p align=center>Content:
					<br>
					<?php
						include_once("../fckeditor/fckeditor.php") ;
						$description = new FCKeditor('content') ;
						$description->BasePath = '../fckeditor/' ;
						$description->Height = 450 ;
						$description->Width=800;

						$description->Value = $content ;
						$description->Create() ;
					?>
				</p>
				<?php require_once("../include/set_post_key.php");?>
				<input type=submit>
				</form>
				<p>
			</div>
		</div>
	</div>
</div>

</body>
</html>




<?php require_once("admin-header.php");

	if(isset($OJ_LANG)){
		require_once("../lang/$OJ_LANG.php");
	}
	

?>

<hr>
<ol>
	<li>
		<a class=' ' href="watch.php" target="main"><b><?php echo $MSG_SEEOJ?></b></a>
<?php if (isset($_SESSION['administrator'])){
	?>
	<li>
		<a class=' ' href="news_add_page.php" target="main"><b><?php echo $MSG_ADD.$MSG_NEWS?></b></a>
	<li>
		<a class=' ' href="news_list.php" target="main"><b><?php echo $MSG_NEWS.$MSG_LIST?></b></a>
		
<?php }
if (isset($_SESSION['administrator'])||isset($_SESSION['problem_editor'])){
?>
	<li>
		<a class=' ' href="problem_add_page.php" target="main"><b><?php echo $MSG_ADD.$MSG_PROBLEM?></b></a>
<?php }
if (isset($_SESSION['administrator'])||isset($_SESSION['contest_creator'])||isset($_SESSION['problem_editor'])){
?>
	<li>
		<a class=' ' href="problem_list.php" target="main"><b><?php echo $MSG_PROBLEM.$MSG_LIST?></b></a>
<?php }
if (isset($_SESSION['administrator'])||isset($_SESSION['contest_creator'])){
?>		
<li>
	<a class=' ' href="contest_add.php" target="main"><b><?php echo $MSG_ADD.$MSG_CONTEST?></b></a>
<?php }
if (isset($_SESSION['administrator'])||isset($_SESSION['contest_creator'])){
?>
<li>
	<a class=' ' href="contest_list.php" target="main"><b><?php echo $MSG_CONTEST.$MSG_LIST?></b></a>
<?php }
if (isset($_SESSION['administrator'])){
?>
<li>
	<a class=' ' href="team_generate.php" target="main"><b><?php echo $MSG_TEAMGENERATOR?></b></a>
<li>
	<a  href="setmsg.php" target="main"><b><?php echo $MSG_SETMESSAGE?></b></a>
<?php }
if (isset($_SESSION['administrator'])||isset( $_SESSION['password_setter'] )){
?><li>
	<a class=' ' href="changepass.php" target="main"><b><?php echo $MSG_SETPASSWORD?></b></a>
<?php }
if (isset($_SESSION['administrator'])){
?><li>
	<a class=' ' href="rejudge.php" target="main"><b><?php echo $MSG_REJUDGE?></b></a>
<?php }
if (isset($_SESSION['administrator'])){
?><li>
	<a class=' ' href="privilege_add.php" target="main"><b><?php echo $MSG_ADD.$MSG_PRIVILEGE?></b></a>
<?php }
if (isset($_SESSION['administrator'])){
?><li>
	<a class=' ' href="privilege_list.php" target="main"><b><?php echo $MSG_PRIVILEGE.$MSG_LIST?></b></a>
<?php }
if (isset($_SESSION['administrator'])){
?><li>
	<a class=' ' href="source_give.php" target="main"><b><?php echo $MSG_GIVESOURCE?></b></a>
<?php }
if (isset($_SESSION['administrator'])){
?><li>
	<a class=' ' href="problem_export.php" target="main"><b><?php echo $MSG_EXPORT.$MSG_PROBLEM?></b></a>
<?php }
if (isset($_SESSION['administrator'])){
?><li>
	<a class=' ' href="problem_import.php" target="main"><b><?php echo $MSG_IMPORT.$MSG_PROBLEM?></b></a>
<?php }
if (isset($_SESSION['administrator'])){
?><li>
	<a class=' ' href="update_db.php" target="main"><b><?php echo $MSG_UPDATE_DATABASE?></b></a>
<?php }
if (isset($OJ_ONLINE)&&$OJ_ONLINE){
?><li>
	<a class=' ' href="../online.php" target="main"><b><?php echo $MSG_ONLINE?></b></a>
<?php }
?>

<li>
	<a class=' ' href="http://code.google.com/p/hustoj/" target="_blank"><b>HUSTOJ</b></a>
<li>
	<a class=' ' href="http://code.google.com/p/freeproblemset/" target="_blank"><b>FreeProblemSet</b></a>


<?php if (isset($_SESSION['administrator'])&&!$OJ_SAE){
?>
	<li><a href="problem_copy.php" target="main" title="Create your own data" class=' '><font>CopyProblem</font></a> <br>
	<li><a href="problem_changeid.php" target="main" title="Danger,Use it on your own risk" class=' '><font>ReOrderProblem</font></a>
<?php }
?>
</ol>

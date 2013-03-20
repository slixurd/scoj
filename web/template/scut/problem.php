<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
     <link rel="next" href="submitpage.php?<?php
        
        if ($pr_flag){
		echo "id=$id";
	}else{
		echo "cid=$cid&pid=$pid&langmask=$langmask";
	}
        
        ?>">
</head>
<body>
	<?php
	if(isset($_GET['id']))
		require_once("oj-header.php");
	else
		require_once("contest-header.php");
	
	?>
<div class="container buttomspace">
<div class="row">
	<div class="span12">
		<?php
			if ($pr_flag){
				echo "<title>$MSG_PROBLEM $row->problem_id. -- $row->title</title>";
				echo "<center><h2>$id: $row->title</h2>";
			}else{
				$PID="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				echo "<title>$MSG_PROBLEM $PID[$pid]: $row->title </title>";
				echo "<center><h2>$MSG_PROBLEM $PID[$pid]: $row->title</h2>";
			}
			echo "<span class=green>$MSG_Time_Limit: </span>$row->time_limit Sec&nbsp;&nbsp;";
			echo "<span class=green>$MSG_Memory_Limit: </span>".$row->memory_limit." MB";
			if ($row->spj) echo "&nbsp;&nbsp;<span class=red>Special Judge</span>";
			echo "<br><span class=green>$MSG_SUBMIT: </span>".$row->submit."&nbsp;&nbsp;";
			echo "<span class=green>$MSG_SOVLED: </span>".$row->accepted."<br>"; 
			
			if ($pr_flag){
				echo "[<a href='submitpage.php?id=$id'>$MSG_SUBMIT</a>]";
			}else{
				echo "[<a href='submitpage.php?cid=$cid&pid=$pid&langmask=$langmask'>$MSG_SUBMIT</a>]";
			}
			echo "[<a href='problemstatus.php?id=".$row->problem_id."'>$MSG_STATUS</a>]";
			echo "[<a href='bbs.php?pid=".$row->problem_id."$ucid'>$MSG_BBS</a>]";
			
			echo "</center>";
			
			echo "<div class='problemquote'><h2 class='center'>$MSG_Description</h2>".$row->description."</div>";
			echo "<div class='problemquote'><h2>$MSG_Input</h2>".$row->input."</div>";
			echo "<div class='problemquote'><h2>$MSG_Output</h2>".$row->output."</div>";
			
			$ie6s="";
			$ie6e="";
			if(strpos($_SERVER['HTTP_USER_AGENT'],'MSIE'))
			{
				$ie6s="<pre>";
				$ie6e="</pre>";
			}
			$sinput=str_replace("<","&lt;",$row->sample_input);
		  $sinput=str_replace(">","&gt;",$sinput);
			$soutput=str_replace("<","&lt;",$row->sample_output);
		  $soutput=str_replace(">","&gt;",$soutput);
			echo "
					<div class='problemquote'><h2>$MSG_Sample_Input</h2><span class=sampledata>".$ie6s.($sinput).$ie6e."</span></div>";
			echo "
					<div class='problemquote'><h2>$MSG_Sample_Output</h2><span class=sampledata>".$ie6s.($soutput).$ie6e."</span></div>";
			if ($pr_flag||true) 
				echo "
					<div class='problemquote'><h2>$MSG_HINT</h2><p>".nl2br($row->hint)."</p></div>";
			if ($pr_flag) 
				echo "
					<div class='problemquote'><h2>$MSG_Source</h2><p><a href='problemset.php?search=$row->source'>".nl2br($row->source)."</a></p></div>";
			echo "<center>";
			if ($pr_flag){
				echo "[<a href='submitpage.php?id=$id'>$MSG_SUBMIT</a>]";
			}else{
				echo "[<a href='submitpage.php?cid=$cid&pid=$pid&langmask=$langmask'>$MSG_SUBMIT</a>]";
			}
			echo "[<a href='problemstatus.php?id=".$row->problem_id."'>$MSG_STATUS</a>]";

			echo "[<a href='bbs.php?pid=".$row->problem_id."$ucid'>$MSG_BBS</a>]";
			echo "</center>";
		?>

	</div>
</div>
</div>



<div id="foot">
	<?php require_once("oj-footer.php");?>
</div>
</body>
</html>

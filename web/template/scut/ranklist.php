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
<div class="span12 buttomspace ">
<div class="tableheader">
<form action="userinfo.php">
	<?php echo $MSG_USER?>
	<input name="user" class="align-btn"></input>
	<button type="submit" class="btn" value="Go">Go</button>
	<div class="spansearch btn-group">
		<button class="btn"><a href=ranklist.php?scope=d>Day</a></button>
		<button class="btn"><a href=ranklist.php?scope=w>Week</a></button>
		<button class="btn"><a href=ranklist.php?scope=m>Month</a></button>
		<button class="btn"><a href=ranklist.php?scope=y>Year</a></button>
</div>
</form>

</div>
<div class="darkshadow">
	<table class="table table-striped">
		<thead>
		<tr class='toprow center-td'>
				<td class="span1" align="center"><b><?php echo $MSG_Number?></b>
				<td class="span2" align="center"><b><?php echo $MSG_USER?></b>
				<td class="span2" align="center"><b><?php echo $MSG_NICK?></b>
				<td class="span2" align="center"><b><?php echo $MSG_AC?></b>
				<td class="span2" align="center"><b><?php echo $MSG_SUBMIT?></b>
				<td class="span3" align="center"><b><?php echo $MSG_RATIO?></b>
		</tr>
		</thead>
		<tbody>
			<?php 
			$cnt=0;
			foreach($view_rank as $row){
				if ($cnt) 
					echo "<tr class='oddrow'>";
				else
					echo "<tr class='evenrow'>";
				foreach($row as $table_cell){
					echo "<td>";
					echo "\t".$table_cell;
					echo "</td>";
				}
				
				echo "</tr>";
				
				$cnt=1-$cnt;
			}
			?>
		</tbody>		
	</table>
</div>
	<?php 
	   echo "<center class='status-button'>";
		for($i = 0; $i <$view_total ; $i += $page_size) {
			echo "<button class='span1 btn'><a href='./ranklist.php?start=" . strval ( $i ).($scope?"&scope=$scope":"") . "'>";
			echo strval ( $i + 1 );
			echo "-";
			echo strval ( $i + $page_size );
			echo "</a></button>";
			if ($i % 250 == 200)
				echo "<br>";
		}
		echo "</center>";
	
	?>

</div><!-- end span -->
</div><!-- end row -->
</div><!-- end container -->
<div id="foot">
	<?php require_once("oj-footer.php");?>
</div><!--end foot-->
</body>
</html>

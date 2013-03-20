<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
	<script src="include/sortTable.js"></script>
</head>
<body>
	<?php require_once("contest-header.php");?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3">

			<h2 class="center contest-h1">Contest<?php echo $view_cid?></h2>
				
				<div class="well center span3 description darkshadow">
					<h3 class="center"><?php echo $view_title ?><h3>
					<?php echo $view_description?>
				</div>
				<div class="contest-time well span3 darkshadow center">
						
						<div>
							Start Time: 
							<font color=#993399><?php echo $view_start_time?></font>
						</div>
						<div>
							End Time: 
							<font color=#993399><?php echo $view_end_time?></font>
						</div>
						<div>
							Current Time: 
							<font color=#993399>
								<span id=nowdate > <?php echo date("Y-m-d H:i:s")?></span>
							</font>
						</div>
						<div>
						Status:
							<?php
								if ($now>$end_time) 
									echo "<span class=red>Ended</span>";
								else if ($now<$start_time) 
									echo "<span class=red>Not Started</span>";
								else 
									echo "<span class=red>Running</span>";
							?>
						</div>
						<div>
							<?php
								if ($view_private=='0') 
									echo "<span class=blue>Public</font>";
								else 
									echo "<span class=red>Private</font>"; 
							?>
						</div>
						<div>
							[<a href='status.php?cid=<?php echo $view_cid?>'>Status</a>]
							[<a href='contestrank.php?cid=<?php echo $view_cid?>'>Standing</a>]
							[<a href='conteststatistics.php?cid=<?php echo $view_cid?>'>Statistics</a>]
						</div>
			</div>
		</div>
		<div class="span9">
			<table id='problemset'  class="table darkshadow">
			<thead>
				<tr align="center" class='toprow'>
					<th class="span1"></th>
					<th style="cursor:hand" onclick="sortTable('problemset', 1, 'int');" class="span2 align-left">
						<?php echo $MSG_PROBLEM_ID?>
					</th>
					<th class="span4"><?php echo $MSG_TITLE?></th>
					<th class="span3"><?php echo $MSG_SOURCE?></th>
					<th style="cursor:hand" onclick="sortTable('problemset', 4, 'int');" class="span1">
						<A><?php echo $MSG_AC?></A>
					</th>
					<th style="cursor:hand" onclick="sortTable('problemset', 5, 'int');" class="span1">
						<A><?php echo $MSG_SUBMIT?></A>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$cnt=0;
					foreach($view_problemset as $row){
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
	</div>
</div>

	<div id="foot">
		<?php require_once("oj-footer.php");?>
	</div><!--end foot-->
</body>
<script>
var diff=new Date("<?php echo date("Y/m/d H:i:s")?>").getTime()-new Date().getTime();
//alert(diff);
function clock()
    {
      var x,h,m,s,n,xingqi,y,mon,d;
      var x = new Date(new Date().getTime()+diff);
      y = x.getYear()+1900;
      if (y>3000) y-=1900;
      mon = x.getMonth()+1;
      d = x.getDate();
      xingqi = x.getDay();
      h=x.getHours();
      m=x.getMinutes();
      s=x.getSeconds();
  
      n=y+"-"+mon+"-"+d+" "+(h>=10?h:"0"+h)+":"+(m>=10?m:"0"+m)+":"+(s>=10?s:"0"+s);
      //alert(n);
      document.getElementById('nowdate').innerHTML=n;
      setTimeout("clock()",1000);
    } 
    clock();
</script>

</html>

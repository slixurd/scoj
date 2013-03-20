<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
<?php require_once("oj-header.php");?>
<div class="container buttomspace">
<div class="row">
<div class="span12">
	<div class="listheader">
		<h2 >Contest List</h2>
		<span >ServerTime:</span>
		<span id="nowdate"></span>
	</div>

	<div class="contest-table">
		<table class="table table-striped darkshadow spacetop ">
		<thead>
			<tr class="toprow">
				<th class="span1">ID</th>
				<th class="span5">Name</th>
				<th class="span4">Status</th>
				<th class="span2">Private</th>
			</tr>
		</thead>
		<tbody>
				<?php 
				$cnt=0;
				foreach($view_contest as $row){
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

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
	<script type="text/javascript" src="include/wz_jsgraphics.js"></script>
	<script type="text/javascript" src="include/pie.js"></script>
	<script type="text/javascript" src="include/jquery-latest.js"></script> 
	<script type="text/javascript" src="include/jquery.tablesorter.js"></script> 
	<script type="text/javascript">
	$(document).ready(function() 
	    { 
	        $("#problemstatus").tablesorter(); 
	    } 
	); 
	</script>
</head>
<body>
	<?php require_once("oj-header.php");?>
<h1 class="center ">Problem <?php echo $id ?> Status</h1>
<div class="container-fluid buttomspace">
<div class="row-fluid">

	<div class="span4">
	  <table  id="statics" class="table table-striped darkshadow">
	      <?php 
	      $cnt=0;
	      foreach($view_problem as $row){
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
	      <tr id="pie" bgcolor="white"  class="span6">
	      	<td>
	      		<div id='PieDiv'  style='position:relative;height:150px;width:200px;'>
	      		</div>
	      	</td>
	      	<td></td>
	      </tr>
	      <?php if(isset($view_recommand)){?>
			  <div  id="recommand" class="table">
			  	<tr>
			  		<td>
				      <div>Recommanded Next Problem</div>
				      <?php 
				      $cnt=1;
				      foreach($view_recommand as $row){
				        echo "<a href='problem.php?id=$row[0]>$row[0]</a>";
				        if($cnt%3==0) echo "<br>";
				        $cnt++;
				      }
				      ?>
			     	 </td>
			     	 <td></td>
			  	</tr>
			  </div>
			<?php }?>
	 	 </table>


	</div>

	<div class="span8">
		<table id="problemstatus" class="table table-striped darkshadow" style="margin-top:18px;">
		  <thead>
		    <tr class="toprow">
		      <th style="cursor:hand" onclick="sortTable('problemstatus', 0, 'int');">
		      	<?php echo $MSG_Number?>
		  	  </th>
		      <th>RunID</th>
		      <th><?php echo $MSG_USER?></th>
		      <th><?php echo $MSG_MEMORY?></th>
		      <th><?php echo $MSG_TIME?></th>
		      <th><?php echo $MSG_LANG?></th>
		      <th><?php echo $MSG_CODE_LENGTH?></th>
		      <th><?php echo $MSG_SUBMIT_TIME?></th>
		    </tr>
		  </thead>
		  <tbody>
		      <?php 
		      $cnt=0;
		      foreach($view_solution as $row){
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

		<?php
		  echo "<div class='btn-group'style='padding-left:38%;'>";
		  echo "<button class='btn'><a href='problemstatus.php?id=$id'>[TOP]</a></button>";
		  echo "<button class='btn'><a href='status.php?problem_id=$id'>[STATUS]</a></button>";
		  
		  if ($page>$pagemin){
		    $page--;
		    echo "<button class='btn'><a href='problemstatus.php?id=$id&page=$page'>[PREV]</a></button>";
		    $page++;
		  }
		  if ($page<$pagemax){
		    $page++;
		    echo "<button class='btn'><a href='problemstatus.php?id=$id&page=$page'>[NEXT]</a></button>";
		    $page--;
		  }
		  echo "</div>";
		  ?>
	</div>

</div>
</div>






<div id=foot>
	<?php require_once("oj-footer.php");?>
</div>
</body>
  <script language="javascript">
  var y= new Array ();
  var x = new Array ();
  var dt=document.getElementById("statics");
  var data=dt.rows;
  var n;
  for(var i=3;dt.rows[i].id!="pie";i++){
      x.push(dt.rows[i].cells[0].innerHTML);
      n=dt.rows[i].cells[1];
      n=n.innerText || n.textContent;
      n=parseInt(n);
      y.push(n);
  }
  var mypie=  new Pie("PieDiv");
  mypie.drawPie(y,x);
</script>

</html>

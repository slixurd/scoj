<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
	<script type="text/javascript" src="include/jquery-latest.js"></script> 
	<script type="text/javascript" src="include/jquery.tablesorter.js"></script> 
	<script type="text/javascript">
	$(document).ready(function() 
	    { 
	        $("#problemset").tablesorter(); 
	    } 
	); 
	</script>
</head>
<body>
<?php require_once("oj-header.php");?>

<div class="container buttomspace ">
	<div class="row">
	    <div class="span12">

    	<div class="problemheader">
    	<table class="table table-striped">
    		<thead>
 				<tr>
					<th class="span6">
					  <form class='form-search' action='problem.php'>
						Problem ID
						<input class="input-small search-query span3" type='text' name='id' style="height:24px"/>
                        <button class="btn btn-mini span2" type='submit'  >Go</button>
                      </form>
					</th>
					<th class="span6">
					<form class="form-search">
						Key Word
						<input style="height:24px" type="text" name='search' class="input-large search-query span3"/>
						<button type="submit" class="btn btn-mini span2"><?php echo $MSG_SEARCH?></button>
					</form>
					</th>
				</tr>
			</thead>
 		</table>

 		<table id='problemset' class='table table-striped darkshadow'>
        <thead>
            <tr class='toprow'>
            	<th class=""></th>
                <th class="span1"  ><A><?php echo $MSG_PROBLEM_ID?></A></th>
                <th class="span5"><?php echo $MSG_TITLE?></th>
                <th class="span3"><?php echo $MSG_SOURCE?></th>
                <th style="cursor:hand"  class="span1"><?php echo $MSG_AC?></th>
                <th style="cursor:hand" class="span1"><?php echo $MSG_SUBMIT?></th>
            </tr>
        </thead>

		<tbody class="problemset">
			<?php 
			$cnt=0;
			foreach($view_problemset as $row){
				if ($cnt) 
					echo "<tr class='oddrow span1'>";
				else
					echo "<tr class='evenrow span1'>";
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
		<div class="pagination" style="text-align: center;">
	      	<ul>
	      		<!-- the pagination -->
	      	<?php
		    for ($i=1;$i<=$view_total_page;$i++){
				if ($i==$page) echo "<li class='active'><a href='#'>$i</a></li>";
				else echo "<li><a href='problemset.php?page=".$i."'>".$i."</a></li>";
			}
	        ?>
	  	   </ul>
    	</div>
	    </div>
    	</div>


	</div>
</div>
<div id=foot>
	<?php require_once("oj-footer.php");?>

</div><!--end foot-->

</body>
</html>

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
			<table class="table table-striped darkshadow">
				<thead class=toprow>
					<tr>
						<th class="span2">OJ</th>
						<th class="span6">Name</th>
						<th class="span2">Start Time</th>
						<th class="span1">Week</th>
						<th class="span1">Access</th>
					</tr>
				</thead>
				<tbody class="row-hover">
					<?php
					$odd=true;
					 foreach($rows as $row) {
					   $odd=!$odd;
					?>
					  <tr class="<?php echo $odd?"oddrow":"evenrow"  ?>">
							<td class="column-1"><?php echo$row['oj']?></td><td class="column-2">
							<a id="name_<?php echo$row['id']?>" href="<?php echo$row['link']?>" target="_blank">
								<?php echo$row['name']?></a></td><td class="column-3">
								<?php echo$row['start_time']?></td><td class="column-4">
								<?php echo$row['week']?></td><td class="column-5">
								<?php echo$row['access']?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
	<div class="well center darkshadow">
		<strong>DataSource:</strong>
		http://contests.acmicpc.info/contests.json  
		<strong>Spider Author:</strong>
		<a href="http://contests.acmicpc.info" >
			doraemonok
		</a>
	</div>
</div>

<div id="foot">
	<?php require_once("oj-footer.php");?>
</div>

</body>
</html>

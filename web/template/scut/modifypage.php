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
		<div class="span12">
			<div class="list-head"><h2 style="color:#242a2f;"><strong>Update Information</strong></h2></div>
			<form action="modify.php" method="post">
			<table class="table mainpage">
				<thead><tr><th class="span4"></th><th class="span8"></th></tr></thead>
				<tbody>
					<tr>
						<td class="span4">User ID:</td>
						<td class="span8"><?php echo $_SESSION['user_id']?>
						<?php require_once('./include/set_post_key.php');?></td>
					</tr>
					<tr>
						<td>Nick Name:</td>
						<td><input name="nick" type="text" value="<?php echo htmlspecialchars($row->nick)?>" ></td>
					</tr>
					<tr>
						<td>Old Password:</td>
						<td><input name="opassword"  type="password"></td>
					</tr>
					<tr>
						<td>New Password:</td>
						<td><input name="npassword"  type="password"></td>
					</tr>
					<tr>
						<td>Repeat New Password:</td>
						<td><input name="rptpassword"  type="password"></td>
					</tr>
					<tr>
						<td>School:</td>
						<td><input name="school" size=30 type="text" value="<?php echo htmlspecialchars($row->school)?>" ></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input name="email" size=30 type="text" value="<?php echo htmlspecialchars($row->email)?>" >
					</tr>
				</tbody>
			</table>
			<div class="list-head" style="width:140px;">
			<input class="btn" value="Submit" name="submit" type="submit">
			<input class="btn" value="Reset" name="reset" type="reset">
			</div>

		</div>
	</div>
</div>
<div id="foot">
<?php require_once("oj-footer.php");?>
</div>
</body>
</html>

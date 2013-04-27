
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
		<div class="span7 register">
<form action="register.php" method="post">
  <table>
      <tr>
        <td colspan=2 height=40 width=300>
          <?php echo $MSG_REG_INFO?>
        </td>
      </tr>
      <tr>
        <td width=25%>
          <?php echo $MSG_USER_ID?>:
        </td>
        <td width=75%>
          <input name="user_id" size=20 type=text>*
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $MSG_NICK?>:
        </td>
        <td>
          <input name="nick" size=50 type=text>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $MSG_PASSWORD?>:
        </td>
        <td>
          <input name="password" size=20 type=password>*
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $MSG_REPEAT_PASSWORD?>:
        </td>
        <td>
          <input name="rptpassword" size=20 type=password>*
        </td>
      </tr>
      <tr>
        <td><?php echo $MSG_SCHOOL?>:</td>
        <td><input name="school" size=30 type=text></td>
      </tr>
      <tr>
        <td><?php echo $MSG_EMAIL?>:</td>
        <td><input name="email" size=30 type=text></td>
      </tr>
      <?php if($OJ_VCODE){?>
      <tr>
        <td><?php echo $MSG_VCODE?>:</td>
        <td><input name="vcode" size=4 type=text>
          <img alt="click to change" src="vcode.php" onclick="this.src='vcode.php#'+Math.random()">*
        </td>
      </tr>
      <?php }?>

  </table>
          <input value="Submit" name="submit" type="submit">
          <input value="Reset" name="reset" type="reset">
</form>
		</div>
<div class="span4 register">
	<div class="" style="backgroud-color:#2a2d2f">
		<div>欢迎使用本Online Judge,如果有任何意见和要求的话，
			请向我们反馈，可以直接在github的issue上提出，
			我们会重视每一个意见。现在仍处于
			测试期间，如果出现了问题，请包涵 
		</div>
		<hr/>
		<div>如果您忘记了密码，请转到
			<a href="./lostpassword">找回密码</a>
			页面通过邮箱找回密码.如果您已经解了无数的题，
			或者ID（例如学号）需要用于课程，请和我们联系，
			通过页面右下角的邮箱让我们手动修改密码（丢失的密码无法找回，
			因为密码有加密而且没办法反向解密）</div>
	</div>
</div>
</div>
</div>

<div id="foot">
  <?php require_once("oj-footer.php");?>
</div>
</body>
</html>

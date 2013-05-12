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
			<div class="hero-unit" style="background-color:#fff">
				  <img style="margin-left:14%;" src="./image/title.jpg"/>
			  <hr align="left" />
			  <font face="微软雅黑">
			    <div>
			    <div>
				     <h3><font color="DarkSlateGray">&ensp;成为用户</font></h3>
					 • 开始SCOJ的刷题之旅前，你得拥有一个自己的账户：
					    点击页面顶栏最右“Register”
				</div>
				 <img src="./image/register.jpg"/>
				 
				    <div>进入注册界面，填入你的信息，点击submit,你就正式入户SCOJ啦！</div>
					
				 <img src="./image/user.jpg"/>
					
					<div> • 登入后可以修改自己的密码，如图点击导航栏中"ModifyUser"进入信息更新页面：</div>
				 
				 <img width="100%" src="./image/modify.jpg"/>
				 
				</div>
				<div>
				 <h3><font color="DarkSlateGray">&ensp;开始刷题</font></h3>
				 <div>•  登录后，你可以在"ProblemSet"里选择开始的题目（比赛时，点击“Contest”进入比赛）</div>
				 
				  <img  width="100%" src="./image/problem.jpg"/>
				  
				 <div>•  你可以在自己的编译器上做题，再回到页面提交答案：
				 
				                              (页面的上下方都可找到“submit”按钮)</div>
					<img src="./image/submit.jpg"/>
			         
					 <div>把代码粘贴到下面的框里，点击提交：</div>
					 
					<img src="./image/answer.jpg"/>
					

				 
				 <div>• 提交答案前，要注意选择编译语言！</div>
				 
				  <img src="./image/shortcut1.jpg"/>
				  <pre>
				 
 你还需注意
					 
• 测试数据为多组时，可以每输入一组，即时输出相应结果，不必把输入数据全部存储起来啦！
					 
• 输出样式要与Sample Output保持完全一致，特别小心比如最后结果输出有没有空格、换行。
		 
• 测试平台不支持多文件，自己写的头文件是没用的哦~所有的代码请写在一个文件里吧~
					 
• 如果提交后在迟迟没有看到评判结果，可以手动刷新页面，若为AC(Accepted)

  恭喜你，答案通过啦！否则可以查看错误类型再提交。
  以下列出几类常见错误供参考（你可以在F.A.Qs参阅到更多信息）:
					</pre>
				 <table width="550" border="2" cellspacing="0">
				   <tr>
				     <th width ="10%" align="center">错误</th>
					 <th>解释</th>
				   </tr>
				   <tr>
				     <td align="center">WA</td>
					 <td>Wrong Answer: 答案错误，仅仅通过Sample中的测试数据不一定就正确哦，多考虑一些测试情况吧！
					 </td>
				   </tr>
				   <tr>
					 <td align="center">CE</td>
					 <td>Compile Error: 语法错误，可以点击链接查看具体错误。后台编译器只支持标准头文件</td>
				   </tr>
				   <tr>
				     <td align="center">TLE</td>
					 <td>Time Limit Exceeded: 程序运行时间超出了题目要求，改进算法也许会有提高哦！</td>
				   </tr>
				   <tr>
				     <td align="center">OLE</td>
					 <td>Output Limit Exceeded: 程序输出内容太多，超出了题目的输出限制</td>
				   </tr>
				   <tr>
				     <td align="center">RE</td>
					 <td>Runtime Error: 运行时错误，可能是指针、数据下标越界，除法时除数为零，使用了无限递归，数组变量太大等错误。</td>
				   </tr>
				  </table>
				 • 点击每个题目下方的“status”可查看该题的解决情况及排名</br>
				 <img src="./image/shortcut2.jpg"/>
				 
				    <div>在contest中，点击"standing"可查看比赛排名（朝着winner努力吧！）</div>
					
				<img src="./image/shortcut3.jpg"/>
			     </div>
				 <div>
				 <h3><font color="DarkSlateGray">&ensp;其他帮助</font></h3>
				 <div>• 普通用户找回密码的服务暂未开通，忘记密码的同学请举手报告老师啦~</div>
				 
				 <div>• 长时间未在页面上操作时，用户会自动登出，回到首页重新登入即可继续做题。</div>
				 </div>
			   <font>
			</div>
		</div>
	</div>
</div>



<div id="foot">
	<?php require_once("oj-footer.php");?>
</div>

</body>
</html>

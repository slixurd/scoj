<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $view_title?></title>
  <link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>

  <script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<?php require_once("oj-header.php");?>

<div class="navMain">
    <div class="faq-content">
      <div class="faq-nav">
        <ul id="navSelector">
            <li class="faq-active">编译器</li>
            <li>输入输出</li>
            <li>编译错误</li>
            <li>系统返回信息</li>
            <li>参加在线比赛</li>
            <li>提交问题</li>          
        </ul>
      </div>
      <div class="content-container ">

      <div id="complier" >
           <p><font color=green>Q</font>:这个在线裁判系统使用什么样的编译器和编译选项?<br>
             <font color=red>A</font>:系统运行于<a href="http://www.debian.org/">Debian</a>/<a href="http://www.ubuntu.com">Ubuntu</a> Linux. 使用<a href="http://gcc.gnu.org/">GNU GCC/G++</a> 作为C/C++编译器, <a href="http://www.freepascal.org">Free Pascal</a> 作为pascal 编译器 ，用 <a href="http://www.oracle.com/technetwork/java/index.html">sun-java-jdk1.6</a> 编译 Java. 对应的编译选项如下:<br>
           </p>
           <table border="1">
            <tr>
              <td>C:</td>
              <td><font color=blue>gcc Main.c -o Main -O2 -Wall -lm --static -std=c99 -DONLINE_JUDGE</font></td>
            </tr>
            <tr>
              <td>C++:</td>
              <td><font color=blue>g++ Main.cc -o Main -O2 -Wall -lm --static -DONLINE_JUDGE</font></td>
            </tr>
            <tr>
              <td>Pascal:</td>
              <td><font color=blue>fpc Main.pas -oMain -O1 -Co -Cr -Ct -Ci </font></td>
            </tr>
            <tr>
              <td>Java:</td>
              <td><font color="blue">javac -J-Xms32m -J-Xmx256m Main.java</font>
              <br>
              <font size="-1" color="red">*Java has 2 more seconds and 512M more memory when running and judging.</font>
              </td>
            </tr>
           </table>
           <p>编译器版本为（系统可能升级编译器版本，这里直供参考）:<br>
            <font color=blue>gcc (Ubuntu/Linaro 4.4.4-14ubuntu5) 4.4.5</font><br>
            <font color=blue>glibc 2.3.6</font><br>
           <font color=blue>Free Pascal Compiler version 2.4.0-2 [2010/03/06] for i386<br>
            java version "1.6.0_22"<br>
           </font></p>
      </div>
   
      <div id="output" >
          <p><font color=green>Q</font>:程序怎样取得输入、进行输出?<br>
          <font color=red>A</font>:你的程序应该从标准输入 stdin('Standard Input')获取输出 并将结果输出到标准输出 stdout('Standard Output').例如,在C语言可以使用 'scanf' ，在C++可以使用'cin' 进行输入；在C使用 'printf' ，在C++使用'cout'进行输出.</p>
          <p>用户程序不允许直接读写文件, 如果这样做可能会判为运行时错误 "<font color=green>Runtime Error</font>"。<br>
          <br>
          下面是 1000题的参考答案</p>
          <pre><font color="blue">
          #include &lt;iostream&gt;
          using namespace std;
          int main(){
              int a,b;
              while(cin >> a >> b)
                  cout << a+b << endl;
              return 0;
          }
          </font></pre>
          Here is a sample solution for problem 1000 using C:<br>
          <pre><font color="blue">
          #include &lt;stdio.h&gt;
          int main(){
              int a,b;
              while(scanf("%d %d",&amp;a, &amp;b) != EOF)
                  printf("%d\n",a+b);
              return 0;
          }
          </font></pre>
          Here is a sample solution for problem 1000 using PASCAL:<br>
          <pre><font color="blue">
          program p1001(Input,Output); 
          var 
            a,b:Integer; 
          begin 
             while not eof(Input) do 
               begin 
                 Readln(a,b); 
                 Writeln(a+b); 
               end; 
          end.
          </font></pre>
          <br><br>

          Here is a sample solution for problem 1000 using Java:<br>
          <pre><font color="blue">
          import java.util.*;
          public class Main{
              public static void main(String args[]){
                  Scanner cin = new Scanner(System.in);
                  int a, b;
                  while (cin.hasNext()){
                      a = cin.nextInt(); b = cin.nextInt();
                      System.out.println(a + b);
                  }
              }
          }</font></pre>
      </div>

      <div id="wrong" >
        <font color=green>Q</font>:为什么我的程序在自己的电脑上正常编译，而系统告诉我编译错误!<br>
        <font color=red>A</font>:GCC的编译标准与VC6有些不同，更加符合c/c++标准:<br>
        <ul>
          <li><font color=blue>main</font> 函数必须返回<font color=blue>int</font>, <font color=blue>void main</font> 的函数声明会报编译错误。<br> 
          <li><font color=green>i</font> 在循环外失去定义 "<font color=blue>for</font>(<font color=blue>int</font> <font color=green>i</font>=0...){...}"<br>
          <li><font color=green>itoa</font> 不是ansi标准函数.<br>
          <li><font color=green>__int64</font> 不是ANSI标准定义，只能在VC使用, 但是可以使用<font color=blue>long long</font>声明64位整数。<br>如果用了__int64,试试提交前加一句#define __int64 long long
        </ul>
      </div>

      <div id="return" >
           <font color=green>Q</font>:系统返回信息都是什么意思?<br>
            <font color=red>A</font>:详见下述:<br>
            <p><font color=blue>Pending</font> : 系统忙，你的答案在排队等待. </p>
            <p><font color=blue>Pending Rejudge</font>: 因为数据更新或其他原因，系统将重新判你的答案.</p>
            <p><font color=blue>Compiling</font> : 正在编译.<br>
            </p>
            <p><font color="blue">Running &amp; Judging</font>: 正在运行和判断.<br>
            </p>
            <p><font color=blue>Accepted</font> : 程序通过!<br>
              <br>
              <font color=blue>Presentation Error</font> : 答案基本正确，但是格式不对。<br>
              <br>
              <font color=blue>Wrong Answer</font> : 答案不对，仅仅通过样例数据的测试并不一定是正确答案，一定还有你没想到的地方.<br>
              <br>
              <font color=blue>Time Limit Exceeded</font> : 运行超出时间限制，检查下是否有死循环，或者应该有更快的计算方法。<br>
              <br>
              <font color=blue>Memory Limit Exceeded</font> : 超出内存限制，数据可能需要压缩，检查内存是否有泄露。<br>
              <br>
              <font color=blue>Output Limit Exceeded</font>: 输出超过限制，你的输出比正确答案长了两倍.<br>
              <br>
              <font color=blue>Runtime Error</font> : 运行时错误，非法的内存访问，数组越界，指针漂移，调用禁用的系统函数。请点击后获得详细输出。<br>
            </p>
            <p>  <font color=blue>Compile Error</font> : 编译错误，请点击后获得编译器的详细输出。<br>
              <br>
            </p>
      </div>

      <div id="attend-contest" >
          <font color=green>Q</font>:如何参加在线比赛?<br>
          <font color=red>A</font>:<a href=registerpage.php>注册</a> 一个帐号，然后就可以练习，点击比赛列表Contests可以看到正在进行的比赛并参加。<br>
          <br>
      </div>

      <div id="report-bug">
            <font color=green>其他问题请访问
                <a  href="https://github.com/slixurd/scoj">GITHUB issue</a>
            </font>
            <center>
              <table width=100% border=0>
                <tr>
                  <td align=right width=65%>
                  <a href = "index.php"><font color=red>SCOJ</font></a>
                  <em>is based on</em>
                  <a href = "http://code.google.com/p/hustoj">
                    <font color=red>HUSTOJ</font>
                  </a>
                  </td>
                </tr>
              </table>
            </center>
      </div>

      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div id=foot>
    <?php require_once("oj-footer.php");?>
</div>
<script type="text/javascript">
$(document).ready(function(){
      $(".content-container div").not("#complier").hide();
      $("#navSelector li").each(function(index){
          $(this).click(function(){
               $(".content-container>div:eq(" + index + ")").show().siblings().hide();
               $(this).addClass("faq-active").siblings().removeClass("faq-active");
              })
          
          })
    
    });
</script>
<style type="text/css">
    .navMain{
      background-color: #fff;
      width: 960px;
      margin: 0 auto;
      margin-top: 15px;
      margin-bottom: 80px;
    }
    .faq-content {
      line-height: 22px;
      padding-top: 40px;
      padding-left: 30px;
      padding-right: 30px;
      min-height: 577px;
    }
     .faq-nav {
      float: left;
      width: 170px;
      height: 500px;
    }
     .faq-nav ul {
      text-decoration: none;
      list-style: none;
      height: 100%;
      padding-left: 0px;
      margin-top: 0;
    }
     .faq-nav ul li {
      padding-top: 10px;
      padding-bottom: 10px;
      margin: 0 auto;
      padding-left: 55px;
    }
     .faq-nav ul .faq-active {
      background-color: #eee;
    }
    .clearfix {
      *zoom: 1;
    }
    .clearfix:before,
    .clearfix:after {
      display: table;
      content: "";
      line-height: 0;
    }
    .clearfix:after {
      clear: both;
    }
    .content-container {
      border-left: 1px solid #ccc;
      width: 700px;
      margin-left: 0px;
      padding-left: 28px;
      float: left;
    }

    .content-container img {
      outline: 0;
      text-decoration: none;
      border: none;
    }
    .content-container .mobi {
      float: left;
    }
    .content-container .links {
      padding-top: 30px;
      padding-bottom: 30px;
    }
    .content-container .links a {
      padding-top: 10px;
      padding-bottom: 5px;
    }
    .content-container .links img {
      display: block;
      padding-top: 10px;
      padding-bottom: 5px;
    }
    .content-container hr {
      color: #eee;
      opacity: 0.5;
    }
    .content-container p {
      font-size: 14px;
      color: #444444;
      text-decoration: none;
    }
    .content-container a {
      font-size: 14px;
      color: #444444;
      text-decoration: none;
    }
    .content-container a:visited {
      font-size: 14px;
      color: #444444;
      text-decoration: none;
    }
    .content-container a:active {
      font-size: 16px;
      color: #444444;
      text-decoration: none;
    }
</style>
</body>
</html>




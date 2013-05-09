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


        <div id="complier">
          <p>
              <font color=green>Q</font>:What is the compiler the judge is using and what are the compiler options?<br>
              <font color=red>A</font>:The online judge system is running on <a href="http://www.debian.org/">Debian Linux</a>. We are using <a href="http://gcc.gnu.org/">GNU GCC/G++</a> for C/C++ compile, <a href="http://www.freepascal.org">Free Pascal</a> for pascal compile and <a href="http://www.oracle.com/technetwork/java/index.html">sun-java-jdk1.6</a> for Java. The compile options are:<br>
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
          <p>  Our compiler software version:<br>
            <font color=blue>gcc (Ubuntu/Linaro 4.4.4-14ubuntu5) 4.4.5</font><br>
            <font color=blue>glibc 2.3.6</font><br>
          <font color=blue>Free Pascal Compiler version 2.4.0-2 [2010/03/06] for i386<br>
          java version "1.6.0_22"<br>
          </font></p>
        </div>
     
        <div id="output">
            <font color=green>Q</font>:Where is the input and the output?<br>
            <font color=red>A</font>:Your program shall read input from stdin('Standard Input') and write output to stdout('Standard Output').For example,you can use 'scanf' in C or 'cin' in C++ to read from stdin,and use 'printf' in C or 'cout' in C++ to write to stdout.<br>
            User programs are not allowed to open and read from/write to files, you will get a "<font color=green>Runtime Error</font>" if you try to do so.<br><br>
            Here is a sample solution for problem 1000 using C++:<br>
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

        <div id="wrong">
            <font color=green>Q</font>:Why did I get a Compile Error? It's well done!<br>
            <font color=red>A</font>:There are some differences between GNU and MS-VC++, such as:<br>
            <ul>
              <li><font color=blue>main</font> must be declared as <font color=blue>int</font>, <font color=blue>void main</font> will end up with a Compile Error.<br> 
              <li><font color=green>i</font> is out of definition after block "<font color=blue>for</font>(<font color=blue>int</font> <font color=green>i</font>=0...){...}"<br>
              <li><font color=green>itoa</font> is not an ANSI function.<br>
              <li><font color=green>__int64</font> of VC is not ANSI, but you can use <font color=blue>long long</font> for 64-bit integer.<br>try use #define __int64 long long when submit codes from MSVC6.0
            </ul>
        </div>

        <div id="return">
              <font color=green>Q</font>:What is the meaning of the judge's reply XXXXX?<br>
              <font color=red>A</font>:Here is a list of the judge's replies and their meaning:<br>
              <p><font color=blue>Pending</font> : The judge is so busy that it can't judge your submit at the moment, usually you just need to wait a minute and your submit will be judged. </p>
              <p><font color=blue>Pending Rejudge</font>: The test datas has been updated, and the submit will be judged again and all of these submission was waiting for the Rejudge.</p>
              <p><font color=blue>Compiling</font> : The judge is compiling your source code.<br>
              </p>
              <p><font color="blue">Running &amp; Judging</font>: Your code is running and being judging by our Online Judge.<br>
                </p>
              <p><font color=blue>Accepted</font> : OK! Your program is correct!.<br>
                <br>
                <font color=blue>Presentation Error</font> : Your output format is not exactly the same as the judge's output, although your answer to the problem is correct. Check your output for spaces, blank lines,etc against the problem output specification.<br>
                <br>
                <font color=blue>Wrong Answer</font> : Correct solution not reached for the inputs. The inputs and outputs that we use to test the programs are not public (it is recomendable to get accustomed to a true contest dynamic ;-).<br>
                <br>
                <font color=blue>Time Limit Exceeded</font> : Your program tried to run during too much time.<br>
                <br>
                <font color=blue>Memory Limit Exceeded</font> : Your program tried to use more memory than the judge default settings.  <br>
                <br>
                <font color=blue>Output Limit Exceeded</font>: Your program tried to write too much information. This usually occurs if it goes into a infinite loop. Currently the output limit is 1M bytes.<br>
                <br>
                <font color=blue>Runtime Error</font> : All the other Error on the running phrase will get Runtime Error, such as 'segmentation fault','floating point exception','used forbidden functions', 'tried to access forbidden memories' and so on.<br>
              </p>
              <p>  <font color=blue>Compile Error</font> : The compiler (gcc/g++/gpc) could not compile your ANSI program. Of course, warning messages are not error messages. Click the link at the judge reply to see the actual error message.<br>
                <br>
              </p>
        </div>

        <div id="attend-contest">
            <font color=green>Q</font>:How to attend Online Contests?<br>
            <font color=red>A</font>:Can you submit programs for any practice problems on this Online Judge? If you can, then that is the account you use in an online contest.
            If you can't, then please <a href=registerpage.php>register</a> an id with password first.<br>
            <br>
        </div>

        <div id="report-bug">
              <font color=green size="+2">Any questions/suggestions please summit to the 
                  <a href="https://github.com/slixurd/scoj">GITHUB issue</a>
              </font>
            <center>
              <table width=100% border=0>
                <tr>
                  <td align=right width=65%>
                  <a href = "index.php"><font color=red>SCOJ</font></a>
                  <em>is based on</em>
                  <a href = "http://code.google.com/p/hustoj">
                    <font color=red>HUSTOJ</font></a>
                  </td>
                </tr>
              </table>
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





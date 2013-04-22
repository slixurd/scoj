<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
	<script language="javascript" type="text/javascript" src="include/jquery-latest.js"></script>
    <script language="javascript" type="text/javascript" src="include/jquery.flot.js"></script>
    <script type="text/javascript">
$(function () {
    var d1 = [];
    var d2 = [];
    <?php 
       foreach($chart_data_all as $k=>$d){
    ?>
        d1.push([<?php echo $k?>, <?php echo $d?>]);
	<?php }?>
    <?php 
       foreach($chart_data_ac as $k=>$d){
    ?>
        d2.push([<?php echo $k?>, <?php echo $d?>]);
	<?php }?>
          //var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

    // a null signifies separate line segments
    var d3 = [[0, 12], [7, 12], null, [7, 2.5], [12, 2.5]];
    
  $.plot($("#submission"), [ 
   {label:"<?php echo $MSG_SUBMIT?>",data:d1,lines: { show: true }},
    {label:"<?php echo $MSG_AC?>",data:d2,bars:{show:true}} ],{
   grid: {
backgroundColor: { colors: ["#fff", "#eee"] }
},   
        
            xaxis: {
              mode: "time",
                      max:(new Date()).getTime(),
              min:(new Date()).getTime()-100*24*3600*1000
            }
        });
});
      //alert((new Date()).getTime());
</script>
</head>
  <?php require_once("oj-header.php");?>

<body>
  <div class="container buttomspace">
  <div id="row" class="span11 mainpage">
    <div class="aliancenter">
    <div class="top-container">  
      <div class="row">
          <div class="span5">
            <span class="title" style="text-align: center;">公告</span>
          </div>
          <div class="span5">
            <span class="title" style="text-align: center;">声明</span>
          </div>
      </div>
    </div>
    <div class="top-container">
      <div class="row">
          <div class="span5">
            <span class="">本平台目前处于测试状态，如果有问题请和我们联系，我们会尽快修改，如需测试请转至<?php echo $view_marquee_msg?></span>
            <blockquote class="pull-right">--SCOJ TEAM</blockquote>
          </div>
          <div class="span5">

                SCOJ基于开源的HUSTOJ改版，template无法向HUSTOJ兼容。基于相同的GPLv2发布。文档基于CC-BY-NC 2.0发布。代码托管在<a href="https://github.com/slixurd/scoj">GITHUB</a>
          </div>
      </div>
      </div>
    </div>
      <div class="hero-unit">
          <div id="submission" style="width:600px;height:300px;"></div>
          <div class='clearfix'></div>";
    <style>.clearfix {  *zoom: 1;}.clearfix:before,.clearfix:after {  display: table;
  content: '';  line-height: 0;}.clearfix:after {  clear: both;}</style>
      </div>
    </div><!--end main-->


  </div><!--end row-->
</div>
       <div id=foot>
         <?php require_once("oj-footer.php");?>
       </div><!--end foot-->
</body>
</html>

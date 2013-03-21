<?php  
    require_once('./include/cache_start.php');

  
	require_once('./include/db_info.inc.php');

  if(isset($OJ_LANG)){
		require_once("./lang/$OJ_LANG.php");
	}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>

<?php if(isset($_GET['cid']))
	$cid=intval($_GET['cid']);
if (isset($_GET['pid']))
	$pid=intval($_GET['pid']);
?>

<div id="head">
	  <div class="navbar">
	  	<div class="navbar-inner navbar-fixed-top">
		  	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </a>
	        <a  class='brand'  href="<?php echo $OJ_HOME?>"><i class="icon-home icon-white"></i>
					<?php echo $OJ_NAME?>						
			</a>
			<div class="nav-collapse">
	  		<ul class="nav">

				<li class=' <?php if ($url=="problemset.php") echo "$ACTIVE";?>'>
					<a href='./contest.php?cid=<?php echo $cid?>'>
						<i class="icon-question-sign icon-white"></i>
						<?php echo $MSG_PROBLEMS?>
					</a>
				</li>

				<li class=' <?php if ($url=="status.php") echo "  $ACTIVE";?>'>
					<a href='./contestrank.php?cid=<?php echo $cid?>'>
						<i class="icon-check icon-white"></i>
						<?php echo $MSG_STANDING?>
					</a>
				</li>
				
				<li class=' <?php if ($url=="ranklist.php") echo "  $ACTIVE";?>'>
					<a  href='./status.php?cid=<?php echo $cid?>'>
						<i class="icon-signal icon-white"></i>
						<?php echo $MSG_STATUS?>
					</a>
				</li>

				<li class=' <?php if ($url=="contest.php") echo "  $ACTIVE";?>'>
					<a href='./conteststatistics.php?cid=<?php echo $cid?>'>
						<i class="icon-fire icon-white"></i>
						<?php echo $MSG_STATISTICS?>
					</a>
				</li>

					<?php if(isset($OJ_DICT)&&$OJ_DICT&&$OJ_LANG=="cn"){?>
					<span div class=' '  style="color:1a5cc8" id="dict_status"></span>
								  <script src="include/underlineTranslation.js" type="text/javascript"></script>
								  <script type="text/javascript">dictInit();</script>
					<?php }?>

			</ul>	
			</div>
				<div  class="pull-right" >
					<script src="include/profile.php?<?php echo rand();?>" ></script>
				</div>
		</div>
	</div>

</div>

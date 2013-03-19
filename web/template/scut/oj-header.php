<?php $ACTIVE="active";?>
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

				
	  			<!-- Waiting for editting the constest-header and then we will reveal this page>
				<li  class='<?php if ($url==$OJ_BBS.".php") echo "$ACTIVE";?>'>
					<a href="bbs.php"><i class="icon-comment icon-white"></i><?php echo $MSG_BBS?></a>
				</li>
				<! -->
				<li class=' <?php if ($url=="problemset.php") echo "$ACTIVE";?>'>
					<a href="problemset.php"><i class="icon-question-sign icon-white" ></i><?php echo $MSG_PROBLEMS?></a>
				</li>

				<li class=' <?php if ($url=="status.php") echo "  $ACTIVE";?>'>
					<a href="status.php"><i class="icon-check icon-white"></i><?php echo $MSG_STATUS?></a>
				</li>
				
				<li class=' <?php if ($url=="ranklist.php") echo "  $ACTIVE";?>'>
					<a  href="ranklist.php"><i class="icon-signal icon-white"></i><?php echo $MSG_RANKLIST?></a>
				</li>

				<li class=' <?php if ($url=="contest.php") echo "  $ACTIVE";?>'>
					<a href="contest.php"><i class="icon-fire icon-white"></i><?php echo checkcontest($MSG_CONTEST)?></a>
				</li>
				
				<li class=' <?php if ($url=="recent-contest.php") echo " $ACTIVE";?>'>
					<a href="recent-contest.php"><i class="icon-share icon-white"></i><?php echo "$MSG_RECENT_CONTEST"?></a>
				</li>
				
				<li class=' <?php if ($url==(isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php")) echo " $ACTIVE";?>'>
				<a href="<?php echo isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php"?>">
		                <i class="icon-info-sign icon-white"></i><?php echo "$MSG_FAQ"?></a>
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
				</div><!--end profile-->
		</div>
	</div><!--end menu-->

</div><!--end subhead-->

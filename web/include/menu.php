<?php
$mypage = current_pagename();
?>
<style type="text/css">
	#left-column{
		color: rgb(51, 51, 51);
		float: left;
		height: 2451.46875px;
		max-width: 300px;
		text-align: left;
		text-decoration: none solid rgb(51, 51, 51);
		text-shadow: rgb(255, 255, 255) 0px 1px 0px;
		width: 300px;
		border: 0px none rgb(51, 51, 51);
		font: normal normal normal 16px/normal 'Didact Gothic', 'Century Gothic', 'Apple Gothic', AppleGothic, 'URW Gothic L', 'Avant Garde', Futura, sans-serif;
		margin: 30px 0px 20px 24px;
		outline: rgb(51, 51, 51) none 0px;
	}

	.subnav-c{
		border-right:0;
		border-left:0;
	}
	.ui-collapsible-content{
		border-right:0;
	}
</style>
<div id="left-column">
	<a href="index.php"><img class="center conflogo" src="images/logo.png" alt="ACM SIGCOMM 2014, August 2014, Chicago, Illinois" /></a>

	<!-- <a href="#" onclick="$.mobile.silentScroll(0)" class="ui-btn-right" data-icon="grid"><h2 class="hcls">Site Menu</h2></a> -->

	<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
		<li data-icon="false" <?php if ($mypage=="index.php") echo 'class="navselected"' ?> ><a href="index.php">Home</a></li>

		<li data-icon="false" <?php if ($mypage=="supporters.php") echo 'class="navselected"' ?> style="border-radius: 0;"><a href="supporters.php" >Supporters</a></li>
		<div data-role="collapsible" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right" 
		<?php if ($mypage=="submission.php" || $mypage=="cfp.php" || $mypage=="program.php" || $mypage=="pc.php") echo 'data-collapsed=false'?> style="border-radius: 0;margin: 0;border-right: 1px solid rgb(187, 187, 187);">
			<h4>Conference</h4>
			<ul data-role="listview" data-inset="false">
				<li data-icon="false" class="subnav-c <?php if ($mypage=="program.php") echo 'navselected' ?>" ><a href="program.php">Program</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="pc.php") echo 'navselected' ?>" ><a href="pc.php">Program Committee</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="awards.php") echo 'navselected' ?>" ><a href="awards.php">Awards</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="cfp.php") echo 'navselected' ?>" ><a href="cfp.php">Call for Papers</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="submission.php") echo 'navselected' ?>" ><a href="submission.php">Paper Submission</a></li>
			</ul>
		</div>

		<div data-role="collapsible" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right" 
		<?php if ($mypage=="allthingscellular.php" || $mypage=="csws.php" || $mypage=="dcc.php" || $mypage=="hotsdn.php" || $mypage=="n2women.php" || $mypage=="srif.php") echo 'data-collapsed=false'?> style="border-radius: 0;margin: 0; border-right: 1px solid rgb(187, 187, 187);">
			<h4>Workshops</h4>
			<ul data-role="listview" data-inset="false">
				<li data-icon=false class="subnav-c <?php if ($mypage=="allthingscellular.php") echo 'navselected' ?>"><a href="allthingscellular.php">All Things Cellular</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="csws.php") echo 'navselected' ?>"><a href="csws.php">CSWS</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="dcc.php") echo 'navselected' ?>"><a href="dcc.php">DCC</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="hotsdn.php") echo 'navselected' ?>"><a href="hotsdn.php">HotSDN</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="n2women.php") echo 'navselected' ?>"><a href="n2women.php">N2Women</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="srif.php") echo 'navselected' ?>"><a href="srif.php">SRIF</a></li>
			</ul>
		</div>

		<div data-role="collapsible" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right" 
		<?php if ($mypage=="tutorial-smartphone.php" || $mypage=="tutorial-mininet.php" || $mypage=="tutorial-theory+eng.php" || $mypage=="tutorial-geni.php" || $mypage=="tutorial-fitiotlab.php" || $mypage=="tutorial-virtualization.php") echo 'data-collapsed=false'?> style="border-radius: 0;margin: 0;border-right: 1px solid rgb(187, 187, 187);">
			<h4>Tutorials</h4>
			<ul data-role="listview" data-inset="false">
				<li data-icon=false class="subnav-c <?php if ($mypage=="tutorial-smartphone.php") echo 'navselected' ?>"><a href="tutorial-smartphone.php">Smartphone Performance</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="tutorial-mininet.php") echo 'navselected' ?>"><a href="tutorial-mininet.php">Mininet</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="tutorial-theory+eng.php") echo 'navselected' ?>"><a href="tutorial-theory+eng.php">Theory &cap; Engineering</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="tutorial-geni.php") echo 'navselected' ?>"><a href="tutorial-geni.php">GENI</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="tutorial-fitiotlab.php") echo 'navselected' ?>"><a href="tutorial-fitiotlab.php">FIT IoT-LAB</a></li>
				<li data-icon=false class="subnav-c <?php if ($mypage=="tutorial-virtualization.php") echo 'navselected' ?>"><a href="tutorial-virtualization.php">Virtualization</a></li>
			</ul>
		</div>

		<div data-role="collapsible" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right" 
		<?php if ($mypage=="venue.php" || $mypage=="hotel.php" || $mypage=="childcare.php" || $mypage=="visa.php" || $mypage=="travelgrants.php") echo 'data-collapsed=false'?> style="border-radius: 0;margin: 0;border-right: 1px solid rgb(187, 187, 187);">
			<h4>Local Information</h4>
			<ul data-role="listview" data-inset="false">
				<li data-icon="false" class="subnav-c"><a href="https://www.regonline.com/acmsigcomm2014" rel="external">Registration</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="venue.php") echo 'navselected' ?>" ><a href="venue.php">Venue</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="hotel.php") echo 'navselected' ?>" ><a href="hotel.php">Hotels and Travel</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="childcare.php") echo 'navselected' ?>" ><a href="childcare.php">SIGCOMM Kiddie</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="visa.php") echo 'navselected' ?>" ><a href="visa.php">Visas</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="travelgrants.php") echo 'navselected' ?>" ><a href="travelgrants.php">Travel Grants</a></li>
			</ul>
		</div>


		<div data-role="collapsible" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right" 
		<?php if ($mypage=="organization.php" || $mypage=="cfpd.php" || $mypage=="cfw.php" || $mypage=="cft.php" || $mypage=="policies.php") echo 'data-collapsed=false'?> style="border-radius: 0;margin: 0;border-bottom-left-radius: 0.6em;border-bottom-right-radius: 0.6em;border-right: 1px solid rgb(187, 187, 187);">
			<h4>Organization</h4>
			<ul data-role="listview" data-inset="false">
				<li data-icon="false" class="subnav-c <?php if ($mypage=="organization.php") echo 'navselected' ?>" ><a href="organization.php">Organization Committee</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="cfpd.php") echo 'navselected' ?>" ><a href="cfpd.php">Call for Posters and Demos</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="cfw.php") echo 'navselected' ?>" ><a href="cfw.php">Call for Workshops</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="cft.php") echo 'navselected' ?>" ><a href="cft.php">Call for Tutorials</a></li>
				<li data-icon="false" class="subnav-c <?php if ($mypage=="policies.php") echo 'navselected' ?>" ><a href="policies.php">Policies</a></li>
			</ul>
		</div>

	</ul>


	<div class="border ui-corner-all ui-shadow socialbuttons">
		<iframe src="include/socialbtn.php" scrolling="no" height="21" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
	</div>
		<!--
 		<div style="margin-top: 2em" class="tweetlist">
			<iframe src="include/tweetlist.php" scrolling="no" height="380" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		</div>
	-->

	<div style="margin-top: 2em" class="tweetlist"><a class="twitter-timeline"
		href="https://twitter.com/search?q=%23Sigcomm2014+OR+%22sigcomm+2014%22+OR+%222014+sigcomm%22"
		data-widget-id="443666007916154880">Tweets about "#Sigcomm2014 OR
		"sigcomm 2014" OR "2014 sigcomm""</a>
		<script>!function(d,s,id){var
			js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");twttr.widgets.load();</script>
		</div>

	</div>

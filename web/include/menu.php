<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<a href="index.php"><img class="center conflogo" src="images/logo.png" alt="ACM SIGCOMM 2014, August 2014, Chicago, Illinois" /></a>

		<a href="#" onclick="$.mobile.silentScroll(0)" class="ui-btn-right" data-icon="grid"><h2 class="hcls">Site Menu</h2></a>

		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li data-icon="false" <?php if ($mypage=="index.php") echo 'class="navselected"' ?> ><a href="index.php">Home</a></li>

			<li data-icon="false" <?php if ($mypage=="supporters.php") echo 'class="navselected"' ?> ><a href="supporters.php">Supporters</a></li>

			<li class="navheader-c" data-icon="false" data-theme="c" >Conference</li>

				<li data-icon="false" class="subnav-c <?php if ($mypage=="program.php") echo 'navselected' ?>" ><a href="program.php">Program</a></li>

				<li data-icon="false" class="subnav-c <?php if ($mypage=="pc.php") echo 'navselected' ?>" ><a href="pc.php">Program Committee</a></li>

				<li data-icon="false" class="subnav-c <?php if ($mypage=="cfp.php") echo 'navselected' ?>" ><a href="cfp.php">Call for Papers</a></li>

				<li data-icon="false" class="subnav-c <?php if ($mypage=="submission.php") echo 'navselected' ?>" ><a href="submission.php">Paper Submission</a></li>

			<li class="navheader-a" data-icon="false" data-theme="c" >Workshops</li>
				<li data-icon=false class="subnav-a <?php if ($mypage=="allthingscellular.php") echo 'navselected' ?>"><a href="allthingscellular.php">All Things Cellular</a></li>
				<li data-icon=false class="subnav-a <?php if ($mypage=="csws.php") echo 'navselected' ?>"><a href="csws.php">CSWS</a></li>
				<li data-icon=false class="subnav-a <?php if ($mypage=="dcc.php") echo 'navselected' ?>"><a href="dcc.php">DCC</a></li>
				<li data-icon=false class="subnav-a <?php if ($mypage=="hotsdn.php") echo 'navselected' ?>"><a href="hotsdn.php">HotSDN</a></li>
				<li data-icon=false class="subnav-a <?php if ($mypage=="n2women.php") echo 'navselected' ?>"><a href="n2women.php">N2Women</a></li>
				<li data-icon=false class="subnav-a <?php if ($mypage=="srif.php") echo 'navselected' ?>"><a href="srif.php">SRIF</a></li>

			<li class="navheader-b" data-icon="false" data-theme="c" >Tutorials</li>
							<li data-icon=false class="subnav-b <?php if ($mypage=="tutorial-smartphone.php") echo 'navselected' ?>"><a href="tutorial-smartphone.php">Smartphone Performance</a></li>
							<li data-icon=false class="subnav-b <?php if ($mypage=="tutorial-mininet.php") echo 'navselected' ?>"><a href="tutorial-mininet.php">Mininet</a></li>
							<li data-icon=false class="subnav-b <?php if ($mypage=="tutorial-theory+eng.php") echo 'navselected' ?>"><a href="tutorial-theory+eng.php">Theory &cap; Engineering</a></li>
							<li data-icon=false class="subnav-b <?php if ($mypage=="tutorial-geni.php") echo 'navselected' ?>"><a href="tutorial-geni.php">GENI</a></li>
							<li data-icon=false class="subnav-b <?php if ($mypage=="tutorial-fitiotlab.php") echo 'navselected' ?>"><a href="tutorial-fitiotlab.php">FIT IoT-LAB</a></li>
							<li data-icon=false class="subnav-b <?php if ($mypage=="tutorial-virtualization.php") echo 'navselected' ?>"><a href="tutorial-virtualization.php">Virtualization</a></li>


			<li class="navheader-d" data-icon="false" data-theme="c" >Local Information</li>

							<li data-icon="false" class="subnav-c"><a href="https://www.regonline.com/acmsigcomm2014" rel="external">Registration</a></li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="venue.php") echo 'navselected' ?>" ><a href="venue.php">Venue</a></li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="hotel.php") echo 'navselected' ?>" ><a href="hotel.php">Hotels and Travel</a></li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="childcare.php") echo 'navselected' ?>" ><a href="childcare.php">SIGCOMM Kiddie</a></li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="visa.php") echo 'navselected' ?>" ><a href="visa.php">Visas</a></li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="travelgrants.php") echo 'navselected' ?>" ><a href="travelgrants.php">Travel Grants</a></li>


			<li class="navheader-e" data-icon="false" data-theme="c" >Organization</li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="organization.php") echo 'navselected' ?>" ><a href="organization.php">Organization Committee</a></li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="cfpd.php") echo 'navselected' ?>" ><a href="cfpd.php">Call for Posters and Demos</a></li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="cfw.php") echo 'navselected' ?>" ><a href="cfw.php">Call for Workshops</a></li>

							<li data-icon="false" class="subnav-c <?php if ($mypage=="cft.php") echo 'navselected' ?>" ><a href="cft.php">Call for Tutorials</a></li>


							<li data-icon="false" class="subnav-c <?php if ($mypage=="policies.php") echo 'navselected' ?>" ><a href="policies.php">Policies</a></li>
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

<?php
        $page_title="ACM SIGCOMM Test Page";
        include("include/header.php");
?>

<h1 class="hcls">Test page</h1>



		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li data-icon="false" <?php if ($mypage=="supporters.php") echo 'class="navselected"' ?> ><a href="supporters.php">Supporters</a></li>

			<li class="navheader-a" data-icon="false" data-theme="c" >Workshops</li>
				<li data-icon=false class="subnav-a <?php if ($mypage=="srif.php") echo 'navselected' ?>" ><a href="srif.php">SRIF</a></li>
		</ul>




<?php
    include ("include/footer.php");
?>

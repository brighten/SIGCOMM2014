<?php
        $page_title="Conference Program";
        include("include/header.php");
?>


<h1 class="hcls">Conference Program</h1>

<div id="prog_ctrl" data-role="navbar">
	<ul>
		<li><a href="#">Tuesday</a></li>
		<li><a href="#">Wednesday</a></li>
		<li><a href="#">Thursday</a></li>
		<li><a href="#" class="ui-btn-active ui-state-persist">All</a></li>
	</ul>
</div>

<?php
    include ("include/program/sigcomm.php");
?>

<p>
If you have questions, please email the <a class="lnkcls" href="mailto:sigcomm2014-gen-chairs@acm.org">general chairs</a>.
</p>


<?php
    include ("include/footer.php");
?>

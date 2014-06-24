<?php
        $page_title="ACM SIGCOMM 2014";
        include("include/header.php");
?>

<h1 class=hcls>Welcome to Chicago</h1>

<p>The organizing committee is delighted to invite you to ACM SIGCOMM 2014, to be held in Chicago, Illinois, August 17-22, 2014.</p>

<p>SIGCOMM is the flagship annual conference of the ACM Special Interest Group on Data Communication (SIGCOMM) on the applications, technologies, architectures, and protocols for computer communication.</p>

<h2 class="hcls">Conference Schedule</h2>

<a href="doc/schedule.pdf"  rel="external"><img src="doc/schedule.png" alt="SIGCOMM Schedule" style="width: 100%;"></a>

<h2 class="hcls">News</h2>
<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
<?php
        include("include/news.php");
?>
</ul>
<script>
$(".newslibtn").siblings().slice(10).hide();
</script>

<h2 class=hcls>Important Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('March 14 - May 19, 2014', 'Workshop submission deadlines');
add_dateitem('March 14, 2014', 'Main conference first round reviews available');
add_dateitem('March 21, 2014 (20:00 EDT)', 'Main conference author rebuttals due');
add_dateitem('April 28, 2014', 'Main conference paper acceptance notification');
add_dateitem('May 16, 2014 (23:59 EST)', 'Poster/demo submission deadline');
add_dateitem('June 2, 2014', 'Poster/demo acceptance notification');
add_dateitem('June 6, 2014 (23:59 EDT)', 'Travel Grant Application Submission Deadline');
add_dateitem('June 13, 2014 (23:59 EDT)', 'Travel Grant Award Notification');
add_dateitem('August 17-22, 2014', 'SIGCOMM 2014 Main Technical Program');
?>
</ul>


<h2 class=hcls>Sponsors</h2>
<a href="//www.acm.org/"><img src="images/acm.png" alt="Association for Computing Machinery" style="width:41%;padding:4%;vertical-align:middle"/></a>
<a href="//www.sigcomm.org/"><img src="images/sig.png" alt="ACM SIGCOMM" style="width:41%;padding:4%;vertical-align:middle"/></a>
<br/>

<h2 class=hcls>Industrial Supporters</h2>

<?php
    include ("include/supporters.php");
?>


<?php
    include ("include/footer.php");
?>
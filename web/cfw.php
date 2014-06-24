<?php
        $page_title="Call for Workshops";
        include("include/header.php");
?>

<h1 class="hcls">ACM SIGCOMM 2014 Call For Workshop Proposals</h1>

<p>SIGCOMM 2014 is soliciting proposals for new and recurring workshops. SIGCOMM 2014 will hold multiple one-day workshops in conjunction with the conference, to be held in Chicago from August 17 to 22, 2014. Workshops will take place on Monday, August 18 and Friday, August 22.
</p>

<p>We invite you to submit workshop proposals on any topic related to the broad set of research and application areas covered the by SIGCOMM conference and SIG.</p>

<p>SIGCOMM 2014 workshops can take any of the following forms:</p>
<ul>
<li>Workshops that publish early results in emerging areas </li>
<li>Teaching workshops that provide hands-on experience in area of general interest to the SIGCOMM community, e.g., cloud programming, mobile apps, PHY Layer programming, etc. </li>
<li>New and established workshops. Unlike previous years, we welcome returning workshops even if they have appeared at SIGCOMM in three or more prior years.</li>
</ul>

<p>A workshop proposal should contain at least the following information:</p>

<ul>
<li>Motivation and rationale for the workshop.</li>
<li>For teaching workshops, a draft of the syllabus; otherwise a draft Call For Papers (CFP), as complete as possible.</li>
<li>The workshop deadlines, both internal and external. See below for guidelines on important external guidelines.</li>
<li>Names and affiliations of main organizers. If the workshop is not a teaching workshop, include a tentative composition of the committees (as complete as possible). Please indicate whether prospective TPC members have been contacted, and whether they have accepted the invitation. We strongly discourage speculative TPC listings.</li>
<li>Workshop format, i.e., expected number of presented papers, invited talks, panels, demonstrations, etc.</li>
<li>Expected number of participants. Further, if the workshop is not a teaching workshop, please include the expected number of submissions.</li>
<li>Prior history of this workshop, if any, including number of submissions, number of accepted papers, and attendee count. If the workshop was co-located with another conference please include details and a brief description why SIGCOMM is a more appropriate venue.</li>
<li>Note that workshop format itself should favor interaction among participants as well as community building.</li>
</ul>

<p>Email proposals in PDF to <a href="mailto:mzh@microsoft.com">mzh@microsoft.com</a> and <a href="mailto:caesar@cs.illinois.edu">caesar@cs.illinois.edu</a>.</p>


<h2 class=hcls>Important Workshop Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('<span><del>Nov 15, 2013</del><br><span style="color:#FF0000">November 22nd, 2013</span></span>', 'Workshop proposals due'); 
add_dateitem('<span>Dec 3, 2013</span>', 'Notification of acceptance'); 
add_dateitem('<span>Dec 22, 2013</span>', 'Workshop Call For Papers due'); 
?>
</ul>

<p>Note that there are only three weeks between the notification and the final CFP. Thus, we reiterate that you contact your workshop's potential PC members before submitting the proposal.</p>

<h2 class=hcls>Additional Important Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('<span>Before March 25th, 2014</span>', 'Paper submissions deadline'); 
add_dateitem('<span>Before end of April, 2014</span>', 'Paper acceptance notifications'); 
add_dateitem('<span>Before end of May, 2014</span>', 'Camera ready due'); 
add_dateitem('<span>Before mid-June, 2014</span>', 'Program available online'); 
add_dateitem('<span>Before mid-June, 2014</span>', 'List of organization details'); 
?>
</ul>

<p>In order for the workshops to be synchronized with preparations for the main conference and with travel grants, the dates above must be followed strictly by all workshops. Please contact the SIGCOMM 2014 Workshop co-chairs (Matthew Caesar and Ming Zhang) with any questions.</p>

<a href="doc/cfw.pdf" rel="external" data-role=button class=button>Download this call as a PDF</a>

<?php
    include ("include/footer.php");
?>

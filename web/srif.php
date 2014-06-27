<?php
        $page_title="ACM SIGCOMM Software Radio Implementation Forum (SRIF) 2014";
        include("include/header.php");
?>

<h1 class="hcls">ACM SIGCOMM Software Radio Implementation Forum (SRIF) 2014</h1>


<h2 class="hcls">Technical Program</h2>

<?php
        include("include/program/srif.php");
?>

<h2 class="hcls">Call for Papers</h2>

<p>The Software Radio Implementation Forum (SRIF) seeks papers for the SRIF 2014 workshop to be held August 2014 in conjunction with ACM SIGCOMM in Chicago.</p>

<p>The SRIF workshop brings together researchers and practitioners of software defined radio (SDR) to share experiences, insights and the latest results in designing and using SDR systems. Submissions from both industry and academia are encouraged.</p>

<p>The goal of SRIF is to bring together practitioners and researchers of software defined radio in to share their experiences, insights and latest developments. Through this exchange the workshop aims to facilitate collaborations between academia and industry. The workshop is a venue for industrial participants to share their experiences and best practices for commercial deployments of SDR systems and for researchers to share their latest results in novel uses of SDR in emerging wireless systems.</p>

<p>We invite paper, posters and demo submissions in all areas related to SDR development and research. Example topics of interest include:</p>

<ul>
<li>New hardware and software architectures for software radio</li>
<li>New programming models for SDR</li>
<li>New PHY and MAC primitives and abstractions</li>
<li>WLAN and LTE cellular networks with SDR</li>
<li>Prototypes of novel wireless systems using SDR</li>
<li>State-of-the-art  performance of wireless systems using SDR</li>
<li>New applications for SDR (e.g. security, localization, medical, etc.)</li>
<li>New insights on wireless theory vs. practice enabled by SDR</li>
</ul>


<h3 class="hcls">Submissions</h3>

<p>All submissions to SRIF 2014 must be original work that has not been submitted to any other workshop, conference, or journal. The workshop will consider two different types of papers:</p>

<ul>
	<li>Full papers: 6 to 8 double column pages describing relatively mature and completed work.</li>
	<li>Extended abstracts for posters and demos: 2 to 5 double column pages describing work-in-progress, experiments, challenges or positions.</li>
</ul>

<p>Submissions must use <a href="http://www.acm.org/sigs/publications/proceedings-templates">the ACM template</a>.</p>

<p>Full papers will be presented as technical talks in oral sessions.

<p>Posters and demos will be presented in a dedicated, non-overlapping session. Authors of posters and demos will have 2 minutes at the beginning of the poster/demo session to advertise their work.</p>

<p>Depending on the number of accepted full papers, some may be allocated to the poster/demo session for presentation purposes.</p>

<p>Authors must clearly indicate in the title of the paper the type of submission (e.g., title prefix of "Paper:", "Poster:" or "Demo:").</p>

<p>Submissions will be evaluated via a single-blind review process. Please include author names and affiliation in the submission. All accepted papers (full and short) will be published online by ACM and/or IEEE.</p>

<p>All papers must be <a href="https://edas.info/newPaper.php?c=16787">submitted via EDAS</a>.


<h2 class=hcls>Important Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('<span>March 30, 2014</span>', 'Paper/extended abstract submission deadline');
add_dateitem('<span>April 30, 2014</span>', 'Acceptance notification');
add_dateitem('<span>May 30, 2014</span>', 'Camera-ready submissions due');
add_dateitem('<span>June 15, 2014</span>', 'Program available online');
add_dateitem('<span>August 18, 2014</span>', 'Workshop (all day)');
?>
</ul>

<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">General Chair</li>
	<?php
		add_listitem("Dr. Li Erran Li", "Bell Labs, Alcatel-Lucent, USA", "");
	?>

	<li data-role="list-divider">Steering Committee</li>
	<?php
		add_listitem("Dr. Li Erran Li", "Bell Labs, Alcatel-Lucent, USA", "");
		add_listitem("Prof. Soung Chang Liew", "The Chinese University of Hong Kong", "");
		add_listitem("Dr. Tom Rondeau", "General Manager, GNU Radio, USA", "");
		add_listitem("Dr. Kun Tan", "Microsoft Research Asia, China", "");
	?>

	<li data-role="list-divider">Technical Program Co-Chairs</li>
	<?php
		add_listitem("Prof. Marina Petrova", "RWTH Aachen University, Germany", "");
		add_listitem("Prof. Shyam Gollakota", "University of Washington, USA", "");
		add_listitem("Dr. Patrick Murphy", "Mango Communications, USA", "");
	?>

	<li data-role="list-divider">TPC Members</li>
	<?php
		add_listitem("Prof. Giuseppe Bianchi", "University of Roma Tor Vergata, Italy", "");
		add_listitem("Prof. Prabal Dutta", "University of Michigan, USA", "");
		add_listitem("Matt Ettus", "CEO, Ettus Research, USA", "");
		add_listitem("Prof. Matthias Hollick", "TU Darmstadt, Germany", "");
		add_listitem("Prof. Kyle Jamieson", "University College London, UK", "");
		add_listitem("Prof. Edward Knightly", "Rice University, USA", "");
		add_listitem("Dr. Li Erran Li", "Bell Labs, Alcatel-Lucent, USA", "");
		add_listitem("Prof. Soung Chang Liew", "The Chinese University of Hong Kong", "");
		add_listitem("Prof. Petri Mahonen", "RWTH Aachen University, Germany", "");
		add_listitem("Prof. Petar Popovski", "Aalborg University, Denmark", "");
		add_listitem("Dr. Tom Rondeau", "General Manager, GNU Radio, USA", "");
		add_listitem("Prof. Ashu Sabharwal", "Rice University, USA", "");
		add_listitem("Prof. Joshua Smith", "University of Washington", "");
		add_listitem("Prof. Kannan Srinivasan", "The Ohio State University, USA", "");
		add_listitem("Dr. Kun Tan", "Microsoft Research Asia, China", "");
		add_listitem("Prof. Xinbing Wang", "Shanghai Jiao Tong University, China", "");
		add_listitem("Prof. Y. Richard Yang", "Yale University, USA", "");
		add_listitem("Prof. Lin Zhong", "Rice University, USA", "");
	?>

</ul>

<a href="doc/srif-cfp.pdf" rel="external" data-role=button class=button>Download this call as a PDF</a>

<?php
    include ("include/footer.php");
?>

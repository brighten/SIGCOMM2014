<?php
        $page_title="ACM SIGCOMM Workshop on Distributed Cloud Computing (DCC)";
        include("include/header.php");
?>

<h1 class="hcls">ACM SIGCOMM Workshop on Distributed Cloud Computing (DCC 2014)</h1>


<p>Co-located with ACM SIGCOMM 2014 in Chicago, USA, August 2014</p>

<h2 class="hcls">Technical Program</h2>

<?php
        include("include/program/dcc.php");
?>

<h2 class=hcls>Many thanks to our sponsor</h2>

<div class=supporter><div>
<a href="http://www.ericsson.com/"><img src="images/sponsors/ericsson.png" alt=ERICSSON style="width: 110px;"/></a>
</div></div>

<h2 class="hcls">Workshop Goal</h2>

<p>The DCC workshop is interdisciplinary and touches both distributed systems and networking aspects as well as cloud computing. We want to attract both industry relevant papers as well as papers from academic researchers working on the foundations of the distributed cloud.</p>

<p>DCC 2014 accepts high-quality papers related to the distributed cloud which fall into at least one of the following categories:</p>

<ul>
<li>Novel ideas on how to design and operate/manage the distributed cloud</li>
<li>Foundations and principles of distributed cloud computing</li>
<li>Optimization and algorithms</li>
<li>Architectural models, prototype implementations and applications</li>
<li>Virtualization technology and enablers (network virtualization, software-defined networking)</li>
<li>Experience with existing deployments and measurements (public, private, hybrid, federated environments)</li>
<li>Service and resource specification, languages, and formal verification</li>
<li>Economics and pricing</li>
</ul>


<h3 class="hcls">Submission and Publication</h3>

<p>Submissions are single-blind and should not exceed 6 pages in length (in ACM format).
For an accepted paper, at least one author must attend the workshop. The submission site is: <a href="http://crp.inet.tu-berlin.de/dcc2014/" rel="external">http://crp.inet.tu-berlin.de/dcc2014/</a></p>

<p>Each submission must be a single PDF file no longer than six (6) pages in length (in two-column, 10-point format) including references, following <a href="http://conferences.sigcomm.org/sigcomm/2009/sig-alternate-10pt.cls" rel=external>the sig-alternate-10pt LaTeX style file</a>. Papers should be submitted electronically via the submission site. Papers must include the author name and affiliation for single-blind peer reviewing by the program committee.</p>

<p>Accepted papers will be published in the ACM Digital Library. Publication at DCC is not intended to preclude later publication. Authors of accepted papers are expected to present their papers at the workshop.</p>


<h2 class=hcls>Important Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('<span>March 25, 2014</span>', 'Abstract registration');
add_dateitem('<span>March 30, 2014</span>', 'Submissions due');
add_dateitem('<span>May 5, 2014</span>', 'Notification');
add_dateitem('<span>May 25, 2014</span>', 'Camera ready versions due');
add_dateitem('<span>August 18, 2014</span>', 'Workshop');
?>
</ul>


<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Chairs</li>
	<?php
		add_listitem("Yvonne Coady", "Uni Victoria, Canada", "");
		add_listitem("James Kempf", "Ericsson Research, Silicon Valley, USA", "");
		add_listitem("Rick McGeer", "SAP and US IGNITE, USA", "");
		add_listitem("Stefan Schmid", "Telekom Innovation Laboratories (T-Labs) &amp; TU Berlin, Germany", "");
	?>

	<li data-role="list-divider">Technical Program Committee</li>
	<?php
		add_listitem("Thais Batista", "UFRN, Brazil", "");
		add_listitem("Raouf Boutaba", "University of Waterloo, Canada", "");
		add_listitem("Andre Brinkmann", "University of Mainz, Germany", "");
		add_listitem("Marco Canini", "Universite catholique de Louvain, Belgium", "");
		add_listitem("Justin Cappos", "New York University, USA", "");
		add_listitem("Paolo Costa", "Microsoft Research, UK", "");
		add_listitem("Xenofontas Dimitropoulos", "FORTH and ETH Zurich, Greece and Switzerland", "");
		add_listitem("Erik Elmroth", "Umea University and Elastisys, Sweden", "");
		add_listitem("Pascal Felber", "University of Neuchatel, Switzerland", "");
		add_listitem("Anja Feldmann", "TU Berlin, Germany", "");
		add_listitem("Nate Foster", "Cornell University, USA", "");
		add_listitem("Alex Galis", "University College London, UK", "");
		add_listitem("Wolfgang Gentzsch", "Chairman ISC Cloud and Co-Founder of The UberCloud, Germany", "");
		add_listitem("Indranil Gupta", "University of Illinois at Urbana-Champaign, USA", "");
		add_listitem("Aman Kansal", "Microsoft Research, USA", "");
		add_listitem("Holger Karl", "University of Paderborn, Germany", "");
		add_listitem("Petr Kuznetsov", "Telecom ParisTech, France", "");
		add_listitem("Bob Melander", "CISCO, USA", "");
		add_listitem("Joe Mambretti", "Northwestern University, USA", "");
		add_listitem("Gabriel Mateescu", "EURAC Research, Italy", "");
		add_listitem("Christine Morin", "INRIA, France", "");
		add_listitem("Paul M&#252;ller", "University of Kaiserslautern, Germany", "");
		add_listitem("Seffi Naor", "Technion, Israel", "");
		add_listitem("Akihiro Nakao", "The University of Tokyo, Japan", "");
		add_listitem("Max Ott", "NICTA, Australia", "");
		add_listitem("Danny Raz", "Technion, Israel", "");
		add_listitem("Robert Ricci", "University of Utah, USA", "");
		add_listitem("Djamel Sadok", "UFPE, Brazil", "");
		add_listitem("Srini Seetharaman", "Deutsche Telekom Innovation Center, USA", "");
		add_listitem("Upendra Sharma", "IBM T. J. Watson Research Center, USA", "");
		add_listitem("Randy Sobie", "University of Victoria, Canada", "");
		add_listitem("Jukka Suomela", "Aalto University, Finland", "");
		add_listitem("Timothy Wood", "George Washington University, USA", "");
	?>

</ul>

<a href="doc/dcc-cfp.pdf" rel="external" data-role=button class=button>Download this call as a PDF</a>


<?php
    include ("include/footer.php");
?>

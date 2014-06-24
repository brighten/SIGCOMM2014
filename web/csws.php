<?php
        $page_title="ACM SIGCOMM Capacity Sharing Workshop (CSWS 2014)";
        include("include/header.php");
?>

<h1 class="hcls">ACM SIGCOMM Capacity Sharing Workshop (CSWS 2014)</h1>


<p>In conjunction with ACM SIGCOMM 2014 conference, on August 18, Chicago, USA.</p>

<h2 class="hcls">Technical Program</h2>

<?php
        include("include/program/csws.php");
?>

<h2 class="hcls">Call for Papers</h2>

<p>Changing usage behavior, increasing demand for bandwidth as well as a 
continuous trend towards virtualizing networks and network functions raise 
questions on how to share limited capacity resources fairly and more 
efficiently while maintaining the best possible Quality of Experience (QoE) 
for users. While efficiency is most important when resources are spare, 
fairness need to be evaluated based on the different quality requirements of 
the various Internet services that we have today. For example, the Internet, 
especially the mobile Internet, was mostly engineered to provide a low loss 
service, low-latency services are not well supported today. In data centers, 
virtualization and high utilization promise economic benefits. However, 
effective, yet practical capacity sharing between tenants and applications is 
an important requirement. This has led to the development of enhancements in 
capacity sharing, especially congestion control mechanisms &mdash; some of these 
mechanisms are domain-specific, others lend themselves to adoption or 
generalization for inter-connected networks.</p>

<p>The objective of this workshop is to bring together researchers in the area of 
network and transport protocols in the Internet as well as data centers and 
their applications to advance the state of research on capacity sharing. We 
solicit contributions on the state-of-the-art, results of ongoing research, 
open issues, trends and new ideas. We want to encourage researchers to 
consider the problem space over all layers.</p>

<h3 class="hcls">Topics</h3>

<p>Topics of particular interest include, but are not limited to:</p>

<ul>
<li>Network, transport, and application layer as well as cross-layer solutions, 
e.g. in the area of AQM, congestion control, or connection start-up</li>

<li>Application-layer models and requirements especially for interactive and
real-time media services in fixed and mobile networks</li>

<li>Context-aware resource allocation especially in cellular/fixed access networks and fixed/mobile convergence</li>

<li>Multi-tenancy capacity sharing and isolation in virtual networks</li>

<li>Approaches to reduce latency with or without network support (e.g ECN) and 
latency measurements</li>

<li>QoE/QoS mapping, metrics and measurements</li>
<li>Traffic management, classification and characterization in the Internet and 
data centers</li>

<li>Fairness definitions and economic aspects on capacity sharing</li>

<li>Related standardization activities, projects and regulatory constraints</li>

</ul>

<h3 class="hcls">Submission</h3>

<p>Submissions must be original, unpublished work, and not under consideration at 
another conference or journal. Submitted papers must be at most six (6) pages 
long, including all figures, tables, references, and appendices in two-column 
10pt ACM format. Please use the following link for paper submission:
<a href="https://www.easychair.org/conferences/?conf=csws14">https://www.easychair.org/conferences/?conf=csws14</a></p>


<h2 class=hcls>Important Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('<span>March 21, 2014</span>', 'Paper submission deadline');
add_dateitem('<span>April 25, 2014</span>', 'Acceptance notification');
add_dateitem('<span>May 30, 2014</span>', 'Camera-ready paper');
add_dateitem('<span>August 18, 2014</span>', 'Workshop date');
?>
</ul>

<a href="doc/csws-cfp.pdf" rel="external" data-role=button class=button>Download this call as a PDF</a>

<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Workshop Co-Chairs</li>
	<?php
		add_listitem("Mirja K&#252;hlewind", "IKR University of Stuttgart, Germany", "http://www.ikr.uni-stuttgart.de/~kuehlewind");
		add_listitem("Dirk Kutscher", "NEC Europe Labs Heidelberg, Germany", "http://dirk-kutscher.info/about/");
	?>

	<li data-role="list-divider">Technical Program Committee</li>
	<?php
		add_listitem("Marcelo Bagnulo Braun", "UC3M, Madrid, Spain", "");
		add_listitem("Bob Briscoe", "BT Research&amp;Technology, UK", "");
		add_listitem("Anna Brunstr&#246;m", "Karlstad University, Sweden", "");
		add_listitem("Phil Eardley", "BT Research&amp;Technology, UK", "");
		add_listitem("Lars Eggert", "NetApp, Germany", "");
		add_listitem("Gorry Fairhurst", "University of Aberdeen, UK", "");
		add_listitem("Matthew Ford", "Internet Society, UK", "");
		add_listitem("Michio Honda", "NEC Laboratories Europe, Germany", "");
		add_listitem("Janardhan Iyengar", "Google, USA", "");
		add_listitem("Suresh Krishnan", "Ericsson, Canada", "");
		add_listitem("Andreas M&#228;der", "NEC Laboratories Europe", "");
		add_listitem("Andrew McGregor", "Google, USA", "");
		add_listitem("Marco Mellia", "Politecnico di Torino, Italy", "");
		add_listitem("Michael Menth", "University of Tuebingen, Germany", "");
		add_listitem("Luca Muscariello", "FranceTelecom, France", "");
		add_listitem("Yoshifumi Nishida", "GE Global Research, USA", "");
		add_listitem("Piers O'Hanlon", "Oxford Internet Institue, UK", "");
		add_listitem("J&#246;rg Ott", "Aalto University, Finnland", "");
		add_listitem("Colin Perkins", "University of Glasgow, UK", "");
		add_listitem("David Ros", "Simula Research Laboratory, Norway", "");
		add_listitem("Pasi Sarolahti", "Aalto University, Finland", "");
		add_listitem("Michael Scharf", "Alcatel-Lucent Bell Labs, Stuttgart, Germany", "");
		add_listitem("Meral Shirazipour", "Ericsson, Canada", "");
		add_listitem("Martin Stiemerling", "NEC Laboratories Europe, Germany", "");
		add_listitem("Brian Trammell", "ETH, Zurich", "");
		add_listitem("Kurt Tutschku", "Blekinge Institute of Technology (BTH), Sweden", "");
		add_listitem("David Wagner", "University of Stuttgart, Germany", "");
		add_listitem("Matthias Waehlisch", "Freie Universitaet Berlin, Germany", "");
		add_listitem("Ying Zhang", "Ericsson, Canada", "");
		add_listitem("Thomas Zinner", "University of W&#252;rzburg, Germany", "");
	?>

</ul>

<h2 class=hcls>Previous CSWS workshops</h2>

<ul>
<li><a href="http://icnp13.informatik.uni-goettingen.de/csws13/">CSWS'13</a></li>
<li><a href="http://conferences.sigcomm.org/co-next/2012/workshops/CSWS/">CSWS'12</a></li>
<li><a href="http://www.ikr.uni-stuttgart.de/CapacitySharingWS">CSWS'11</a></li>
</ul>

<?php
    include ("include/footer.php");
?>

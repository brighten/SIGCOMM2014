<?php
        $page_title="4th Workshop on All Things Cellular 2014";
        include("include/header.php");
?>

<h1 class="hcls">4th Workshop on All Things Cellular: Operations, Applications and Challenges 2014</h1>

<h3 class="hcls">(Formerly named CellNet)</h3>

<p>To be held on August 22nd, 2014 in Chicago, USA (co-located with ACM SIGCOMM 2014)</p>


<h2 class="hcls">Technical Program</h2>

<?php
        include("include/program/allthingscellular.php");
?>

<h2 class="hcls">Call for Papers</h2>

<p>We are living in an increasingly connected mobile world, where smartphones and tablets are prevalent, wearable devices are growing, and the "Internet of Things" is permeating our lives. The number of mobile applications such as Apple Siri, Google Now, and Yelp is rapidly growing, and mobile connectivity is used for everything from Google Glass to vehicle fleet tracking. These applications and services have rapidly enriched our lives, particularly because much of the mobile eco-system is vibrant and conducive to open innovation. An important part of this ecosystem is the underlying connectivity provided by cellular networks. While innovations in mobile services and applications have thrived, innovations in the underlying cellular systems are more limited. This is partially caused by the closed and monolithic nature of these networks, where the core design and operational challenges are not very accessible to the research community. But there are a large number of stakeholders &mdash; from app developers to smartphone manufacturers to "machine-to-machine" services &mdash; that are increasingly dependent on cellular networks. The goal of this workshop is to bring together network operators, as well as researchers from both industry and academia together to discuss emerging problems, challenges, and potential solutions in this domain.</p>

<p>To facilitate this discussion and engagement, we would like to solicit technical papers, including position papers, that are no more than 6-pages long in the standard ACM two-column, 10 point format. Early work that stimulates discussions is also strongly encouraged.</p>

<h3 class="hcls">Topics</h3>

<p>The following is a non-exhaustive list of topics:</p>

<ul>
	<li>Radio resource allocation and usage profiling</li>
	<li>Cellular network architecture and its evolution</li>
	<li>Understanding and modeling cellular data traffic</li>
	<li>Billing and pricing models</li>
	<li>Cellular network security and privacy issues</li>
	<li>Cellular network management</li>
	<li>Mobility</li>
	<li>Energy efficiency</li>
	<li>Spectrum shortage</li>
	<li>Protocol design</li>
	<li>Algorithms to improve performance and efficiency</li>
	<li>Software-defined networking in cellular networks</li>
	<li>Mobile and wearable applications on cellular networks</li>
	<li>Machine-to-machine services on cellular networks</li>
</ul>

<h3 class="hcls">Submission</h3>

<p>Each submission must be a single PDF file no longer than six (6) pages in length (in two-column, 10-point format) including references. Papers must include the author name and affiliation for single-blind peer reviewing by the program committee. Authors of accepted papers are expected to present their papers at the workshop. Submissions must be original work not under review at any other workshop, conference, or journal.</p>

<p>The submission site is online at <a href="http://cellnet2014.cs.wisc.edu/submission/"rel="external">http://cellnet2014.cs.wisc.edu/submission/</a></p>


<h2 class=hcls>Important Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('<span>March 21, 2014</span>', 'Paper Registration');
add_dateitem('<span>March 28, 2014</span>', 'Paper Submission');
add_dateitem('<span>May 9, 2014</span>', 'Author Notification');
add_dateitem('<span>May 30, 2014</span>', 'Camera Ready');
add_dateitem('<span>August 22, 2014</span>', 'Workshop date');
?>
</ul>

<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Workshop Chairs</li>
	<?php
		add_listitem("Kun Tan", "Microsoft Research", "");
		add_listitem("Jeffrey Pang", "AT&T Research", "");
	?>

	<li data-role="list-divider">Program Committee</li>
	<?php
		add_listitem("Sharad Agarwal", "Microsoft Research", "");
		add_listitem("Rajesh Krishna Balan", "Singapore Management University", "");
		add_listitem("Suman Banerjee", "UW-Madison", "");
		add_listitem("Roger Piqueras Jover", "AT&T Security Research Center", "");
		add_listitem("Li Erran Li", "Alcatel-Lucent", "");
		add_listitem("Kate Ching-Ju Lin", "Academia Sinica, Taiwan", "");
		add_listitem("Jacobus (Kobus) Van der Merwe", "University of Utah", "");
		add_listitem("Z. Morley Mao", "University of Michigan", "");
		add_listitem("Jeffrey Pang", "AT&T Research", "");
		add_listitem("Chunyi Peng", "Ohio State University", "");
		add_listitem("Feng Qian", "AT&T Research", "");
		add_listitem("Souvik Sen", "HP Research", "");
		add_listitem("Subhabrata Sen", "AT&T Research", "");
		add_listitem("Kun Tan", "Microsoft Research", "");
		add_listitem("Cedric Westphal", "Huawei", "");
		add_listitem("Matt Welsh", "Google", "");
		add_listitem("Xia Zhou", "Dartmouth College", "");
	?>
	
	<li data-role="list-divider">Steering Committee</li>
	<?php
		add_listitem("Suman Banerjee", "UW-Madison", "");
		add_listitem("Li Erran Li", "Alcatel-Lucent", "");
		add_listitem("Morley Mao", "Michigan", "");
		add_listitem("Jennifer Rexford", "Princeton", "");
	?>

</ul>

<a href="doc/allthingscellular-cfp.pdf" rel="external" data-role=button class=button>Download this call as a PDF</a>

<?php
    include ("include/footer.php");
?>

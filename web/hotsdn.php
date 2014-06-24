<?php
        $page_title="ACM SIGCOMM Workshop on Hot Topics in Software Defined Networking (HotSDN)";
        include("include/header.php");
?>

<h1 class="hcls">ACM SIGCOMM Workshop on Hot Topics in Software Defined Networking (HotSDN 2014)</h1>


<p>Co-located with ACM SIGCOMM'14<br>
                        August 22, 2014<br>
                          Chicago, IL.</p>


<h2 class="hcls">Technical Program</h2>

<?php
        include("include/program/hotsdn.php");
?>

<h2 class="hcls">Call for Papers</h2>

<p>Software Defined Networking (SDN) refactors the relationship between
network devices and the software that controls them. Opening up the
interfaces to programming the network enables more flexible and
predictable network control, and makes it easier to extend the network
with new functionality. SDN is being employed in a large and growing
number of experimental and production settings spanning campus
networks, telcos, clouds, and online service provider networks. A
variety of new applications have been developed, including network
virtualization, responsive traffic engineering, dynamic access
control, seamless mobility support, etc.</p>

<p>HotSDN aims to bring together industry and academia to jointly explore
and debate recent developments related to all aspects of SDN.  We
invite researchers and practitioners to submit short papers. Such
papers could, for example, present new ideas for designing switch
hardware and APIs that offer greater flexibility without compromising
performance; describe new software platforms for better control and
management of software defined networks; shed light on experiences
deploying software defined networks in the wild; describe novel SDN
use cases; present novel ideas for inter-operating SDNs with legacy
equipment; and so on.</p>

<h3 class="hcls">Topics of Interest</h3>

<p>We encourage submission of short previously unpublished papers on
Software Defined Networking.  We particularly encourage position
papers and radical ideas that challenge state-of-the-art in SDN.</p>

<p>Topics of interest include, but are not limited to, the following:</p>

<ul>
<li>SDN applications to home, wireless, cellular, enterprise,
  data-center, and backbone networks</li>
<li>SDN applications to network management, monitoring, security, etc.</li>
<li>Security of SDN infrastructure</li>
<li>Virtualization in SDNs</li>
<li>Switch designs for SDN</li>
<li>Application programming interfaces for SDNs</li>
<li>Control and management software for SDNs</li>
<li>Programming languages, verification techniques, and tools for SDNs</li>
<li>Performance evaluation of SDN switches and controllers</li>
<li>Experiences deploying SDN technology and applications in operational
  networks</li>
<li>Transitioning existing networks to SDN</li>
<li>Placement and factoring of SDN control logic</li>
<li>SDN-like control applied to other settings, e.g., transport,
  physical layer, wireless, etc.</li>
</ul>





<h3 class="hcls">Submission</h3>

<p>Submissions must be original, unpublished work, and not under consideration at 
another conference or journal. Submitted papers must be at most six (6) pages 
long, including all figures, tables, references, and appendices in two-column 
10pt ACM format. Please see the workshop webpage for further guidelines.</p>


<h2 class=hcls>Important Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('<span>March 18, 2014</span>', 'Abstract registration');
add_dateitem('<span>March 25, 2014</span>', 'Submissions due');
add_dateitem('<span>April 30, 2014</span>', 'Notification');
add_dateitem('<span>June 18, 2014</span>', 'Camera ready versions due');
add_dateitem('<span>August 22, 2014</span>', 'Workshop date');
?>
</ul>

<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">PC Co-Chairs</li>
	<?php
		add_listitem("Aditya Akella", "UW-Madison", "http://pages.cs.wisc.edu/~akella/");
		add_listitem("Albert Greenberg", "Microsoft", "");
	?>

	<li data-role="list-divider">Program Committee</li>
	<?php
		add_listitem("Najam Ahmad", "Facebook", "");
		add_listitem("Paul Barford", "Wisconsin", "");
		add_listitem("Marco Canini", "UCL", "");
		add_listitem("Diego Crupnicoff", "Mellanox", "");
		add_listitem("Dan Daly", "Intel", "");
		add_listitem("Dinesh Dutt", "Cumulus", "");
		add_listitem("Tom Edsall", "Insieme", "");
		add_listitem("Ali Ghodsi", "Berkeley", "");
		add_listitem("Arjun Guha", "UMass", "");
		add_listitem("Ariel Hendel", "Broadcom", "");
		add_listitem("Vimalkumar Jeyakumar", "Stanford", "");
		add_listitem("Sachin Katti", "Stanford", "");
		add_listitem("Eric Keller", "Colorado", "");
		add_listitem("Teemu Koponen", "Nicira", "");
		add_listitem("Dejan Kostic", "KTH Royal Institute of Technology", "");
		add_listitem("TV Lakshman", "Bell Labs", "");
		add_listitem("Dave Maltz", "Microsoft", "");
		add_listitem("Jeff Mogul", "Google", "");
		add_listitem("Pere Monclus", "Plumgrid", "");
		add_listitem("Guru Parulkar", "Stanford", "");
		add_listitem("Vyas Sekar", "CMU", "");
		add_listitem("Anees Shaikh", "Google", "");
		add_listitem("Hakim Weatherspoon", "Cornell", "");
		add_listitem("Minlan Yu", "USC", "");
	?>

</ul>

<h2 class=hcls>Submission instructions</h2>

<p>Each submission must be a single PDF file no longer than six (6) pages
in length (in two-column, 10-point format) including references,
following <a href="http://conferences.sigcomm.org/sigcomm/2009/sig-alternate-10pt.cls" rel=external>the sig-alternate-10pt LaTeX style file</a>. Papers should be submitted
electronically via the <a href="https://hotsdn14.cs.wisc.edu/hotcrp/">submission site</a>. Papers must include the author
name and affiliation for single-blind peer reviewing by the program
committee.</p>

<p>Accepted papers will be published in the ACM Digital
Library. Publication at HotSDN is not intended to preclude later
publication. Authors of accepted papers are expected to present their
papers at the workshop.</p>

<?php
    include ("include/footer.php");
?>

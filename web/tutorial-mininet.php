<?php
        $page_title="ACM SIGCOMM Tutorial: Teaching Computer Networking with Mininet";
        include("include/header.php");
?>

<h1 class="hcls">Tutorial: Teaching Computer Networking with Mininet</h1>

<p><b>Half-day Tutorial: Monday morning, 18th August 2014</b></p>


<h2 class=hcls>Speakers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<?php
		add_listitem("Te-Yuan (T.-Y.) Huang", "Stanford University, USA", "");
		add_listitem("Vimalkumar Jeyakumar", "Stanford University, USA", "");
		add_listitem("Bob Lantz", "Open Networking Laboratory, USA", "");
	?>

</ul>

<h2 class=hcls>Panelists</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<?php
		add_listitem("Brian O'Connor", "Open Networking Laboratory, USA", "");
		add_listitem("Nick Feamster", "Georgia Institute of Technology, USA", "");
		add_listitem("Keith Winstein", "Massachusetts Institute of Technology, USA", "");
		add_listitem("Anirudh Sivaraman", "Massachusetts Institute of Technology, USA", "");
	?>

</ul>

<h2 class="hcls">Tutorial objectives</h2>

<p>In this tutorial, we will introduce the Mininet emulator and share our experiences using Mininet to teach computer networking in a variety of contexts ranging from small on-campus courses to massive online courses. We believe that the Mininet platform can make teaching and learning computer networks more fun and efficient by facilitating experiential learning.</p>

<p>The goals of this tutorial are to:</p>

<ul>
	<li>Introduce Mininet to the broader network community, including its capability and performance limitations.</li>
	<li>Familiarize attendees with Mininet through hands-on exercises.</li>
	<li>Share our experiences using Mininet since 2011 for on-campus and massive online courses at Stanford, Georgia Tech and MIT.</li>
	<li>Disseminate assignments that we used at our universities and help to develop and expand an online repository of Mininet courseware.</li>
</ul>


<h2 class="hcls">Technical Program</h2>

        <ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
                <?php tprog_add_session("8:30 &mdash; 9:10", "Introduction to Mininet"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Overview on the architecture of Mininet.</p>
<p>Demo: Teaching network security with Mininet (DHCP spoofing, BGP prefix hijacking).</p>
                        ", "");
                ?>

                <?php tprog_add_session("9:10 &mdash; 10:10", "Hands-on Laboratory Example: BufferBloat"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Run through an in-class exercise used in CS144 (Introduction to Computer Networking) at Stanford.</p>
<p><b>Note: Highly recommend to have the environment ready before this session.</b></p>
                        ", "");
                ?>

                <?php tprog_add_session("10:10 &mdash; 10:40", "Coffee Break"); ?>

                <?php tprog_add_session("10:40 &mdash; 12:00", "Teaching Experiences"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Present experiences and lessons learned from Mininet-based demonstrations, lab exercises, and assignments for on-campus and massive online courses at Stanford, Georgia Tech and MIT.</p>
                        ", "");
                ?>
		</ul>

<h2 class="hcls">Slides</h2>
<ol data-role="">
    <li><a href="doc/slides/mininet-intro.pdf">Teaching Computer Networking with Mininet</a></li>
    <li><a href="doc/slides/mininet-bgp-demo.pdf">Demo: BGP Path Hijacking</a></li>
    <li><a href="doc/slides/mininet-bufferbloat-handson.pdf">Teaching Computer Networking with Mininet, Session 2: Hands-on Lab -- BufferBloat</a></li>
    <li><a href="doc/slides/mininet-gatech-experiences.pdf">A ReMOOCable Experience: Teaching Computer Networking to the Masses</a></li>
    <li><a href="doc/slides/mininet-MIT-experiences.pdf">Experiences from a protocol-design contest</a></li>
    <li><a href="doc/slides/mininet-stanford-experiences.pdf">Mininet @ Stanford</a></li>
</ol>


<h2 class="hcls">About the Speakers</h2>


<h3 class="hcls">Bob Lantz</h3>

<p>Bob Lantz founded the Mininet project and is currently working on Mininet and network operating systems at the Open Networking Laboratory. Since completing his Ph.D. at Stanford, he has helped to develop OpenFlow and related Software Defined Networking technologies at Stanford, Arista Networks, and DOCOMO USA Labs.</p>

<h3 class="hcls">Te-Yuan (T.-Y.) Huang</h3>

<p>Te-Yuan (T.-Y.) is receiving her Ph.D. from Stanford University in August 2014 where she is advised by Prof. Nick McKeown and Prof. Ramesh Johari. Her thesis is on video streaming and the findings have changed the ABR algorithms used in the industry. T.-Y. is a recipient of Stanford Graduate Fellowship (2008-2012), Google Fellowship (2012-2014), and IETF/IRTF Applied Networking Research Prize, 2013. T.-Y. is also one of the main contributors to the Mininet-based lab materials and in-class exercises used in CS144 (Introduction to Computer Networking) at Stanford. Te-Yuan is currently at Netflix, improving user experience for over one-third of US Internet traffic.</p>

<h3 class="hcls">Vimalkumar Jeyakumar</h3>

<p>Vimal is a Ph.D. student at Stanford University and is co-advised by David Mazi&egrave;res and Balaji Prabhakar.  His interests change all the time and loves working on a wide range of problems in computer networks.</p>



<h2 class="hcls">About the Panelists</h2>


<h3 class="hcls">Brian O'Connor</h3>

<p>Brian O'Connor completed his B.S. and M.S. at Stanford, where he was introduced to Mininet through various courses and research projects. As a teaching assistant at Stanford, Brian helped support Mininet usage in the classroom, and he is currently a developer at Open Networking Laboratory working on Mininet and other SDN projects.</p>

<h3 class="hcls">Nick Feamster</h3>

<p>Nick Feamster is a professor in the College of Computing at Georgia Tech. He received his Ph.D. in Computer science from MIT in 2005, and his S.B. and M.Eng. degrees in Electrical Engineering and Computer Science from MIT in 2000 and 2001, respectively. His research focuses on many aspects of computer networking and networked systems, with a focus on network operations, network security, and censorship-resistant communication systems. In December 2008, he received the Presidential Early Career Award for Scientists and Engineers (PECASE) for his contributions to cybersecurity, notably spam filtering. His honors include the Technology Review 35 "Top Young Innovators Under 35" award, the ACM SIGCOMM Rising Star Award, a Sloan Research Fellowship, the NSF CAREER award, the IBM Faculty Fellowship, the IRTF Applied Networking Research Prize, and award papers at the SIGCOMM Internet Measurement Conference (measuring Web performance bottlenecks), SIGCOMM (network-level behavior of spammers), the NSDI conference (fault detection in router configuration), Usenix Security (circumventing web censorship using Infranet), and Usenix Security (web cookie analysis).</p>

<h3 class="hcls">Keith Winstein</h3>

<p>Keith Winstein is a doctoral candidate at MIT's Computer Science and Artificial Intelligence Laboratory. His work applies statistical and predictive approaches to teach computers to design better network protocols and applications. He created the Mosh (mobile shell) tool, the Sprout algorithm for cellular networks, and the Remy automatic protocol-design tool. From 2007 to 2010, Keith worked as a staff reporter at The Wall Street Journal, covering science and medicine.</p>

<h3 class="hcls">Anirudh Sivaraman</h3>

<p>Anirudh Sivaraman is a fourth year Phd student at MIT working with Professor Hari Balakrishnan. He previously completed his Masters at MIT in 2012, and his BTech at IIT Madras in 2010. His research interests are in the areas of mobile computing and cellular wireless networks.</p>


<?php
    include ("include/footer.php");
?>

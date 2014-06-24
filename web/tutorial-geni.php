<?php
        $page_title="ACM SIGCOMM Tutorial: GENI";
        include("include/header.php");
?>

<h1 class="hcls">Tutorial: GENI: A Virtual Laboratory for Exploring Novel Networking and Distributed Systems Architectures</h1>

<p><b>Full day Tutorial: Friday, 22 August 2014</b></p>

<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<?php
		add_listitem("Vicraj Thomas", "GENI Project Office, BBN Technologies, USA", "");
		add_listitem("Niky Riga", "GENI Project Office, BBN Technologies, USA", "");
		add_listitem("Peter Steenkiste", "Carnegie Mellon University, USA", "");
		add_listitem("Ivan Seskar", "Rutgers University, USA", "");
	?>

</ul>


<h2 class=hcls>Tutorial Requirements</h2>

<p><b>Laptop requirements.</b>  Laptop running relatively recent versions of Mac OS, Linux or Windows (MacOS or Linux preferred).  Laptops must have at least 4GB of memory, a modern processor (at least dual core and faster than 1.5 GHz) and a WiFi interface.</p>

<p><b>Pre-requisites.</b>  Familiarity with the basics of the Unix command line, ssh, computer programming and networking.  Before the tutorial all attendees will be asked to get a GENI account and install GENI tools.</p>



<h2 class="hcls">Technical Program</h2>

        <ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
                <?php tprog_add_session("9:00 &mdash; 9:45", "An Introduction to GENI and Experimentation with GENI"); ?>
                <?php
                        tprog_add_item("", "", "
<p>An Overview of GENI including how it is being built and used.</p>
<p>Relationship to other similar international efforts.</p>
<p>GENI concepts relevant to experimenters.</p>
<p>Demonstration of setting up and running a simple experiment on GENI.</p>
                        ", "");
                ?>

                <?php tprog_add_session("9:45 &mdash; 10:30", "The GENI Experiment Workflow—Hands On Exercise"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Set up and run a simple experiment using GENI</p>
                        ", "");
                ?>

                <?php tprog_add_session("10:30 &mdash; 10:45", "Coffee Break"); ?>

                <?php tprog_add_session("10:45 &mdash; 11:30", "Future Internet Architecture (FIA) Experiment—Hands On"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Run an experiment based on the <a href='http://www.cs.cmu.edu/~./xia/'>eXpressive Internet Architecture</a> (XIA) or the <a href='http://named-data.net'>Named Data Networking</a> (NDN) projects.</p>", "");
                ?>

                <?php tprog_add_session("11:30 &mdash; 12:00", "Overview of Diversity of Research on GENI"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Examples of projects using GENI for research in the areas of cloud computing, middleware for computational sciences and wireless networking.</p>
	<p>Demonstration of the <a href='http://mobilityfirst.winlab.rutgers.edu'>MobilityFirst</a> FIA project.</p>", "");
                ?>

                <?php tprog_add_session("12:00 &mdash; 12:30", "Using GENI OpenFlow Resources"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Brief introduction to OpenFlow and OpenFlow resources in GENI</p>
<p>Hands-on: Set up an OpenFlow experiment on GENI</p>", "");
                ?>

                <?php tprog_add_session("12:30 &mdash; 14:00", "Lunch"); ?>

                <?php tprog_add_session("14:00 &mdash; 15:00", "Programming the GENI OpenFlow Switches &mdash; Hands On"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Develop simple OpenFlow controllers for hardware switches in GENI</p>", "");
                ?>

                <?php tprog_add_session("15:00 &mdash; 15:40", "Connecting GENI Resources at Layers 2 and 3"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Options available to experimenters for connecting GENI resources using Layer 2 or Layer 3 links</p>
<p>Demonstration of the XIA or NDN FIA project (whichever project is not covered by the hands-on exercise in the morning).</p>", "");
                ?>

                <?php tprog_add_session("10:30 &mdash; 10:45", "Coffee Break"); ?>

                <?php tprog_add_session("16:00 &mdash; 17:00", "Resources for GENI Experimenters"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Tips for experimenters: Debugging common problems.</p>
<p>Resources such as online documentation and community mailing lists</p>
<p>Other training opportunities including the GENI Engineering Conferences</p>", "");
                ?>

		</ul>


<h2 class="hcls">About the Presenters</h2>

<h3 class="hcls">Vicraj (Vic) Thomas</h3>

<p>Vic leads the Experimenter Support and Advocacy group within the GENI Project Office at BBN Technologies.  This group runs GENI tutorials at major conferences including the GENI Engineering Conferences and works with GENI developers to improve the usability of experimenter tools and services.  Vic’s research interests lie in the areas of distributed and fault-tolerant systems.  He served as panelist at the NSF CyberSecurity Summit 2013, ACSAC 2011, NSF Workshop on the Science of Security 2008, PERCOM 2007, SEPCASE 2007 and HASE 2006 and 2007.  He was an invited speaker at the International Workshop on Cyber-Physical Systems Challenges and Applications (Santorini 2008), EU Workshop on Next Generation Sensor Actuator Systems (Edinburg 2007) and the NSF/Japan Workshop on Sensors, Smart Structures and Mechatronic Systems (Tokyo 2005).  Vic has a PhD. from The University of Arizona.</p>

<h3 class="hcls">Niky Riga</h3>

<p>Niky is a Network Scientist at BBN Technologies, where she works on innovative projects within the Network Research department, with the focus on designing and prototyping pioneering transport services for Mobile Ad-hoc Networks.   Since 2010, Niky has been a member of the GENI Project Office, where she is responsible for supporting GENI users in integrating and deploying their experiments within the GENI infrastructure, and ensuring their deployments makes the best use of GENI resources. She is also an advocate for GENI users to the developer community to improve usability of the testbed.  In her role at the GPO, she has designed, organized and led several tutorials at top-tier networking conferences.   She was on the organizing committee of GENI Workshops and Summer camps.   She has served as a reviewer on various top tier conferences and journals.   Niky received a Ph.D and an MS from Boston University.</p>

<h3 class="hcls">Peter Steenkiste</h3>

<p>Peter is a Professor of Computer Science and of Electrical and Computer Engineering at Carnegie Mellon University.  His current research is in the areas of future Internet architecture and wireless networking.  Peter heads the NSF-funded Future Internet Architecture project called eXpressive Internet Architecture (XIA).  Peter is also involved with wireless projects in areas including self-management techniques for residential networks, emulation as a basis for evaluating wireless technologies, and the use of software radios as a platform for flexible, self-optimizing wireless protocols.  He is a member of the ACM and a Fellow of the IEEE.  He has served as chair on many major conferences.  He was associated editor for IEEE Transactions on Parallel and Distributed Systems (1998-1999), IEEE/ACM Transactions on Networking (2000-2003) and Cluster Computing (2000-2004), and is currently on the editorial board of the "Journal of Grid Computing".

<h3 class="hcls">Ivan Seskar</h3>

<p>Ivan is Associate Director at WINLAB, Rutgers University responsible for experimental systems and prototyping projects. He is in charge of experiment deployment on the NSF-funded MobilityFirst Future Internet Architecture project.  Ivan is one of the co-PIs and a lead project engineer for ORBIT, with responsibility for development, integration and deployment of the radio grid emulator system for which the team received the 2008 NSF Alexander Schwarzkopf Prize for Technological Innovation. He is currently the PI for the NSF GENI Open WiMAX base station project that has resulted in deployments at several US universities and for the "meso-scale" Open-Flow campus deployment at Rutgers University, co-PI on the NSF funded SciWiNet (research MVNO) project, and co-PI of a couple of cognitive radio projects.  His current research interests are in future internet architectures, mobile and ad-hoc networks, wireless testbeds, and  cognitive radios.  Ivan is co-founder and CTO of Upside Wireless Inc.</p>


<?php
    include ("include/footer.php");
?>

<?php
        $page_title="ACM SIGCOMM Tutorial: Managing Smartphone Performance";
        include("include/header.php");
?>

<h1 class="hcls">Tutorial: Managing Smartphone Performance</h1>

<div class="border ui-corner-all ui-shadow"><div style="padding:2em;"><b><i>Due to low enrollment, this tutorial has been cancelled. We sincerely apologize for the inconvenience.</i></b></div></div>

<p><b>Full-day Tutorial: Monday, 18th August 2014</b></p>

<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<!-- <li data-role="list-divider">Chairs</li> -->
	<?php
		add_listitem("Ajay Mahimkar", "Senior Member of Technical Staff, AT&amp;T Labs, USA", "");
		add_listitem("Lee Breslau", "Distinguished Member of Technical Staff, AT&amp;T Labs, USA", "");
		add_listitem("Jennifer Yates", "Assistant Vice President, AT&amp;T Labs, USA", "");
	?>

</ul>
<!--
Networking and Service Quality Management Research
AT&amp;T Labs, Bedminster, NJ, USA 
-->

<h2 class="hcls">Motivation of the tutorial</h2>

<p>Smart mobile devices are pervasive; people in all corners of society, from young children to corporate executives, are today regularly glued to their devices for entertainment, social activity, and business critical functions. In recent years, we have witnessed the explosive growth and rapidly changing nature of mobile applications (apps), hot competition between device manufacturers creating a plethora of different smart devices, and an associated enormous growth in traffic volumes in cellular networks. The phenomenal traffic growth and vast diversity in both applications and devices have introduced imposing challenges on service providers as they drive to maintain excellent service quality for hundreds of millions of mobile users. These challenges will increase over the coming years as the Internet of Things becomes a reality and introduces even more diverse traffic characteristics.</p>

<p>The cellular networks that support these devices and their applications are extremely complex and are also changing at a rapid pace. The underlying wireless technologies are evolving (moving from GSM/2G to UMTS/3G to LTE/4G and small cells, with 5G and even 6G technologies being defined for future deployment). Network architectures are changing (e.g., from circuit-switched to packet-switched voice services, and with network elements being virtualized), networks are becoming more autonomous (e.g., Self-organizing networks) and capacity and coverage are being constantly expanded in a bid to keep up with the pressing demand. The rapid evolution of networks, mobile devices and mobile applications, the complex interactions between them, and their large scale and heterogeneity makes management of service quality in this complex ecosystem challenging.</p>

<p>Historically, the focus of network operations teams has been on managing the links and elements that comprise the network. While this focus on network element operation is foundational, it is by no means sufficient to assure adequate end-to-end performance. In complex and heterogeneous networks like today's cellular networks, service and performance impairments may result from subtle inter-layer and inter-element interactions, may not always be evident in any traditional alarming or monitoring systems, may be difficult to detect, and may be even harder to localize and repair. Quantifying the service impact of network outages has also provided interesting technical challenges. There is tremendous redundancy in mobile networks &mdash; both within the core of the network and in the Radio Access Network (RAN). Thus, even a fairly large outage may have minimal or no customer impact. Although highly desirable from a service point of view, this necessitates sophisticated analytics to be able to quantify the service level impact of underlying network events, so that responses to them can be prioritized. Thus, in the modern world in which smart phones and devices are supported by mobile cellular networks, there is a need for a holistic end-to-end service view to support those devices and their users.</p>

<p>Technology advances have addressed many of the challenges of managing service performance in the rapidly changing cellular network environment. Such innovations focus on service performance measurement, relating service performance with network events, and quantifying the service impact of network events.</p>

<h2 class="hcls">Tutorial Focus</h2>

<p>This tutorial will provide attendees with a glimpse into the challenges service providers face when managing service quality in today's cellular networks and how they address these challenges in order to improve the users' smartphone experiences. Attendees will be given an overview of the complex network and service architectures embodied in today’s cellular networks. They will leave with an understanding of the technical complexity and resulting technologies which address relating network events to service impact, managing cross layer and inter-network interactions, detecting, localizing and correlating service impairments, and the importance of proper application design and its impact on user experience. In addition, the tutorial will highlight remaining research opportunities for advancing the state of the art in cellular service quality management.</p>

<p>The tutorial will be organized as follows. We will begin with a brief overview of cellular networks and their service architecture. We will then describe technological innovations created to support service-centric management in a cellular network. We will cover a broad variety of topics ranging from mobile device performance measurements, statistical anomaly detection to identify service issues, association of service events to network issues that would enable effective diagnosis from an operational perspective, automated learning of service dependencies using statistical correlations, and service impacts induced by network events such as outages, and network changes such as software upgrades and maintenance. We will explore the need for data analytics in support of both real-time operational problems as well as longer term engineering issues. We will discuss strategies for resolution of the service impairments and driving them out of the ecosystem. We will also highlight several open research opportunities that the industry and academic can tackle through collaborative efforts.</p>

<p><b>Type of Tutorial:</b> Lecture &mdash; The sessions will include presentations, demonstrations and insightful operational experiences </p>

<p><b>Requirements for the Attendees:</b> None &mdash; Background of networking and statistical data mining is useful but not a requirement</p>

<h2 class="hcls">Tutorial Outline</h2>

        <ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
                <?php tprog_add_session("8:30 &mdash; 9:30", "Introduction to mobile devices, cellular networks and service quality management"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Cellular network overview </p>
<p>End to end service: how does a voice call/data session work? </p>
<p>Mobility Operations: cellular network management</p>
<p>Introducing end-to-end service quality management</p>
                        ", "");
                ?>

                <?php tprog_add_session("9:30 &mdash; 10:10", "Detection of service issues"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Service monitoring and event detection </p>
<p>Incorporating customer feedback: customer care interactions, social media and beyond</p>
                        ", "");
                ?>

                <?php tprog_add_session("10:30 &mdash; 12:00", "Isolating and troubleshooting complex service issues"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Isolating issues: device, network or application? </p>
<p>Service topology discovery &mdash what path does the call or session traverse? </p>
<p>Understanding the relationship between service and network performance</p>
<p>Correlation: associating service performance anomalies with network failures, congestion, performance degradations and maintenance </p>
                        ", "");
                ?>

                <?php tprog_add_session("13:30 &mdash; 15:00", "Service impact assessment of network events and changes"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Quantifying the impact of network issues (e.g., cellular tower outages)</p>
<p>Quantifying the service impact of network changes (e.g., software upgrades, configuration changes)</p>
                        ", "");
                ?>

                <?php tprog_add_session("15:30 &mdash; 16:30", "Issue resolution and avoidance: driving service impairments out of the ecosystem"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Resolving service impairments</p>
<p>Application Resource Optimization: how application developers can build apps designed for mobile networks</p>
                        ", "");
                ?>

                <?php tprog_add_session("16:30 &mdash; 17:00", "Research opportunities"); ?>
		</ul>


<h2 class="hcls">About the Presenters</h2>

<h3 class="hcls">Jennifer Yates</h3>
<p>Jennifer Yates is the Assistant Vice President of the Networking and Service Quality Management Research Center at AT&amp;T Labs. Her center is inventing and prototyping future network technologies, services and management capabilities for large scale telecommunications networks. Her research interests cover IP, IPTV, mobile cellular network and data center/cloud technologies. Innovative technologies created by Jennifer and her team are deployed across AT&amp;T's operational networks. Jennifer completed her PhD at The University of Melbourne in 1997. Jennifer was made an AT&amp;T Fellow in 2013 for continued contributions in bridging network layers and management platforms to invent and deliver novel services and network management capabilities. She was honored with the AT&amp;T Science &amp; Technology Medal in 2006 for technical innovation and leadership in the integration of IP and optical networks. She received the Victorian Photonics Network Achievement Award in 2004 and Top Young Innovators in Technology Review 100 in 2003. </p>

<h3 class="hcls">Lee Breslau </h3>
<p>Lee Breslau is a Distinguished Member of Technical Staff &mdash; Research in the Networking and Service Quality Management Research Center at AT&amp;T Labs. He received his PhD from the University of Southern California in 1995. Before joining AT&amp;T in 1999, he was a member of the research staff at the Xerox Palo Alto Research Center. His research interests include wireless service quality management, multicast routing, Internet architecture and network measurement.</p> 

<h3 class="hcls">Ajay Mahimkar</h3>
<p>Ajay Mahimkar is a Senior Member of Technical Staff &mdash; Research in the Networking and Service Quality Management Research Center at AT&amp;T Labs. His current research interests span cellular service quality management, mobile device performance analysis, and application of machine learning/statistical data mining to real-world operational problems. He has published papers in top-tier conferences such as SIGCOMM, NSDI, HotNets, CoNEXT, and IMC. He received the Best Paper Award at CoNEXT in 2011. He received his PhD from Department of Computer Sciences at University of Texas Austin in 2010. </p>


<?php
    include ("include/footer.php");
?>

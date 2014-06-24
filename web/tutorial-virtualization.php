<?php
        $page_title="ACM SIGCOMM Tutorial: Protocols for Data Center Network Virtualization and Cloud Computing";
        include("include/header.php");
?>

<h1 class="hcls">Tutorial: Protocols for Data Center Network Virtualization and Cloud Computing</h1>

<p><b>Half day tutorial: Friday afternoon, 22 August 2014</b></p>


<h2 class=hcls>Organizer</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<?php
		add_listitem("Raj Jain", "Washington University in St. Louis, USA", "");
	?>

</ul>


<h2 class="hcls">Motivation</h2>

<p>Virtualization of computing and storage has enabled cloud computing. Both of these have been possible because of recent advances in networking virtualization. This tutorial presents the latest protocols developed by IEEE and IETF that enable network virtualization. This includes shortest path bridging, virtual edge bridging, virtual port aggregator (VEPA), Virtual Bridgeport Extension (VBE), MAC-in-MAC, and Q-in-Q. Layer 3 extensions include Transparent Interconnection of Lots of Link (TRILL), Virtual Extended LAN (VXLAN), Network Virtualization using Generic Routing Encapsulation (NVGRE), and Stateless Transport Tunnels (STT). All these concepts are less than 5 years old.</p>


<h2 class="hcls">Topics</h2>

<p>This tutorial on latest advances in data center networking architectures is designed for networking researchers, engineers and managers. IEEE and IETF have recently created several new protocol specifications that allow data centers to span large Ethernet domains interconnecting several globally located data centers. The tutorial provides an overview of these recent developments in Ethernet architecture and protocols to enable virtualization, data center interconnection, and setting up large multi-tenant facilities to enable cloud computing services. 


<h2 class="hcls">Outline</h2>

<ol>
	<li>Network Virtualization: Virtualization, 5 Reasons to Virtualize, Advantages of Virtualization, Virtualization in Computing, Network Virtualization, Levels of Network Virtualization, Network Virtualization Techniques, Names, IDs, Locators, Interconnection Devices</li>
	<li>Carrier Ethernet for Data Centers: Ethernet Provider Bridge (PB), Provider Backbone Network (PBB), MAC-in-MAC Frame Format, PBB Service Instance, Connection Oriented Ethernet, VLAN Cross-Connect, PBB-TE, PBB-TE QoS, Ethernet Tagged Frame Format Evolution, Comparison of Technologies</li>
	<li>Virtual Bridging: vSwitch, Virtual Bridging, Virtual Edge Bridge, Virtual Ethernet Port Aggregator (VEPA), Combining Bridges, Distributed Virtual Switch (DVS), Fabric Extenders, Virtual Bridge Port Extension (VBE)</li>
	<li>LAN Extension and Partitioning: Challenges of LAN Extension, TRILL, GRE, NVGRE, VXLAN, Stateless Transport Tunneling Protocol (STT), LSO and LRO, STT Optimizations, STT Frame Format, TCP-Like Header in STT</li>
</ol>


<h2 class="hcls">About the Presenter</h2>

<p>Raj Jain is a Fellow of IEEE, a Fellow of ACM, A Fellow of AAAS, a winner of ACM SIGCOMM Test of Time award, CDAC-ACCS Foundation Award 2009. Dr. Jain is currently a Professor of Computer Science and Engineering at Washington University in St. Louis. Previously, he was one of the Co-founders of Nayna Networks, Inc - a next generation telecommunications systems company in San Jose, CA. He was a Senior Consulting Engineer at Digital Equipment Corporation in Littleton, Mass and then a professor of Computer and Information Sciences at Ohio State University in Columbus, Ohio. He is the author of ``Art of Computer Systems Performance Analysis,'' which won the 1991 ``Best-Advanced How-to Book, Systems'' award from Computer Press Association. His fourth book entitled " High-Performance TCP/IP: Concepts, Issues, and Solutions," was published by Prentice Hall in November 2003. He is co-editor of "Quality of Service Architectures for Wireless Networks: Performance Metrics and Management," published in February 2010. Further information about Dr. Jain including all his publications can be found at <a href="http://www.cse.wustl.edu/~jain/index.html">http://www.cse.wustl.edu/~jain/index.html</a>.</p>



<?php
    include ("include/footer.php");
?>

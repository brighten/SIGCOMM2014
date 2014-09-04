<?php
        $page_title="ACM SIGCOMM Tutorial: Exploring the Intersection of Theory and Engineering";
        include("include/header.php");
?>

<h1 class="hcls">Tutorial: Exploring the Intersection of Theory and Engineering: Universal Laws, Architecture, and SDN</h1>


<p><b>Half-day Tutorial: Monday afternoon, 18th August 2014</b></p>


<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<?php
		add_listitem("John Doyle", "California Institute of Technology, USA", "");
		add_listitem("David Meyer", "Brocade Communications, USA", "");
	?>

</ul>


<h2 class="hcls">Overview</h2>

<p>The past twenty-five years have seen incredible progress in both the art and practice of network engineering, culminating in efforts such as Software Defined Networking (SDN) and the OpenDaylight Project (ODP). As this tutorial will explore, SDN both motivates and demands a much richer interplay between engineering, academic researchers, and mathematical foundations, something too absent in networking. Deep understanding of the principles and the associated theoretical framework underlying complex engineered networks (including the Internet, transportation and manufacturing networks, and many others) are just now coming into focus. One early observation is that these networks, while vastly different at the component level, exhibit striking levels of similarity at higher levels of organization ("architecture"). Further, it is not only engineered networks that exhibit these common architectural building blocks: both technological and biological networks share many of the same "universal architecture" features. (A caveat is "when they work," since both evolution and design can make catastrophic errors.)  We will review in concrete terms case studies that should be familiar (e.g. TCP/IP, SDN/ODP) and some perhaps less so (e.g. cells, microbial biosphere, human nervous system, ant and human societies, cancer and auto-immune disorders).</p>

<p>Next we will address the obvious questions: What can account for the astonishing universality of these architectural features and associated tradeoffs that we observe in complex systems, and can we find a theoretical framework that accounts for this convergence? Can understanding these fundamental and universal features of networks help us more efficiently build and operate networks such as the Internet? The goal of the nascent theoretical foundation is not only to explain and understand network systems such as the Internet but also understand both the successes and shortcomings of these systems. In fact, this growing theoretical framework identifies surprisingly familiar design components, in particular protocol-based architectures and layering, with reflect and reflex, virtualization and embodiment, as crucial ingredients for scalable and evolvable networking.</p>

<p>That said, while recent progress on the theoretical basis of network engineering has been significant, we still lack the kinds of principles, theory, and tools for networked systems that we find in other (and in many ways simpler) critical engineering disciplines. These systems have the general characteristic that unlike many of today's Internet control systems, they depend on sophisticated active control systems for stability, scalability, and evolvability. The rigidity of TCP/IP limited this in networking, but modern software control systems enabled by SDN have the potential to shift traditional Internet control paradigms to similar active control regimes. As such, SDN itself brings into focus the urgent need for a more complete general theory of complex engineered systems, particularly as SDN is poised to form a universal "sensorimotor control system" for ubiquitous cyber-physical systems (e.g. IOT).  While other technologies and biology have motivated great progress in such a general theory, obstacles remain.  The new mathematics crosses traditional disciplines and thus is difficult even for experts, and curricula naturally lag progress in research.  A goal of this tutorial is to make progress on integration and exposition, focused on SDN.</p>

<p>The advent of SDN (and more generally, multi-scale software-based network control) represents a unique and significant opportunity to build much needed bridges between theory and engineering. Theorists thrive on the insight and real world experience of the engineering community to build relevant theoretical frameworks, while engineers need the tools and understanding that theorists seek in order build scalable and understandable networks. Building bridges between these communities is a core goal of this tutorial. Since most SIGCOMM attendees are "researchers" that sit between theory (mostly CS and modestly related to networks) and engineering, SIGCOMM provides an excellent opportunity to explore the potential and limits of available theory from both an engineering and a mathematical perspective.</p>

<p>To this end this highly interactive tutorial covers a range of related topics from a review of distributed control theory, optimization, and statistics (including their various mashups in Machine Learning, AI, and “big data” and their relevance to SDN), new developments in information theory such as network coding, and the role of formal methods in embedded system, as well as the existing application to modern engineering problems and approaches. Many of these principles will be illustrated using concrete use-cases from Internet engineering (as well as other disciplines such as biology and neuroscience), and the tutorial is designed to be highly interactive. Finally, we pose and give preliminary answers to several important questions, and hope participants help sharpen these. What are universal laws (tradeoffs) that put fundamental bounds on what engineers can build? Are there intuitive every-day "use cases" that demonstrate these tradeoffs?  Can we use these laws to better understand the complex networks we observe (whether technological or biological), and perhaps equally important, how can we use this new understanding to build new engineering systems which help us to design, build, and operate these networks?</p>


<h2 class="hcls">Outline</h2>

<p><b><a href="http://www.1-4-5.net/~dmm/sigcomm/2014/" rel="external">Slides</a></b></p>

<ol>
<li>Introduction: Framing the Discussion</li>
	<ol>
    <li>SDN and the TCP/IP architecture: past and futures, differences and similarities</li>
    <li>Developing common terminology</li>
    <li>New uses of the network and their implications</li>
    <li>How network engineers can benefit from breakthroughs in network theory</li>
    <li>Past theory, particularly "layering as optimization" and relevance </li>
	</ol>
<li>State of the Art in Network Theory</li>
	<ol>
    <li>Review: Theory in Control, Computing, Information, and Physics</li>
    <li>Universal laws and their unification</li>
    <li>Network control challenges</li>
    <li>What theory has been pursued to date in networking?</li>
    <li>What new systems and theory are relevant to SDN and the future?</li>
    <li>What are current holes that need closing</li>
    <li>What are fundamental limits to theory itself in this domain</li>
    <li>Why "Network Science" is bad networks and bad science</li>
	</ol>
<li>Network Architecture</li>
	<ol>
    <li>Universal architectures</li>
    <li>Layering in technology, biology, and societies (animal and human)</li>
    <li>Constraints that Deconstrain</li>
    <li>Reflect and reflex versus SDN control and forwarding planes</li>
    <li>Virtualization and embodiment in layered architectures</li>
    <li>Complexity, Robustness, and Fragility</li>
    <li>Evolvability, Scalability, Verifiability</li>
    <li>Relationship between robustness to component and environmental uncertainty versus security against malicious, intelligent adversaries</li>
	</ol>
<li>SDN: Mapping Theory to Architecture</li>
	<ol>
    <li>SDN "Hypothesis" and wrong turns</li>
    <li>SDN as a 3-layer architecture</li>
    <li>Horizontal Application Transfer and SDN</li>
	</ol>
<li>Moving Forward</li>
	<ol>
    <li>What theory is required, and what is missing?</li>
    <li>What will be the impact of new applications on conventional and SDN networks?</li>
    <li>Is there a role for SIGCOMM in connecting theory to practice?</li>
	</ol>
<li>Discussion</li>
</ol>


<h2 class="hcls">Expected Audience and Prerequisites</h2>

<p>This tutorial is intended for those who are interested in exploring the state of the art in the theoretical underpinnings of complex, highly engineered systems (such as the Internet) and how this understanding can be applied to the design and engineering problems embodied in new control architectures such as SDN. Basic understanding of the Internet architecture and SDN is required. Any additional familiarity with basic concepts from CS mathematics, control theory, communication theory, and biology, as well as trends in algorithms for "big data," would be helpful but is (emphatically) not required. While this tutorial will not present new results, but integrate and organize existing ideas about SDN and diverse theory, almost all of the latter will be new to most SIGCOMM attendees. We expect this to create important challenges for organizers and attendees.  Some new and targeted reading and videos should be available before SIGCOMM for those seeking additional background materials.</p>

<h2 class="hcls">About the Speakers</h2>

<h3 class="hcls">John Doyle</h3>

<p>John Doyle is Chameau Professor of Control and Dynamical Systems, Bioengineering, and Electrical Engineering at Caltech. BS and MS in EE, from MIT, 1977 and a PhD in mathematics, UC-Berkeley, 1984. Current research interests are in theoretical foundations for complex networks in engineering and biology, as well as multiscale physics and markets, focusing on the interplay between robustness, feedback, control, dynamical systems, computation, and communications. Prize papers include IEEE Baker (for all of IEEE, also top 10 "most important" world-wide in mathematics 1981-1993), IEEE AC Transactions Axelby (twice), the AACC Schuck, and SIGCOMM best paper. Individual awards include the IEEE Control Systems Field Award (2004) and Centennial Outstanding Young Engineer (1981), the IEEE Hickernell (1977), AACC Eckman (1983), and UCB Friedman (1984).  Has held national and world records and championships in various sports.</p>

<h3 class="hcls">David Meyer</h3>

<p>David Meyer is CTO and Chief Scientist at Brocade Communications, as well as being the Director of the Advanced Network Technology Center at the University of Oregon and a Senior Research Scientist in the Department of Computer Science at University of Oregon. In addition, he is currently the chair of the SDN Research Group (SDNRG) in the IRTF and is the chair of the Technical Steering Committee of the OpenDaylight Project. He holds a MS in Computer Science from the University of Oregon. His current research interests include Software Defined Networking, Systems Biology, Control and Complexity Theory, and Nano-scale networking, among others.</p>

<h2 class="hcls">References (Doyle)</h2>

<ol>
	<li>M Chiang, SH Low, AR Calderbank, JC. Doyle (2007) Layering As Optimization Decomposition: A Mathematical Theory of Network Architectures, PROCEEDINGS OF THE IEEE, Volume: 95  Issue: 1  Jan 2007</li?>
	<li>Willinger W, Alderson D, and Doyle JC (2009) Mathematics and the internet: A source of enormous confusion and great potential. Notices Amer Math Soc 56:586-599.</li>
	<li>Alderson DL, Doyle JC (2010) Contrasting views of complexity and their implications for network-centric infrastructures. IEEE Trans Systems Man Cybernetics—Part A: Syst Humans 40:839-852. </li>
	<li>Chandra F, Buzi G, Doyle JC (2011) Glycolytic oscillations and limits on robust efficiency. Science, Vol 333, pp 187-192. </li>
	<li>JC Doyle, ME Csete (2011) Architecture, Constraints, and Behavior, P Natl Acad Sci USA, vol. 108, Sup 3 15624-15630</li>
	<li>Gayme DF, McKeon BJ, Bamieh B, Papachristodoulou P, Doyle JC (2011) Amplification and Nonlinear Mechanisms in Plane Couette Flow, Physics of Fluids, V23, Issue 6, 065108</li>
	<li>Namas R, Zamora R, An, G, Doyle, J et al, (2012) Sepsis: Something old, something new, and a systems view, Journal Of Critical Care  Volume: 27   Issue: 3  </li>
	<li>Chen, L; Ho, T; Chiang, M, Low S; Doyle J,(2012) Congestion Control for Multicast Flows With Network Coding, IEEE Trans On Information Theory  Volume: 58   Issue: 9   Pages: 5908-5921   </li>

</ol>

<h2 class="hcls">References (Meyer)</h2>

<ol>
	<li>D. Meyer, "<a href="http://www.1-4-5.net/~dmm/talks/macro_trends_complexity_and_sdn.pdf">Macro Trends, Architecture, and the Hidden Nature of Complexity (and what does this have to do with SDN?)</a>".</li>
	<li>D. Meyer, "<a href="http://www.1-4-5.net/~dmm/talks/openstack_atl_2014.pdf">Introduction to OpenDaylight and  Hydrogen, Learnings from the Year, and What's Next for OpenDaylight</a>".</li>
	<li>D. Meyer, "<a href="http://www.1-4-5.net/~dmm/talks/itat2013.pdf">On the Complexity of Designed Systems (and its effect on technology deployment)</a>".</li>
</ol>

<?php
    include ("include/footer.php");
?>

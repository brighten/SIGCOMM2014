<?php
        $page_title="Call for Papers";
        include("include/header.php");
?>

<h1 class="hcls">ACM SIGCOMM 2014 Call For Papers</h1>

<p>The ACM SIGCOMM 2014 conference seeks papers describing significant research contributions to the field of computer and data communication networks.  We invite submissions on a wide range of networking research, including, but not limited to:
</p>

<ul>
<li>Design, implementation, and analysis of network architectures and algorithms</li>
<li>Enterprise, datacenter, and storage area networks</li>
<li>SDNs and network programming</li>
<li>Experimental results from operational networks or network applications</li>
<li>Economic aspects of the Internet</li>
<li>Energy aware communication</li>
<li>Insights into network and traffic characteristics</li>
<li>Network management and traffic engineering</li>
<li>Network security and privacy</li>
<li>Network, transport, and application-layer protocols</li>
<li>Networking issues for emerging applications</li>
<li>Fault-tolerance, reliability, and troubleshooting</li>
<li>Operating system and host support for networking </li>
<li>P2P, overlay, and content distribution networks</li>
<li>Resource management, QoS, and signaling</li>
<li>Routing, switching, and addressing</li>
<li>Techniques for network measurement and simulation </li>
<li>Wireless, mobile, ad-hoc, and sensor networks</li>
</ul>

<h2 class="hcls">Submissions</h2>

<p>SIGCOMM is a highly selective conference where full papers typically report novel results firmly substantiated by experimentation, deployment, simulation, or analysis.  Submissions can be up to 14 pages in length, in two-column 10pt format. The submission instructions will be posted on the conference website in some time. Note that accepted camera-ready papers will be 12 pages in length, in two-column format with 9pt font.</p>

<p>In addition to the main conference, SIGCOMM 2014 will have a series of co-located workshops, tutorials, a poster and demo session, a travel grant program, and conference best paper and SIGCOMM awards.</p>



<h2 class=hcls>Important Dates</h2>

<ul data-role=listview data-inset=true data-theme=d class=datetbl>
<?php
add_dateitem('<span>Friday January 24, 2014 (21:00 EST)</span>', 'Paper title and abstract registration');
add_dateitem('<span>Friday January 31, 2014 (21:00 EST)</span>', 'Main conference full paper submission');
add_dateitem('March 14, 2014', 'First round reviews available');
add_dateitem('March 21, 2014 (20:00 EDT)', 'Author rebuttals due');
add_dateitem('<span>Monday April 28, 2014</span>', 'Paper acceptance notification');
add_dateitem('<span>August 17-22, 2014</span>', 'ACM SIGCOMM 2014 conference');
?>
</ul>

<a href="doc/cfp.pdf" rel="external" data-role=button class=button>Download this call as a PDF</a>


<?php
    include ("include/footer.php");
?>

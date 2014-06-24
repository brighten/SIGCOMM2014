<?php
        $page_title="ACM SIGCOMM Tutorial: FIT IoT-LAB";
        include("include/header.php");
?>

<h1 class="hcls">Tutorial: FIT IoT-LAB: A Powerful Tool for Very Large Scale Open Wireless Sensor Network Experimentation</h1>

<p><b>Half day tutorial: Friday morning, 22 August 2014</b></p>


<h2 class=hcls>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<?php
		add_listitem("Nathalie Mitton", "Inria Lille - Nord Europe", "");
		add_listitem("Anne-Sophie Tonneau", "Inria Lille - Nord Europe", "");
		add_listitem("Julien Vandaele", "Inria Lille - Nord Europe", "");
	?>

</ul>



<h2 class="hcls">Motivation</h2>

<p>Due to their massively distributed nature, the design, implementation, and evaluation of sensor network applications, middleware and communication protocols are difficult and time-consuming tasks. Simulation is an important phase during the design and the provisioning steps. However, although simulation tools are useful to provide further understanding of a system, they suffer from several imperfections as simulation makes artificial assumptions on radio propagation, traffic, failure patterns, and topologies. Unfortunately, the development and testing of real experiments engaging distributed systems like sensor networks quickly become a nightmare if the number of nodes exceeds a few dozens, because of required manipulations. In addition, they require hardware availability. In order to design robust applications, researchers need appropriate tools and methods for testing and managing their applications on real hardware in large-scale deployments. Developing and deploying a general purpose open wireless sensor network testbed, accessible to multiple users, raises several challenges that are not present in wired networks. FIT IoT-LAB (ex SensLAB) is an accurate open access multi-users scientific tool to support design, development, tuning, and experimentation of real large-scale sensor network applications. It offers free of charge more than two thousand wireless sensor nodes, deployed over 8 sites in France. Since 2011, it is part of the Equipex FIT (Future Internet of Things). FIT is a federation of multiple testbeds and in particular the IoT-LAB testbed, an evolution of the SensLAB testbed, bringing major improvements for the research in the Internet of Things: new infrastructure, new web portal, new nodes based on Cortex M3 and Cortex A8 (early 2014) and new mobile nodes embedded on autonomous robots (in 2014). There is thus no need to buy the hardware and no need to loose time in loading the code on each single sensor and deploying the network. All IoT-LAB testbed devices can be accessed through a simple Internet connection from everywhere in the world. In addition, IoT-LAB provides a full suite of tools to better monitor the behavior of the tested algorithms. We believe that FIT IoT- LAB is a great tool to foster the deployment of new solutions in wireless sensor networks and then in wireless sensor and robot networks.</p>


<h2 class="hcls">Outline</h2>

<p>This tutorial is a hands-on training. It main goal is to learn how to use the testbed platform and test its key features. It targets users who are interested in discovering that tool, as well as experts in WSN who will be given the opportunity to experiment their own applications.</p>

<p>The tutorial will introduce to the attendees the key features of the FIT IoT-LAB testbed platform through four simple examples:</p>

<ol>
<li>a blinking led application, for studying the power consumption</li>
<li>an on-demand sensing application, illustrating serial link I/O</li>
<li>a message broadcasting application, explaining multi-nodes interaction</li>
<li>a Contiki example, introducing ported OS</li>
</ol>

<h2 class="hcls">Requirements</h2>

<p>This tutorial does not require particular skills and knowledge, excepting basics about using linux and terminal. All the manipulations will be detailed in the instructions document delivered to the attendees.</p>

<p>The attendees are invited to bring their own laptop, but no specific configuration is required since they will be provided with a bootable USB stick or a virtual machine (install previously a virtualization solution such as VirtualBox).</p>

<h2 class="hcls">Schedule</h2>

        <ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
                <?php tprog_add_session("9:00 &mdash; 9:30", "Introduction to FIT IoT-LAB"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Experimentation</p>
<p>Project history</p>
<p>Hardware</p>", "");
                ?>

                <?php tprog_add_session("9:30 &mdash; 10:00", "First example: Energy Consumption"); ?>
                <?php
                        tprog_add_item("", "", "
<p>First run on the testbed</p>
<p>Automatic measurement</p>
                        ", "");
                ?>

                <?php tprog_add_session("10:00 &mdash; 10:30", "Coffee Break"); ?>

                <?php tprog_add_session("10:30 &mdash; 11:00", "Second example: Serial Port Communication"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Read/Write remotely</p>
<p>SSH frontend</p>", "");
                ?>

                <?php tprog_add_session("11:00 &mdash; 11:45", "Third example: Radio Communication"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Message broadcasting</p>
<p>Nodes interaction during an experiment</p>", "");
                ?>

                <?php tprog_add_session("11:45 &mdash; 12:30", "Fourth example: Running Contiki"); ?>
                <?php
                        tprog_add_item("", "", "
<p>Usage of ported Operating System</p>", "");
                ?>

		</ul>


<?php
    include ("include/footer.php");
?>

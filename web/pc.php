<?php
        $page_title="Program Committee";
        include("include/header.php");
?>

<h1 class="hcls">Program Committee<h1>


<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Program Committee Chairs</li>
	<?php
		add_listitem("Arvind Krishnamurthy", "University of Washington, USA", "http://www.cs.washington.edu/people/faculty/arvind/");
		add_listitem("Sylvia Ratnasamy", "UC Berkeley, USA", "http://www.eecs.berkeley.edu/~sylvia/");
	?>

	<li data-role="list-divider">Program Committee Members</li>
	<?php
		add_listitem("Aditya Akella", "University of Wisconsin, USA", "http://pages.cs.wisc.edu/~akella/");
		add_listitem("Katerina Argyraki", "EPFL, Switzerland", "http://people.epfl.ch/katerina.argyraki");
		add_listitem("Guido Appenzeller", "Big Switch Networks, USA", "http://guido.appenzeller.net");
		add_listitem("Hitesh Ballani", "Microsoft Research, UK", "http://research.microsoft.com/en-us/um/people/hiballan/");
		add_listitem("Paul Barford", "University of Wisconsin, USA", "http://pages.cs.wisc.edu/~pb/");
		add_listitem("Matt Caesar", "University of Illinois, USA", "http://www.cs.illinois.edu/~caesar/");
		add_listitem("Augustin Chaintreau", "Columbia University, USA", "http://www.cs.columbia.edu/~augustin/");
		add_listitem("Bruce Davie", "VMware, USA", "http://nms.csail.mit.edu/~bdavie/");
		add_listitem("Christophe Diot", "Technicolor, France", "http://teixeiradiot.free.fr/christophe-pro.html");
		add_listitem("Nandita Dukkipati", "Google, USA", "http://research.google.com/pubs/author39115.html");
		add_listitem("Rodrigo Fonseca", "Brown University, USA", "http://cs.brown.edu/~rfonseca/");
		add_listitem("Nate Foster", "Cornell University, USA", "http://www.cs.cornell.edu/~jnfoster/");
		add_listitem("Ali Ghodsi", "UC Berkeley, USA", "http://www.cs.berkeley.edu/~alig/");
		add_listitem("Paul Francis", "Max Planck Institute, Germany", "https://francis.mpi-sws.org");
		add_listitem("Sharon Goldberg", "Boston University, USA", "http://www.cs.bu.edu/~goldbe/");
		add_listitem("Brighten Godfrey", "University of Illinois, USA", "http://www.cs.illinois.edu/~pbg/");
		add_listitem("Shyam Gollakota", "University of Washington, USA", "http://homes.cs.washington.edu/~gshyam/");
		add_listitem("Saikat Guha", "Microsoft Research, India", "http://research.microsoft.com/en-us/um/people/saikat/");
		add_listitem("Krishna Gummadi", "Max Planck Institute, Germany", "http://www.mpi-sws.org/~gummadi/");
		add_listitem("Chuanxiong Guo", "Microsoft Research, Asia", "http://research.microsoft.com/en-us/people/chguo/");
		add_listitem("Polly Huang", "National Taiwan University, Taiwan", "http://cc.ee.ntu.edu.tw/~phuang/");
		add_listitem("Kyle Jamieson", "University College London, UK", "http://www0.cs.ucl.ac.uk/staff/k.jamieson/");
		add_listitem("Brad Karp", "University College London, UK", "http://www0.cs.ucl.ac.uk/staff/B.Karp/");
		add_listitem("Ethan Katz-Bassett", "University of Southern California, USA", "http://www-bcf.usc.edu/~katzbass/");
		add_listitem("Teemu Koponen", "VMware, USA", "http://www.vmware.com");
		add_listitem("Harsha Madhyastha", "UC Riverside, USA", "http://www.cs.ucr.edu/~harsha/");
		add_listitem("Ratul Mahajan", "Microsoft Research, USA", "http://research.microsoft.com/en-us/um/people/ratul/");
		add_listitem("Nick McKeown", "Stanford University, USA", "http://yuba.stanford.edu/~nickm/");
		add_listitem("Michael Mitzenmacher", "Harvard University, USA", "http://www.eecs.harvard.edu/~michaelm/");
		add_listitem("Andrew Moore", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~awm22/");
		add_listitem("Robert Morris", "Massachusetts Institute of Technology, USA", "http://pdos.csail.mit.edu/~rtm/");
		add_listitem("Jitendra Padhye", "Microsoft Research, USA", "http://research.microsoft.com/en-us/um/people/padhye/");
		add_listitem("Vivek Pai", "Princeton University, USA", "http://www.cs.princeton.edu/~vivek/");
		add_listitem("Dina Papagiannaki", "Telefonica, Spain", "http://people.tid.es/dina.papagiannaki/Pages/home.aspx");
		add_listitem("KyoungSoo Park", "KAIST, Korea", "http://www.ndsl.kaist.edu/~kyoungsoo/");
		add_listitem("Adrian Perrig", "ETH Zurich, Switzerland", "http://users.ece.cmu.edu/~adrian/");
		add_listitem("Larry Peterson", "Princeton University and ON.LAB", "http://www.cs.princeton.edu/~llp/");
		add_listitem("Srinivasan Seshan", "Carnegie Mellon University, USA", "http://www.cs.cmu.edu/~srini/Home.html");
		add_listitem("Vyas Sekar", "Carnegie Mellon University, USA", "http://users.ece.cmu.edu/~vsekar/");
		add_listitem("Scott Shenker", "UC Berkeley and ICSI, USA", "http://www.eecs.berkeley.edu/Faculty/Homepages/shenker.html");
		add_listitem("Alex Snoeren", "UC San Diego, USA", "http://cseweb.ucsd.edu/~snoeren/");
		add_listitem("Neil Spring", "University of Maryland, USA", "https://www.cs.umd.edu/~nspring/");
		add_listitem("Kun Tan", "Microsoft Research, Asia", "http://research.microsoft.com/en-us/people/kuntan/");
		add_listitem("Renata Teixeira", "University Pierre et Marie Curie, France", "http://www-rp.lip6.fr/~teixeira/");
		add_listitem("Amin Vahdat", "Google and UC San Diego, USA", "http://cseweb.ucsd.edu/~vahdat/");
		add_listitem("Walter Willinger", "Niksun, USA", "http://niksun.com");
		add_listitem("John Wrocklawski", "ISI, USA", "http://www.isi.edu/div7/individual_pages/jtw.htm");
		add_listitem("Richard Yang", "Yale University, USA", "http://www.cs.yale.edu/homes/yry/");
		add_listitem("Xiaowei Yang", "Duke University, USA", "http://www.cs.duke.edu/~xwy/");
		add_listitem("Minlan Yu", "University of Southern California, USA", "http://www-bcf.usc.edu/~minlanyu/");
		add_listitem("Ellen Zegura", "Georgia Tech, USA", "http://www.cc.gatech.edu/~ewz/Welcome.html");
		add_listitem("Yin Zhang", "University of Texas, Austin, USA", "http://www.cs.utexas.edu/~yzhang/");
	?>

</ul>

<?php
    include ("include/footer.php");
?>
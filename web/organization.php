<?php
        $page_title="Committees";
        include("include/header.php");
?>

<h1 class="hcls">Organization Committee</h1>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">General Chairs</li>
	<?php
		add_listitem("Fabi&aacute;n E. Bustamante", "Northwestern U., USA", "http://www.cs.northwestern.edu/~fabianb/");
		add_listitem("Y. Charlie Hu", "Purdue U., USA", "https://engineering.purdue.edu/~ychu/");
	?>
	
	<li data-role="list-divider">Local Arrangements Chairs</li>
	<?php
		add_listitem("Yan Chen", "Northwestern U., USA", "http://www.cs.northwestern.edu/~ychen/");
		add_listitem("Jakob Eriksson", "University of Illinois, Chicago, USA", "http://www.cs.uic.edu/Jakob/");
	?>

	<li data-role="list-divider">Registration Chair</li>
	<?php
		add_listitem("Randall Berry", "Northwestern U., USA", "http://users.eecs.northwestern.edu/~rberry/");
	?>
	
	<li data-role="list-divider">Workshop Chairs</li>
	<?php
		add_listitem("Matthew Caesar", "U. of Illinois, Urbana-Champaign, USA", "http://www.cs.illinois.edu/~caesar/");
		add_listitem("Ming Zhang", "Microsoft Research, USA", "http://research.microsoft.com/en-us/people/mzh/");
	?>
	
	<li data-role="list-divider">Tutorial Chairs</li>
	<?php
		add_listitem("Sonia Fahmy", "Purdue U., USA", "http://www.cs.purdue.edu/homes/fahmy/");
		add_listitem("Jia Wang", "AT&amp;T Labs, USA", "http://www2.research.att.com/~jiawang/");
	?>

	<li data-role="list-divider">Poster and Demo Chairs</li>
	<?php
		add_listitem("David R. Choffnes", "Northeastern University, USA", "http://david.choffnes.com");
		add_listitem("Kun Tan", "Microsoft Research, China", "http://research.microsoft.com/en-us/people/kuntan/");
	?>

	<li data-role="list-divider">Publicity Chairs</li>
	<?php
		add_listitem("Xenofontas Dimitropulos", "ETH Zurich, Switzerland", "http://www.csg.ethz.ch/people/dimitroc");
		add_listitem("Phillipa Gill", "Stony Brook U., USA", "http://www.cs.sunysb.edu/~phillipa/");
		add_listitem("Bin Liu", "Tsinghua U., China", "http://s-router.cs.tsinghua.edu.cn/~liubin/");
		add_listitem("Claudio Righetti", "Universidad de Buenos Aires, Argentina", "http://www-2.dc.uba.ar/profesores/righetti/");
	?>

	<li data-role="list-divider">Publication Chair</li>
	<?php
		add_listitem("Robin Kravets", "U. of Illinois, Urbana-Champaign, USA", "http://mobius.cs.uiuc.edu/people/rhk");
		add_listitem("Minlan Yu", "University of Southern California, USA", "http://www-bcf.usc.edu/~minlanyu/");
	?>

	<li data-role="list-divider">Travel Grant Chairs</li>
	<?php
		add_listitem("Tilman Wolf", "University of Massachusetts Amherst, USA", "http://www.ecs.umass.edu/ece/wolf");
		add_listitem("Ignacio Alvarez-Hamelin", "Universidad de Buenos Aires, Argentina", "http://cnet.fi.uba.ar/ignacio.alvarez-hamelin/");
		add_listitem("Wenjun Hu", "Yale University, USA", "http://www.eng.yale.edu/wenjun/");
		add_listitem("Dimitrios Koutsonikolas", "U. at Buffalo, SUNY, USA", "http://www.cse.buffalo.edu/faculty/dimitrio/");
		add_listitem("Marco Mellia", "Politecnico di Torino, Italy", "http://www.telematica.polito.it/public/faculty/marco-mellia");
	?>

	<li data-role="list-divider">Treasurer</li>
	<?php
		add_listitem("Sujata Banerjee", "HP Labs, USA", "http://www.hpl.hp.com/people/sujata_banerjee/");
	?>

	<li data-role="list-divider">Web Chair</li>
	<?php
		add_listitem("P. Brighten Godfrey", "U. of Illinois, Urbana-Champaign, USA", "http://www.cs.illinois.edu/~pbg/");
	?>

	<li data-role="list-divider">Conference Coordinator</li>
	<?php
		add_listitem("Yashar Ganjali", "U. of Toronto, Canada", "http://www.cs.toronto.edu/~yganjali/");
	?>

	<li data-role="list-divider">Conference Coordinator Emeritus</li>
	<?php
		add_listitem("Jaudelice de Oliveira", "Drexel University, USA", "http://www.ece.drexel.edu/deoliveira/index.html");
	?>

</ul>

<?php
    include ("include/footer.php");
?>
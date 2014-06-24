#!/opt/local/bin/perl

#
# Convert a list of PC members of the form
#
#      John Doe, University of My Left Foot, USA
#
# to the HTML form used on the web site.  Input is on stdin.
#

while ($line = <>) {
	if ($line =~ m/^([^,]+), (.+)/) {
		print "\t\tadd_listitem(\"$1\", \"$2\", \"\");\n";
	} 
}
#
# Code developed by Xuefeng Zhu <xzhu15@illinois.edu> for SIGCOMM 2014 web site.
# Original verison July 2014
#

from jinja2 import Environment, FileSystemLoader
import gspread
import os.path

# After this, nothing should need to change
def generate_session(wks):
	session_list = []
	# Get all values in worksheet
	list_of_lists = wks.get_all_values()
	# Remove the header row
	list_of_lists.pop(0)	

	for row in list_of_lists:
		session = { "type": row[0],
					"time": row[1],
					"title": row[2],	
					"speaker": row[3],
					"paper": row[4],
					"slide": "doc/slides/%s" %row[5]}
		session_list.append(session)	

	for i in session_list:
		if not os.path.isfile("../../web/%s" %i["slide"]):
			i["slide"] = None

	env = Environment(loader=FileSystemLoader('templates'))
	template = env.get_template('session-template.html')
	output_from_parsed_template = template.render(session_list=session_list)

	# Save the results
	with open("../../web/include/program/%s.php" %wks.title, "wb") as fh:
	    fh.write(output_from_parsed_template.encode('ascii', 'xmlcharrefreplace'))
	    print "../../web/include/program/%s.php generates" %wks.title

if __name__ == '__main__':
	account = raw_input("Enter Your Google Account:\n")
	password = raw_input("Enter Your Google Account Password:\n")
	url = raw_input("Enter the Document URL:\n")
	gc = gspread.login(account, password)
	sh = gc.open_by_url(url)
	worksheet_list = sh.worksheets()

	for worksheet in worksheet_list:
		generate_session(worksheet)
	print "All sessions get generated"

#
# Code developed by Xuefeng Zhu <xzhu15@illinois.edu> for SIGCOMM 2014 web site.
# Original verison July 2014
#

from jinja2 import Environment, FileSystemLoader
import gspread

# After this, nothing should need to change
def generate_session(name):
	session_list = []
	# Login with your Google account
	wks = sh.worksheet(name)
	list_of_lists = wks.get_all_values()
	# Remove the header row
	list_of_lists.pop(0)	

	for row in list_of_lists:
		session = { "time": row[0],
					"title": row[1],	
					"speaker": row[2]}
		session_list.append(session)	

	env = Environment(loader=FileSystemLoader('templates'))
	template = env.get_template('session-template.html')
	output_from_parsed_template = template.render(session_list=session_list)	

	# to save the results
	with open("../../web/include/program-tmp/%s.php" %name, "wb") as fh:
	    fh.write(output_from_parsed_template.encode('ascii', 'xmlcharrefreplace'))
	    print "../../web/include/program-tmp/%s.php generates" %name

if __name__ == '__main__':
	account, password, url = [line.strip() for line in open("google_info.txt").readlines()]
	gc = gspread.login(account, password)
	sh = gc.open_by_url(url)

	xlsx_list = open("xlsx_list.txt")
	for xlsx in xlsx_list:
		generate_session(xlsx.strip())
	print "All sessions get generated"

from jinja2 import Environment, FileSystemLoader
import gspread

session_list = []
# Login with your Google account
gc = gspread.login('sigcomm14@gmail.com', 'sigcomm2014')
wks = gc.open("dcc").sheet1
list_of_lists = wks.get_all_values()
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
with open("../../web/include/program/dcc.php", "wb") as fh:
    fh.write(output_from_parsed_template.encode('ascii', 'xmlcharrefreplace'))
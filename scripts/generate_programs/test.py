import gspread

session_list = []
# Login with your Google account
gc = gspread.login('sigcomm14@gmail.com', 'sigcomm2014')
# Open a worksheet from spreadsheet with one shot
wks = gc.open("dcc").sheet1
list_of_lists = wks.get_all_values()

for row in list_of_lists:
	session = { "time": row[0],
				"title": row[1],	
				"speaker": row[2]}
	session_list.append(session)

print session_list	



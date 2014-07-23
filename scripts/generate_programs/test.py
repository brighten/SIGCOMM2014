import gspread

# After this, nothing should need to change
def generate_session(wks):
	# Login with your Google account
	list_of_lists = wks.get_all_values()
	# Remove the header row
	list_of_lists.pop(0)	

	row_count = 2
	for row in list_of_lists:
		if row[1] == "":		
			#worksheet.update_cell(row_count, 1, "talk")
			pass
		elif row[2].find("Session") > 0:
			print row[2]
			#worksheet.update_cell(row_count, 1, "session")
		elif row[3] == "":
			#worksheet.update_cell(row_count, 1, "break")	
		row_count += 1
	print "%s is updated" %wks.title
if __name__ == '__main__':
	account = raw_input("Enter Your Google Account:\n")
	password = raw_input("Enter Your Google Account Password:\n")
	url = raw_input("Enter the Document URL:\n")
	gc = gspread.login(account, password)
	sh = gc.open_by_url(url)
	worksheet_list = sh.worksheets()
	for worksheet in worksheet_list:
		generate_session(worksheet)
	print "All worksheet get type inserted"

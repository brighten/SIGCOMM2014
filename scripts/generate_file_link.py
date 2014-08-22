import gspread

count = 1
type = ['day','break']

def load_file(wks):
	global count
	session_list = wks.get_all_values()

	for i in range(1, len(session_list)):
		if session_list[i][0] not in type:
			wks.update_cell(i+1, 6, "%d.pdf" %count)
			count += 1
	print "%s has been loaded" %wks.title


if __name__ == '__main__':
	account = raw_input("Enter Your Google Account:\n")
	password = raw_input("Enter Your Google Account Password:\n")
	url = raw_input("Enter the Document URL:\n")
	gc = gspread.login(account, password)
	sh = gc.open_by_url(url)
	worksheet_list = sh.worksheets()

	for worksheet in worksheet_list:
		try:
			load_file(worksheet)
		except:
			"%s does not exist" %worksheet.title
	print "Task finished"

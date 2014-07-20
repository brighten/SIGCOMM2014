import gspread

def upload_sheet(name):
	book = open("input_data/%s.tsv" %name)
	content = book.readlines() 
	worksheet = sh.add_worksheet(title=name, rows=len(content), cols=len(content[0]))
	for row in range(len(content)):
		cols = content[row].split("\t")
		for col in range(len(cols)):
			worksheet.update_cell(row+1, col+1, cols[col].decode('utf-8'))
	print "%s is successfully uploaded" %name

if __name__ == '__main__':

	account = raw_input("Enter Your Google Account:\n")
	password = raw_input("Enter Your Google Account Password:\n")
	url = raw_input("Enter the Document URL:\n")
	gc = gspread.login(account, password)
	sh = gc.open_by_url(url)

	xlsx_list = open("xlsx_list.txt")
	for xlsx in xlsx_list:
		try:
			upload_sheet(xlsx.strip())
		except Exception, message:
			print message
	print "All xlsx get uploaded"


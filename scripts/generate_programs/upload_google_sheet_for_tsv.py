import gspread

gc = gspread.login('sigcomm14@gmail.com', 'sigcomm2014')
sh = gc.open("sigcomm2014")

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
	xlsx_list = open("xlsx_list.txt")
	for xlsx in xlsx_list:
		try:
			upload_sheet(xlsx.strip())
		except Exception, message:
			print "Fail! " + message
	print "All xlsx get uploaded"


from xlsx import Workbook
import gspread

def upload_sheet(name):
	book = Workbook("input_data/%s.xlsx" %name)
	for sheet in book:
		worksheet = sh.add_worksheet(title=name, rows=str(len(sheet.rows())), cols=str(len(sheet.cols())))
		row_count = 0 
		for row, cells in sheet.rows().iteritems():
			row_count += 1
			col_count = 0
			for cell in cells:
				col_count += 1
				if cell.value == "":
					continue
				worksheet.update_cell(row_count, col_count, cell.value)
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


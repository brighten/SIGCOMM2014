from xlsx import Workbook
import gspread
import string


def upload_sheet(name):
	book = Workbook("input_data/%s.xlsx" %name)
	for sheet in book:
		worksheet = sh.add_worksheet(title=name, rows=str(len(sheet.rows())), cols=str(len(sheet.cols())+2))
		row_count = 1 
		session_flag = False
		for row, cells in sheet.rows().iteritems():
			row_count += 1 if not session_flag else 0
			col_count = 2
			for cell in cells:
				if session_flag:
					session_flag = False
					if cell.value.find("Session chair") != -1:
						worksheet.update_cell(row_count, 3, cell.value.strip("Session chair:"))
						break
					else:
						row_count += 1
				try:
					if col_count ==2 and cell.value.find("SESSION") != -1:
						index = cell.value.find("SESSION")
						worksheet.update_cell(row_count, 1, cell.value[:index].lower())
						worksheet.update_cell(row_count, 2, string.capwords(cell.value[index:]))
						session_flag = True
						break
					else:
						worksheet.update_cell(row_count, col_count, cell.value)
						col_count += 1 
				except:
					worksheet.update_cell(row_count, col_count, "Error") 
					col_count += 1
	print "%s is successfully uploaded" %name

if __name__ == '__main__':
	account = raw_input("Enter Your Google Account:\n")
	password = raw_input("Enter Your Google Account Password:\n")
	url = raw_input("Enter the Document URL:\n")
	gc = gspread.login(account, password)
	sh = gc.open_by_url(url)
	name = "Session-v2"
	upload_sheet(name)

	try:
		pass
	except Exception, message:
		print message
	print "All xlsx get uploaded"
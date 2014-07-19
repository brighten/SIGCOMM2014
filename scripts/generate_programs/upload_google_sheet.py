from xlsx import Workbook
import gspread

gc = gspread.login('sigcomm14@gmail.com', 'sigcomm2014')
sh = gc.open("sigcomm2014")

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
	xlsx_list = open("xlsx_list.txt")
	for xlsx in xlsx_list:
		try:
			upload_sheet(xlsx.strip())
		except:
		 	print "Fail! %s has existed in Google Sheet" %xlsx.strip()
	print "All xlsx get uploaded"


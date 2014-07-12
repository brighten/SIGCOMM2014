from xlsx import Workbook
import gspread

book = Workbook("input_data/dcc.xlsx")
gc = gspread.login('sigcomm14@gmail.com', 'sigcomm2014')
sh = gc.open("sigcomm2014")

for sheet in book:
	worksheet = sh.add_worksheet(title="dcc", rows=str(len(sheet.rows())), cols=str(len(sheet.cols())))
	row_count = 0 
	for row, cells in sheet.rows().iteritems():
		row_count += 1
		col_count = 0
		for cell in cells:
			if cell.value == "":
				if col_count == 0 :
					row_count -= 1
				break 
			col_count += 1
			worksheet.update_cell(row_count, col_count, cell.value)


#
# This script is used to retrieve paper links from html files in "ACM Digitial Library links" folder, 
# and load them into Google Sheet  
# Code developed by Xuefeng Zhu <xzhu15@illinois.edu> for SIGCOMM 2014 web site.
# Original verison August 2014
#

import gspread
from pyquery import PyQuery as pq
from lxml import etree

# After this, nothing should need to change
def load_links(wks):
	session_list = wks.get_all_values()

	d = pq(filename="ACM Digitial Library links/%s.html" %wks.title);
	links = d(".DLtitleLink")
	paper = {}
	for i in range(len(links)):
		temp = links.eq(i)
		paper[temp.text()] = temp.attr("href")

	for title in paper:
		for i in range(0, len(session_list)):
			if title.lower() in session_list[i][2].lower():
				wks.update_cell(i+1, 5, paper[title])
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
			load_links(worksheet)
		except:
			"%s does not exist" %worksheet.title
	print "Task finished"

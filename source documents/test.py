from pyquery import PyQuery as pq
from lxml import etree

if __name__ == '__main__':
	d = pq(filename="ACM Digitial Library links/dcc.html");
	links = d(".DLtitleLink")
	paper = {}
	for i in range(len(links)):
		temp = links.eq(i)
		paper[temp.text()] = temp.attr("href")
	print paper

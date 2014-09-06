# Session Generator

`session-generator.py` is used for generating .php files for conference and workshop programs.  It reads data from a Google spreadsheet, containing a sheet (tab) for each conference or workshop; and writes output as PHP files in web/include/program, one per sheet.

This design allows for easy, collaborative and access-controlled editing of the base data.  At the same time, it also does not rely on any software packages or external off-site databases to serve the live web site, thus keeping it simple, easier to hand off across years, and likely to stay operational without maintenance.

This script was developed for the SIGCOMM 2014 site by Xuefeng Zhu with web chair Brighten Godfrey.  It should be easily adaptable to future SIGCOMMs and other conferences.

## Input data from Google spreadsheet

As an example, look at the spreadsheet for the SIGCOMM 2014 site:
https://docs.google.com/spreadsheets/d/1so597bYgcyiOsNEj9gbTX6bLJUMG0kP1D6DJZ8xRF2g

There is one sheet (tab, on the bottom of the screen) per program.  For example there is one program for the main SIGCOMM conference, plus another for each of six workshops.

In each sheet, there are the following columns:

* Type:  This is the type of the row in the program.  Current valid values are:  day, session, talk, break, poster, demo, inviteddemo, BestOfCCR.  The value here affects the output formatting style.  It's easy to add special purpose types, as with BestOfCCR, to get particular outputs (how to do this is described below).
* Time:  This is the day (if the type is 'day') or the time of a session.  For the other Types, leave it blank.
* Session or paper title: For example, for a session, you might use "Wireless 1" or "Keynote".  For a talk/demo/etc. it would be the title of the paper.
* Session chair, speaker, or authors: Self-explanatory.
* Paper filename: For the SIGCOMM 2014 site this is interpreted as a URL pointing to the PDF of the paper.  The papers were hosted externally by ACM so this is an ACM Digital Library link.  It would be easy to extend the script to look for a local file if it is not a URL.  This cell can be blank, in which case no link button is shown.  Also, it is ignored for Sessions and certain other Types.
* Presentation slides: Identifier of presentation slides which we expect to find in a certain directory.  Specifically if this cell value is 123.pdf then the script will check whether web/doc/slides/123.pdf is present, and if so, will display a link button to the slides.  This cell can be blank, in which case no link button is shown.  Also, it is ignored for Sessions and certain other Types.

Note that the header row is discarded (so, it must be present to be stripped off).  The column names are not important -- only the order (it might be better to fix this in the future).  Furthermore, the color in the spreadsheet is not important; that was just for convenience when editing on Google Sheets.

## Basic Usage for `session-generator`

Create a file named `google_info.txt`, which will look like
```
xxxxx@gmail.com
xxxxx
https://docs.google.com/spreadsheets/...........
```
The first line is google account, the second line is password for the account, and the third line is url to the sheet.
`google_info.txt` will be ingored by git, so do not worry that it will be commited to github by accident.

Run the script after installing dependencies using `python session-generator.py < google_info.txt`

If you do not want to expose your Google Account info in a file, just run script using `python session-generator.py`


## Install Dependency 
### On a Mac running Macports
```
sudo port install py27-jinja2
```
### gspread should already be installed.

###From PyPI
```
pip install gspread
pip install Jinja2
```
###From GitHub
```
git clone https://github.com/burnash/gspread.git
cd gspread
sudo python setup.py install
git clone git://github.com/mitsuhiko/jinja2.git
cd jinja2
ln -s jinja2 /usr/lib/python2.X/site-packages
```
###From Macport
```
sudo port select --set python python27
sudo port select --set pip pip27
```

##Files in the old folder
`upload_google_sheet_for_***.py` is used for uploading xlsx sheet in the input_data folder.

`session-v2_uploader.py` is used for uploading session-v2.xls file to Google Sheet

`generate-prgram.ml` is the Ocaml script for generating static page


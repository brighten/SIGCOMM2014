`upload_google_sheet.py` is used for uploading xlsx sheet in the input_data folder.

`session-generator.py` is used for generating .php file in web/include/program.

`xlsx_list.txt` contains a list of xlsx files read by scripts

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
sudo port install py27-jinja2
# gspread should already be installed.

###From PyPI
```
pip install gspread
pip install Jinja2
```
####From GitHub
```
git clone https://github.com/burnash/gspread.git
cd gspread
sudo python setup.py install
git clone git://github.com/mitsuhiko/jinja2.git
cd jinja2
ln -s jinja2 /usr/lib/python2.X/site-packages
```



sudo port select --set python python27
sudo port select --set pip pip27

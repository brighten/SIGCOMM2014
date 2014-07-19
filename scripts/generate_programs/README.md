`upload_google_sheet.py` is used for uploading xlsx sheet in the input_data folder.

`session-generator.py` is used for generating .php file in web/include/program.

`xlsx_list.txt` contains a list of xlsx files read by scripts

## Install Dependency 
###From PyPI
```
pip install gspread
pip install Jinja2
```
####From GitHub
```
git clone https://github.com/burnash/gspread.git
cd gspread
python setup.py install
git clone git://github.com/mitsuhiko/jinja2.git
cd jinja2
ln -s jinja2 /usr/lib/python2.X/site-packages
```

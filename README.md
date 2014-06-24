ACM SIGCOMM 2014 Web Site
=========================

PHP/HTML/CSS/JS code for the ACM SIGCOMM 2014 web site, based on the ACM SIGCOMM 2012 site.

You are welcome to reuse and adapt this code for your conference. It is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License. Please see http://creativecommons.org/licenses/by-nc-sa/3.0/. Source code is available at https://github.com/ryanrhymes/SIGCOMM2012.

Under the license, you acknowledge "ACM SIGCOMM 2012" as the source and you link to http://conferences.sigcomm.org/sigcomm/2012/. You will also share any changes and improvements to this code openly. The best way to do so is to fork our github repository at https://github.com/ryanrhymes/SIGCOMM2012.

What's in the various subdirectories:

* `css`			CSS code, only edit style.css, the rest is from vendors
* `css/images`	jquerymobile CSS images
* `images`		our images (logos, etc.)
* `include`		PHP partials and code
* `js`			Javascript, only edit script.js, the rest is from vendors
* `workshops`	workshop CFPs in various formats stuff
* `paper`		PDF copies of the various papers - not part of the repository due to copyright issues
* `scripts`		various helper scripts to check and compile the site

This site uses a bunch of open javascript libraries. You will want to use their latest versions:

* http://jquery.com/ - the javascript goes into `js`
* http://jquerymobile.com/ - the javascript goes into `js` and the CSS and images go into `css`
* http://jquerymobile.com/demos/1.1.0/docs/_assets/css/jqm-docs.css - the CSS for the jquerymobile documentation page, goes into CSS
* http://code.google.com/p/css3-mediaqueries-js/ - the javascript goes into `js`


Cache manifest for offline usage
--------------------------------

The `scripts/publish` script generates this automatically. Edit the script to control which objects are included in the manifest.


Creating a minified version of the site
---------------------------------------

Much better to publish this minified version than the source files. Bash script in `scripts/publish`.

In order to save time, this script does *not* optimize any images. You should really run your images through pngquant (http://pngquant.org/) and then image_optim (https://github.com/toy/image_optim) before you add them to the repository.


Local test server
-----------------

With recent versions of PHP, you can run a development test server on your machine like this: `php -S 127.0.0.1:8000`


Checking for broken links
-------------------------

Run a local test server (see above) and then run `linklint` (http://www.linklint.org/):

    linklint -doc report -http -host 127.0.0.1:8000 /@

Checker results are in `report/index.html` afterwards.


Checking for HTML issues
------------------------

Run a local test server (see above) and then run `bash scripts/lint`.

For future SIGCOMM web chairs
-----------------------------

To get started, first check out:
http://www.sigcomm.org/conference-planning/web-chairs

An additional task to start on early is designing a logo.

You'll have to request an account at:
http://campus.acm.org/public/infodir/account_request.cfm

For questions or to check on status of your request, you may try following up with ishelpdesk@hq.acm.org.

To publish the site:  ACM's web hosting service setup is in the process of changing (as of spring 2014).  The instructions here are what we used for SIGCOMM 2014, but future conferences will probably have a different procedure.

We used sftp access to ACM's server.  However, Drupal is also available.  For sftp upload and download, you have several software options.  ishelpdesk recommended FileZilla, writing:
	1. Simply configure Filezilla's site manager "HOST" field turing.acm.org
	PLEASE NOTE: DO NOT CONFIGURE "QUICK CONNECT" (in Filezilla) – It defaults to regular FTP which will not work with turing.acm.org.
	2. Use [SFTP using SSH] in the server type field (Note from Brighten: I didn't see this field in the Mac verison of this software.  Just entered 22 in the Port field.)
	3. Fill in the [username] and [password] fields with the credentials I sent in the previous email.
	4. Set the logon type field to [normal].  (Note from Brighten: I didn't see this field in the Mac version of this software)

However, another option for uploading is lftp, which uploads a diff like rsync.  On a Mac with MacPorts, just do 'sudo port install lftp'.  Once lftp is installed, suppose the pathname to your local copy of the site is /x/web  and your username on the ACM server is USERNAME with password PASSWORD.  Then do this:

	$ cd /x
	$ lftp sftp://USERNAME@conferences.sigcomm.org
	password: PASSWORD
	lftp> cd /acminfo/2/sigs/sigcomm/conferences/sigcomm/
	lftp> mirror -Reva web 2014

where 2014 is replaced with the year of the SIGCOMM conference.
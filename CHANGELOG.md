###Changelog for xFastTemplate2
+ 0.6.5	2014-10-13
-- Remove obsolete and dead links inside the module-description.
-- First steps to strip off the WB 2.8.3 support.

- 0.6.4	2014-03-01
-- Add install.php for the "manual reload (modul)" function(-s) of LEPTON-CMS

- 0.6.3	2013-02-22
-- Change "ereg_replace" (marked as deprecated) to "preg_replace" inside include.php.

- 0.6.2	2013-01-14
-- Minor codechanges and bugfixes.
-- Add an error template to the project.
-- Add css suite an method optimize for experimental use.
-- Add js method optimize for experimental use in js-suite.

- 0.6.0	2013-01-10
-- Moved changeloc from the info.php to the CHANGELOG file.
-- Remove the WebsiteBaker suite and add a Lepton-CMS suite to the project.

- 0.5.8	2011-03-28
-- Remove the documentation-files from the project and update the link to the
	documentation-files on websitebakers.org. This "outsource" makes it less
	problematic for the user to get an actual version of the documentation.
-- Add link to the example-template to the $module-description.
-- Bugfix inside the class method "parse_template_file".
-- Minor cosmetic code-changes and removing typos.
-- Add new method "get_by_url" - similar to "get_by_source".

- 0.5.7	2011-03-17
-- Remove the php4 file from the project.
-- Add "alter" to "build_mysql_query" (suite: mySQL).
-- Add guid (private) to the suite-classes.

- 0.5.5	2011-02-27
-- Add new function "parse_template_file" to handle marked sections inside
	a given template. E.g. <!-- BEGIN keyname:any --> <!-- END keyname:any -->
	
- Prior versions:
-- please take a look at older logfiles, e.g. version 0.6.2.
# osltrg-website-main
Web-site for the Open Source Liturgy Project

This README file is a (currently incomplete) guide for setting
up a mirror site of the Open Source Liturgy web-site.
Those who just want to look at an existing copy of the
site needn't concern themselves with this README file.

For this site to work, there needs to be a specific directory
somewhere on your local machine (but not directly-visible
to the public) where the following packages
are downloaded installed, all under their canonical directory-names:

  * mass-missal-lng-en-rewordist
  * mass-missal-lng-en-reclaimist
  * mass-missal-main
  * mass-missal-library
  * mass-missal-lectionary
  * osltrg-saints-primary

One of the things that the arrays defined in "lcrs/main.php" will do
is to identify the location of this directory.

As new variables will may required in the future,
please check the file "var-check.php" on this site to make sure
that "lcrs/main.php" is up-to-date in what it
needs to define - and if it fails in any of
these tests, check the description here to
make sure you fill the new variables with
the correct values.
Check that file through the web-interface,
so that the web-server will run it as a PHP
script rather than just render it literally
to the browser - because really, that's the
only way that that file can do it's job.

Oh - and we will try to add tests for
new variables long enough before they
are actually needed so as to avoid throwing
you off --- but it is still important that
you run this check frequently, because we
can only wait so long.
And furthermore, for these tests to work
(and for that matter, for the software to
continue working) you need
to keep both the files of this web-site
as well as all tools that this web-site uses
up-to-date.

## Associative arrays to set up in lcrs/main.php
It should be noted that if any value in any of these arrays
points to a directory, it must _not_ include the trailing
forward-slash. For example, instead of listing a directory as
"/usr/foo/bar/", you should instead list it as "/usr/foo/bar".
Do not use "http://foo.bar/", but instead, use "http://foo.bar".
And do not use "http://foo.bar/junk/items/", but instead,
use "http://foo.bar/junk/items".
Well -- I suppose you get the gist.

### site_spc
This array is for values that are not to be directly used
by the Open Source Liturgy modules themselves.
However, note that the key-word is "directly",
in that they can still be indirectly used -
as some scripts within this web-site module might
use values from within this array in order to formulate
values that they set which will indeed be used by
the liturgy modules themselves.
This includes (but is not limited) values that are strictly for
the site that have no technical bearing on the liturgy software
itself.

#### resdir
This is the location on the local file-system that the modules
of the Open Source Liturgy software itself are downloaded to -
all of them under their canonical names (as specifically
mentioned early in this file).

#### remote_urls
__Do not__ set this one up in "lcrs/main.php".
If you do, it will in many cases be overwritten.
It is listed here because this array is where
it will go when/if the site sets it up.
Simply, this is an array of URLs

### site_inf
There is a slight chance that later
versions of the Open Source Liturgy software itself might
directly use values stored in this array.
It may not be necessary, but it might be.


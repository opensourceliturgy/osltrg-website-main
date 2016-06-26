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

## Associative arrays to set up in lcrs/main.php
It should be noted that if any value in any of these arrays
points to a directory, it must _not_ include the trailing
forward-slash. For example, instead of listing a directory as
"/usr/foo/bar/", you should instead list it as "/usr/foo/bar".

### site_spc
This array is for values that are not to be directly used
by the Open Source Liturgy modules themselves.
However, note that the key-word is "directly",
in that they can still be indirectly used -
as some scripts within this web-site module might
use values from within this array in order to formulate
values that they set which will indeed be used by
the liturgy modules themselves.

#### resdir
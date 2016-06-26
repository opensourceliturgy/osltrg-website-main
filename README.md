# osltrg-website-main
Web-site for the Open Source Liturgy Project

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

### site_spc
#### resdir
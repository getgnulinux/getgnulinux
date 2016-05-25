# Get GNU/Linux!

This is the web application for the [getgnulinux.org](https://www.getgnulinux.org) site. Get GNU/Linux! is a simple, clear website about GNU/Linux. What is GNU/Linux? Why not Windows? Tips to make the switch. With this website we hope to reach people who never heard about free software and barely remotely heard the word "Linux".

The website is written in PHP and JavaScript, and uses GNU gettext for internationalization.


## Setup

This section explains the basic steps needed to setup the website on your web server. Before you continue, there are a few things that you need:

* Shell or FTP access to your Apache web server with PHP, PEAR, and gettext installed
* [Git](http://git-scm.com/)
* [GNU gettext](http://www.gnu.org/software/gettext/)
* [GNU Make](http://www.gnu.org/software/make/)
* A text editor
* And your web browser of choice

On a Debian or Debian-based system, you can easily install PEAR, Git, gettext, and Make with:

    $ sudo apt-get install php-pear git gettext make

First step is to download getgnulinux' source code from GitHub:

    $ git clone https://github.com/figure002/getgnulinux.git

This clones the repository into a new directory called "getgnulinux". This is the root directory for the website. Make sure Apache is configured to serve from this directory. This directory also contains a hidden file `.htaccess` which is required for the website to function properly. Either make sure that .htaccess files are processed for this website, or copy the rules from this .htaccess file to the Apache configuration file for this site. Also make sure that Apache module `mod_rewrite` is enabled:

    $ a2enmod rewrite

The site should now be running on http://localhost/. It will tell you that you need to create a file `settings.php` in the root directory. Run the following command from the root directory to create it:

    $ make settings.php

Now open the newly created `settings.php` in a text editor and change the settings where needed.

Other languages will not work until both the required locale definition files and the translations are built on the server. Usually, the locale definition files are already built on the server, but if you need to build them you can execute the helper script `scripts/make-locales.sh` as root.

The `locale/getgnulinux/` directory contains the PO files (these contain the translations). You need to compile these PO files to enable the translations on the website:

    $ make

When a PO file is updated, you'll need to recompile it to see the changes on the website. Just run the `make` command again.


## Contributing

If you wish to contribute to this website, please [fork it on GitHub](https://github.com/figure002/getgnulinux), push your change to a named branch, then send me a pull request.

You can also help us reach an audience in your language. With [Transifex](https://www.transifex.com/projects/p/getgnulinux/), you can help translate the website into your own language. Please see our [translation guidelines](https://blog.getgnulinux.org/participate/translation/) for more information.

Also see the [Participate](https://blog.getgnulinux.org/participate/) page on our blog for more ways you can help.


## License

The source code is licensed under the GNU Affero General Public License Version 3, which you can find in the COPYING file.

The content of the website and its graphical assets are, except where otherwise [noted](https://www.getgnulinux.org/legal/), licensed under the [Creative Commons Attribution-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-sa/3.0/).

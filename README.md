# Get GNU/Linux!

This is the web application for the
[www.getgnulinux.org](https://www.getgnulinux.org) site. Get GNU/Linux! is a
simple, clear website about GNU/Linux. What is GNU/Linux? Why not Windows? Tips
to make the switch. With this website we hope to reach people who never heard
about free software and barely remotely heard the word "Linux".


## Setup

This section explains the basic steps needed to setup the website on your web
server.

### Setup your build environment

The following tools need to be installed on your build environment:
* A text editor
* Git
* GNU gettext
* GNU make
* Nodejs
* Yarn

On a Debian or Debian-based system, you can easily install most dependencies
with:

    sudo apt-get install git gettext make nodejs

Follow the instructions on <https://yarnpkg.com/en/docs/install> to install
Yarn on your system.

Clone the getgnulinux source code repository:

    git clone https://github.com/figure002/getgnulinux.git

This clones the repository into a new directory called "getgnulinux". The
commands that follow must be executed from this directory.

Create a settings file:

    make docroot/settings.php

Now open the newly created `docroot/settings.php` in a text editor and change
the settings where needed.

The `locale/getgnulinux/` directory contains the PO files (these contain the
translations). You need to compile these PO files to enable the translations on
the website:

    make

When a PO file is updated, you'll need to recompile it to see the changes on
the website. Just run the `make` command again.

Install the required Node.js packages:

    yarn install

Activate the GGL development work space:

    source scripts/activate

You should now see "(ggl)" at the start of your prompt. This indicates that you
are in an active GGL development workspace, allowing you to run `bower` and
`gulp` commands. You can execute `deactivate` at any time to deactivate the GGL
development workspace.

Install additional required packages with:

    bower install

Finally, build the project with:

    gulp build

You can also run `gulp --tasks` to see a list of available `gulp` tasks.

The "docroot" directory is now prepared for a production environment. You can
synchronize the contents of this directory to the document root on your web
server, so that the site can be served.


### Setup the web server

Requirements for the web server are as follows:
* Apache HTTP server
* PHP
* PEAR
* GNU gettext

After creating a production build as described above, the directory "docroot"
is the document root for the website. Make sure Apache is configured to serve
from this directory. This directory also contains a hidden file `.htaccess`
which is required for the website to function properly. Either make sure that
.htaccess files are processed for this website, or copy the rules from this
.htaccess file to the Apache configuration file for this site. Also make sure
that Apache module `mod_rewrite` is enabled:

    $ a2enmod rewrite

Other languages will not work until the required locale definition files are
built on the server. Usually, the locale definition files are already built on
the server, but if you need to build them you can execute the helper script
`scripts/make-locales.sh` as root.


## Contributing

If you wish to contribute to this website, please [fork it on
GitHub](https://github.com/figure002/getgnulinux), push your change to a named
branch, then send me a pull request.

You can also help us reach an audience in your language. With
[Transifex](https://www.transifex.com/serrano/getgnulinux/), you can help
translate the website into your own language. Please see our [translation
guidelines](https://blog.getgnulinux.org/participate/translation/) for more
information.

Also see the [Participate](https://blog.getgnulinux.org/participate/) page on
our blog for more ways you can help.


## License

The source code is licensed under the GNU Affero General Public License Version
3, which you can find in the COPYING file.

The content of the website and its graphical assets are, except where otherwise
[noted](https://www.getgnulinux.org/legal/), licensed under the [Creative
Commons Attribution-ShareAlike 3.0 Unported
License](https://creativecommons.org/licenses/by-sa/3.0/).

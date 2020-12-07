# Manual setup

## Install and configure build environment

NOTE: There's no need to do this manually. The Docker environment has this
automated, see README.md in the directory root.

The following tools need to be installed on your build environment:

* GNU gettext
* GNU make
* Nodejs

On a Debian or Debian-based system, you can install the dependencies with:

    apt-get install gettext make nodejs

The Nodejs version that comes with Debian is probably too old. If this is the
case, follow the instructions on <https://nodejs.org/en/download/> to obtain
and install the latest stable version.

Create a settings file:

    make docroot/settings.php

Open the newly created `docroot/settings.php` in a text editor and change the
settings where needed.

The `locale/getgnulinux/` directory contains the translations. These need to
be compiled to enable the translations on the website. Compile them with:

    make locale

When a translation file is updated, you'll need to recompile it to see the
changes on the website. Just run the `make` command again.

Install the required Nodejs packages with:

    npm install

Activate the GGL development work space:

    source scripts/activate

You should now see "(ggl)" at the start of your prompt. This indicates that you
are in an active GGL development workspace, allowing you to run `gulp`
commands. You can execute `deactivate` at any time to deactivate the GGL
development workspace.

Build the project with:

    make build

You can also run `gulp --tasks` to see a list of available `gulp` tasks.

The "docroot" directory is now prepared for a production environment. You can
synchronize the contents of this directory to the document root on your web
server to deploy.


## Setup the web server

This section explains the basic steps needed to setup the website on your web
server.

Requirements for the web server are as follows:

* Apache HTTP server
* PHP
* GNU gettext

After creating a production build as described above, the directory "docroot"
is the document root for the website. Make sure Apache is configured to serve
from this directory. This directory also contains a hidden file `.htaccess`
which is required for the website to function properly. Either make sure that
.htaccess files are processed for this website, or copy the rules from this
.htaccess file to the Apache virtual host configuration for this site.

Also make sure that the required Apache modules are enabled:

    a2enmod rewrite ssl

Translations will not work until locale data is installed and compiled. On
Debian-based systems, precompiled locale data can be installed with:

    apt-get install locales-all

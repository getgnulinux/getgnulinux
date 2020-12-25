# Get GNU/Linux!

This is the web application for the
[www.getgnulinux.org](https://www.getgnulinux.org) site. Get GNU/Linux! is a
simple, clear website about GNU/Linux. What is GNU/Linux? Why not Windows? Tips
to make the switch. With this website we hope to reach people who never heard
about free software and barely remotely heard the word "Linux".

[![Build Status](https://travis-ci.org/getgnulinux/getgnulinux.svg?branch=master)](https://travis-ci.org/getgnulinux/getgnulinux)
[![Translation status](https://hosted.weblate.org/widgets/getgnulinux/-/svg-badge.svg)](https://hosted.weblate.org/engage/getgnulinux/)

## Quick start

You can use Docker to setup a local build and test environment. You will first
need to install the Docker engine as well as `docker-compose`:
<https://docs.docker.com/engine/install/>

Start the build environment with:

    ./docker/dev.sh

This should open a Bash shell inside the Docker container.
Inside the container, initialize the build environment with:

    ./autogen.sh
    ./configure --localedir=/home/node/getgnulinux/docroot/locale/

**NOTE:** These and other common commands are already in your Bash history. Use
Arrow-Up to see them.

**NOTE:** If the above command gives you a "Permission denied" error, it is
because you execute Docker with a user that has a UID other than 1000. The node
user inside the Docker container uses UID 1000. To work around this issue, give
user with UID 1000 read-write access to the project directory.

You should now be able to run `make` commands inside the container.

To build the website, run:

    make build

To copy the build to the development web server, run:

    make deploy-dev

The website should now be accessible at <http://localhost:1337/>.

To stop the web server, exit the development container and run:

    ./docker/stop.sh


## Contributing

If you wish to contribute to this website, please [fork it on
GitHub](https://github.com/getgnulinux/getgnulinux), push your change to a
named branch, then send us a pull request.

You can also help us reach an audience in your language. With
[Weblate](https://hosted.weblate.org/engage/getgnulinux/), you can help
translate the website into your own language. Please see our [translation
guidelines](https://community.getgnulinux.org/t/about-the-translation-category/17)
for more information.

[![Translation status](https://hosted.weblate.org/widgets/getgnulinux/-/287x66-black.png)](https://hosted.weblate.org/engage/getgnulinux/)

Also see [our community
forum](https://community.getgnulinux.org/t/help-improve-getgnulinux-org/12) for
more ways you can help.


## License

The source code is licensed under the GNU Affero General Public License Version
3, which you can find in the COPYING file.

The content and translations of the website and its graphical assets are,
except where otherwise [noted](https://www.getgnulinux.org/legal/), licensed
under the [Creative Commons Attribution-ShareAlike 4.0 International
License](https://creativecommons.org/licenses/by-sa/4.0/).

# Get GNU/Linux!

This is the web application for the
[www.getgnulinux.org](https://www.getgnulinux.org) site. Get GNU/Linux! is a
simple, clear website about GNU/Linux. What is GNU/Linux? Why not Windows? Tips
to make the switch. With this website we hope to reach people who never heard
about free software and barely remotely heard the word "Linux".


## Quick start

You can use Docker to setup a local build and test environment. On a Debian or
Debian-based system, you can install Docker with:

    apt-get install docker.io docker-compose

Start the build environment with:

    docker/dev.sh

This should open a Bash shell inside the Docker container. Inside the
container, activate the development shell with:

    . scripts/activate

With the development shell active, you can run `gulp` commands.

To build the website, run:

    make && gulp develop

Start the web server in a separate terminal:

    docker/start.sh

The website should now be accessible at <http://localhost:1337/>.


## Contributing

If you wish to contribute to this website, please [fork it on
GitHub](https://github.com/getgnulinux/getgnulinux), push your change to a
named branch, then send us a pull request.

You can also help us reach an audience in your language. With
[Transifex](https://www.transifex.com/serrano/getgnulinux/), you can help
translate the website into your own language. Please see our [translation
guidelines](https://community.getgnulinux.org/t/translation-guidelines/15) for
more information.

Also see [our community
forum](https://community.getgnulinux.org/t/help-improve-getgnulinux-org/12)
for more ways you can help.


## License

The source code is licensed under the GNU Affero General Public License Version
3, which you can find in the COPYING file.

The content of the website and its graphical assets are, except where otherwise
[noted](https://www.getgnulinux.org/legal/), licensed under the [Creative
Commons Attribution-ShareAlike 4.0 International
License](https://creativecommons.org/licenses/by-sa/4.0/).

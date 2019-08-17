FROM node:10

RUN apt-get update && apt-get install -y --no-install-recommends \
    gettext \
    make

RUN useradd --create-home --shell /bin/bash ggl

USER ggl
WORKDIR /home/ggl

RUN mkdir -p ./getgnulinux
WORKDIR /home/ggl/getgnulinux

# Install the Nodejs dependencies.
COPY --chown=ggl:ggl package.json package.json
COPY --chown=ggl:ggl package-lock.json package-lock.json
RUN npm ci

# Install the Bower dependencies.
COPY --chown=ggl:ggl bower.json bower.json
RUN node_modules/.bin/bower install

# Build website static files.
COPY --chown=ggl:ggl gulpfile.js gulpfile.js
COPY --chown=ggl:ggl src src
RUN node_modules/.bin/gulp build

# Compile translations.
COPY --chown=ggl:ggl Makefile Makefile
COPY --chown=ggl:ggl docroot docroot
COPY --chown=ggl:ggl locale locale
RUN make

COPY --chown=ggl:ggl scripts scripts

ENTRYPOINT ["/bin/bash", "-c"]
CMD ["/bin/bash"]

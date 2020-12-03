FROM node:10

RUN apt-get update && apt-get install -y --no-install-recommends \
    gettext \
    make \
    rsync \
    vim

RUN mkdir -p /var/www/html

USER node

RUN mkdir /home/node/getgnulinux
WORKDIR /home/node/getgnulinux

# Install the Nodejs dependencies.
COPY --chown=node:node package.json package-lock.json ./
RUN npm ci

# Install the Bower dependencies.
COPY --chown=node:node bower.json bower.json
RUN node_modules/.bin/bower install

COPY --chown=node:node docker/dev-root/ /root/
COPY --chown=node:node docker/dev-home/ /home/node/

COPY --chown=node:node ./ ./

CMD ["/bin/bash"]

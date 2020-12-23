FROM node:10

RUN apt-get update && apt-get install -y --no-install-recommends \
    autoconf \
    automake \
    autopoint \
    bash-completion \
    gettext \
    less \
    make \
    man \
    rsync \
    tree \
    vim

RUN mkdir -p /var/www/html

USER node

RUN mkdir /home/node/getgnulinux
WORKDIR /home/node/getgnulinux

# Install the Nodejs dependencies.
COPY --chown=node:node package.json package-lock.json ./
RUN npm ci

COPY --chown=node:node docker/dev-root/ /root/
COPY --chown=node:node docker/dev-home/ /home/node/

# Copy source tree for CI.
COPY --chown=node:node ./ ./

CMD ["/bin/bash"]

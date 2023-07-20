FROM node:16-bullseye

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
    vim \
  && rm -rf /var/lib/apt/lists/*

# Create this directory for CI. For development this is a volume.
RUN mkdir -p /var/www/html
RUN chown -R node:node /var/www/html

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

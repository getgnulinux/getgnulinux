# Makefile for `get GNU/Linux!`
#

# You can set these variables from the command line.
SHELL=/bin/bash
INCLUDE_DIR=include
PAGES_DIR=pages
LOCALE_DIR=locale
DOMAIN=getgnulinux
CHARSET=UTF-8

# Internal variables.
template=$(LOCALE_DIR)/$(DOMAIN)/$(DOMAIN).pot

# Phony targets.
.PHONY : help config pot po push localesgen

help:
	@echo "Please use \`make <target>' where <target> is one of"
	@echo "  config         to create the settings.php file"
	@echo "  localesgen     to generate the required locales for your system"
	@echo "  pot            to make the PO Template file $(DOMAIN).pot"
	@echo "  po             to create new PO files or to update existing PO files"
	@echo "  push           to update the development branch for getgnulinux on Launchpad"

# Create settings.php.
settings.php:
	cp include/templates/settings.php settings.php
	@echo
	@echo "Done. Now open settings.php in a text editor and change its settings."

config: settings.php

# Make the PO Template file.
pot:
	xgettext --default-domain=$(DOMAIN) --copyright-holder="GNU/Linux Matters" \
	--package-name="getgnulinux" --package-version=0.0.1 \
	--msgid-bugs-address="https://bugs.launchpad.net/getgnulinux" \
	--from-code=UTF-8 -k_ \
	-o $(template) $(INCLUDE_DIR)/*.php $(PAGES_DIR)/*.php
	sed --in-place "$(template)" --expression=s/"SOME DESCRIPTIVE TITLE."/"Translation file for the GetGNULinux.org website."/
	sed --in-place "$(template)" --expression=s/PACKAGE/getgnulinux/
	sed --in-place "$(template)" --expression=s/"Copyright (C) YEAR"/"Copyright (C) 2006-2008"/
	sed --in-place "$(template)" --expression=s/"FIRST AUTHOR <EMAIL@ADDRESS>, YEAR"/"GLM Websites Edition Team <websites@gnulinuxmatters.org>, 2008"/
	sed --in-place "$(template)" --expression=s/CHARSET/$(CHARSET)/
	sed --in-place "$(template)" --expression=s/"Language: "/"Language: en"/
	@echo
	@echo "Build finished. The PO Template File: $(template)"

# Build PO file for each locale. Requires that the PO Template file is present.
po: pot
	cp scripts/update.sh.in update.sh
	sed --in-place update.sh --expression=s/LOCALE_DIR/$(LOCALE_DIR)/
	sed --in-place update.sh --expression=s/TEMPLATE/$(LOCALE_DIR)\\/$(DOMAIN)\\/$(DOMAIN).pot/
	sed --in-place update.sh --expression=s/DOMAIN/$(DOMAIN)/
	chmod +x update.sh
	@echo
	./update.sh
	rm update.sh
	@echo
	@echo "Build finished. The PO files are in $(LOCALE_DIR)/."

# Before the webserver can use the PO files for the locales, the locales in
# question must be generated.
localesgen:
	@if [ `id -u` != "0" ]; then echo "You must be root to generate locales."; exit 1; fi
	ls locale | grep "[a-z]\{2\}_[A-Z]\{2\}" | xargs -L 1 locale-gen
	@echo
	@echo "Generating locales finished. Restart your webserver to complete."

# Push committed changes to the trunk Bazaar repository on Launchpad.
push:
	bzr push lp:getgnulinux

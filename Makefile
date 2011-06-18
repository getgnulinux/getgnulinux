# Makefile for `get GNU/Linux!`
#

# You can set these variables from the command line.
SHELL=/bin/bash
INCLUDE_DIR=_include
PAGES_DIR=_pages
LOCALE_DIR=_locale
DOMAIN=getgnulinux
CHARSET=UTF-8
LOCALES=nl_NL fr_FR

# Internal variables.
template=$(LOCALE_DIR)/$(DOMAIN)/$(DOMAIN).pot

# Phony targets.
.PHONY : help pot po push

help:
	@echo "Please use \`make <target>' where <target> is one of"
	@echo "  pot        to make the PO Template file $(DOMAIN).pot"
	@echo "  po         to create new PO files or to update existing PO files"
	@echo "  push       to update the development branch for getgnulinux on Launchpad"

# Make the PO Template file.
pot:
	xgettext --default-domain=$(DOMAIN) --copyright-holder="Serrano Pereira" \
	--package-name="getgnulinux" --package-version=0.0.1 \
	--msgid-bugs-address="https://bugs.launchpad.net/getgnulinux" \
	--from-code=UTF-8 -k_ \
	-o $(template) $(INCLUDE_DIR)/*.php $(PAGES_DIR)/*.php
	sed --in-place "$(template)" --expression=s/CHARSET/$(CHARSET)/
	sed --in-place "$(template)" --expression=s/"FIRST AUTHOR <EMAIL@ADDRESS>, YEAR"/"Serrano Pereira <serrano.pereira@gmail.com>, 2011"/
	sed --in-place "$(template)" --expression=s/"Language: "/"Language: en"/
	@echo
	@echo "Build finished. The PO Template File: $(template)"

# Build PO file for each locale. Requires that the PO Template file is present.
po: pot
	cp scripts/update.sh.in update.sh
	sed --in-place update.sh --expression=s/"LOCALES"/"$(LOCALES)"/
	sed --in-place update.sh --expression=s/LOCALE_DIR/$(LOCALE_DIR)/
	sed --in-place update.sh --expression=s/TEMPLATE/$(LOCALE_DIR)\\/$(DOMAIN)\\/$(DOMAIN).pot/
	sed --in-place update.sh --expression=s/DOMAIN/$(DOMAIN)/
	chmod +x update.sh
	@echo
	./update.sh
	rm update.sh
	@echo
	@echo "Build finished. The PO files are in $(LOCALE_DIR)/."

# Push committed changes to the trunk Bazaar repository on Launchpad.
push:
	bzr push lp:getgnulinux

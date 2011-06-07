SHELL=/bin/bash
INCLUDE_DIR=_include
PAGES_DIR=_pages
LOCALE_DIR=_locale
DOMAIN=getgnulinux
CHARSET=UTF-8
TEMPLATE=$(LOCALE_DIR)/$(DOMAIN)/$(DOMAIN).pot
LOCALES=nl_NL

# Phony targets.
.PHONY : default_target all push

# Default target executed when no arguments are given to make.
default_target: all

all:
	xgettext --default-domain=$(DOMAIN) --copyright-holder="Serrano Pereira" \
	--package-name="getgnulinux" --package-version=0.0.1 \
	--msgid-bugs-address="https://bugs.launchpad.net/getgnulinux" \
	--from-code=UTF-8 -k_ \
	-o $(TEMPLATE) $(INCLUDE_DIR)/*.php $(PAGES_DIR)/*.php
	sed --in-place "$(TEMPLATE)" --expression=s/CHARSET/$(CHARSET)/
	sed --in-place "$(TEMPLATE)" --expression=s/"FIRST AUTHOR <EMAIL@ADDRESS>, YEAR"/"Serrano Pereira <serrano.pereira@gmail.com>, 2011"/
	sed --in-place "$(TEMPLATE)" --expression=s/"Language: "/"Language: en"/
	cp scripts/update.sh.in update.sh
	sed --in-place update.sh --expression=s/"LOCALES"/"$(LOCALES)"/
	sed --in-place update.sh --expression=s/LOCALE_DIR/$(LOCALE_DIR)/
	sed --in-place update.sh --expression=s/TEMPLATE/$(LOCALE_DIR)\\/$(DOMAIN)\\/$(DOMAIN).pot/
	sed --in-place update.sh --expression=s/DOMAIN/$(DOMAIN)/
	chmod +x update.sh
	@echo ""
	./update.sh
	rm update.sh
	@echo ""
	@echo "Done."

# Push committed changes to the trunk Bazaar repository on Launchpad.
push:
	bzr push lp:~serrano-pereira/getgnulinux/trunk

# Makefile for `get GNU/Linux!`
#

# You can set these variables from the command line.
SHELL=/bin/bash
INCLUDE_DIR=include
PAGES_DIR=pages
LOCALE_DIR=locale
DOMAIN=getgnulinux
CHARSET=UTF-8
LOCALE_GEN=locale-gen
LOCALES=ar_SA ast_ES ca_AD da_DK de_DE en_US eo es_ES et_EE fi_FI fr_FR gl_ES he_IL hr_HR ia it_IT ja_JP lt_LT ml_IN nl_NL pl_PL pt_BR pt_PT ru_RU sr_RS tr_TR uk_UA vi_VN zh_CN

# Internal variables.
template=$(LOCALE_DIR)/$(DOMAIN)/$(DOMAIN).pot
# These are locales that by default use the UTF-8 character set. For these
# locales the ".UTF-8" suffix should not be used when compiling locale
# definition files.
utf8_locales=ia ml_IN sr_RS vi_VN

# Phony targets.
.PHONY : help config pot rmpot mo localesgen

help:
	@echo "Please use \`make <target>' where <target> is one of"
	@echo "  config         to create the settings.php file"
	@echo "  localesgen     to generate the required locale definition files for your system"
	@echo "  pot            to make the PO Template file $(DOMAIN).pot"
	@echo "  mo             to update the PO files from the template and build binary MO files"
	@echo "  rmpot          to remove the PO Template file $(DOMAIN).pot"

# Make settings.php.
settings.php:
	cp include/templates/settings.php settings.php
	@echo
	@echo "Done. Now open settings.php in a text editor and change its settings."

# Make the PO Template file. In order to update the POT file, the file needs
# to be removed with `make rmpot' first.
$(template):
	xgettext -caiF --add-comments=i18n --force-po \
	--default-domain=$(DOMAIN) \
	--copyright-holder="Get GNU/Linux!" \
	--package-name="getgnulinux" \
	--package-version=0.0.1 \
	--msgid-bugs-address="https://github.com/figure002/getgnulinux/issues" \
	--from-code=UTF-8 -k_ \
	-o $(template) $(INCLUDE_DIR)/*.php $(INCLUDE_DIR)/templates/*.php $(PAGES_DIR)/*.php
	msguniq -o $(template) $(template)
	sed --in-place "$(template)" --expression=s/"SOME DESCRIPTIVE TITLE."/"Translation file for the getgnulinux.org website."/
	sed --in-place "$(template)" --expression=s/PACKAGE/getgnulinux/
	sed --in-place "$(template)" --expression=s/"Copyright (C) YEAR"/"Copyright (C) 2013"/
	sed --in-place "$(template)" --expression=s/"FIRST AUTHOR <EMAIL@ADDRESS>, YEAR"/"Get GNU\/Linux! <getgnulinux.org@proxy.dreamhost.com>, 2013"/
	sed --in-place "$(template)" --expression=s/CHARSET/$(CHARSET)/
	sed --in-place "$(template)" --expression=s/"Language: "/"Language: en"/
	@echo
	@echo "Build finished. The PO Template file: $(template)"

# Make settings file.
config: settings.php

# Make POT file.
pot: $(template)

# Remove POT file.
rmpot:
	@rm -i $(template)

# Update the PO files from the template and build binary MO file for each locale.
mo: $(template) make-po.sh
	./make-po.sh
	rm make-po.sh
	@echo
	@echo "Build finished. The PO files are in $(LOCALE_DIR)/$(DOMAIN)/."

make-po.sh:
	cp scripts/make-po.sh.in make-po.sh
	sed --in-place make-po.sh --expression=s/LOCALES/"$(LOCALES)"/
	sed --in-place make-po.sh --expression=s/LOCALE_DIR/$(LOCALE_DIR)/
	sed --in-place make-po.sh --expression=s/TEMPLATE/$(LOCALE_DIR)\\/$(DOMAIN)\\/$(DOMAIN).pot/
	sed --in-place make-po.sh --expression=s/DOMAIN/$(DOMAIN)/
	chmod +x make-po.sh

# Before the webserver can use the MO files for the locales, a list of locale
# definition files must be compiled first. See `man locale-gen' for more info.
localesgen: make-locales.sh
	./make-locales.sh
	rm make-locales.sh
	@echo
	@echo "Generating locale definition files finished. Restart your webserver to load the new locales."

make-locales.sh:
	cp scripts/make-locales.sh.in make-locales.sh
	sed --in-place make-locales.sh --expression=s/UTF8_LOCALES/"$(utf8_locales)"/
	sed --in-place make-locales.sh --expression=s/LOCALES/"$(LOCALES)"/
	sed --in-place make-locales.sh --expression=s/LOCALE_DIR/$(LOCALE_DIR)/
	sed --in-place make-locales.sh --expression=s/LOCALE_GEN/$(LOCALE_GEN)/
	chmod +x make-locales.sh

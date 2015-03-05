# Makefile for getgnulinux.org
#

# You can set these variables from the command line.
XGETTEXT = xgettext
LOCALE_GEN = locale-gen
M4 = m4
LOCALE_DIR = locale
DOMAIN = getgnulinux
CHARSET = UTF-8
LOCALES = ar_SA ast_ES bg_BG ca_AD da_DK de_DE en_US eo es_ES et_EE fi_FI fr_FR \
 gl_ES he_IL hr_HR ia id_ID it_IT ja_JP lt_LT mk_MK ml_IN nl_NL pl_PL pt_BR \
 pt_PT ru_RU sr_RS sv_SE tr_TR uk_UA uz_UZ vi_VN zh_CN zh_TW

# PO template file.
template = $(LOCALE_DIR)/$(DOMAIN)/$(DOMAIN).pot

# These are locales that by default use the UTF-8 character set. For these
# locales the ".UTF-8" suffix should not be used when compiling locale
# definition files.
utf8_locales = ia ml_IN sr_RS vi_VN

# xgettext flags.
xgettext_flags = -caiF --add-comments=translators --force-po \
--default-domain=$(DOMAIN) \
--copyright-holder="Get GNU/Linux!" \
--package-name="getgnulinux" \
--package-version=1 \
--msgid-bugs-address="https://github.com/figure002/getgnulinux/issues" \
--from-code=UTF-8 -k_ \

.PHONY : help
help:
	@echo "The following targets are available:"
	@echo "  config         to create the settings.php file"
	@echo "  locales        to generate the required locale definition files for your system"
	@echo "  pot            to make the PO Template file $(DOMAIN).pot"
	@echo "  mo             to update the PO files from the template and build binary MO files"
	@echo "  rmpot          to remove the PO Template file $(DOMAIN).pot"

# Make settings file
.PHONY : config.
config: settings.php

settings.php:
	cp include/templates/settings.php settings.php
	@echo
	@echo "Done. Open settings.php in a text editor to change settings."

# Make POT file.
.PHONY : pot
pot: $(template)

# Make the PO Template file. In order to update the POT file, the file needs
# to be removed with `make rmpot' first.
$(template): include/*.php include/templates/*.php pages/*.php
	$(XGETTEXT) $(xgettext_flags) -o $@ $^
	msguniq -o $@ $@
	@sed --in-place "$@" --expression=s/"SOME DESCRIPTIVE TITLE."/"Translation file for the getgnulinux.org website."/
	@sed --in-place "$@" --expression=s/PACKAGE/getgnulinux/
	@sed --in-place "$@" --expression=s/"Copyright (C) YEAR"/"Copyright (C) 2014"/
	@sed --in-place "$@" --expression=s/"FIRST AUTHOR <EMAIL@ADDRESS>, YEAR"/"Get GNU\/Linux! <no-reply@getgnulinux.org>, 2014"/
	@sed --in-place "$@" --expression=s/CHARSET/$(CHARSET)/
	@sed --in-place "$@" --expression=s/"Language: "/"Language: en"/
	@echo
	@echo "Build finished. The PO Template file: $@"

# Remove POT file.
.PHONY : rmpot
rmpot:
	@rm -i $(template)

# Update the PO files from the template and build binary MO file for each locale.
.PHONY : mo
mo: make-po.sh $(template)
	./$<
	rm $<
	@echo
	@echo "Build finished. The PO files are in $(LOCALE_DIR)/$(DOMAIN)/."

make-po.sh: scripts/make-po.sh.m4
	$(M4) -D LOCALES="$(LOCALES)" -D LOCALE_DIR=$(LOCALE_DIR) -D \
	TEMPLATE=$(template) -D DOMAIN=$(DOMAIN) $< > $@
	chmod +x $@

# Before the webserver can use the MO files for the locales, the required
# locale definition files must be compiled first. See `man locale-gen' for
# more info.
.PHONY : locales
locales: make-locales.sh
	./$<
	rm $<
	@echo
	@echo "Generating locale definition files finished. Restart your webserver to load the new locales."

make-locales.sh: scripts/make-locales.sh.m4
	$(M4) -D UTF8_LOCALES="$(utf8_locales)" -D LOCALES="$(LOCALES)" -D LOCALE_DIR=$(LOCALE_DIR) \
	-D LOCALE_GEN=$(LOCALE_GEN) $< > $@
	chmod +x $@

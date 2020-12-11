# Makefile for getgnulinux.org
#

XGETTEXT = xgettext
LOCALE_DIR = locale
BUILD_DIR = docroot/locale
DOMAIN = getgnulinux
CHARSET = UTF-8
GULP = npx gulp

xgettext_flags = -caiF --add-comments=translators --force-po \
--default-domain=$(DOMAIN) \
--copyright-holder="Get GNU/Linux!" \
--package-name="getgnulinux" \
--package-version=1 \
--msgid-bugs-address="https://github.com/getgnulinux/getgnulinux/issues" \
--from-code=UTF-8 -k_

.PHONY: ci
ci: clean docroot/settings.php locales build

.PHONY: develop
develop: clean locales build deploy-dev

.PHONY: locales
locales: \
	$(BUILD_DIR)/ar_SA/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/ast_ES/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/bg_BG/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/ca_AD/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/cy_GB/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/da_DK/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/de_DE/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/el_GR/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/eo/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/es_ES/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/et_EE/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/fa_IR/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/fi_FI/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/fr_FR/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/gl_ES/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/he_IL/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/hr_HR/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/ia_FR/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/id_ID/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/it_IT/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/ja_JP/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/lt_LT/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/mk_MK/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/ml_IN/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/ms_MY/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/nl_NL/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/pl_PL/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/pt_BR/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/pt_PT/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/ru_RU/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/si_LK/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/sr_RS/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/sv_SE/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/tr_TR/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/uk_UA/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/uz_UZ/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/vi_VN/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/zh_CN/LC_MESSAGES/$(DOMAIN).mo \
	$(BUILD_DIR)/zh_TW/LC_MESSAGES/$(DOMAIN).mo

docroot/settings.php: docroot/settings.php.sample
	@echo "Creating $@"
	cp $^ $@
	@echo "Open $@ in a text editor to configure GGL."
	@echo

$(BUILD_DIR)/%/LC_MESSAGES/$(DOMAIN).mo: $(LOCALE_DIR)/$(DOMAIN)/%.po $(BUILD_DIR)/%/LC_MESSAGES
	@echo "Building $@"
	msgfmt -v $< -o $@
	@echo

$(LOCALE_DIR)/$(DOMAIN)/%.po: $(LOCALE_DIR)/$(DOMAIN)/$(DOMAIN).pot
	@echo "Updating $@"
	msgmerge -v -U $@ $<
	@echo

$(BUILD_DIR)/%/LC_MESSAGES:
	@mkdir -p $@

$(LOCALE_DIR)/$(DOMAIN)/$(DOMAIN).pot: docroot/lib/*.php docroot/lib/views/*.php src/templates/*.php
	@echo "Updating $@"
	$(XGETTEXT) $(xgettext_flags) -o $@ $^
	msguniq -o $@ $@
	@sed --in-place "$@" --expression=s/"SOME DESCRIPTIVE TITLE."/"Translation file for the getgnulinux.org website."/
	@sed --in-place "$@" --expression=s/PACKAGE/getgnulinux/
	@sed --in-place "$@" --expression=s/"Copyright (C) YEAR"/"Copyright (C) 2014"/
	@sed --in-place "$@" --expression=s/"FIRST AUTHOR <EMAIL@ADDRESS>, YEAR"/"Get GNU\/Linux! <no-reply@getgnulinux.org>, 2014"/
	@sed --in-place "$@" --expression=s/CHARSET/$(CHARSET)/
	@sed --in-place "$@" --expression=s/"Language: "/"Language: en"/
	@echo

.PHONY: build
build:
	$(GULP) build

.PHONY: deploy-dev
deploy-dev:
	$(GULP) deploy:dev

.PHONY: deploy
deploy:
	$(GULP) deploy:prod

.PHONY: clean
clean:
	$(GULP) clean clean:images

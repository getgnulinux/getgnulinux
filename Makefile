# Default target executed when no arguments are given to make.
default_target: all
.PHONY : default_target

SHELL=/bin/bash
INCLUDE_DIR=_include
PAGES_DIR=_pages
LOCALE_DIR=_locale
DOMAIN=messages
CHARSET=UTF-8
TEMPLATE=$(DOMAIN).pot

all:
	@xgettext --default-domain=$(DOMAIN) -k_ -o $(TEMPLATE) $(INCLUDE_DIR)/*.php $(PAGES_DIR)/*.php
	@sed --in-place $(TEMPLATE) --expression=s/CHARSET/$(CHARSET)/
	@sed --in-place $(TEMPLATE) --expression=s/PACKAGE\ VERSION/0.1.0/
	@sed --in-place $(TEMPLATE) --expression=s/FULL\ NAME/Serrano\ Pereira/
	@sed --in-place $(TEMPLATE) --expression=s/EMAIL@ADDRESS/serrano.pereira@gmail.com/
	@sed --in-place $(TEMPLATE) --expression=s/FIRST\ AUTHOR/Serrano\ Pereira/
	@sed --in-place $(TEMPLATE) --expression=s/YEAR/2011/
	@cp scripts/update.sh.in update.sh
	@chmod +x update.sh
	@sed --in-place update.sh --expression=s/LOCALE_DIR/$(LOCALE_DIR)/
	@sed --in-place update.sh --expression=s/TEMPLATE/$(TEMPLATE)/
	@sed --in-place update.sh --expression=s/DOMAIN/$(DOMAIN)/
	@./update.sh
	@rm update.sh
	@echo ""
	@echo "Done."

.PHONY: clean

clean:
	rm -f $(TEMPLATE) *~ update.sh

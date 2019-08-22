IMPORT_DIR=import
IMPORT_ZIP=getgnulinuxpot.zip
IMPORT_PREFIX=getgnulinuxpot_
DOMAIN=getgnulinux

.PHONY : all clean

all: \
	$(DOMAIN)/ar_SA.po \
	$(DOMAIN)/ast_ES.po \
	$(DOMAIN)/bg_BG.po \
	$(DOMAIN)/ca_AD.po \
	$(DOMAIN)/cy_GB.po \
	$(DOMAIN)/da_DK.po \
	$(DOMAIN)/de_DE.po \
	$(DOMAIN)/el_GR.po \
	$(DOMAIN)/en_GB.po \
	$(DOMAIN)/eo.po \
	$(DOMAIN)/es_ES.po \
	$(DOMAIN)/et_EE.po \
	$(DOMAIN)/fa_IR.po \
	$(DOMAIN)/fi_FI.po \
	$(DOMAIN)/fr_FR.po \
	$(DOMAIN)/gl_ES.po \
	$(DOMAIN)/he_IL.po \
	$(DOMAIN)/hr_HR.po \
	$(DOMAIN)/ia_FR.po \
	$(DOMAIN)/id_ID.po \
	$(DOMAIN)/it_IT.po \
	$(DOMAIN)/ja_JP.po \
	$(DOMAIN)/lt_LT.po \
	$(DOMAIN)/mk_MK.po \
	$(DOMAIN)/ml_IN.po \
	$(DOMAIN)/ms_MY.po \
	$(DOMAIN)/nl_NL.po \
	$(DOMAIN)/pl_PL.po \
	$(DOMAIN)/pt_BR.po \
	$(DOMAIN)/pt_PT.po \
	$(DOMAIN)/ru_RU.po \
	$(DOMAIN)/si_LK.po \
	$(DOMAIN)/sr_RS.po \
	$(DOMAIN)/sv_SE.po \
	$(DOMAIN)/tr_TR.po \
	$(DOMAIN)/uk_UA.po \
	$(DOMAIN)/uz_UZ.po \
	$(DOMAIN)/vi_VN.po \
	$(DOMAIN)/zh_CN.po \
	$(DOMAIN)/zh_TW.po

$(DOMAIN)/%.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)%.po $(IMPORT_DIR)
	mv "$<" "$@"

# Rename files for which the locale name doesn't match.

$(IMPORT_DIR)/$(IMPORT_PREFIX)ia_FR.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)ia.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)ast_ES.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)ast.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)gl_ES.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)gl.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)el_GR.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)el.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)en_GB.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)en.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)cy_GB.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)cy.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)ca_AD.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)ca.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)mk_MK.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)mk.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)si_LK.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)si.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)id_ID.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)id.po
	mv "$<" "$@"

$(IMPORT_DIR)/$(IMPORT_PREFIX)uz_UZ.po: $(IMPORT_DIR)/$(IMPORT_PREFIX)uz@Latn.po
	mv "$<" "$@"

$(IMPORT_DIR): $(IMPORT_ZIP)
	unzip "$<" -d "$@"

clean:
	rm -rf "./$(IMPORT_DIR)"

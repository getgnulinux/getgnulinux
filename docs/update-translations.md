# Merging Transifex translations

Translations are done in Transifex. This document describes how to download and
merge translations from Transifex into the getgnulinux Git repository.

1. Log in to [Transifex](https://www.transifex.com/serrano/getgnulinux/).
2. Go to Resources > getgnulinux.pot
3. Click on the right-hand menu icon and select "Download all translations (ZIP)".
4. Click "Request ZIP". A download link will be sent to your email address.
5. Save the ZIP file to `locale/serrano_getgnulinux_getgnulinuxpot.zip` in the
   Git repository.
6. Run `cd locale` to change to the "locale" directory.
7. Run `make clean import` to unzip the translations. This creates a new
   directory called "import" containing the translations from the ZIP file.
8. Run `make all` to move all translations to the "locale/getgnulinux/"
   directory. Alternatively, you may merge only a subset of translations, for
   example `make getgnulinux/zh_TW.po getgnulinux/nl_NL.po`.
9. The updated translations are now inside "locale/getgnulinux/". You can now
   commit the updated translations.

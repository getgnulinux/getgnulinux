<?php

/*
 * Configurable settings file.
 */

## The base URL of the website. Should start with http:// and end with a slash.
## Leave blank to auto detect the base URL.
# Example: "http://getgnulinux.org/"
$ggl->config['base_url'] = "";

## The URL of the getgnulinux.org blog.
$ggl->config['blog_url'] = "http://blog.getgnulinux.org/";

## The URL that can be used to contact the getgnulinux team.
$ggl->config['contact_url'] = "http://blog.getgnulinux.org/contact/";

## The URL for participation guidelines.
$ggl->config['participate_url'] = "http://blog.getgnulinux.org/participate/";

## The URL for the translation guidelines.
$ggl->config['l10n_url'] = "http://blog.getgnulinux.org/participate/translation/";

## The URL where the getgnulinux project is maintained.
$ggl->config['project_url'] = "https://launchpad.net/getgnulinux";

## The URL of the bug tracker.
$ggl->config['tracker_url'] = "https://bugs.launchpad.net/getgnulinux";

## Settings for Piwik - real time web analytics.
# piwik: Set to to true to track visits with Piwik.
# piwik_url: URL to your Piwik installation (with trailing slash).
# piwik_idsite: The site ID of the website you are tracking in Piwik.
$ggl->config['piwik'] = false;
$ggl->config['piwik_url'] = "";
$ggl->config['piwik_idsite'] = 1;

## Flattr is the worlds first social micro-payment system.
# flattr: Set to true to display a Flattr button at the bottom of pages.
# flattr_url: The Flattr button URL for your thing (check button code for URL).
# flattr_button_style: 'large' | 'compact'
$ggl->config['flattr'] = false;
$ggl->config['flattr_url'] = "http://flattr.com/thing/433154/get-GNULinux";
$ggl->config['flattr_button_style'] = "compact";

## AddThis helps you integrate sharing tools into your site, spread your
## content, and drive social traffic. Enabling this widget adds a section
## "Anonymous data collection" to the Terms of Use page.
# addthis: Set to true to add an AddThis widget to the site.
# addthis_url: The AddThis javascript URL from the AddThis widget code.
$ggl->config['addthis'] = false;
$ggl->config['addthis_url'] = "http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ec841691275ca5c";


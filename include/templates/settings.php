<?php

/*
 * Settings file for GetGNULinux.org
 */

/* The base URL of the website. Should start with http:// and end with a slash.
 * Leave blank to auto detect the base URL.
 * Example: "http://getgnulinux.org/"
 */
$ggl->config['base_url'] = "";

/* The URL of the blog. */
$ggl->config['blog_url'] = "http://blog.getgnulinux.org/";

/* The URL of a page with contact information. */
$ggl->config['contact_url'] = "http://blog.getgnulinux.org/contact/";

/* The URL for participation guidelines. */
$ggl->config['participate_url'] = "http://blog.getgnulinux.org/participate/";

/* The URL for translation guidelines. */
$ggl->config['l10n_url'] = "http://blog.getgnulinux.org/participate/translation/";

/* The URL of the website's source repository. */
$ggl->config['project_url'] = "https://github.com/figure002/getgnulinux";

/* The URL of the bug tracker. */
$ggl->config['tracker_url'] = "https://github.com/figure002/getgnulinux/issues";

/* Piwik - real time web analytics.
 *
 * piwik: Set to to true to track visits with Piwik.
 * piwik_url: URL to your Piwik installation (with trailing slash).
 * piwik_idsite: The site ID of the website you are tracking in Piwik.
 */
$ggl->config['piwik'] = false;
$ggl->config['piwik_url'] = "";
$ggl->config['piwik_idsite'] = 1;

/* Flattr - social micro-payment system.
 *
 * flattr: Set to true to display a Flattr button in the footer.
 * flattr_url: The Flattr button URL for your thing.
 */
$ggl->config['flattr'] = false;
$ggl->config['flattr_url'] = "http://flattr.com/thing/433154/get-GNULinux";

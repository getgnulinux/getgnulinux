<html>
<head>
<title>Setup - get GNU/Linux!</title>
</head>
<body>

<h1>get GNU/Linux!</h1>

settings.php not found. Follow these steps to create one:
<ol>
    <li>Open a terminal window;</li>
    <li>Change to the root folder (<code>cd <?php print $root; ?></code>);</li>
    <li>Run <code>make config</code> to create the settings file (or manually copy it from <code><?php print $root; ?>/include/templates/settings.php</code>);</li>
    <li>Open settings.php in a text editor and change the settings where necessary.</li>
</ol>

Finally, make sure that Apache module <code>mod_rewrite</code> is enabled. Then reload this page.

</body>
</html>

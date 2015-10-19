<!DOCTYPE html>
<head lang="en">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>get GNU/Linux!</title>
  <link rel="stylesheet" type="text/css" href="/style/main-ltr.css" media="all" />
</head>
<body>
<main>
  <section>
    <div class="maxwidth">
      <h1>get GNU/Linux!</h1>

      <p>Almost there! Please follow these steps.</p>
      <ol>
        <li>Open a terminal and change to the root folder;</li>
        <li>Run `<code>make settings.php</code>' to create the settings.php file (or manually copy it from <code>templates/settings.php</code>);</li>
        <li>Open settings.php in a text editor and change the settings where necessary;</li>
        <li>Run `<code>make</code>' to generate the binary locale files (requires `gettext');</li>
        <li>Make sure that Apache module <code>mod_rewrite</code> is enabled;</li>
        <li>To make translations work, you need to generate locale definition files on the server. On commercial web hosting servers, there is no need to do this manually. If you are on a Debian based system, you may execute `<code>scripts/make-locales.sh</code>' as root to generate them.</li>
      </ol>
      <p>Finally, reload this page.</p>
    </div>
  </section>
</main>
</body>
</html>

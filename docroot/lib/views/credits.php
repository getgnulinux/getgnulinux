<?php
# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
  exit(1);
}

$this->load_header();
?>

<main dir="ltr">
  <article>
    <div class="container">
      <header>
        <h1>Thank you</h1>
        <div class="page-intro">
          <p>We are grateful and indebted towards many kind individuals, who contributed or let us use their work for our purposes.</p>
        </div>
      </header>

      <h2>Licensing</h2>
      <p>Except for the material listed below, the content of the website and its graphical assets are published under a <a href="https://creativecommons.org/licenses/by-sa/4.0/" rel="external">Creative Commons Attribution-ShareAlike 4.0 International License</a>.</p>
      <p>The <a href="<?php $this->text('project_url'); ?>" rel="external" title="GitHub Project">source code</a> of the web application is licensed under the <a href="https://www.gnu.org/licenses/agpl-3.0.html" rel="external">GNU Affero General Public License Version 3</a>.</p>
      <p>Copyright <?php echo date("Y"); ?> <a href="https://github.com/getgnulinux/" rel="external">get GNU/Linux!</a></p>

      <h2 id="graphics">Graphics</h2>
      <p>Most graphics on this website are either copied from or derived from the following sources, according to their respective copyright licenses:</p>

      <ul class="browser-default">
        <li>Ubuntu, Fedora, and Debian logos: in accordance with the respective trademark guidelines (<a href="https://www.ubuntu.com/aboutus/trademarkpolicy" rel="external">Ubuntu</a>, <a href="https://fedoraproject.org/wiki/Legal/TrademarkGuidelines" rel="external">Fedora</a>, <a href="https://www.debian.org/logos/" rel="external">Debian</a>)</li>
        <li>The computer image on the "Try or install" page is of Purism's <a href="https://puri.sm/products/librem-mini/" rel="external">Librem Mini</a> (CC-BY-SA 4.0 license)</li>
        <li>LibreOffice logo by Christoph Noack - <a href="https://creativecommons.org/licenses/by-sa/3.0" title="Creative Commons Attribution-Share Alike 3.0">CC BY-SA 3.0</a>, <a href="https://commons.wikimedia.org/w/index.php?curid=34369081">Link</a></li>
      </ul>

      <h2 id="translators">Translators</h2>

      <p>Weblate translators:</p>

      <?php require 'include/weblate_credits.html'; ?>

      <p>Transifex translators:</p>

      <?php require 'include/transifex_credits.html'; ?>

      <br>

      <p>Did we forget your name? Please <a href="https://community.getgnulinux.org/u/serrano/summary" rel="external">send me a message</a>.</p>

      <h2>Inspiration &amp; reading</h2>
      <ul class="browser-default">
        <li>A fair amount came from the <a href="https://www.fsf.org/" rel="external">Free Software Foundation</a>. Verbatim copying of most FSF articles is allowed if notice is preserved. Note that we bear no affiliation with the FSF&mdash;views expressed on our websites might not represent those of the FSF.</li>
        <li><a href="http://www.timj.co.uk/digiculture/drm-fallacy" rel="external">The fallacy of DRM</a>, an article by Tim Jackson (derivative use with permission);</li>
        <li><a href="https://www.lafkon.net/tc/" rel="external">Trusted Computing</a>, a video by Benjamin Stephan and Lutz Vogel, <abbr title="Creative Commons">CC</abbr> sampling plus license;</li>
        <li><a href="http://free-culture.cc/" rel="external">Free Culture</a>, a book by Lawrence Lessig, <abbr title="Creative Commons">CC</abbr> <abbr title="Attribution, Non Commercial">BY-NC</abbr> license;</li>
        <li><a href="http://www.counterpoint-online.org/cgi-bin/item.cgi?id=618" rel="external">Unbounded Freedom</a>, a book by Rosemary Bechler, <abbr title="Creative Commons">CC</abbr> <abbr title="Attribution, Non Commercial, Share Alike">BY-NC-SA</abbr> license;</li>
      </ul>

      <h2>And also</h2>
      <p>Thank you to:</p>
      <ul class="browser-default">
        <li><a href="https://www.tuxfamily.org/" rel="external">TuxFamily</a> for providing excellent hosting service.</li>
      </ul>

      <br>
    </div>
  </article>
</main>

<?php $this->load_footer(); ?>

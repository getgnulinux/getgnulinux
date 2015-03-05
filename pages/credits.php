<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
  exit(1);
}

$this->load_header();

?>

<main dir="ltr" role="main">

  <section>
    <div class="maxwidth">

      <h1>Thank you</h1>

      <div class="page-intro">
        <p>We are grateful and indebted towards many kind individuals, who contributed or let us use their work for our purposes.</p>
      </div>

      <h2>Licensing</h2>
      <p>Except for the material listed below, the content of the website and its graphical assets are published under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 License</a>.</p>
      <p>The <a href="<?php $this->text('project_url'); ?>" title="GitHub Project">source code</a> of the web application is licensed under the <a href="http://www.gnu.org/licenses/agpl-3.0.html">GNU Affero General Public License Version 3</a>.</p>
      <p>Copyright <?php echo date("Y"); ?> <a href="http://getgnulinux.org/">get GNU/Linux!</a></p>

      <h2 id="graphics">Graphics</h2>
      <p>Most graphics on this website are either copied from or derived from the following sources, according to their respective copyright licenses:</p>

      <ul>
        <li>Background patterns by <a href="http://subtlepatterns.com/">Subtle Patterns</a>, <abbr title="Creative Commons">CC</abbr> <abbr title="Attribution, Share Alike">BY-SA</abbr> license.</li>

        <li><a href="http://openclipart.org/">OpenClipart</a> material, released to the Public Domain: <a href="/images/sources/switch_to_linux/Display.svg">Display.svg</a></li>

        <li><a href="http://tango.freedesktop.org/Tango_Icon_Library">Tango icons</a> by the <a href="http://tango.freedesktop.org/">Tango Desktop Project</a>, released to the Public Domain.</li>

        <li>Material from other sources:
          <ul>
            <li><a href="http://www.gnu.org/gnu30/">The GNU 30th banner</a> by the Free Software Foundation, <abbr title="Creative Commons">CC</abbr> <abbr title="Attribution, Share Alike">BY-SA</abbr> 2.0 license;</li>
            <li><a href="http://en.wikipedia.org/wiki/File:Tux-simple.svg">Tux-simple.svg</a> by Larry Ewing, permission to copy if credit given.</li>
          </ul>
        </li>

        <li id="link_buttons">Some of the <a href="<?php $this->base_url('link_buttons'); ?>">link buttons</a> contain material subjected to the following licensing:
          <ul>
            <li><a href="http://en.wikipedia.org/wiki/File:Heckert_GNU_white.svg">Heckert_GNU_white.svg</a> by Aurelio A. Heckert, <a href="http://artlibre.org/licence/lal/en/">Free Art License</a>;</li>
            <li><a href="http://www.gnu.org/graphics/gnusvgart.html">The GNU Head</a> by Sven H, used with permission from author;</li>
            <li><a href="http://commons.wikimedia.org/wiki/File:Nuvola_apps_emacs.png">Nuvola_apps_emacs.png</a> by David Vignoni, presumably <a href="http://en.wikipedia.org/wiki/GNU_Free_Documentation_License">GNU FDL license</a>;</li>
            <li><a href="http://commons.wikimedia.org/wiki/File:Tux.png">Tux.png</a> by Larry Ewing, permission to copy if credit given.</li>
          </ul>
        </li>

        <li>Ubuntu and Fedora logos: in accordance with the respective trademark guidelines (<a href="http://fedoraproject.org/wiki/Legal/TrademarkGuidelines">Fedora</a>, <a href="http://www.ubuntu.com/aboutus/trademarkpolicy">Ubuntu</a>)</li>
        <li>gNewSense artwork: based on work <a href="http://www.flickr.com/photos/davelab6/sets/72157594509090768/">by Dave Crossland</a>, <abbr title="Creative Commons">CC</abbr> <abbr title="Attribution, Share Alike">BY-SA</abbr>, with special thanks.</li>
        <li><a href="http://trisquel.info/en/wiki/logo">Trisquel logo</a> by Rubén Rodríguez Pérez, <a href="http://en.wikipedia.org/wiki/GNU_General_Public_License">GNU <abbr title="General Public License">GPL</abbr></a>.</li>
        <li>The laptop image on the "Try or install" page used with permission from <a href="http://www.system76.com/">system76.com</a>.</li>
      </ul>

      <h2 id="fonts">Fonts</h2>

      <ul>
        <li><a href="http://www.google.com/fonts/specimen/Open+Sans">Open Sans</a> by Steve Matteson, <a href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache License, version 2.0</a>;</li>
        <li><a href="http://fontawesome.io">Font Awesome</a> by Dave Gandy, <a href="http://scripts.sil.org/cms/scripts/page.php?item_id=OFL_web">SIL OFL 1.1</a> and <a href="http://opensource.org/licenses/MIT">MIT License</a>. <i class="fa fa-thumbs-o-up"></i></li>
      </ul>

      <h2 id="code">Code</h2>

      <ul>
        <li><a href="http://html5boilerplate.com/">HTML5 Boilerplate</a> by <a href="https://github.com/h5bp">H5BP</a>, <a href="http://opensource.org/licenses/MIT">MIT License</a>;</li>
        <li><a href="https://jquery.com/">jQuery</a> by the jQuery Foundation, <a href="http://opensource.org/licenses/MIT">MIT License</a>;</li>
        <li><a href="https://github.com/carhartl/jquery-cookie">jQuery Cookie</a> by Klaus Hartl, <a href="http://opensource.org/licenses/MIT">MIT License</a>;</li>
        <li><a href="http://plugins.jquery.com/scrollTo/">jQuery scrollTo</a> by Ariel Flesler, <a href="http://opensource.org/licenses/MIT">MIT License</a>;</li>
        <li><a href="http://www.woothemes.com/flexslider/">jQuery FlexSlider</a> by WooThemes, <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU General Public License, version 2</a>;</li>
        <li><a href="http://modernizr.com/">Modernizr</a> by the <a href="https://github.com/orgs/Modernizr/members">Modernizr team</a>, <a href="http://opensource.org/licenses/MIT">MIT License</a>;</li>
        <li><a href="http://craig.is/killing/mice">Mousetrap</a> by Craig Campbell, <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License, Version 2.0</a>;</li>
        <li><a href="http://benhowdle.im/svgeezy/">SVGeezy</a> by <a title="Ben Howdle" href="http://benhowdle.im">Ben Howdle</a> and <a title="Jack Smith" href="http://jacksmith.is">Jack Smith</a>, <a href="http://www.wtfpl.net/"><abbr title="Do What the Fuck You Want to Public License">WTFPL</abbr></a>.</li>
      </ul>

      <h2 id="translators">Translations</h2>

      <h4>Arabic</h4>
      <p>
        Hassan Ibraheem,
        <a href="https://www.transifex.com/accounts/profile/kraim/">kraim</a> and
        <a href="https://www.transifex.com/accounts/profile/malhargan/">Mohammad Alhargan</a>.
      </p>

      <h4>Asturian</h4>
      <p>
        <a href="http://blogs.altuxa.com/tapaponga/">Iñigo Varela</a>,
        <a href="https://www.transifex.com/accounts/profile/Xuacu/">Xuacu Saturio</a>, and the
        <a href="http://softastur.org/">Softastur translators team</a>.
      </p>

      <h4>Bulgarian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/CrasHandBurN/">Atanas Kovachki</a>.
      </p>

      <h4>Catalan</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/papapep/">Josep Sànchez</a>,
        <a href="http://cortsenc.bloc.cat/">Oriol Piera</a> and
        <a href="http://rcarreras.blogspot.com/">Rafael Carreras</a>.
      </p>

      <h4>Chinese (Simplified)</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/dotkrnl/">Jason Lau</a>,
        <a href="https://www.transifex.com/accounts/profile/leonfeng/">leonfeng</a>,
        <a href="https://www.transifex.com/accounts/profile/Pxseudoprime/">Sayson Peng</a>,
        and others.
      </p>

      <h4>Chinese (Traditional)</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/s8321414/">冥王歐西里斯</a>,
        <a href="https://www.transifex.com/accounts/profile/Hapsburg/">Agustín Wu</a>,
        <a href="https://www.transifex.com/accounts/profile/brli7848/">BrLi</a>,
        <a href="https://www.transifex.com/accounts/profile/maxwux/">Max Wu</a>,
        <a href="https://www.transifex.com/accounts/profile/aphroteus/">Po-Chun Huang</a>, and
        <a href="https://www.transifex.com/accounts/profile/Vdragon/">Ｖ字龍</a>.
      </p>

      <h4>Croatian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/CroatianFan/">Mislav E.L.</a>.
      </p>

      <h4>Dutch</h4>
      <p>
        <a href="http://astrofloyd.org/">AstroFloyd</a>,
        Johan Vervloet, and
        Tim Speetjens.
      </p>

      <h4>Esperanto</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/damirmf/">Damir</a>,
        <a href="https://www.transifex.com/accounts/profile/dominiko/">Dominique Pellé</a>,
        <a href="https://www.transifex.com/accounts/profile/fenris/">fenris</a>, and
        <a href="https://www.transifex.com/accounts/profile/KIAaze/">KIAaze</a>.
      </p>

      <h4>Estonian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/poet/">poet</a>.
      </p>

      <h4>Finnish</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/jsonic/">Juhani Numminen</a>.
      </p>

      <h4>French</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/nh2amine/">Amine Brikci-Nigassa</a>,
        Anthony Verez,
        Bruno Bord,
        Bruno Ethvignot,
        <a href="https://www.transifex.com/accounts/profile/MagicFab/">Fabián Rodríguez</a>,
        Joseph Maillardert,
        <a href="https://www.transifex.com/accounts/profile/KIAaze/">KIAaze</a>,
        Laurent Richard,
        Loïs Di Qual,
        <a href="https://www.transifex.com/accounts/profile/mauron/">mauron</a>,
        <a href="http://www.ariadacapo.net/">Olivier Cleynen</a>,
        <a href="https://www.transifex.com/accounts/profile/RyDroid/">Spanti Nicola</a>,
        <a href="https://www.transifex.com/accounts/profile/lkppo/">Stéphane Aulery</a>, and
        Thiébaut Hillenweck.
      </p>

      <h4>Galician</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/oisempreceibes/">Iago Oi</a>,
        <a href="https://www.transifex.com/accounts/profile/mmeixide/">Manuel Meixide</a>, and
        <a href="https://www.transifex.com/accounts/profile/gaioso/">Rafael Rodríguez Gaioso</a>.
      </p>

      <h4>German</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/Atalanttore/">Ettore Atalan</a>,
        <a href="https://www.transifex.com/accounts/profile/desperateCoder/">guyfawkes</a>,
        <a href="https://www.transifex.com/accounts/profile/KIAaze/">KIAaze</a>,
        <a href="https://www.transifex.com/accounts/profile/emukis/">Marcel</a>,
        <a href="https://www.transifex.com/accounts/profile/monoto/">monoto</a>,
        <a href="https://www.transifex.com/accounts/profile/stegomon/">stegomon</a>,
        <a href="https://www.transifex.com/accounts/profile/to_ba/">Tobias Bannert</a>,
        <a href="https://www.transifex.com/accounts/profile/ToBeFree/">Tobias Frei</a>,
        and others.
      </p>

      <h4>Hebrew</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/Yaron/">Yaron Shahrabani</a>
        and proofreading by Oren B.
      </p>

      <h4>Indonesian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/andimicro/">andimicro</a>.
      </p>

      <h4>Interlingua</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/Funkin/">Emilio Sepúlveda</a>,
        <a href="https://www.transifex.com/accounts/profile/McDutchie/">Martijn Dekker</a> and
        <a href="https://www.transifex.com/accounts/profile/softinterlingua/">SoftInterlingua</a>.
      </p>

      <h4>Italian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/OpenCode/">Francesco Apruzzese</a>,
        <a href="https://www.transifex.com/accounts/profile/pappi_/">Giuseppe Pappalardo</a>,
        <a href="https://www.transifex.com/accounts/profile/novalore/">Lorenzo Novaro</a>,
        <a href="https://www.transifex.com/accounts/profile/jeckodevelopment/">Luca Marzo</a>,
        <a href="https://www.transifex.com/accounts/profile/Marco91/">Marco Mangiacavalli</a>,
        <a href="https://www.transifex.com/accounts/profile/xseris/">Simone Sandri</a>,
        and others.
      </p>

      <h4>Lithuanian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/noTime/">Tadas Domarkas</a>.
      </p>

      <h4>Lojban</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/durka42/">durka42</a> and
        <a href="https://www.transifex.com/accounts/profile/kiepier/">kiepier</a>.
      </p>

      <h4>Macedonian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/exoos/">exoos</a>.
      </p>

      <h4>Polish</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/penknife/">Bogusław B.</a> and
        <a href="https://www.transifex.com/accounts/profile/poczciwiec/">poczciwiec</a>.
      </p>

      <h4>Portuguese (Brazil)</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/bruno_b/">Bruno Bacelar</a>,
        <a href="https://www.transifex.com/accounts/profile/ezequiel.ezb/">Ezequiel Santos</a>,
        <a href="https://www.transifex.com/accounts/profile/maz/">Fábio C. Barrionuevo da Luz</a>,
        <a href="https://www.transifex.com/accounts/profile/heuripedes/">Higor</a>,
        <a href="https://www.transifex.com/accounts/profile/JulioMario/">Julio Mario Jr.</a>,
        <a href="https://www.transifex.com/accounts/profile/nadiastabile/">Nadia Stabile</a>,
        <a href="https://www.transifex.com/accounts/profile/rafaelff1/">Rafael Ferreira</a>, and
        <a href="https://www.transifex.com/accounts/profile/slackhideo/">Tiago</a>.
      </p>

      <h4>Russian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/Alissa/">Alissa</a>,
        <a href="https://www.transifex.com/accounts/profile/Antic1tizen/">Antic1tizen</a>,
        <a href="https://www.transifex.com/accounts/profile/player1_76/">Фёдор Ходьков</a>, and
        <a href="https://www.transifex.com/accounts/profile/vst/">V'yacheslav Stetskevych</a>.
      </p>

      <h4>Spanish</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/technoguyx/">Bastián Núñez</a>,
        <a href="https://www.transifex.com/accounts/profile/durka42/">durka42</a>,
        <a href="https://www.transifex.com/accounts/profile/Funkin/">Emilio Sepúlveda</a>,
        <a href="http://gustavonarea.net/">Gustavo Narea</a>,
        Jonathan H. Fernández,
        Martín Carr, and
        Miguel L. García.
      </p>

      <h4>Swedish</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/riiga/">riiga</a>.
      </p>

      <h4>Turkish</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/basarancaner/">Caner Başaran</a>,
        <a href="https://www.transifex.com/accounts/profile/drstrangelove/">drstrangelove</a>,
        <a href="https://www.transifex.com/accounts/profile/necdetyucel/">Necdet Yücel</a> and
        <a href="https://www.transifex.com/accounts/profile/zeugma/">zeugma</a>.
      </p>

      <h4>Ukrainian</h4>
      <p>
        <a href="https://www.transifex.com/accounts/profile/Rostyslav/">Ростислав</a> and
        <a href="https://www.transifex.com/accounts/profile/vst/">V'yacheslav Stetskevych</a>.
      </p>

      <h4>Vietnamese</h4>
      <p>
        Clytie Siddall from the <a href="http://vnoss.net/dokuwiki/doku.php?id=projects:l10n">Vietnamese Free Software Translation Team</a>,
        Minh Ngoc Le, and
        <a href="https://www.transifex.com/accounts/profile/ppanhh/">Phan Anh</a>.
      </p>

      <h2>Inspiration &amp; reading</h2>
      <ul>
        <li>A fair amount came from the <a href="http://www.fsf.org/">Free Software Foundation</a>. Verbatim copying or most FSF articles is allowed if notice is preserved. Note that we bear no affiliation with the FSF - views expressed on our websites might not represent those of the FSF.</li>
        <li><a href="http://www.timj.co.uk/digiculture/drm-fallacy">The fallacy of DRM</a>, an article by Tim Jackson (derivative use with permission);</li>
        <li><a href="http://www.lafkon.net/tc/">Trusted Computing</a>, a video by Benjamin Stephan and Lutz Vogel, <abbr title="Creative Commons">CC</abbr> sampling plus license;</li>
        <li><a href="http://free-culture.cc/">Free Culture</a>, a book by Lawrence Lessig, <abbr title="Creative Commons">CC</abbr> <abbr title="Attribution, Non Commercial">BY-NC</abbr> license;</li>
        <li><a href="http://www.counterpoint-online.org/cgi-bin/item.cgi?id=618">Unbounded Freedom</a>, a book by Rosemary Bechler, <abbr title="Creative Commons">CC</abbr> <abbr title="Attribution, Non Commercial, Share Alike">BY-NC-SA</abbr> license;</li>
      </ul>

      <h2>And also</h2>
      <p>Thank you to:</p>
      <ul>
        <li><a href="http://www.tuxfamily.org/">TuxFamily</a> for providing excellent hosting service;</li>
        <li>Danijel Orsolic and the <a href="http://www.nuxified.org/" title="friendly free software support forum">Nuxified.org</a> site for hosting our forum;</li>
        <li>The following <a href="http://www.nuxified.org/" title="friendly free software support forum">Nuxified</a> members for their kind continuous support: a_thing, AndrewB, Bjwebb, dylunio, guyjohnston, kuan, nwrman, reptiler, tbuitenh and more.</li>
      </ul>

    </div>
  </section>

</main>

<?php $this->load_footer(); ?>

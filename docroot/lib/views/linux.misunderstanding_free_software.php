<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

$footnote1 = '<sup><a class="footnote" id="footnote-ref-1a" href="#footnote-1">1</a></sup>';
$footnote2 = '<sup><a class="footnote" id="footnote-ref-1b" href="#footnote-1">1</a></sup>';

?>

<main>
  <div class="container">
    <article>
      <header>
        <h1><?php print _("How to Misunderstand Free Software"); ?></h1>

        <div class="page-intro">
          <p><?php
          # TRANSLATORS: use the definition of "free software" on GNU.org
          print _("Misconceptions about free software, corrected."); ?></p>
        </div>
      </header>

      <section>
        <h2 id="programmers_paid"><?php print _("The software industry can't keep going if programmers don't get paid"); ?></h2>
        <img class="float-<?php print $this->rtltr("right", "left"); ?> w30 hide-on-large-and-down" src="/images/misunderstood.svg" alt="Worried woman">
        <p><?php print _("Let's begin with one simple fact: free software programmers <em>do</em> like to get paid, and all need to buy lunch at some time."); ?></p>
        <p><?php
        # TRANSLATORS: Here, the %s placeholder simply puts a link to a footnote in this page
        $p = _("When we mention free software, we refer to <strong>liberty not price</strong>. You may actually pay to get free software (or \"open source\" software %s), which you can then study, change and copy at will."); printf($p, $footnote1); ?></p>
        <p><?php print _("How does it work? You can think about it the following way: software is just code, code is only math. Once you view software as <strong>useful math</strong>, an elaborate language, not like ordinary property, there is no reason to restrict others' use of it."); ?></p>
        <p><?php print _("Just like math (where nobody would claim property on an equation), software requires advanced knowledge to be adapted, improved, applied correctly. This is where programmers generally generate an income: many customers, especially companies, are willing to pay for regular security updates and improvements on software."); ?></p>
        <p><?php print _("Free software companies benefit from a very decentralised development system with a large number of voluntary contributors. The revenues inside the free software industry might be smaller than in the proprietary counterpoint, but are by no means negligible. In the end, individual users generally end up using free software at no cost."); ?></p>
        <p><?php print _("Free software is not about killing incentives for programmers. It's about seeing code as knowledge which should not be hidden from the user. It works with a different business model, in which many companies already do well."); ?></p>
      </section>

      <section>
        <h2 id="innovation_killed"><?php print _("Innovation is killed in free software"); ?></h2>
        <p><?php print _("The common perception is that if everyone can copy ideas, innovation will be stifled."); ?></p>
        <p><?php print _("In fact, freedom is often <strong>the key to innovative and successful software</strong>."); ?></p>
        <ul class="browser-default">
          <li><?php print _("Anyone is allowed and encouraged to work upon it;"); ?></li>
          <li><?php print _("Many people are willing to participate;"); ?></li>
          <li><?php print _("There is no need to re-invent everything, ideas can be improved upon directly."); ?></li>
        </ul>

        <div id="applist">
          <p><?php print _("Non-proprietary software stands out in many areas: consider, to name just a few:"); ?></p>
          <ul class="browser-default">
            <li><?php print _("Applications:"); ?>
              <ul class="browser-default">
                <li><a href="https://code.visualstudio.com/" rel="external">Visual Studio Code</a> <?php print _("(text editor)"); ?></li>
                <li><a href="https://en.wikipedia.org/wiki/Chromium_(web_browser)" rel="external">Chromium</a> <?php print _("(web browser)"); ?></li>
                <li><a href="https://git-scm.com/" rel="external">Git</a> <?php print _("(version control system)"); ?></li>
                <li><a href="https://inkscape.org/" rel="external">Inkscape</a> <?php print _("(vector drawing)"); ?></li>
                <li><a href="https://kodi.tv/" rel="external">Kodi</a> <?php print _("(media center)"); ?></li>
                <li><a href="https://mixxx.org/" rel="external">Mixxx</a> <?php print _("(DJ mixing)"); ?></li>
                <li><a href="https://www.blender.org/" rel="external">Blender</a> <?php print _("(3D graphics creation)"); ?></li>
                <li><a href="https://www.gimp.org/" rel="external">GIMP</a> <?php print _("(image editor)"); ?></li>
                <li><a href="https://www.libreoffice.org/" rel="external">LibreOffice</a> <?php print _("(office suite)"); ?></li>
                <li><a href="https://www.mozilla.org/firefox/new/" rel="external">Firefox</a> <?php print _("(web browser)"); ?></li>
                <li><a href="https://www.tensorflow.org/" rel="external">TensorFlow</a> <?php print _("(machine learning)"); ?></li>
                <li><a href="https://www.thunderbird.net/" rel="external">Thunderbird</a> <?php print _("(email client)"); ?></li>
                <li><a href="https://www.videolan.org/vlc/" rel="external">VLC media player</a> <?php print _("(multimedia player)"); ?></li>
              </ul>
            </li>
            <li><?php print _("Server applications:"); ?>
              <ul class="browser-default">
                <li><a href="https://en.wikipedia.org/wiki/MediaWiki" rel="external">MediaWiki</a> <?php print _("(content management system)"); ?></li>
                <li><a href="https://httpd.apache.org/" rel="external">Apache HTTP Server</a> <?php print _("(web server)"); ?></li>
                <li><a href="https://nginx.org/en/" rel="external">Nginx</a> <?php print _("(web server)"); ?></li>
                <li><a href="https://nodejs.org/" rel="external">Node.js</a> <?php print _("(JavaScript runtime environment)"); ?></li>
                <li><a href="https://spark.apache.org/" rel="external">Apache Spark</a> <?php print _("(large-scale data processing)"); ?></li>
                <li><a href="https://www.discourse.org/" rel="external">Discourse</a> <?php print _("(message board)"); ?></li>
                <li><a href="https://www.docker.com/" rel="external">Docker</a> <?php print _("(virtualization)"); ?></li>
                <li><a href="https://www.mysql.com/" rel="external">MySQL</a> <?php print _("(database management system)"); ?></li>
                <li><a href="https://www.postgresql.org/" rel="external">PostgreSQL</a> <?php print _("(database management system)"); ?></li>
                <li><a href="https://www.wordpress.org/" rel="external">Wordpress</a> <?php print _("(blog)"); ?></li>
              </ul>
            </li>
            <li><?php print _("Formats and protocols:"); ?>
              <ul class="browser-default">
                <li><a href="https://en.wikipedia.org/wiki/BitTorrent_(protocol)" rel="external">BitTorrent</a> <?php print _("(file sharing)"); ?></li>
                <li><a href="https://en.wikipedia.org/wiki/FLAC" rel="external">FLAC</a> <?php print _("(lossless audio codec)"); ?></li>
                <li><a href="https://en.wikipedia.org/wiki/Gzip" rel="external">gzip</a> <?php print _("(data compression)"); ?></li>
                <li><a href="https://en.wikipedia.org/wiki/HTML" rel="external">HTML</a> <?php print _("(web pages)"); ?></li>
                <li><a href="https://en.wikipedia.org/wiki/OpenDocument" rel="external">OpenDocument Format</a> <?php print _("(office documents)"); ?></li>
                <li><a href="https://en.wikipedia.org/wiki/Opus_(audio_format)" rel="external">Opus</a> <?php print _("(audio format)"); ?></li>
                <li><a href="https://en.wikipedia.org/wiki/WebM" rel="external">WebM</a> <?php print _("(video file format)"); ?></li>
                <li><a href="https://en.wikipedia.org/wiki/WebRTC" rel="external">WebRTC</a> <?php print _("(web real-time communication)"); ?></li>
              </ul>
            </li>
            <li><?php print _("Complete systems:"); ?>
              <ul class="browser-default">
                <li><a href="https://en.wikipedia.org/wiki/OpenBSD" rel="external">OpenBSD</a> <?php print _("(operating system)"); ?></li>
                <li><?php print _("and of course, GNU/Linux."); ?></li>
              </ul>
            </li>
          </ul>
        </div>
      </section>

      <section>
        <h2 id="just_work"><?php print _("Software should Just Work"); ?></h2>
        <p><?php print _("Anyone should care about whether their software is free."); ?></p>
        <p><?php print _("Imagine purchasing a car whose hood you are forbidden to open. It does not matter whether you know how a car works &ndash; the point is that nobody will be able to check the engine. How can you trust your car, if no one is allowed to make sure that it's reliable, that it does not leak, that it's not harmful to the society and environment?"); ?></p>
        <p><?php print _("The idea is the same with software &ndash; except that code does <strong>much more</strong> than move cars. Software runs our computers, phones, TVs, media players and more, carrying information and our culture."); ?></p>
        <p><?php print _("Free software is as important as free speech, as a free market. If software is free, users have control and liberty over it."); ?></p>
        <p><?php
        # TRANSLATORS: The %s placeholder will automatically point to the 'try and install' page
        $p = _("The good news are: <em>free software also Just Works.</em> And in fact, it often Just Works Better. <a href=\"%s\">Pop in a GNU/Linux live USB stick</a> in your computer at start-up, to try a full-featured, well-organised system, without installation, so you can judge by yourself."); printf($p, $this->get_base_url('switch_to_linux/try_or_install')); ?></p>
      </section>

      <section>
        <h2 id="patent_protection"><?php print _("Free software doesn't respect authors' copyrighted and patented software"); ?></h2>
        <p><?php print _("To answer this correctly, we must first make a clear distinction between copyright and patents. Copyright is a right granted to the author over his/her creation (for example, the text of a book, or the source code of a program). A patent, on the other hand, is a purchased, registered exclusive control over a process, the application of an idea."); ?></p>
        <p><?php
        # TRANSLATORS: gnu.org uses language negotiation, so it's not necessary to replace those URLs.
        print _("<strong>Copyright is very important in free software.</strong> It is the very mechanism, central to the <a href=\"https://www.gnu.org/copyleft/gpl.html\" rel=\"external\">GNU General Public License</a>, which ensures that free software remains free, and that authors are credited for their work. Programs are copyrighted, whether they are free or proprietary."); ?></p>
        <p><?php print _("Any proprietary software author can easily check that his copyright is not violated in a free software application, since its source code is readily available."); ?></p>
        <p><?php print _("Patents in software, on the other hand, are a very controversial concept. To put it shortly: there is <strong>no such thing as a \"patented software\"</strong>. By registering for a patent, however, someone can claim ownership over a <em>process</em>. The patent then applies to all software that use this process, whether proprietary or free."); ?></p>
        <p><?php print _("Software patents:"); ?></p>
        <ul class="browser-default">
          <li><?php print _("Are expensive and are granted only several years after application;"); ?></li>
          <li><?php print _("Are limited geographically (a patent granted in the US is worthless in Europe);"); ?></li>
          <li><?php print _("Have long life-times (often 20 years) in a quickly-moving industry;"); ?></li>
          <li><?php print _("Often apply entirely trivial processes."); ?></li>
        </ul>
        <p><?php print _("As such, they are seldom used to benefit innovators (and in fact, rarely used by the innovators themselves)."); ?></p>
        <p><?php print _("It's safe to say that <strong>any medium-size piece of software violates patents</strong>, in several countries, whether it's free or not."); ?></p>
        <p><?php print _("Depending on the holding company's ability to cover very large legal costs, or to retaliate with other patent threats, royalties and restrictions can be applied over these patents."); ?></p>

        <p><?php print _("Read more:"); ?></p>
        <ul class="browser-default">
          <li><?php
          # TRANSLATORS: Unless you know of a good localized resource, please leave the URL as such.
          print _("<a href=\"https://web.archive.org/web/20190608143048/https://ffii.org/Frequently%20Asked%20Questions%20about%20software%20patents\" hreflang=\"en\" rel=\"external\">Frequently Asked Questions on software patents, by the <abbr title=\"Foundation for a Free Information Infrastructure\">FFII</abbr></a>"); ?></a></li>
        </ul>
      </section>

      <section>
        <h2 id="competitive_advantage"><?php print _("Free software is like communism"); ?></h2>
        <p><?php
        # TRANSLATORS: Here, the %s placeholder simply puts a link to a footnote in this page
        $p = _("Supporters of this idea argue that there can be no private ownership with free (or \"open source\" %s) software. Let's answer this with an example."); printf($p, $footnote2);?></p>
        <p><?php print _("Let's imagine that you use one application that is free software, at home and within your company. You find a great way to improve it, so now with your modified version, your computer works better and your factories run twice as fast!"); ?></p>
        <p><?php print _("This modified version is <strong>your own version</strong>. You are not required to tell anyone about it, nor must you share any of the profits you made using it. You are simply exerting your freedom to use and modify free software."); ?></p>
        <p><?php print _("What the free software license requires is that <strong>if you redistribute</strong> this software, then you must keep it free. Namely, if you sell CDs with your software on them, or start letting people outside your home or company use it, then you must:"); ?></p>
        <ul class="browser-default">
          <li><?php print _("Either give everyone the same rights you had when you obtained the original software, that is, the freedom to inspect, modify and redistribute your modified version;"); ?></li>
          <li><?php print _("Or, make the original software and your secret addition to it clearly separate (that is, your addition should contain none of the original work)."); ?></li>
        </ul>
        <p><?php
        # TRANSLATORS: The %s placeholder here will automatically point to the page "Windows Restrictions, further details"
        $p = _("So in fact, you have more \"ownership\" over free software than over proprietary software &ndash; where the programmer decides everything you can <a href=\"%s\">and can't do</a> with the software."); printf($p, $this->get_base_url('windows/restrictions/further_details')); ?></p>
        <p><?php print _("<em>Free software has nothing to do with a political system.</em> You can run free software on top of proprietary software, just as well as the opposite. The free software license is simply a legal, ethical contract between the programmer and the end-user."); ?></p>
      </section>

      <section>
        <h2 id="security"><?php print _("Free software can't be secure"); ?></h2>
        <p><?php print _("The argument generally goes that since the source code of free software is available, it is less likely to be secure."); ?></p>
        <p><?php print _("Short answer: The majority of servers run free software. They are the major networked computers holding sensitive or confidential information such as your bank details or trade secrets."); ?></p>
        <p><?php print _("A more precise answer is that availability of source code is a warrant of security, not a weakness. The freedom of the software ensures it can be inspected, tested and improved by a very wide community. A good lock is secure because the technology used to design it is open, though only the key holder can open it. The same goes for software."); ?></p>
        <p><?php $p = _("Need examples? Have a look at the <a href=\"https://www.mozilla.org/firefox/new/\" rel=\"external\">Firefox web browser</a>, the <a href=\"https://en.wikipedia.org/wiki/Apache_HTTP_Server\" rel=\"external\">Apache HTTP Server</a>, the <a href=\"https://en.wikipedia.org/wiki/Nginx\" rel=\"external\">Nginx web server</a>, the <a href=\"https://en.wikipedia.org/wiki/Dovecot_(software)\" rel=\"external\">Dovecot email server</a>, the <a href=\"https://en.wikipedia.org/wiki/Exim\" rel=\"external\">Exim mail transfer agent</a>, the <a href=\"https://en.wikipedia.org/wiki/Pretty_Good_Privacy\" rel=\"external\">OpenPGP</a> encryption system, or the <a href=\"https://en.wikipedia.org/wiki/OpenBSD\" rel=\"external\">OpenBSD</a> operating system. And <a href=\"%s#security\">there are no spyware or viruses under GNU/Linux</a>."); printf($p, $this->get_base_url('switch_to_linux/from_windows_to_linux')); ?></p>
      </section>

      <section>
        <h2 id="on_my_own"><?php
        # TRANSLATORS: this can be translated loosely, ex "Free software isolates me" or else.
        print _("I'm on my own with free software"); ?></h2>
        <p><?php print _("Not at all."); ?></p>
        <ul class="browser-default">
          <li><?php print _("If you are looking for good documentation and support forums to assist you, there is plenty available for free (\"open source\") software."); ?><br/>
          <?php # TRANSLATORS: use your best knowledge of the community to propose localized links ;-)
          print _("Each GNU/Linux distribution has its own community (for example, <a href=\"https://askubuntu.com/\" rel=\"external\">Ask Ubuntu</a> or <a href=\"https://ask.fedoraproject.org/\" rel=\"external\">Ask Fedora</a>), but there are also general GNU/Linux help communities, like <a href=\"https://unix.stackexchange.com/\" rel=\"external\">Unix &amp; Linux Stack Exchange</a>."); ?></li>
          <li><?php print _("There are many real-time discussion channels for the free software community. IRC, or Internet Relay Chat, is a real-time, text-based form of communication. You can have conversations with multiple people in an open channel or chat with someone privately one-on-one. Major GNU/Linux distributions have their own dedicated IRC channels where you'll find users and developers that are happy to answer your questions. Here you can find the IRC channels for the distributions we recommend:"); ?>
            <ul class="browser-default">
              <li><a href="https://wiki.debian.org/IRC" rel="external">Debian</a></li>
              <li><a href="https://wiki.ubuntu.com/IRC/ChannelList" rel="external">Ubuntu</a></li>
              <li><a href="https://fedoraproject.org/wiki/Communicating_and_getting_help#IRC" rel="external">Fedora</a></li>
            </ul>
          </li>
          <li><?php print _("All major GNU/Linux distributions offer help &ndash; free of charge &ndash; through mailing lists:"); ?>
            <ul class="browser-default">
              <li><a href="https://www.debian.org/MailingLists/" rel="external">Debian</a></li>
              <li><a href="https://lists.ubuntu.com/" rel="external">Ubuntu</a></li>
              <li><a href="https://lists.fedoraproject.org/archives/" rel="external">Fedora</a></li>
            </ul>
          </li>
          <li><?php print _("If you need someone you can reach on the phone anytime to assist you, the companies behind most distributions provide commercial support: see <a href=\"https://www.debian.org/consultants/\" rel=\"external\">Debian consultants</a>, <a href=\"https://ubuntu.com/support\" rel=\"external\">Ubuntu Commercial Support</a>, or <a href=\"https://www.redhat.com/en/technologies/linux-platforms/enterprise-linux\" rel=\"external\">Red Hat Enterprise Linux</a> for example."); ?></li>
        </ul>
      </section>

      <br>

      <aside class="card-panel amber lighten-4 card-panel--further-reading">
        <h3 class="center"><?php print _("Further reading on the web"); ?></h3>
        <div class="row">
          <div class="col s12 l6">
            <h4><a href="https://www.gnu.org" rel="external">The GNU project</a></h4>
            <p><?php print _("This is where free software all started. You will find a wealth of information about the free software philosophy, the history of the project, and the stands taken by the <a href=\"https://www.fsf.org/\" rel=\"external\">Free Software Foundation</a> (the organisation behind GNU)."); ?></p>
          </div>
          <div class="col s12 l6">
            <h4><a href="https://en.wikibooks.org/wiki/FLOSS_Concept_Booklet" rel="external">The FLOSS concept booklet</a></h4>
            <p><?php print _("The concept of Free&nbsp;/&nbsp;Libre&nbsp;/&nbsp;Open Source Software presented in a highly readable, friendly way. A must-read."); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12 l6">
            <h4><a href="https://en.wikipedia.org/wiki/OpenDocument" rel="external">OpenDocument Format</a></h4>
            <p><?php print _("A simple and clear website about the free format OpenDocument, showing the importance of freedom in formats (not just in applications)."); ?></p>
          </div>
          <div class="col s12 l6">
            <h4><a href="https://jimmywales.com/2004/10/21/free-knowledge-requires-free-software-and-free-file-formats/" rel="external">Free Software and Free Knowledge</a></h4>
            <p><?php print _("An engaged article by co-founder of <a href=\"https://www.wikipedia.org/\" rel=\"external\">Wikipedia</a> Jimmy Wales, which shows the connections between freedom in software and free knowledge."); ?></p>
          </div>
        </div>
      </aside>

      <br>

      <aside>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('linux'); ?>">
          <?php print _("What is GNU/Linux?"); ?>
          <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">expand_less</i>
        </a>
      </aside>

      <div class="footnotes">
        <ol>
          <li id="footnote-1"><sup>^ <a href="#footnote-ref-1a">a</a> <a href="#footnote-ref-1b">b</a></sup>
            <?php # TRANSLATORS: This is the content of the footnote, at the bottom of the page
            $p = _("What we call \"Free Software\" here is also often called \"Open Source Software\". In practice the requirements are identical, although because the term \"open\" doesn't call to mind freedom, it <a href=\"https://www.gnu.org/philosophy/open-source-misses-the-point.html\" rel=\"external\">misses the point</a>. Read our FAQ entry: <a href=\"%s#open_source\">Are \"Open Source\" and \"Free Software\" the same thing?</a>.");
            printf($p, $this->get_base_url('linux/faq')); ?>
          </li>
        </ol>
      </div>
    </article>
  </div>
</main>

<script type="text/javascript">
  /* Set the list of items that should be togglable; jQuery will handle the rest */
  var toggle_items = ["toggle1","toggle2","toggle3"];
</script>

<?php $this->load_footer(); ?>

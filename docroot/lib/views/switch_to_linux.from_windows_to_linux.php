<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<nav class="chapters">
  <?php $this->list_chapter_sections('switch_to_linux'); ?>
</nav>

<main>
  <article>
    <div class="container">
      <header>
        <h1><?php print _("From Windows to GNU/Linux"); ?></h1>

        <div class="page-intro">
          <p><?php print _("This is what everyday users usually find better, mostly the same, or not as good, when switching from Windows to GNU/Linux."); ?></p>
        </div>
      </header>

      <section>
        <h2 id="whats_better"><?php print _("What is better in GNU/Linux"); ?></h2>

        <h3><?php
        # translators: please note the punctuation should be consistent
        print _("It respects its users"); ?></h3>
        <p><?php
        # translators: gnu.org uses language negotiation, so it's not necessary to replace those URLs.
        print _("Unlike Windows, GNU/Linux is <a href=\"https://www.gnu.org/philosophy/free-sw.html\" title=\"What does Free Software mean?\" rel=\"external\">free software</a>&mdash;free as in freedom. Which means the software obeys your commands. There is no higher authority which prohibits you actions that are physically possible&mdash;for example saving a copy of a video. You are allowed to install free software on all your computers and make copies for your friends! You can even study the sourcecode, modify it as you please, and sell the original or the modified version at any price."); ?></p>

        <h3><?php print _("Information at your fingertips"); ?></h3>
        <p><?php print _("There is a wealth of applications available under GNU/Linux for tasks like editing professional documents, setting up a cloud, reworking and organising photos, designing and running a website. In general those apps seem more solid and deliver better results than their proprietary counterparts."); ?></p>
        <p><?php print _("The built-in app store of the software distribution you chose makes it incredibly easy to find, install and remove programs."); ?></p>
        <p><?php print _("It's also safe: since the sourcecode is available to the users it's far more unlikely that malware is introduced into free software. Also free software tends to use standard file formats which helps not only for exchanging data with others but also to access old data with new programs in the future."); ?></p>

        <h3 id="no_fighting"><?php print _("No fighting"); ?></h3>
        <p><?php print _("Keeping your computer in shape over time doesn't need to be a struggle. One year on, GNU/Linux runs just as fast as the first day. And it may bring your old laptop back to life."); ?></p>
        <p><?php print _("It should be noted that GNU/Linux lets you choose what you want and what you don't want. If you had a hard time getting rid of Microsoft Edge or adware and web browser toolbars, you'll find it refreshing."); ?></p>

        <h3 id="security"><?php print _("Security"); ?></h3>
        <p><?php print _("Forget expensive and restrictive anti-virus, anti-spyware, anti-anything and anti-everything. GNU/Linux is very, very secure."); ?></p>
        <p><?php # translators: If you don't know of a link replacement in your language, just leave the link as it is
        print _("It is often difficult for Windows users to believe that there are <em>no spyware nor viruses</em> under GNU/Linux&mdash;<a href=\"http://linuxmafia.com/~rick/faq/#virus\" rel=\"external\">but it's true</a>. Malicious programs have a hard time doing anything at all in a well-built system. No free (i.e. freedom respecting) application is &ldquo;phoning home&rdquo; if you didn't allow it."); ?></p>
        <p><?php print _("Regular and easy software updates of GNU/Linux distributions keep everyone safe."); ?></p>

        <h3 id="support"><?php print _("Support"); ?></h3>
        <p><?php # translators: The first %s represents the URL to the "More" page and seconds %s represents the title of the page "More" in your language
        $p = _("GNU/Linux benefits from a great sense of community whose friendliness will surprise you. If you try to do something complicated but can't succeed, there are a lot of people around to help you out. Our \"<a href=\"%s\">%s</a>\" page gives a few pointers."); printf($p, $this->get_base_url('more'), _("More")); ?></p>
        <p><?php print _("The companies behind the main GNU/Linux distributions, such as <a href=\"https://www.debian.org/consultants/\" rel=\"external\">Debian</a> and <a href=\"https://www.redhat.com/\" rel=\"external\">Red Hat</a>, also provide expert commercial support."); ?></p>
      </section>

      <section>
        <h2 id="whats_the_same"><?php print _("What is mostly the same in GNU/Linux"); ?></h2>
        <p><?php print _("Fundamentally, everyday users will find GNU/Linux similar in use to Windows or macOS."); ?></p>

        <h3><?php print _("General set-up"); ?></h3>
        <p><?php print _("If you still believe GNU/Linux is controlled with code and command-line, you should update your views!"); ?></p>
        <p><?php print _("Just like Windows, GNU/Linux boots up when you switch your computer on, and then you use programs in it to do different things. The taskbar and layout of applications will feel familiar to Windows and macOS users."); ?></p>

        <h3><?php print _("Web browsing and common tasks"); ?></h3>
        <p><?php # translators: use localized Firefox landing page if possible
          print _("The Web looks just the same when viewed with GNU/Linux. And of course you can go through your picture and music collection all the same. Files and folders are navigated with a file manager such as File Explorer."); ?></p>
        <p><?php print _("In fact you can browse the Web with the same program if you already use <a href=\"https://www.getfirefox.com/\" rel=\"external\">Firefox</a> or <a href=\"https://www.google.com/chrome/\" rel=\"external\">Google Chrome</a>. Or alternatively you can choose variants of those programs which are even more free: <a href=\"https://www.gnu.org/software/gnuzilla/\" rel=\"external\">GNU IceCat</a> and <a href=\"https://www.chromium.org/Home\" rel=\"external\">Chromium</a>".); ?></p>
      </section>

      <section>
        <h2 id="whats_not_as_good"><?php print _("What is not as good in GNU/Linux"); ?></h2>

        <h3><?php print _("Driver support"); ?></h3>
        <p><?php print _("Manufacturers of computer hardware don't always (yet) release free drivers for GNU/Linux or publicize full specifications."); ?></p>
        <p><?php print _("So, drivers are sometimes unavailable for the most recent high-end graphics cards&mdash;some are reverse-engineered from Windows drivers by volunteers. Some manufacturers offer proprietary drivers for GNU/Linux which might work with the current kernel version but it results in that your operating system is not free anymore and it might brake with any update."); ?></p>
        <p><?php print _("Sadly, the same problem occurs with many low-end WiFi cards."); ?></p>
        <p><?php print _("However, the vast majority of computers with standard hardware work out of the box with main GNU/Linux distributions. Common hardware such as USB keys or photo cameras never are a problem."); ?></p>
        <p><?php print _("The easiest way to get a GNU/Linux system running is to purchase a computer (i.e. phone, tablet, laptop, workstation) <a href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>#free_software_pre_installed"><?php print _("with GNU/Linux pre-installed"); ?></a>."); ?></p>

        <h3><?php print _("DVDs, restricted formats"); ?></h3>
        <p><?php print _("Many multimedia formats in use are proprietary and not openly specified; this means, broadly speaking, that GNU/Linux programmers have to find out how to read them without any help from the format designers."); ?></p>
        <p><?php # translators: Please choose the wording of the DRM acronym according to the FSF terminology
        print _("This might lead you to circumvent the restrictions in some DVDs and the <abbr title=\"Digital Restrictions Management\">DRM</abbr> in some music files, even if you purchased them in full legality, to be make them work under GNU/Linux. Unfortunately, depending on where you live, <em>such circumvention processes may be illegal</em> even if you purchased your media entirely legally."); ?></p>
        <p><?php print _("Read more in our GNU/Linux FAQ:"); ?></p>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-question-circle"></i><a href="<?php $this->base_url('linux/linux_faq'); ?>#dvd_mp3"><?php print _("Can I play my DVDs and MP3s under GNU/Linux?"); ?></a></li>
        </ul>

        <h3><?php print _("Gaming"); ?></h3>
        <p><?php print _("Hard-core computer gamers, you might find that the GNU/Linux gaming world is less professional and out-of-the-box than under Windows: the large game developing companies are only slowly getting interested in the free software world, which means that many well-known titles do not work on GNU/Linux, or need special restrictive emulators to work."); ?></p>
        <p><?php # translators: use localised link if possible, and contact us if you know better resources
        print _("There is a very active free software game development community though, and they have produced quite a few high-quality games, both 2D and 3D, that are free software. You can head to the <a href=\"https://ubuntuforums.org/forumdisplay.php?f=93\" rel=\"external\">Ubuntu gaming forum</a> to find more information. And with the release of the popular Steam platform to GNU/Linux, the number of <a href=\"https://store.steampowered.com/linux\" rel=\"external\">GNU/Linux supported games on Steam</a> has been growing rapidly."); ?></p>
        <p><?php print _("Read more in our GNU/Linux FAQ:"); ?></p>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-question-circle"></i><a href="<?php $this->base_url('linux/linux_faq'); ?>#games"><?php print _("Can I play popular 3D games under GNU/Linux?"); ?></a></li>
        </ul>

        <h3><?php print _("Hibernating"); ?></h3>
        <p><?php print _("Because of the driver issues above, hibernating is not always reliable. The most common occurrence is the loss of WiFi connection after hibernating on laptops whose hardware drivers are not free."); ?></p>
      </section>

      <section>
        <h2 id="conclusion"><?php print _("Conclusion"); ?></h2>
        <p><?php print _("Whether you are going to enjoy GNU/Linux depends mostly on what you expect from it."); ?></p>
        <ul>
          <li>
            <?php # translators: Use a localised version of the "Linux is Not Windows" article if possible. The following page contains links to localised versions: http://geekblog.oneandoneis2.org/index.php/2005/12/31/derived_works_aamp_translations
            print _("If you wish GNU/Linux to be just exactly like Windows, you will probably be disappointed. GNU/Linux is built by people who simply <a href=\"http://linux.oneandoneis2.org/LNW.htm\" rel=\"external\">wish it to be different</a>. In the free software community, members have different visions of what makes an ideal operating system. These differences lead to variety, which is what makes GNU/Linux so special and interesting."); ?>
          </li>
          <li>
            <?php print _("Your freedom matters. Thousands in communities and companies work to build software on which you may exert this freedom. Using GNU/Linux is the easiest way to do so fully."); ?>
          </li>
          <li>
            <?php print _("It's fun! Not having to worry about spyware, viruses, program registrations, demos that expire, or finding software that is really free as in freedom, makes using a computer suddenly very enjoyable."); ?>
          </li>
        </ul>
        <p><?php print _("We hope you'll switch soon. There's a large community waiting, and no one in it asking you to &ldquo;sign up&rdquo;, &ldquo;purchase&rdquo; or &ldquo;register&rdquo;."); ?></p>
      </section>
    </div>
  </article>

  <aside class="bg-even">
    <div class="container button-section">
      <h1><?php print _("Choose a distribution"); ?></h1>

      <div class="page-intro">
        <p><?php print _("Our selection for an easy choice."); ?></p>

        <div class="button green">
          <a href="<?php $this->base_url('switch_to_linux/choose_a_distribution'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
        </div>
      </div>
    </div>
  </aside>
</main>

<?php $this->load_footer(); ?>

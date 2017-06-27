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

<main role="main">
  <section>
    <div class="maxwidth">

      <h1><?php print _("From Windows to Linux"); ?></h1>

      <div class="page-intro">
        <p><?php print _("This is what everyday users usually find better, mostly the same, or not as good, when switching from Windows to Linux."); ?></p>
      </div>

    </div>
  </section>

  <section>
    <div class="maxwidth">

      <h2 id="whats_better"><?php print _("What is better in Linux"); ?></h2>

      <article>
        <h3><?php
        # translators: please note the punctuation should be consistent
        print _("It's free"); ?></h3>

        <p><?php
        # translators: link to Free Software definition on GNU.org site, if softwareliberty.com is not translated in your language
        print _("Unlike Windows, GNU/Linux is <a href=\"https://www.softwareliberty.com/\" title=\"What does Free Software mean?\">free software</a> &ndash; free as in freedom. Install it on all computers and make copies for your friends! You can even study it, transform it as you please, or build and sell your own distribution."); ?></p>
      </article>

      <article>
        <h3><?php print _("Programs"); ?></h3>

        <p><?php print _("There are a wealth of free applications available at no cost under Linux. To edit professional documents, burn music CDs, rework photos, design a website, or organise music; there's no need for $200 software with restrictive licenses."); ?></p>
        <p><?php print _("The internal installer makes it incredibly easy to find, install and remove programs."); ?></p>
        <p><?php print _("It's also safe: you can forget the demo/trial crippled software, or harmful freeware polluting the web."); ?></p>
      </article>

      <article>
        <h3 id="no_fighting"><?php print _("No fighting"); ?></h3>

        <p><?php print _("Keeping your computer in shape over time needn't be a struggle. One year on, GNU/Linux runs just as fast as the first day. And it may bring your old PC back to life."); ?></p>
        <p><?php print _("Also, Linux lets you choose what you want and what you don't. If you had a hard time getting rid of MSN Messenger, Windows Update notifications, or Clippit the paperclip, you'll find it refreshing."); ?></p>
      </article>

      <article>
        <h3 id="security"><?php print _("Security"); ?></h3>

        <p><?php print _("Forget expensive and restrictive anti-virus, anti-spyware, anti-anything and anti-everything. Linux is very, very secure."); ?></p>
        <p><?php # translators: If you don't know of a link replacement in your languge, just leave the link as it is
        print _("It is often difficult for Windows users to believe that there are <em>no spyware nor viruses</em> under Linux &mdash; <a href=\"http://linuxmafia.com/~rick/faq/#virus\">but it's true</a>. Malicious programs have a hard time doing anything at all in a well-built system."); ?></p>
        <p><?php print _("Regular, easy software updates will keep everyone entirely safe."); ?></p>
      </article>

      <article>
        <h3 id="support"><?php print _("Support"); ?></h3>

        <p><?php # translators: The first %s represents the URL to the "More" page and seconds %s represents the title of the page "More" in your language
        $p = _("Linux benefits from a great sense of community whose friendliness will surprise you. If you try to do something complicated but can't succeed, there are a lot of people around to help you out. Our \"<a href=\"%s\">%s</a>\" page gives a few pointers."); printf($p, $this->base_url('more',1), _("More")); ?></p>
        <p><?php print _("The companies behind the main GNU/Linux distributions, such as <a href=\"https://www.canonical.com/\">Canonical</a> and <a href=\"https://www.redhat.com/\">Red Hat</a>, also provide expert commercial support."); ?></p>
      </article>

    </div>
  </section>

  <section>
    <div class="maxwidth">

      <h2 id="whats_the_same"><?php print _("What is mostly the same in Linux"); ?></h2>

      <p><?php print _("Fundamentally, everyday users will find GNU/Linux similar in use to Windows or Mac OSX."); ?></p>

      <article>
        <h3><?php print _("General set-up"); ?></h3>

        <p><?php print _("If you still believe Linux is controlled with code and command-line, you should update your views!"); ?></p>
        <p><?php print _("Just like Windows, Linux has to boot when you switch your computer on, and then you use programs in it to do different things. The taskbar and layout of applications will feel familiar to Windows or Mac OS users."); ?></p>
      </article>

      <article>
        <h3><?php print _("Web browsing and common tasks"); ?></h3>

        <p><?php # translators: use localized Firefox landing page if possible
        print _("The Web looks just the same when viewed with Linux (in fact you can browse the Web with the same program if you already use <a href=\"https://www.getfirefox.com/\">Firefox</a> or <a href=\"https://www.google.com/chrome/\">Google Chrome</a>). And of course, you can go through your picture and music collection all the same. Files and folders are navigated with a file manager like Windows Explorer."); ?></p>
      </article>

    </div>
  </section>

  <section>
    <div class="maxwidth">

      <h2 id="whats_not_as_good"><?php print _("What is not as good in Linux"); ?></h2>

      <article>
        <h3><?php print _("Driver support"); ?></h3>

        <p><?php print _("Manufacturers of computer hardware don't always (yet) release drivers for Linux or publicize full specifications."); ?></p>
        <p><?php print _("So, drivers are sometimes unavailable for the most recent high-end graphics cards &mdash; some are reverse-engineered from Windows drivers by volunteers. Some are also released free of charge, but under restrictive licenses."); ?></p>
        <p><?php print _("Sadly, the same problem occurs with many low-end WiFi cards."); ?></p>
        <p><?php print _("However, the vast majority of computers with standard hardware work out of the box with main Linux distributions. Common hardware such as USB keys or photo cameras never are a problem."); ?></p>
      </article>

      <article>
        <h3><?php print _("DVDs, restricted formats"); ?></h3>

        <p><?php print _("Many multimedia formats in use are proprietary and not openly specified; this means, broadly speaking, that Linux programmers have to find out how to read them without any help from the format designers."); ?></p>
        <p><?php # translators: Please choose the wording of the DRM acronym according to the FSF terminology
        print _("This might lead you to circumvent the restrictions in some DVDs and the <abbr title=\"Digital Restrictions Management\">DRM</abbr> in some music files, even if you purchased them in full legality, to be make them work under Linux. Unfortunately, depending on where you live, <em>such circumvention processes may be illegal</em> even if you purchased your media entirely legally."); ?></p>
        <p><?php print _("Read more in our Linux FAQ:"); ?>
          <ul class="fa-ul">
            <li><i class="fa-li fa fa-question-circle"></i><a href="<?php $this->base_url('linux/linux_faq'); ?>#dvd_mp3"><?php print _("Can I play my DVDs and MP3s under GNU/Linux?"); ?></a></li>
          </ul>
        </p>
      </article>

      <article>
        <h3><?php print _("Gaming"); ?></h3>

        <p><?php print _("Hard-core computer gamers, you might find that the Linux gaming world is less professional and out-of-the-box than under Windows: the large game developing companies are only slowly getting interested in the free software world, which means that many well-known titles do not work on Linux, or need special restrictive emulators to work."); ?></p>
        <p><?php # translators: use localised link if possible, and contact us if you know better resources
        print _("There is a very active free software game development community though, and they have produced quite a few high-quality games, both 2D and 3D, that are free software. You can head to the <a href=\"https://ubuntuforums.org/forumdisplay.php?f=93\">Ubuntu gaming forum</a> to find more information."); ?></p>
        <p><?php print _("Read more in our Linux FAQ:"); ?>
          <ul class="fa-ul">
            <li><i class="fa-li fa fa-question-circle"></i><a href="<?php $this->base_url('linux/linux_faq'); ?>#games"><?php print _("Can I play popular 3D games under GNU/Linux?"); ?></a></li>
          </ul>
        </p>
      </article>

      <article>
        <h3><?php print _("Hibernating"); ?></h3>

        <p><?php print _("Because of the driver issues above, hibernating is not always reliable. The most common occurrence is the loss of WiFi connection after hibernating on laptops whose hardware drivers are not free."); ?></p>
      </article>

    </div>
  </section>

  <section>
    <div class="maxwidth">

      <h2 id="conclusion"><?php print _("Conclusion"); ?></h2>

      <p><?php print _("Whether you are going to enjoy Linux depends mostly on what you expect from it."); ?></p>

      <ul>
        <li>
          <?php # translators: Use a localised version of the "Linux is Not Windows" article if possible. The following page contains links to localised versions: http://geekblog.oneandoneis2.org/index.php/2005/12/31/derived_works_aamp_translations
          print _("If you wish Linux to be just exactly like Windows, you will probably be disappointed. GNU/Linux is built by people who simply <a href=\"http://linux.oneandoneis2.org/LNW.htm\">wish it to be different</a>. In the free software community, members have different visions of what makes an ideal operating system. These differences lead to variety, which is what makes Linux so special and interesting."); ?>
        </li>
        <li>
          <?php print _("Your freedom matters. Thousands in communities and companies work to build software on which you may exert this freedom. Using GNU/Linux is the easiest way to do so fully."); ?>
        </li>
        <li>
          <?php print _("It's fun! Not having to worry about spyware, viruses, program registrations, demos that expire, or finding software that is really free as in freedom, makes using a computer suddenly very enjoyable."); ?>
        </li>
      </ul>

      <p><?php print _("We hope you'll switch soon. There's a large community waiting, and no one in it asking you to &quot;sign up, purchase and register&quot;."); ?></p>

    </div>
  </section>

  <section class="bg-even">
    <div class="maxwidth button-section">
      <h1><?php print _("Choose a distribution"); ?></h1>

      <div class="page-intro">
        <p><?php print _("Our selection for an easy choice."); ?></p>

        <div class="button green">
          <a href="<?php $this->base_url('switch_to_linux/choose_a_distribution'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
        </div>
      </div>
    </div>
  </section>

</main>


<?php $this->load_footer(); ?>

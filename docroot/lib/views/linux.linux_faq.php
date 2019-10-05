<?php
# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
?>

<main>
  <div class="container">
    <article id="faq">
      <header>
        <h1 id="top"><?php print _("Frequently asked questions"); ?></h1>

        <div class="page-intro">
          <p><?php $p = _("<a href=\"%s\">Our page about GNU/Linux</a> covers the essential information. We hope this FAQ list can help if you are more curious."); printf($p, $this->base_url('linux',1)); ?></p>
        </div>
      </header>

      <br><p><strong><?php print _("General Questions"); ?></strong></p>

      <details>
        <summary id="naming_conventions"><?php print _("Are &quot;GNU/Linux&quot; and &quot;Linux&quot; any different?"); ?></summary>
        <div class="answer">
          <p><i><?php
          # translators: This is italic text just below the question, which elaborates a little on it.
          print _("You keep referring to one and the other alternatively. What is this all about?"); ?></i></p>

          <p><?php print _("Originally, <strong>Linux</strong> refers to a core component (called the kernel) that fits within the <strong>GNU</strong> system. What users run today are, to be precise, \"<em>distributions of the GNU/Linux system</em>\"."); ?></p>
          <p><?php print _("In practice, the word \"Linux\" caught on much better (unsurprisingly), and today people refer to the whole system as simply \"Linux\". This causes a great deal of controversy."); ?></p>
          <p><?php
          # translators: gnu.org uses language negotiation, so it's not necessary to replace those URLs.
          print _("Calling the system <em>GNU/Linux</em> is much more meaningful, technically (end-users use a lot of \"GNU\" and a little of \"Linux\") but also philosophically: the strength and momentum of the <a href=\"https://www.gnu.org/philosophy/free-sw.html\" rel=\"external\">Free Software</a> movement started with and are still carried by <a href=\"https://www.gnu.org/\" rel=\"external\">the GNU project</a>."); ?></p>
          <p><?php print _("Calling the system <em>Linux</em> is more practical and appealing for computer users that often believe Windows is the only thing on earth."); ?></p>
          <p><?php print _("To avoid confusion, we use \"GNU/Linux\" to refer to operating system distributions that include <a href=\"https://www.gnu.org/\" rel=\"external\">GNU</a> software and the <a href=\"https://www.kernel.org/\" rel=\"external\">Linux kernel</a>. When we use \"Linux\" without the GNU part, we refer to the kernel."); ?></p>
        </div>
      </details>

      <details>
        <summary id="gnu"><?php print _("And what has that software to do with a GNU?"); ?></summary>
        <div class="answer">
          <p><?php
          # translators: gnu.org uses language negotiation, so it's not necessary to replace those URLs.
          print _("When Richard Stallman started to design GNU, the main system in use was Unix, which is proprietary. Because GNU is similar in function to (and compatible with) Unix, but is <a href=\"https://www.gnu.org/philosophy/free-sw.html\" rel=\"external\">free software</a>, he coined the term GNU which stands for <strong>GNU's Not Unix</strong>. It's a <a href=\"https://en.wikipedia.org/wiki/Recursive_acronym\" rel=\"external\">recursive acronym</a>. If you enjoy that kind of humour, check out what <a href=\"https://www.gnu.org/software/hurd/hurd.html\" rel=\"external\">GNU Hurd</a> means."); ?></p>
        </div>
      </details>

      <details>
        <summary id="trademark"><?php print _("Is Linux a registered trademark?"); ?></summary>
        <div class="answer">
          <p><?php print _("Yes. You cannot sell any random software under the name of Linux&reg;. The trademark is held by <a href=\"http://www.linuxmark.org/\" rel=\"external\">the Linux Mark Institute</a>."); ?></p>
        </div>
      </details>

      <details>
        <summary id="only_linux"><?php print _("Is GNU/Linux the only free operating system available?"); ?></summary>
        <div class="answer">
          <p><?php print _("No. GNU/Linux is by far the most widely used free system; however a number of other systems exist."); ?></p>
          <p><?php print _("These include the UNIX derivatives <a href=\"https://freebsd.org/\" rel=\"external\">FreeBSD</a>, <a href=\"https://netbsd.org/\" rel=\"external\">NetBSD</a>, <a href=\"https://openbsd.org/\" rel=\"external\">OpenBSD</a>, the BeOS clone <a href=\"https://haiku-os.org/\" rel=\"external\">Haiku OS</a>, the Windows NT clone <a href=\"http://www.reactos.com/\" rel=\"external\">ReactOS</a>, the DOS clone <a href=\"http://www.freedos.org/\" rel=\"external\">FreeDOS</a>, and <a href=\"https://www.syllable.org/\" rel=\"external\">Syllable</a>, just to name a few."); ?></p>
        </div>
      </details>

      <details>
        <summary id="mac"><?php print _("Is macOS a distribution of GNU/Linux?"); ?></summary>
        <div class="answer">
          <p><?php
          # translators: gnu.org uses language negotiation, so it's not necessary to replace those URLs.
          $p = _("No. There are a few <a href=\"https://www.gnu.org/philosophy/free-sw.html\" rel=\"external\">free software</a> components in macOS, and it is technically similar to GNU/Linux systems. But overall, it is proprietary software: all the <a href=\"%s\">issues about Windows</a> apply to it as well."); printf($p, $this->base_url('windows',1)); ?></p>
        </div>
      </details>

      <br><p><strong><?php print _("Understanding free software"); ?></strong></p>

      <details>
        <summary id="open_source"><?php print _("Are &quot;Open Source&quot; and &quot;Free Software&quot; the same thing?"); ?></summary>
        <div class="answer">
          <p><?php print _("Yes and no. Technically, the great majority of open source programs are free software and vice-versa."); ?></p>
          <p><?php print _("In terms of philosophy, things are quite different. The term &quot;open source&quot; was coined to make &quot;free software&quot; more attractive, its supporters see open source software as a better way to make software."); ?></p>
          <p><?php print _("Supporters of the \"free software\" term value the freedom, not merely the way software is made, and thus argue that the term \"open source\" <a href=\"https://www.gnu.org/philosophy/open-source-misses-the-point.html\" rel=\"external\">misses the point</a>."); ?></p>
          <p><?php print _("Which term you employ simply depends on your vision of software."); ?></p>
        </div>
      </details>

      <details>
        <summary id="freedom"><?php print _("Why are some GNU/Linux distributions sold, not given away?"); ?></summary>
        <div class="answer">
          <p><i><?php
          # translators: This is italic text just below the question, which elaborates a little on it.
          print _("Some websites actually <em>sell</em> distributions of GNU/Linux. So, why do you write it is \"free as speech and available at no charge\"?"); ?></i></p>
          <p><?php
          # translators: gnu.org uses language negotiation, so it's not necessary to replace those URLs.
          print _("The concept of <a href=\"https://www.gnu.org/philosophy/free-sw.html\" rel=\"external\">free software</a>, refers to freedom, not price. You have the freedom to copy, study, modify, and give free software away."); ?></p>
          <p><?php print _("Most companies developing free software make money by selling <strong>services</strong> around their software, rather than the software itself. This is sometimes done by selling everything as a package: the customer buys the CD, book, and support contract at once. The software can still guarantee your freedoms."); ?></p>
          <p><?php print _("More:"); ?> <a href="<?php $this->base_url('linux/misunderstanding_free_software'); ?>"><?php print _("How to Misunderstand Free Software"); ?></a> | <a href="https://en.wikibooks.org/wiki/FLOSS_Concept_Booklet" rel="external"><?php print _("FLOSS concept booklet"); ?></a>.</p>
        </div>
      </details>

      <details>
        <summary id="full_freedom"><?php print _("Why are some GNU/Linux distributions not fully free?"); ?></summary>
        <div class="answer">
          <p><i><?php
          # translators: This is italic text just below the question, which elaborates a little on it.
          print _("Some GNU/Linux distributions are available at no charge, but include restrictive software. Why is it so?"); ?></i></p>
          <p><?php print _("There are typically three types of policies regarding the inclusion of non-free software:"); ?></p>
          <ul>
            <li><?php print _("Some GNU/Linux distributors allow non-free software in order to enable hardware functionality."); ?>
            <?php # translators: If it exits, please use the URL of the official Ubuntu homepage localized in your language.
            print _("This happens because some hardware manufacturers such as NVidia do not care about their customers' freedoms, and only release restricting firmware and drivers (some of them don't even release anything, like Broadcom). These are available at no cost (they are freeware) but under restrictive licenses. Distributions such as <a href=\"https://www.ubuntu.com/\" rel=\"external\">Ubuntu</a> thus include such components to improve hardware compatibility."); ?></li>
            <li><?php print _("Some GNU/Linux distributors do not compromise on the freedom of software, and make sure their distribution are entirely free. Such is the case of <a href=\"https://trisquel.info/\" rel=\"external\">Trisquel</a>, which is a Ubuntu derivative with all restricting components removed."); ?></li>
            <li><?php $p = _("Some GNU/Linux distributors assemble free and restrictive software without distinction. Such distributors would not like users to think of their freedom, and rather advertise only the technical capabilities of their product. Using such distributions isn't much better than <a href=\"%s\">using Windows</a>. We value your freedom and recommend you choose carefully!"); printf($p, $this->base_url('windows',1)); ?></li>
          </ul>
        </div>
      </details>

      <details>
        <summary id="mac_freedom"><?php print _("Is macOS also a free operating system?"); ?></summary>
        <div class="answer">
          <p><i><?php print _("Do all the reasons for avoiding Windows apply to macOS?"); ?></i></p>
          <p><?php $p = _("It's quite common for Mac users to believe they are exempt from <a href=\"%s\">restrictions associated with Windows</a>. Unfortunately such is not the case."); printf($p, $this->base_url('windows',1)); ?></p>
          <p><?php print _("macOS does have some low-level components which are <a href=\"https://www.gnu.org/philosophy/free-sw.html\" rel=\"external\">free software</a>; and Apple puts less energy into customer lock-in (with some notable efforts such as BootCamp)."); ?></p>
          <p><?php print _("However, the end-user is still fundamentally restricted &mdash; because of the proprietary license, he/she cannot use macOS for all purposes, nor copy, study, modify, or redistribute it."); ?></p>
          <p><?php print _("Happily, because these freedoms matter a lot, it's possible to run popular GNU/Linux distributions (such as <a href=\"https://www.ubuntu.com/\" rel=\"external\">Ubuntu</a>) on Mac computers."); ?></p>
        </div>
      </details>

      <details>
        <summary id="linux_illegality"><?php print _("Aren't GNU/Linux users the ones who make illegal downloads?"); ?></summary>
        <div class="answer">
          <p><i><?php
          # translators: This is italic text just below the question, which elaborates a little on it.
          print _("Isn't GNU/Linux about cracking, &quot;piracy&quot; and illegal download websites?"); ?></i></p>
          <p><?php print _("No. Wherever you read or heard this, you should update your views. GNU/Linux is completely distinct from such things. Whether you want to do them, or whether you prefer <a href=\"https://www.magnatune.com/\" rel=\"external\">intelligent</a>, <a href=\"https://www.jamendo.com/\" rel=\"external\">legal downloads</a>, GNU/Linux will work just as well as Windows. Unfortunately you can't identify gangsters by the make of their cars; the same thing goes for their operating system."); ?></p>
          <p><?php print _("GNU/Linux was made by people who don't like the thought of all the world's computers running just one company's proprietary products. There is certainly nothing wrong with that!"); ?></p>
          <p><?php
          # translators: The link here points to the "misunderstanding_free_software" article.
          $p = _("Read more in the article: <a href=\"%s\">%s</a>."); printf( $p, $this->base_url('linux/misunderstanding_free_software',1), _("How to Misunderstand Free Software") ); ?></p>
        </div>
      </details>

      <details>
        <summary id="linux_communism"><?php print _("Is GNU/Linux a form of communism?"); ?></summary>
        <div class="answer">
          <p><i><?php
          # translators: This is italic text just below the question, which elaborates a little on it.
          print _("\"Everything has to be free\" and \"No one owns anything\" sounds somewhat frightening. Are GNU/Linux and its <abbr title=\"GNU General Public License\">GPL</abbr> License something for anarchists or communists?"); ?></i></p>
          <p><?php
          $title = _("How to Misunderstand Free Software");
          $link = sprintf("<a href=\"%s\">%s</a>", $this->base_url('linux/misunderstanding_free_software',1), $title);
          $p = _("GNU/Linux has nothing to do with a political system and anyone &mdash; regardless of their political views &mdash; can use it. We have this explained simply in our article %s.");
          printf($p, $link); ?></p>
        </div>
      </details>

      <br><p><strong><?php print _("Installing GNU/Linux"); ?></strong></p>

      <details>
        <summary id="linux_pre-installed"><?php print _("Does GNU/Linux come pre-installed on computers?"); ?></summary>
        <div class="answer">
          <p><?php
          # translators: If LinuxPreloaded has not been localized to your language, please leave the URL to linuxpreloaded.com.
          print _("Yes it does. <a href=\"https://linuxpreloaded.com/\" title=\"GNU/Linux laptops\" rel=\"external\">LinuxPreloaded.com</a> has built a website specially for that purpose, listing vendors that sell GNU/Linux desktops and laptops."); ?></p>
          <p><?php
          # translators: please leave the "#new_computer" element as such. It is an internal link.
          print _("Note that <a href=\"#new_computer\">buying new hardware is not necessary</a> to use GNU/Linux!"); ?></p>
        </div>
      </details>

      <details>
        <summary id="language"><?php print _("Can I get GNU/Linux in my own language?"); ?></summary>
        <div class="answer">
          <p><?php $url = $this->base_url('switch_to_linux/choose_a_distribution',1); $p = _("Yes. All main distributions, such as <a href=\"%s\">the ones we recommend</a>, are all available in the main languages around, and have support for many keyboard types."); printf($p, $url); ?></p>
          <p><?php print _("Unlike Windows, all languages are included on each installation CD, so there is no need for you to download (or pay for!) another whole version to merely change the language on your computer."); ?></p>
        </div>
      </details>

      <details>
        <summary id="linux_legality"><?php print _("Is it legal to install GNU/Linux on my computer?"); ?></summary>
        <div class="answer">
          <p><i><?php
          # translators: This is italic text just below the question, which elaborates a little on it.
          print _("There is a shiny Windows sticker on it! Am I allowed to erase Windows or use it together with GNU/Linux?"); ?></i></p>
          <p><?php print _("Yes. It is absolutely, completely legal, provided of course it's your computer!"); ?></p>
          <p><?php print _("The sticker on it is purely marketing, it has no legal value. We believe it is <em>one fundamental right</em> to choose which software to run on our own hardware."); ?></p>
          <p><?php
          # translators: If you do not know of a very good resource about DRM, please link to the Wikipedia article on DRM in your language.
          $p = _("In fact this right is threatened by the rise of things such as <a href=\"http://www.timj.co.uk/digiculture/drm-fallacy\" rel=\"external\">DRM and Trusted Computing</a>. Read our article \"<a href=\"%s\">%s</a>\" for more information.");
          printf( $p, $this->base_url('windows/stand_for_a_free_society',1), _("Stand for a free society") );
          ?></p>
        </div>
      </details>

      <details>
        <summary id="new_computer"><?php print _("Do I have to purchase a new computer to run GNU/Linux?"); ?></summary>
        <div class="answer">
          <p><?php print _("Not at all. It will run happily on your own computer."); ?></p>
          <p><?php $p = _("The only thing you might be worried about is using very recent special hardware, such as graphics cards. Otherwise, almost all GNU/Linux distributions can run on normal PCs (often called \"i386\" or \"x86\" computers), 64-bit-processor computers and Apple Mac computers. <a href=\"%s\">Read how you can try or install GNU/Linux on your computer</a>, be it instead of or together with Windows."); printf($p, $this->base_url('switch_to_linux/try_or_install',1)); ?></p>
        </div>
      </details>

      <br><p><strong><?php print _("Using GNU/Linux"); ?></strong></p>

      <details>
        <summary id="ms_office"><?php print _("Will Microsoft Office run on GNU/Linux?"); ?></summary>
        <div class="answer">
          <p><?php print _("No. It is technically possible to adapt Microsoft Office to GNU/Linux, but Microsoft isn't keen on allowing Office users to choose their operating system. There are other issues with MS Office and openness &mdash; like Microsoft's fierce opposition to supporting <a href=\"http://www.opendocumentformat.org/\" rel=\"external\">the OpenDocument format</a>."); ?></p>
          <p><?php print _("However, a complete, free, reliable office suite exists: <a href=\"https://www.libreoffice.org/\" rel=\"external\">LibreOffice</a>. Or you can choose its close cousin, <a href=\"https://www.openoffice.org/\" rel=\"external\">Apache OpenOffice</a>. They will both happily use all your existing office files in MS-Word, MS-Excel, and MS-PowerPoint format, and are really free (both as in freedom and as in price). And they run on Windows as well as on GNU/Linux."); ?></p>
          <p>
            <a href="<?php # translators: If it exists, please use the localized URL of libreoffice.org. You can find localized URLs here: https://www.libreoffice.org/international-sites/
              print _("https://www.libreoffice.org/"); ?>"><img src="/images/LibreOfficeLogo.png" alt="LibreOffice.org"/></a>
            &nbsp;
            <a href="<?php # translators: If it exists, please use the localized URL of openoffice.org. You can find localized URLs here: https://www.openoffice.org/projects/native-lang.html
            print _("https://www.openoffice.org/") ?>"><img src="/images/OpenOfficeLogo.png" alt="OpenOffice.org"/></a>
          </p>
        </div>
      </details>

      <details>
        <summary id="dvd_mp3"><?php print _("Can I play my DVDs and MP3s under GNU/Linux?"); ?></summary>
        <div class="answer">
          <p><?php print _("The simple answer to this question would be &quot;yes&quot;, however this is only half the truth."); ?></p>
          <p><?php print _("Quite a few GNU/Linux distributions do not include MP3 playback software due to the patent situation of the MP3 format. These patent issues do not affect the user directly, so most distributions make it fairly easy to install MP3 support over the Internet after the installation, making it possible to <strong>legally play MP3 files</strong>, for non-commercial use."); ?></p>
          <p><?php print _("DVDs, on the other hand, are a more difficult situation. Most, if not all, DVDs are encrypted using a system called \"<abbr title=\"Content Scrambling System\">CSS</abbr>\". There is a widely supported free software, called <code>libdvdcss</code>, capable of decrypting DVD videos. However, circumventing the restriction on your DVDs is illegal in many parts of the world, including the USA and the European Union."); ?></p>
          <p><?php print _("There is a legal solution to play your DVDs on GNU/Linux where <code>libdvdcss</code> is illegal. The <a href=\"https://fluendo.com/\" rel=\"external\">Fluendo</a> company has developed an (non-free) application for that purpose which can be purchased from their website."); ?></p>
          <p><?php print _("Non-encrypted DVDs, which include most home-made DVDs, play perfectly well with only free software."); ?></p>
          <div class="read-more">
            <?php print _("More on the web:"); ?>
            <ul>
              <li><a href="<?php # translators: If it exists, please use the localized URL of this wiki page (it's sometimes hard to find). Else, please leave the URL as such.
              print _("https://wiki.ubuntu.com/RestrictedFormats"); ?>" rel="external"><?php print _("Ubuntu Restricted Formats"); ?></a></li>
              <li><a href="<?php # translators: If it exists, please use the localized URL of this wiki page (it's sometimes hard to find). Else, please leave the URL as such.
              print _("https://fedoraproject.org/wiki/Forbidden_items"); ?>" rel="external"><?php print _("Fedora Forbidden Items"); ?></a></li>
            </ul>
          </div>
        </div>
      </details>

      <details>
        <summary id="games"><?php print _("Can I play popular 3D games under GNU/Linux?"); ?></summary>
        <div class="answer">
          <p><?php print _("Yes and no. Some games, for example the Quake series, Rust, Counter-Strike, Tomb Raider, Portal, Left 4 Dead, and many more have GNU/Linux versions. Since the release of the popular Steam platform to the GNU/Linux operating system, the number of GNU/Linux compatible games on Steam has been growing rapidly. Check out the <a href=\"https://store.steampowered.com/linux\" rel=\"external\">Steam store</a> where you can find a wealth of high quality, GNU/Linux compatible games."); ?></p>
          <p><?php print _("Most popular games, alas, only work on Windows and occasionally on macOS. Some Windows games can be run on GNU/Linux with <a href=\"https://www.winehq.org/\" rel=\"external\">Wine</a> or its non-free variant <a href=\"https://www.codeweavers.com/products/crossover/\" rel=\"external\">CrossOver</a>, which involves some unpleasant effort for the user. For a list of games known to work on Wine, see <a href=\"https://appdb.winehq.org/\" rel=\"external\">their games database</a>."); ?></p>
        </div>
      </details>

      <br><p id="huh"><strong><?php print _("More questions?"); ?></strong></p>

      <p><?php
      # translators: The first link will automatically point to the "more" page.
      $p = _("If you have a question that is not covered here, there are many communities to help you. Our \"<a href=\"%s\">%s</a>\" section will help you find the right place to ask.");
      printf( $p, $this->base_url('more',1), _("More") ); ?></p>
      <p><?php
      # translators: The first link will automatically point to the contact page, the second to the bug tracker.
      $p = _("If you can think of a frequent question that we haven't answered yet, do <a href=\"%s\" rel=\"external\">let us know</a>, or <a href=\"%s\" rel=\"external\">file an issue</a>.");
      printf($p, $ggl->get('contact_url'), $ggl->get('tracker_url')); ?></p>
    </article>

    <aside>
      <div class="button green">
        <a href="<?php $this->base_url('linux'); ?>"><?php print _("What is GNU/Linux?"); ?> <i class="fa fa-level-up fa-fw"></i></a>
      </div>
    </aside>
  </div>
</main>

<?php $this->load_footer(); ?>

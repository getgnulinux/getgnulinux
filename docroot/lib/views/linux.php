<?php
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
?>

<main>
  <article>
    <div class="container">
      <header>
        <h1><?php print _("What is GNU/Linux?"); ?></h1>
        <div class="page-intro">
          <p><?php print _("When you hear the word Linux, you may think of programmers with a beard typing obscure code on a black screen. Good news! things have changed."); ?></p>
        </div>
      </header>

      <section>
        <h2><?php print _("The picture"); ?></h2>
        <p><?php print _("GNU/Linux is an <em>operating system</em>, a large piece of software that manages a computer. It is similar to Microsoft Windows, but it is entirely free. The accurate name is <em>GNU/Linux</em> but \"Linux\" is used more often."); ?></p>
        <p><?php print _("GNU/Linux is not one company's product, but a number of companies and groups of people contribute to it. In fact, the <em>GNU/Linux system</em> is a core component, which is branched off into many different products. They are called <strong>distributions</strong>."); ?></p>
        <p><?php print _("Distributions change the appearance and function of GNU/Linux completely. They range from large, fully supported complete systems (endorsed by companies) to lightweight ones that fit on a USB memory stick or run on old computers (often developed by volunteers)."); ?></p>
      </section>

      <section>
        <h2><?php print _("Using GNU/Linux"); ?></h2>
        <p><?php $p = _("GNU/Linux is no harder to use than Windows, and has many more capabilities. It just takes a dozen minutes to get familiar with a distribution like <a href=\"%s\">the ones we recommend for newcomers</a>, which come in with many programs installed."); printf($p, $this->get_base_url('switch_to_linux/choose_a_distribution')); ?></p>
        <p><?php print _("If you need commercial-quality software to work with business documents, Internet/networking, or multimedia and graphics, it's there right out of the box. Want more than that? GNU/Linux can do &ndash; there are many hundreds of free, high quality applications you can find, install and uninstall neatly and easily."); ?></p>
        <p><?php $p = _("You shouldn't assume however, that GNU/Linux is a clone of Windows. To know what to expect when stepping into it, we suggest you read our <a href=\"%s\">Making the switch</a> page."); printf ($p, $this->get_base_url('switch_to_linux')) ?></p>

        <div class="row" dir="ltr">
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img class="materialboxed" src="/images/screenshots/ubuntu1.jpg" title="<?php print _("Accessing applications in the GNOME desktop environment."); ?>" alt="<?php print _("Ubuntu screenshot"); ?>">
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img class="materialboxed" src="/images/screenshots/ubuntu3.jpg" title="<?php print _("GNOME music player"); ?>" alt="<?php print _("Ubuntu screenshot"); ?>">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <h2><?php print _("The larger picture"); ?></h2>
        <p><?php # TRANSLATORS: use the definition of "free software" on GNU.org
        print _("When you get a distribution of GNU/Linux, <strong>you also get the freedom to study, copy, change, and redistribute it</strong> &ndash;&nbsp;that's what makes it truly <a href=\"https://www.gnu.org/philosophy/free-sw.html\" title=\"what is freedom in software?\" rel=\"external\">free software</a>."); ?></p>
        <p><?php print _("Many companies develop their own operating system based on the core <a href=\"https://www.gnu.org\" title=\"the GNU project: at the source of all GNU/Linux distributions\" rel=\"external\">GNU software</a>: products they do not have exclusive rights on. How does the wheel turn?"); ?></p>
        <ul class="browser-default">
          <li><?php print _("Most companies make a profit by <em>selling support and services</em> around their GNU/Linux distribution. Corporate customers buy guaranteed security updates and assistance. Other services often include training and on-demand improvements to software."); ?></li>
          <li><?php print _("Some companies, such as HP or IBM, contribute to GNU/Linux because they pre-install it on servers they sell."); ?></li>
          <li><?php print _("An extremely wide community participates in the development and improvement of software, decreasing costs and improving efficiency."); ?></li>
        </ul>
        <p><?php print _("In the end, individual end-users often get the software at zero cost, while corporate customers are often happy to pay for more support."); ?></p>
      </section>

      <br>

      <aside>
        <div class="row">
          <div class="col l12 xl4">
            <div class="card brown darken-1">
              <div class="card-content white-text">
                <span class="card-title"><?php print _("GNU/Linux FAQ"); ?></span>
                <p><?php $p = _("This FAQ covers common questions about GNU/Linux. We hope this FAQ list can help if you are more curious."); printf($p, $this->get_base_url('linux')); ?></p>
              </div>
              <div class="card-action">
                <a href="<?php $this->base_url('linux/linux_faq'); ?>"><?php print _("Read more"); ?></a>
              </div>
            </div>
          </div>
          <div class="col l12 xl4">
            <div class="card brown darken-1">
              <div class="card-content white-text">
                <span class="card-title"><?php print _("How to Misunderstand Free Software"); ?></span>
                <p><?php
                # TRANSLATORS: use the definition of "free software" on GNU.org
                print _("Misconceptions about free software, corrected."); ?></p>
              </div>
              <div class="card-action">
                <a href="<?php $this->base_url('linux/misunderstanding_free_software'); ?>"><?php print _("Read more"); ?></a>
              </div>
            </div>
          </div>
          <div class="col l12 xl4">
            <div class="card brown darken-1">
              <div class="card-content white-text">
                <span class="card-title"><?php print _("GNU/Linux is not Windows"); ?></span>
                <p><?php print _("If you wish GNU/Linux to be just exactly like Windows, you will probably be disappointed. GNU/Linux is built by people who simply wish it to be different."); ?></p>
              </div>
              <div class="card-action">
                <a href="<?php $this->base_url('linux/linux_is_not_windows'); ?>"><?php print _("Read more"); ?></a>
              </div>
            </div>
          </div>
        </div>
      <aside>
    </div>
  </article>

  <!-- WHY NOT WINDOWS -->

  <aside class="brown lighten-5">
    <div class="container button-section">
      <h1><?php print _("Why not Windows"); ?></h1>
      <div class="page-intro">
        <p><?php print _("Why we should avoid using Microsoft Windows"); ?></p>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('windows'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </div>
  </aside>

  <!-- SWITCH TO GNU/LINUX -->

  <aside>
    <div class="container button-section">
      <h1><?php print _("Switch to GNU/Linux"); ?></h1>
      <div class="page-intro">
        <p><?php print _("Where to download and how to step into GNU/Linux"); ?></p>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('switch_to_linux'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </div>
  </aside>
</main>

<?php $this->load_footer(); ?>

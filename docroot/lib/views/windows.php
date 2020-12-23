<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
  exit(1);
}

$this->load_header();

?>

<main>
  <article>
    <div class="container">
      <header>
        <h1><?php print _("Why not Windows"); ?></h1>

        <div class="page-intro">
          <p><?php
          # TRANSLATORS: This is the catcher-phrase for the Windows page. Exact translation is not required, the goal is to attract attention and set the tone of the page.
          print _("Windows and Office work fine &mdash; Why worry about it?"); ?></p>
        </div>
      </header>

      <div class="row">
        <div class="col m12 l6">
          <div class="card brown darken-1">
            <div class="card-content white-text">
              <h2 class="card-title"><?php print _("Restrictions"); ?></h2>
              <p><?php
              # TRANSLATORS: You may add emphasis ('em' tags) around the word 'licensed' if you wish
              print _("A legal copy of Windows is expensive, but what do you get? Windows and Office are licensed, not sold."); ?></p>
              <p><?php print _("By using these products, we have to agree to <strong>a number of harsh restrictions</strong>. For most Windows licenses, you can't keep the software when you change the hardware. You sometimes can't even give your software away. Who can run the software? On which computer? What can you do with it? The list of restrictions is long and some items are outrageous."); ?></p>
            </div>
            <div class="card-action">
              <a href="<?php $this->base_url('windows/restrictions'); ?>"><?php print _("Read more"); ?></a>
            </div>
          </div>
        </div>
        <div class="col m12 l6">
          <div class="card brown darken-1">
            <div class="card-content white-text">
              <h2 class="card-title"><?php print _("What about choice?"); ?></h2>
              <p><?php print _("Software should come without locks in it."); ?></p>
              <p><?php print _("Why are Office documents difficult to export? Why are the formats continually changing? Why can you not even uninstall some programs? It might be that if you look for choice, Microsoft products aren't for you."); ?></p>
            </div>
            <div class="card-action">
              <a href="<?php $this->base_url('windows/what_about_choice'); ?>"><?php print _("Read more"); ?></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col m12 l6">
          <div class="card brown darken-1">
            <div class="card-content white-text">
              <h2 class="card-title"><?php print _("No source code"); ?></h2>
              <p><?php print _("The source codes of Windows and Office are hidden, so, <strong>no one is allowed to understand</strong> how these programs work."); ?></p>
              <p><?php print _("If you can't get a right to inspect source code (the human-readable inner workings of a program), you can't have someone correct flaws or evaluate how your privacy is protected for you."); ?></p>
              <p><?php print _("And guess what? On software that comes with source code, viruses and spyware aren't effective, and security isn't bought on extra. The antivirus software industry, in which Microsoft is now a significant player, prefers you to use Windows."); ?></p>
            </div>
            <div class="card-action">
              <a href="<?php $this->base_url('windows/what_about_source_code'); ?>"><?php print _("Read more"); ?></a>
            </div>
          </div>
        </div>
        <div class="col m12 l6">
          <div class="card brown darken-1">
            <div class="card-content white-text">
              <h2 class="card-title"><?php print _("Stand for a free society"); ?></h2>
              <p><?php
              # TRANSLATORS: In your language, you might not need to make the distinction between price and freedom. Please do however express that price does not matter, in this sentence.
              print _("A free society requires free software. Think of &quot;free&quot; as in freedom, not price: the freedoms to inspect, learn from, modify the software you use."); ?></p>
              <p><?php print _("Computers are used to share ideas, culture and information. Without these freedoms over software, we risk losing control over what we share."); ?></p>
              <p><?php print _("This is happening today. From plain annoying technologies such as Digital Restrictions Management (<strong>DRM</strong>) to downright frightening ones like <strong>Trusted Computing</strong>, everyone's ability to participate in culture is threatened."); ?></p>
              <p><?php print _("If you have to give up your freedoms to use software, maybe you should not be happy with it."); ?></p>
            </div>
            <div class="card-action">
              <a href="<?php $this->base_url('windows/stand_for_a_free_society'); ?>"><?php print _("Read more"); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="conclusion">
      <div class="container">
        <p><?php
        # TRANSLATORS: This is the conclusion of the article.
        $p = _("Many people find that Windows, an otherwise decent piece of software, <strong>withdraws so many rights</strong> from them, that it is not worth them using it. macOS is <a href=\"%s#mac_freedom\">not much better</a>, either."); printf($p, $this->get_base_url('linux/linux_faq')); ?></p>
        <p><?php $p = _("If you find <a href=\"https://www.gnu.org/philosophy/free-sw.html\" title=\"what is freedom in software?\" rel=\"external\">free software</a> attractive, you might want to <a href=\"%s\" title=\"make the switch to GNU/Linux today!\">give GNU/Linux a try</a>."); printf($p, $this->get_base_url('switch_to_linux')); ?></p>
      </div>
    </section>
  </article>

  <aside class="brown lighten-5">
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

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
        <h1><?php print _("What about source code?"); ?></h1>

        <div class="page-intro">
            <p><?php print _("The source code details the way a program works (it is effectively what programmers write). Without it no one can understand how the software is built."); ?>
            <?php print _("It does not matter if you can't read code: whether or not it is available <strong>directly affects any user</strong>."); ?></p>
        </div>
      </header>

      <section>
        <h2 id="no_one_can_look"><?php print _("No one can look inside"); ?></h2>
        <p><?php print _("Windows comes without its source code. More than that: all users must abide to the license term that says:"); ?></p>
        <blockquote><?php print _("You may not reverse engineer, decompile, or disassemble the software."); ?></blockquote>
        <p><?php print _("As such, it is illegal to work out how Windows or Microsoft Word are designed. It is even illegal to try. You are also forbidden to modify the program for any purpose."); ?></p>
        <p><?php print _("This restriction in the license makes sure that <strong>Microsoft remain the sole organisation that understand how their products work</strong>. Windows is very much like a car that only the original manufacturer is allowed to service."); ?></p>
        <br/>
        <div class="card-panel card-panel--quote amber lighten-4">
          <blockquote>
            <p><?php # TRANSLATORS: This is the quote from Stallman at the start of the article.
            print _("You might say, \"How do I change this recipe to take out the salt?\" and the great chef would respond, \"How dare you insult my recipe, the child of my brain and my palate, by trying to tamper with it? You don't have the judgment to change my recipe and make it work right!\""); ?></p>
            <footer>
              Richard Stallman, <cite><a href="<?php print _("https://www.gnu.org/philosophy/why-free.html"); ?>" rel="external"><?php print _("Why Software Should Be Free"); ?></a></cite>
            </footer>
          </blockquote>
        </div>
      </section>

      <section>
        <h2 id="you_can_trust_free_software"><?php print _("You can trust free software"); ?></h2>
        <p><?php print _("It comes as no surprise that proprietary software is severely lacking in terms of security, compared to software whose source code is freely available (including GNU/Linux)."); ?></p>
        <p><?php print _("Free software means <strong>programmers can change the code</strong> to repair flaws. It means you can hire someone to really check how secure your software is. It means you can benefit from the contributions of a world-wide community to improve safety and reliability. Fifteen million users run GNU/Linux without an anti-virus, in complete safety. And the servers behind search engines and banks run on it too."); ?></p>
      </section>
    </div>

    <section class="conclusion">
      <div class="container">
        <p><?php print _("Source code is the recipe for software. How could one improve on a meal with too much salt, if forbidden to look at the recipe used to cook it?"); ?></p>
        <p><?php print _("Using Windows and Office requires us to <strong>not ask</strong> nor search for the source of the software. Only Microsoft developers can modify your program."); ?></p>
        <p><?php
        # TRANSLATORS: Please note the conditionnal tense: we try to not be too harsh on the reader here ;-)
        print _("Which would you rather trust: the package you are forbidden to study, or the package with the recipe?"); ?></p>
      </div>
    </section>
  </article>

  <br>

  <div class="container">
    <aside>
      <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('windows'); ?>">
        <?php print _("Why not Windows"); ?>
        <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">expand_less</i>
      </a>
    </aside>
  </div>

  <br>

</main>

<?php $this->load_footer(); ?>

<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

$footnote1 = '<sup><a class="footnote" id="footnote-ref-1" href="#footnote-1">1</a></sup>';
$footnote2 = '<sup><a class="footnote" href="#footnote-1">1</a></sup>';

?>

<main>
  <article>
    <div class="container">
      <header>
        <h1><?php print _("Stand for a Free Society"); ?></h1>
        <div class="page-intro">
          <p><?php print _("There is much more to software than being trustworthy (being \"Open-Source\"): what really counts is <strong>the freedoms you get</strong> over it. Can you learn from it? Can you build upon it? Can you distribute it? That's what we refer to as \"free software\"."); ?></p>
        </div>
      </header>

      <div class="card-panel card-panel--quote amber lighten-4">
        <blockquote>
          <p><?php
          # TRANSLATORS: This is the quote by Don Marti at the start of the article.
          print _("I come up with new words, phrases, analogies, all kinds of fun stuff in the English language and people paraphrase what I had to say and make money talking about some of the same things that I did."); ?></p>
          <p><?php print _("<strong>If I try to lock down</strong> what I talk about and write about, the same way as a proprietary software company does, then the whole industry of speaking, writing, media, would be overly litigious, and transaction costs would be prohibitive."); ?></p>
          <footer>
            Don Marti, <cite><a href="https://web.archive.org/web/20080217042507/http://www.go-opensource.org:80/go_open/episode_2/big_guns/" rel="external">Go Open Source - Big Gun: Don Marti</a></cite>
          </footer>
        </blockquote>
      </div>

      <section>
        <h2 id="not_a_crazy_concept"><?php print _("Not a crazy concept"); ?></h2>
        <p><?php print _("It sounds peculiar to many users that software should be free as in freedom, since none of Microsoft's products are. Yet our society works with many free things in it, for example:"); ?></p>
        <div class="card-panel card-panel--small card-panel--quote amber lighten-4 float-<?php print $this->rtltr("right", "left"); ?> hide-on-small-only">
          <blockquote>
            <p><?php
            # TRANSLATORS: This is the short quote on the side of the article.
            print _("Though no one has a proprietary lock on yoga, it is still a thriving $30 billion business in the United States."); ?></p>
            <footer>
              Venkatesh Hariharan, <cite><a href="https://web.archive.org/web/20100306185803/http://www.redhat.com:80/magazine/025nov06/features/intellectual_india/?sc_cid=bcm_edmsept_007" rel="external">A society that shares: India's tradition of knowledge</a></cite>
            </footer>
          </blockquote>
        </div>
        <ul class="browser-default">
          <li><?php print _("No chef would ever forbid you to modify his recipe and make derivatives out of it. The food industry thrives despite being required by law to list ingredients on product labels."); ?></li>
          <li><?php print _("A fair law court system permits anyone to read through all the trial hearings and arguments. Not only the result (the final deliberations), but also the process is fully open."); ?></li>
        </ul>
        <p><?php print _("Free software is free as in &quot;free speech&quot;, as in a &quot;free market&quot;: all are necessary for a free society. Unconvinced? Let us look at proprietary software a little closer."); ?></p>
      </section>

      <section>
        <h2 id="proprietary_software_going_wrong"><?php print _("Proprietary software going wrong"); ?></h2>
        <p><?php $p = _("The limits of proprietary software go beyond the security issue (see <a href=\"%s\">our article on source code</a>): today proprietary software interferes with the spread of culture and information. This happens mainly through two technologies:");
        printf($p, $this->get_base_url('windows/what_about_source_code')); ?></p>

        <h3 id="digital_rights_management"><?php
        # TRANSLATORS: This is sometimes only known as "DRM" in some languages. Please choose the vocabulary carefully. The %s placeholder links to a footnote which explains why we use the term "Digital Restrictions Management": https://www.getgnulinux.org/windows/stand_for_a_free_society/#footnote_bottom1
        $p = _("Digital Restrictions Management %s (DRM)"); printf($p, $footnote1);?></h3>
        <p><?php
        # TRANSLATORS: The %s placeholder will automatically point to the footnote on bottom of page
        $p = _("The main idea of DRM %s is to restrict access to files. Users encounter this when, for example, they purchase music through iTunes, and then can only play their music with one player, from one brand. With this method, companies fight copyright infringement, but they also severely restrain users' access to their files.");
        printf($p, $footnote2); ?></p>
        <p><mark><?php print _("DRM is control over content"); ?></mark></p>
        <p><?php print _("Except that the control is not in the hands of the end-user. The original purpose of <abbr title=\"Digital Restrictions Management\">DRM</abbr> is understandable, but the implications over the flow of information and culture within a society are frightening."); ?></p>
        <ul class="browser-default">
          <li><?php print _("Imagine a book that automatically became glued shut after you read it once."); ?></li>
          <li><?php print _("Imagine documents that self-destructed if you tried to take them out of the room."); ?></li>
          <li><?php print _("Imagine telephones that only worked if the person you were ringing was renting the same make and model."); ?></li>
        </ul>
        <p><?php print _("Sounds crazy? This is where Trusted Computing comes in."); ?></p>

        <h3 id="trusted_computing"><?php
        # TRANSLATORS: This is sometimes only known as "Trusted Computing", not TC, in some languages. Please choose the vocabulary carefully.
        print _("Trusted Computing (TC)"); ?></h3>
        <p><?php print _("Trusted Computing (sometimes <a href=\"https://www.lafkon.net/tc/\" title=\"A very well done video on Trusted Computing\" rel=\"external\">more accurately</a> called \"Treacherous Computing\") means a computer can only run \"Trusted\" Software. It is meant to be an uncircumventable protection against nuisances (like viruses or spyware) and copyright violations (people copying proprietary software)."); ?></p>
        <p><mark><?php print _("Trusted Computing is control over the computer"); ?></mark></p>
        <p><?php print _("The critical thing about Trusted Computing is that <strong>you cannot decide</strong> what is trustworthy and what is not. For example, your computer might refuse to run programs that are not certified by the software company &ndash;programs that could enable you to take documents out of the office, or play your neighbour's DVD, or send your essay to someone not using the same program."); ?></p>
        <p><?php print _("A whole range of possibilities opens up for companies that benefit from restricting your computing (such as proprietary software and recording companies). It is suddenly possible to rent DVDs that only play two times, or music you can only listen to during September, or information you can read but can't save or copy. All of a sudden, Trusted Computing and DRM enable <strong>remote control</strong> over content."); ?></p>
        <p><?php print _("Trusted Computing, in effect, enables the publisher to write their own copyright law."); ?></p>
      </section>

      <section>
        <h2 id="the_wider_impact"><?php print _("The wider impact"); ?></h2>

        <div class="card-panel card-panel--quote amber lighten-4">
          <blockquote>
            <p><?php
            # TRANSLATORS: This is the quote by Rosemary Bechler in the middle of the article.
            print _("Many cultural products are now emerging &quot;triple protected&quot;, not only by copyright and code, but also by contracts or licenses for which users waive all remaining rights."); ?></p>
            <p><?php print _("Increasingly, copyright is replaced with click-through end-user licenses for digital content, using contract law to establish the absolute property rights that copyright laws were originally intended to deny to publishers."); ?></p>
            <footer>
              Rosemary Bechler, <cite><a href="https://web.archive.org/web/20090107014724/http://www.counterpoint-online.org/cgi-bin/item.cgi?id=637" rel="external">Unbounded Freedom</a></cite>
            </footer>
          </blockquote>
        </div>

        <br>

        <p><?php print _("Computing is not just about calculations anymore. We use software to communicate: to share information, ideas and culture. Software is in our phones, cars, media players, TVs, and gets to govern just about every new device around us."); ?></p>

        <div class="card-panel card-panel--image card-panel--quote amber lighten-4 float-<?php print $this->rtltr("right", "left"); ?> hide-on-med-and-down">
          <blockquote>
            <img src="/images/windows/content_protection.png" width="350" alt="DRM">
            <footer>
              Randall Munroe, <cite><a href="https://xkcd.com/129/" rel="external">xkcd: Content Protection</a></cite>
            </footer>
          </blockquote>
        </div>

        <br>

        <p><?php print _("<strong>Software is increasingly used to enforce rules</strong>. Rules that may or may not be the law. Rules that may or may not be fair. If the software is not free there will be no space for the user to influence these rules."); ?></p>
        <p><?php print _("Trusted Computing and DRM pave the way for a society in which culture and information are not simply turned into products (they are right now, and that is fine), but into <em>consumable</em> products."); ?></p>
        <p><?php print _("Code is power. Most of today's work documents are written and encoded with secret algorithms in proprietary software. What will be of tomorrow's books, photos, films, essays, animations, music, news? Proprietary programs such as Windows have no transparency. A free culture and a free society cannot grow from such software."); ?></p>
        <p><?php $p = _("May we suggest you <a href=\"%s\">switch to GNU/Linux</a>?"); printf($p, $this->get_base_url('switch_to_linux')); ?></p>
      </section>

      <br>

      <aside class="card-panel amber lighten-4 card-panel--further-reading">
        <h3 class="center"><?php print _("Read more"); ?></h3>

        <div class="row">
          <div class="col s12 l6">
            <h4><a href="<?php print _("https://www.gnu.org/philosophy/right-to-read.html"); ?>" rel="external"><?php print _("The Right to Read"); ?></a></h4>
            <p><?php print _("What is the Trusted Computing world like? This is a short story by Richard Stallman that describes how this can affect any of us."); ?></p>
          </div>
          <div class="col s12 l6">
            <h4><a href="<?php
            # TRANSLATORS: Unless you know of a very good resource about DRM, please point to the Wikipedia article about DRM in your language, if it exists
            print _("http://www.timj.co.uk/computing/politics-policy/drm/fallacy/"); ?>" rel="external"><?php
            # TRANSLATORS: Title of external link
            print _("The fallacy of DRM"); ?></a></h4>
            <p><?php print _("A very well constructed article about <abbr title=\"Digital Restrictions Management\">DRM</abbr> by Tim Jackson, and on which we based the present article."); ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l6">
            <h4><a href="<?php
            # TRANSLATORS: If you don't know of a localized version of this article, please leave the URL in English
            print _("https://jimmywales.com/2004/10/21/free-knowledge-requires-free-software-and-free-file-formats/"); ?>" rel="external"><?php print _("Free Knowledge requires Free Software and Free File Formats"); ?></a></h4>
            <p><?php print _("An engaged article by Jimmy Wales, who co-founded the free encyclopedia <a href=\"https://www.wikipedia.org/\" rel=\"external\">Wikipedia</a>."); ?></p>
          </div>
          <div class="col s12 l6">
            <h4><a href="<?php print _("https://www.lafkon.net/tc/"); ?>" hreflang="en" title="<?php print _("Trusted Computing"); ?>" rel="external"><?php print _("Trusted Computing"); ?></a></h4>
            <p><?php print _("Short video animation by Benjamin Stephan and Lutz Vogel. A clear, snappy and convincing argument."); ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l6">
          <h4><a href="<?php print _("https://www.gnu.org/philosophy/why-free.html"); ?>" rel="external"><?php print _("Why Software Should Not Have Owners"); ?></a></h4>
          <p><?php print _("A pivotal text for the Free Software movement by Richard Stallman. It clarifies common objections and explains a handful of important ideas."); ?></p>
          </div>
          <div class="col s12 l6">
            <h4><a href="<?php $this->base_url('linux/misunderstanding_free_software'); ?>"><?php print _("How to Misunderstand Free Software"); ?></a></h4>
            <p><?php # TRANSLATORS: This describes the last link, which will automatically point to the 'Misunderstanding Free Software' article
            print _("More on free software on this website."); ?></p>
          </div>
        </div>
      </aside>

      <br>

      <aside>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('windows'); ?>">
          <?php print _("Why not Windows"); ?>
          <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">expand_less</i>
        </a>
      </aside>

      <div class="footnotes">
        <ol>
          <li id="footnote-1"><sup><a href="#footnote-ref-1">^</a></sup>
            <?php print _("Note that DRM is often referred to as \"Digital Rights Management\", although it has little to do with rights &ndash; \"Digital Restrictions Management\" is a more accurate name."); ?>
          </li>
        </ol>
      </div>

    </article>
  </div>
</main>

<?php $this->load_footer(); ?>

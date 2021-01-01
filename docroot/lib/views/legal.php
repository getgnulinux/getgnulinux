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
        <h1>Legal terms</h1>
      </header>

      <section>
        <p>By accessing, browsing or using any of the &ldquo;get GNU/Linux!&rdquo; websites, any
        of their content or information, you have to understand and accept the terms on
        the present page. These websites include <a href="https://www.getgnulinux.org/">getgnulinux.org</a>
        and all their sub-domains.</p>
      </section>

      <section>
        <h2 id="content">Content</h2>
        <p>All content is provided by us (the authors of the &ldquo;get GNU/Linux!&rdquo; websites)
        <em>on an "as is" basis only</em>. We believe the content on our
        websites to be correct and accurate; we provide it in good faith, however it
        may contain technical inaccuracies or typographical errors. <em>We provide no
        warranties</em> on it, express or implied, including but not limited to, implied
        warranties of fitness for a particular purpose, merchantability and noninfringement.<br/>
        Our websites are released under the following licenses:</p>

        <ul class="browser-default">
          <li>
            Text content of getgnulinux.org and all their translations: <a
            href="https://creativecommons.org/licenses/by-sa/4.0/"
            rel="external">Creative Commons Attribution Share-Alike 4.0
            International License</a>. This means we hold the copyright upon it,
            but grant some rights, including copying, redistributing, modifying
            for any purpose, including commercial, without permission, as long as
            you credit us for the original creation and redistribute the content
            under the same or similar license.
          </li>
          <li>
            Graphics of getgnulinux.org: as described in the <a href="<?php $this->base_url('credits'); ?>">credits</a>.
          </li>
        </ul>
      </section>

      <section>
        <h2 id="microsoft_trademarks">Microsoft trademarks</h2>

        <p>Microsoft Windows&reg;, Microsoft Windows Vista&trade;, Microsoft Excel&reg;,
        Microsoft PowerPoint&reg;, Microsoft Internet Explorer&reg;, Microsoft Windows
        Media Player&reg;, and
        <a rel="nofollow external" href="https://www.microsoft.com/en-us/legal/intellectualproperty/trademarks/#E6" title="Partial list of Microsoft products subjected to trademark regulations">other Microsoft product and service names</a>
        are trademarks, registered trademarks or trade dress of Microsoft, Inc. or
        its affiliates in the U.S. and/or other countries.</p>

        <p>All other trademarks not owned by Microsoft or its affiliates that may appear
        on these sites are the property of their respective owners, who may or may not
        be affiliated with, connected to, or sponsored by Microsoft or its affiliates.</p>
      </section>

      <section>
        <h2 id="liability">Liability</h2>

        <p><em>In no event will we be liable to you or any other individual or entity
        for any direct, indirect, incidental, punitive, special or consequential damages
        related to any use of these websites</em>, their content or on any other
        hyperlinked website, including but not limited to, any lost profits, lost sales,
        lost revenue, business interruption, loss of programs or other data even if we
        are expressly advised or aware of the possibility of such damages or losses.</p>
      </section>

      <section>
        <h2 id="confidentiality_of_information">Confidentiality of information sent by you</h2>

        <p><em>We do not want to receive confidential information from you through
        our websites</em>. Any information or material sent to these websites will
        be deemed not to be confidential and may be made public by us. You acknowledge
        that you are fully responsible for the content (in particular its legality,
        reliability, appropriateness, originality, patent and copyright attributions)
        that you submit to us.</p>
      </section>

      <section>
        <h2 id="content_access_change">Content access and content change</h2>

        <p>Downloading or obtaining content from these websites is done at your own
        risk. We provide no assurances that any problems with, or bugs in, the content
        will be resolved.</p>

        <p>You acknowledge that we can change, update or delete content at any time for
        any reason, without notice.</p>
      </section>

      <section>
        <h2 id="links">Links to external websites</h2>

        <p>We make <em>no representations whatsoever about any other website</em> that
        you may access through our websites or through a link from our websites. When
        you access another website, even one that may contain our websites' names or
        marks, you must acknowledge that linking does not mean that we have control
        over, or endorse or accept any responsibility for, the content on, or the use
        of, such website.</p>
      </section>

      <section>
        <h2 id="copyright">Copyright and terms of use infringements</h2>

        <p>We do not intend to infringe others' copyrights, and we ask our readers to
        do the same. If you believe that your work has been copied in a way that
        constitutes infringement on our websites, please
        <a href="<?php $this->text('contact_url'); ?>" rel="external">contact us</a>.
        We reserve the right to seek all remedies available at law and in equity for
        violations of these terms of use, including, but not limited to, the right to
        block access from a particular Internet address to our websites.</p>
      </section>

      <br>
    </div>
  </article>
</main>

<?php $this->load_footer(); ?>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://<?php echo $ggl->get('piwik_url'); ?>" : "http://<?php echo $ggl->get('piwik_url'); ?>");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", <?php echo $ggl->get('piwik_idsite'); ?>);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://<?php echo $ggl->get('piwik_url'); ?>piwik.php?idsite=<?php echo $ggl->get('piwik_idsite'); ?>" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

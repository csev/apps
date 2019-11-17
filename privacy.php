<?php include("top.php");?>
<?php include("nav.php");?>
<h2>Privacy Policy - UMich Learning Applications</h2>
<p>This privacy policy has been compiled to better serve those who are concerned with how their 'Personally Identifiable Information' (PII) is being used online. PII, as described in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.</p>
<p><strong>What personal information do we collect when you use the learning applications on this site?</strong></p>
<p>When you are using the tools on this site, the LMS using the 
<a href="https://www.imsglobal.org/activity/learning-tools-interoperability" target="_blank">
IMS Learning Tools Interoperability® (LTI®)</a> protocol 
to pass Personally Identifiable Information (PII) (generally your name and email address) to this site
for the purposes of using the tools on this site.  It is up to the LMS how much PII to send to these tools (including
sending no PII at all).
</p>
<p><strong>Is PII data required to use this site?</strong></p>
<p>That depends on the tool you are using.  Many tools are built to make use of PII if it is available 
but not require PII for core operation.
It is possible to build a tool using the 
<a href="https://www.tsugi.org" target="_blank">Tsugi</a> learning tool framework to receive launches and
even send grades <i>without</i> requiring PII.  Each tool that is registered in the 
<a href="<?= $CFG->wwwroot . '/store' ?>">app store</a> will indicate the level of PII required for the tool.
</p>
<p><strong>When do we collect information?</strong></p>
<p>We collect the information at the moment you come to this site from the campus Learning Management System.</p>
<p><strong>Where do we store your information?</strong></p>
<p>This site is operated on professionally maintained University of Michigan servers.  
None of your data is shared with any server that is outside of the University of Michigan.  </p>
<p><strong>How do we protect your information?</strong></p>
<p>Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.</p>
<p><strong>How long to we retain your PII?</strong></p>
<p>This system keeps your learning activity separate from your personally identifiable information (Name, Email Address, etc.).
If you do not use this system for 30 days, your PII data is removed from the system (i.e. anonymized).   If you reconnect to the system
from the LMS,and the LMS provides us with your PII, you PII is de-anonomized and all of your learning activity data is reconnected
to your account.  The data cannot be de-anomomized unless you reconnect through the LMS and the LMS provides us with your PII.
</p>
<p><strong>How does our site handle Do Not Track signals?</strong></p>
<p>We honor Do Not Track signals.  When DNT is indicated, we supress the gathering of all internal analytics data and do not use any third-party (Google only) analytics on the pages the user visits.  We never show ads on any page.</p>
<p><strong>Do this site use/set 'cookies'?</strong></p>
<p>This site will not set <b>any</b> cookies during use of the tools on this site when launched from an LMS
by teachers or students.  If you vist the site outside of a launch from an LMS to administer or maintain the site, or even view
this privacy policy, the site will set a temporary session cookie which will be discarded when your borwser is closed.
If you log in to this site to do adminstration / maintenance the site will set login related cookies to make your next login
easier.
</p>
<p><strong>If users disable cookies in their browser:</strong></p>
<p>You can use the learning tools on this site launched from an LMS with browser cookies turned off.
You won't be able to adminster the site without cookies.
</p>
<p><strong>Third-party disclosure</strong></p>
<p>We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information.</p>
<p><strong>Third-party links</strong></p>
<p>We do not include or offer third-party products or services on our website.</p>
<p><strong>Advertising</strong></p>
<p>We do no third-party advertising on this site.</p>
<p><strong>Google Analytics</strong></p>
<?php if ($CFG->universal_analytics ) { ?>
<p>We use Google analytics to track usage and improve the site unless 
you request not to be tracked using a Do Not Track signal (see below).</p>
<p>Google, as a third-party vendor, uses cookies to support analytics on our site. Users may opt-out of the use of the DART cookie by using the Google-provided opt-out capabilities. If users opt-out of Google Analytics on this site, there is no reduction in functionality of this site.</p>
<?php } else { ?>
<p>We do not use Google analytics on this site.</p>
<?php } ?>
<?php if ($CFG->google_translate ) { ?>
<p><strong>Google Analytics</strong></p>
<p>This site used Google Translate and Google Translate may set cookies for its purposes.   The site continues
to function even if you turn off cookies on this site.
</p>
<?php } ?>
<p><strong>COPPA (Children Online Privacy Protection Act)</strong></p>
<p>We do not specifically market to children under the age of 13 years old.</p>
<p><strong>Notifications</strong> </p>
<p>In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur: We will notify you via email</p>
<p>If there are any questions regarding this privacy policy, you may contact us using the information below.<br></p>
<pre><code>Charles R. Severance
105 South State Street
3373 North Quad
Ann Arbor, MI 49105
USA</code></pre>
<p>Last edited: 17-Nov-2019</p>
<?php include("foot.php"); ?>


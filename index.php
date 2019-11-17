<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require "top.php";
require "nav.php";

?>
<div id="container">
<div style="margin-left: 10px; float:right">
<h1>Learning Applications @ UMich</h1>
<p>
This site hosts a number of learning applications to be used 
at the University of Michigan in Canvas.
This should already be installed and available.  If you have any questions
please contact Michael Hess (mlhess) or Charles Severance(csev)
from the 
<a href="https://www.si.umich.edu/" target="_blank">
University of Michigan School of Information
</a>.
</p>
<h2>Technology</h2>
<p>
This site uses <a href="http://www.tsugi.org" target="_blank">Tsugi</a> 
framework to embed a learning 
management system into this site and handle the autograders.  
If you are interested in collaborating
to build these kinds of sites for yourself, please see the 
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> website.
<h3>Copyright</h3>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php 
require "foot.php";

<?php include('../includes/head.php'); ?>


<?php require_once("../includes/nav.php"); ?>


<div class="content_right">	
	<div class="margin4pc hidden" id="compose">

	<div class="clr"></div>
	</div><!-- /margin4pc -->
	


<h1 class="orange_copy"><span class="cat">HTML Overview</span></h1>

	<div class="margin4pc">
		<div class="example_code">	
		<pre>
&lt;!doctype&gt;
&lt;html&gt;

&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /&gt;
&lt;meta name="description" content="Here's a description of the site" /&gt;

&lt;link href="/c/master.css" rel="stylesheet" type="text/css" /&gt;

&lt;link href="http://resilientcoders.org/c/master.css" rel="stylesheet" type="text/css" /&gt;
&lt;/head&gt;

&lt;title&gt;This is the title of the page&lt;/title&gt;
&lt;body&gt;
	&lt;h1&gt;This is the main "headline" of the page. There should only be one.&lt;/h1&gt;
	&lt;h2&gt;This is also a headline, but you can have more.&lt;/h2&gt;
	&lt;h3&gt;Yup, there's even an h3&lt;/h3&gt;

	&lt;div&gt;This is a "div" element. Note that this div is a "parent" containing three "child elements."
		&lt;p&gt;This is a paragraph. And it's the div's first child element.&lt;/p&gt;
		&lt;ul&gt;This is an "unordered list." It's the div's second child. But it also has its own children.
			&lt;li&gt;List item number one&lt;/li&gt;
			&lt;li&gt;List item number two&lt;/li&gt;
		&lt;/ul&gt;
		&lt;img src="http://i.imgur.com/QFdPxZF.gif" alt="Image of a dancing baby" /&gt;
	&lt;/div&gt;&lt;!-- End of the div --&gt;

	&lt;div id="links" class="highlight"&gt;Here's another div. Remember, each ID should only appear once.
		&lt;ul&gt;
			&lt;li&gt;&lt;a href="/"&gt;This is a relative link to our website's "root."&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="http://resilientcoders.org"&gt;This is an absolute link to the homepage.&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="mailto:david@resilientcoders.org?subject=Hey"&gt;This is a link to send me an email.&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;&lt;!-- End of the div --&gt;


&lt;!-- This is a JavaScript file --&gt;
&lt;script type="text/javascript" src="/j/nbw-parallax.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
		</pre>
		</div>
</div><!-- /margin4pc -->
</div><!-- /content_log -->

<?php include('../includes/footer.php'); ?>

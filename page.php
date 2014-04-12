<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="logo_square">
	<a href="/">&nbsp;</a>
</div>
		<div id="primary" class="container">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>

		</div><!-- #container -->

<div class="products">
		<?php require_once("products.php"); ?>
</div>

<footer>
<h4>
&copy;<script type="text/javascript">
      now = new Date
      theYear=now.getYear()
      if (theYear < 1900)
      theYear=theYear+1900
      document.write(theYear)</script> Civica    </h4>
</footer>
</body>
	</html>
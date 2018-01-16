<?php
/*
Template Name: 404 Error Page
*/
get_header(); ?>

<div id="primary" class="site-content">
<div id="content" role="main">
 <?php include 'child-header.php' ?>
<div id="page_not_found" style="padding: 3rem 1rem;">
  <h2 style="text-align:center;">Oops!</h2>
  <h5 style="text-align:center;">We can't seem to find the page you are looking for:</h5>
  <h5 style="text-align:center;"><a href="<?php $url = site_url(); echo $url; ?>">Return to the Homepage</a></h5>
</div>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>

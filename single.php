<?php
/**
* Template Name: Single Post
*
* single.php (the Template for displaying all single posts)
*
*/
get_header(); ?>
<?php wpb_set_post_views(get_the_ID()); ?>

<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
     <?php
     if (have_posts()) :
     	while (have_posts()) : the_post(); ?>
     		<div class="single-post">
     			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
     			<?php the_content(); ?>
     		</div>
     	<?php endwhile;

     	else :
     		echo '<p>No content found</p>';
     	endif;

      ?>

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>

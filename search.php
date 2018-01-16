<?php
/**
* The template for displaying Search Results pages.
*
*
*
*/
get_header(); ?>
<div id="primary">
  <div id="content" class="archivePage">
    <div class="blog-featured">
<?php 
$args = array(
'posts_per_page' => 1,
'post_type' => 'post',
'offset' => 0,
'category_name' => 'featured',
);

$arc_query = new WP_Query( $args );
// var_dump($random_query); // debugging only

if ($arc_query->have_posts()) {
while ($arc_query->have_posts()) {
$arc_query->the_post(); 
$image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
      <div class="featured-col-left" style="background-image:url('<?php echo $image_url; ?>');">
        <a href="<?php the_permalink(); ?>" class="text-holder draw-border">
          <p>Featured</p>
          <h4><?php the_title(); ?></h4>
        </a>
      </div>
<?php } }; ?>      
      <div class="featured-col-right">
<?php 
$args = array(
'posts_per_page' => 2,
'post_type' => 'post',
'offset' => 1,
'category_name' => 'featured',
);

$arc_query = new WP_Query( $args );
// var_dump($random_query); // debugging only

if ($arc_query->have_posts()) {
while ($arc_query->have_posts()) {
$arc_query->the_post();
$image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
 ?>
        <div class="featured-stack" style="background-image:url('<?php echo $image_url; ?>');">
          <a href="<?php the_permalink(); ?>" class="text-holder draw-border">
            <p>Featured</p>
            <h4><?php the_title(); ?></h2>
          </a>
        </div>
<?php } }; ?> 
      </div>
    </div>
    <div class="blog-container">
      <div class="left-col">

<?php 
if ( have_posts() ) {
   while ( have_posts() ) {
      the_post(); 
      $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      ?>
      <a href="<?php the_permalink(); ?>">
          <div class="blog-holder" style="background-image:url('<?php echo $image_url; ?>');">
            <div class="text-holder">
              <div class="date-holder">
                <h5><?php echo get_the_date('d'); ?></h5>
                <h6><?php echo get_the_date('M'); ?></h6>
              </div>
              <div class="text-holder-top">
                <h4><?php the_title(); ?></h4>
                <h5><?php the_category( ', ' ); ?></h5>
              </div>
              <div class="text-holder-bottom">
                <?php the_excerpt();?>
              </div>
            </div>
          </div>
      </a>
   <?php } ?>

<div class="nav-previous page-nation alignleft"><?php next_posts_link( '<i class="fa fa-caret-left" aria-hidden="true"></i> Previous' ); ?></div>
<div class="nav-next page-nation alignright"><?php previous_posts_link( '<i class="fa fa-caret-right" aria-hidden="true"></i> Next' ); ?></div>
<?php } // end if
?>

</div>
      <div class="right-col">
        <div class="right-col-inner">
            <?php dynamic_sidebar('Sidebar Blog 2'); ?>
            <div class="image-holder">
               <img src="http://localhost/rocketcity/wp-content/uploads/2017/11/marketing-quote.png" />
            </div>
        </div>
      </div>
    </div>
  </div><!-- #content -->
</div><!-- #primary -->
 
<?php get_footer(); ?>

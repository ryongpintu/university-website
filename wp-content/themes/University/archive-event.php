   <?php
get_header();
pageBanner(array(
 'title'=>'All Events',
 'subtitle'=>'Here what you have got!'

));
?>

<div class="container container--narrow page-section">
	<?php 
         while(have_posts()){
           the_post();

          get_template_part('template-parts/content-event');
         }

       echo paginate_links();
         ?>
    <hr class="section-break">
    <p><a href="<?php echo site_url('/past-events');?>">Want to recape the past event click here</a></p>
	



  </div>


<?php get_footer();


  ?>
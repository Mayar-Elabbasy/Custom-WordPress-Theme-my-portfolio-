<?php get_header( ); ?>
<div class="container mt-5 bg-light text-center">
<?php
if(have_posts(  )){
    
        the_post( ); ?>
<div class="row">
  <div class="col-12">
    <div class="m-3"><?php the_post_thumbnail( ); ?></div>
    <?php the_category(); ?>
    <h3 class="bg-dark text-light m-2 p-2 text-center"><?php the_title( ); ?></h3>
    <p class="bg-dark text-light m-2 text-center"><?php the_content( ); ?></p>

    <div class="bg-dark text-light m-2 p-3 text-center">
    <?php if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
    </div>
  </div>
</div>
<?php
       
    
}
?>
</div>
    <!-- <h1>Hello</h1> -->
<?php get_footer( ); ?>
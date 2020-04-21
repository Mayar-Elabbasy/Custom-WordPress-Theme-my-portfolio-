<?php get_header( ); ?>
<div class="container mt-5 bg-info text-center">
<?php
if(have_posts(  )){
    
        the_post( ); ?>
<div class="row">
  <div class="col-12" style="font-family: 'Anton', sans-serif;">
    <h3 class="bg-dark text-light m-2 p-2 text-center"><?php the_title( ); ?></h3>
    <div class="bg-dark text-light m-3 p-3"><?php the_content( ); ?></div>
  </div>
</div>
<?php
       
    
}
?>
</div>
<?php get_footer( ); ?>
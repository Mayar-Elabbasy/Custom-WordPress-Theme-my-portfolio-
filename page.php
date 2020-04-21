<?php get_header(); ?>
<div class="container mt-5 bg-info">
    <div class="row">
        <div class="col-6">
            <h4 class="bg-dark text-light m-2 text-center">Welcome From Page</h4>
        </div>
    </div>
</div>
<div class="container mt-5 bg-info text-center">
        <?php
        if(have_posts(  )){
        while ( have_posts() ){
            the_post();
            get_template_part( 'template-parts/content', 'page');
    }
}
?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>



 

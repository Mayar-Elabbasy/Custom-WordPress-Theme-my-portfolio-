<?php get_header(); ?>
   <div class="container single-post">
   <?php
        if(have_posts(  )){
             the_post(); ?>
        <div class="row">
            <div class="col-md-6 m-3 p-3 border border-primary bg-light" style="font-family: 'Anton', sans-serif;">
                <h3>Title: <span class="h5"><?php the_title(); ?></span></h3>
                <h3>Employment type: <span class="h5">
                    <?php echo(get_field( "employment_type" )); ?></span></h3>
                <h3>Company name: <span class="h5">
                    <?php echo(get_field( "company" )); ?></span></h3>
                <h3>Start Date: <span class="h5">
                    <?php echo get_field("start_date"); ?></span></h3>
                <h3>Location: <span class="h5"><?php echo get_field("location"); ?></span></h3>
            </div>
        </div>
        <?php 
        }

        ?>
   </div>
   <?php get_footer(); ?>
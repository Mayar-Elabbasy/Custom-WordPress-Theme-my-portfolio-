<?php get_header(); ?>
   <div class="container single-post">
   <?php
        if(have_posts(  )){
             the_post(); ?>
        <div class="row">
            <div class="col-md-6 m-3 p-3 border border-primary bg-light" style="font-family: 'Anton', sans-serif;">
            
                <h3>Title: <span class="h5"><?php the_title(); ?></span></h3>
                <h3>Degree: <span class="h5">
                    <?php echo(get_field( "degree" )); ?></span></h3>
                <h3>Field of study: <span class="h5">
                    <?php echo(get_field( "field_of_study" )); ?></span></h3>
                <h3>Start Date: <span class="h5">
                    <?php echo get_field("start_year"); ?></span></h3>
                <h3>End Date (or expected): <span class="h5">
                    <?php echo get_field("end_year_or_expected"); ?></span></h3>
                <h3>Grade: <span class="h5"><?php echo get_field("grade"); ?></span></h3>
            </div>
        </div>
        <?php 
        }

        ?>
   </div>
    
                
                
   
   <?php get_footer(); ?>
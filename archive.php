
   <?php get_header(); ?>
   <div class="container m-5 bg-dark p-2">
   <?php
        if(have_posts(  )){
            while(have_posts(  )){ the_post(); ?>
        <div class="post-item">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <h2 class="m-2 text-center"><?php the_title(); ?></h2>
                    </a>
                </div>
                <div class="col-sm-6">
                    <span class="m-2 text-center"><?php the_post_thumbnail( 'thumbnail' ); ?></span>
                </div>
            </div>
        </div>    

        <?php 
            }
        }

        ?>
   </div>
   <?php get_footer(); ?>
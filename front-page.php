<?php get_header(); ?>

<section class="bg-light m-5">
<section class="skills text-center m-5" style="font-family: 'Anton', sans-serif;">
<br>
    <h1>Skills</h1>
    <div class="container">
    <?php
            $args = array(
                "post_type" => ["skills"],
                "posts_per_page" => 5
            );
            $query = new WP_Query($args);
            if($query->have_posts(  )){
                while($query->have_posts(  )){ $query->the_post(); ?>
            <div class="row">
                <div class="col-md-12">
                <h4 class="bg-dark text-light m-4 p-4 text-center">
                    <a href="<?php echo get_the_permalink(); ?>">
                    <?php the_title( ); ?></a></h4>
                    <div class="m-3"><?php the_post_thumbnail('thumbnail' ); ?></div>
                </div>
            </div>
            <?php 
                }
            }

            ?>
    </div>
</section>


<section class="work-exp text-center m-5" style="font-family: 'Anton', sans-serif;">
    <h1>Work Experience</h1>
    <div class="container">
    <?php
            $args = array(
                "post_type" => ["work_experiences"],
                "posts_per_page" => 2
            );
            $query = new WP_Query($args);
            if($query->have_posts(  )){
                while($query->have_posts(  )){ $query->the_post(); ?>
            <div class="row">
                <div class="col-md-12">
                <h4 class="bg-dark text-light m-4 p-4 text-center">
                    <a href="<?php echo get_the_permalink(); ?>">
                    <?php the_title( ); ?></a></h4>
                <div class="m-3"><?php the_post_thumbnail('thumbnail' ); ?></div>
                </div>
            </div>
            <?php 
                }
            }

            ?>
    </div>
</section>

<section class="education text-center m-5" style="font-family: 'Anton', sans-serif;">
    <h1>Education</h1>
    <div class="container">
    <?php
            $args = array(
                "post_type" => ["education"],
                "posts_per_page" => 2
            );
            $query = new WP_Query($args);
            if($query->have_posts(  )){
                while($query->have_posts(  )){ $query->the_post(); ?>
            <div class="row">
                <div class="col-md-12">
                <h4 class="bg-dark text-light m-4 p-4 text-center">
                    <a href="<?php echo get_the_permalink(); ?>">
                    <?php the_title( ); ?></a></h4>
                    <div class="m-3"><?php the_post_thumbnail('thumbnail' ); ?></div>
                </div>
            </div>
            <?php 
                }
            }

            ?>
    </div>
</section>
</section>

<?php get_footer(); ?>


    
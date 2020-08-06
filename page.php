<?php get_header();?>


<div class="woo__background">

    <div class="backLine backLine__one"></div>
    <div class="backLine backLine__two"></div>
    <div class="backLine backLine__three"></div>
    <div class="backLine backLine__four"></div>

    <div class="woo__platform">

        <div class="screw screw--one">
                    <div class="screw__line screw__line--one"></div>
                </div>

                <div class="screw screw--two">
                    <div class="screw__line screw__line--two"></div>
                </div>

                <div class="screw screw--three">
                    <div class="screw__line screw__line--three"></div>
                </div>

                <div class="screw screw--four">
                    <div class="screw__line screw__line--four"></div>
                </div>

<?php if(have_posts()) : while(have_posts()) : the_post();?>

<?php the_content();?>

<?php endwhile; else: endif;?>

    </div>

</div>

<?php get_footer();?>
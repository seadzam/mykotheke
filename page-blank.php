<?php
/* 
Template Name: Blank Template
*/

get_header(); 
?>

<section id="hero__page" class="section kontakt__hero">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <div class="inner__wrap">
                    <div class="headline__wrap">
                        <h1 class="title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blank__content" class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-7">
                <div class="blank__wrap">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

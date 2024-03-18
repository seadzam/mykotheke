<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyKotheke
 */

get_header();
?>

<section id="hero__page" class="section kontakt__hero">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <div class="inner__wrap">
					<svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="33.5" cy="33.5" r="33.5" fill="black"/>
						<path d="M24.1 16L19 22.8V46.6C19 47.5017 19.3582 48.3665 19.9958 49.0042C20.6335 49.6418 21.4983 50 22.4 50H46.2C47.1017 50 47.9665 49.6418 48.6042 49.0042C49.2418 48.3665 49.6 47.5017 49.6 46.6V22.8L44.5 16H24.1Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M19 22.8H49.6" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M41.1 29.6C41.1 31.4035 40.3836 33.1331 39.1083 34.4083C37.8331 35.6836 36.1035 36.4 34.3 36.4C32.4965 36.4 30.7669 35.6836 29.4917 34.4083C28.2164 33.1331 27.5 31.4035 27.5 29.6" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
                    <div class="headline__wrap">
                        <h1 class="title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="page__container__wrap" class="section">	
	<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>

	</div>
</section>

<?php
get_footer();

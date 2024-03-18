<?php get_header();
$current_page = $_SERVER['REQUEST_URI'];
?>

<section id="hero__page" class="section shop__hero">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <div class="inner__wrap">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="33.5" fill="black"/>
                        <g clip-path="url(#clip0_202_212)">
                        <path d="M38.7566 55.6047C38.6957 55.6047 38.6499 55.5894 38.5889 55.5741C36.18 55.0558 34.4114 53.0127 34.2742 50.5581C34.0303 46.1518 34.4876 40.2667 36.4849 35.0677C38.1316 35.4793 39.9459 35.8453 41.9127 36.1349C42.9952 36.3027 44.032 36.4398 45.0534 36.5313C44.1844 40.6173 44.4741 45.2218 45.2822 49.2011C46.0598 53.0585 42.614 56.4432 38.7566 55.6047ZM45.5261 12.3504C39.3818 11.4204 31.3012 16.162 27.642 20.9342C32.5361 23.0687 36.8661 27.048 37.2473 30.57C37.3693 31.6067 37.171 32.613 36.6679 33.5431C38.3755 33.9699 40.2051 34.3358 42.1414 34.6255C51.6399 36.0739 59.5223 35.2049 60.6506 30.6309C62.0075 25.2337 53.6372 13.5854 45.5261 12.3504ZM27.4896 39.3672C26.1479 39.7941 24.6842 40.16 23.0986 40.4954C22.2295 40.6784 21.391 40.8308 20.5829 40.9528C21.391 44.1545 21.3452 47.7832 20.8726 50.9392C20.3999 54.0953 23.3577 56.6872 26.4375 55.8487C26.4832 55.8334 26.529 55.8181 26.5747 55.8029C28.4958 55.2845 29.8527 53.5464 29.8527 51.5491C29.868 48.0576 29.2581 43.4227 27.4896 39.3672ZM22.7936 39.0012C15.1551 40.5869 8.73633 40.221 7.62337 36.5618C6.29693 32.247 12.5632 22.4436 19.0735 21.1019C25.5989 19.7449 35.2347 26.2552 35.7379 30.7377C36.1648 34.5493 30.4169 37.4309 22.7936 39.0012ZM12.4413 32.4605C12.3803 31.8811 11.8924 31.5 11.3435 31.622C10.7947 31.7287 10.3982 32.2928 10.4592 32.8875C10.505 33.4667 10.9929 33.8479 11.5417 33.726C12.0906 33.6193 12.487 33.0552 12.4413 32.4605ZM14.4995 26.926C13.6152 27.0786 12.6699 28.039 12.4108 29.0758C12.1364 30.1126 12.6243 30.8291 13.5085 30.6767C14.3928 30.5395 15.3381 29.5789 15.6125 28.5422C15.8869 27.5054 15.3839 26.7889 14.4995 26.926Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_202_212">
                        <rect width="53.3519" height="53.3519" fill="white" transform="translate(7.44434 7.44446)"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <div class="headline__wrap">
                        <p>Produktkategorie</p>
                        <h1 class="title"><?php single_term_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="category__page" class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <div class="sidebar__wrap">
                    <div class="sidebar__box">
                        <a href="/kategorie/vitalpilz-extrakte" class="link__elem <?php echo ($current_page == '/kategorie/vitalpilz-extrakte/') ? 'active' : '' ?>">
                            <span>Vitalpilz-Extrakte</span>
                        </a>
                        <?php
                            if ( is_product_category( array( 'vitalpilz-extrakte', 'essenzen', 'kapseln-und-pulver' ) ) ) { ?>
                                <a href="/kategorie/vitalpilz-extrakte/essenzen" class="link__elem __submenu <?php echo ($current_page == '/kategorie/vitalpilz-extrakte/essenzen/') ? 'active' : '' ?>">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7L17 12L12 17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 1V8C1 9.06087 1.42143 10.0783 2.17157 10.8284C2.92172 11.5786 3.93913 12 5 12H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Essenzen</span>
                                </a>
                                <a href="/kategorie/vitalpilz-extrakte/kapseln-und-pulver" class="link__elem __submenu <?php echo ($current_page == '/kategorie/vitalpilz-extrakte/kapseln-und-pulver/') ? 'active' : '' ?>">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7L17 12L12 17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 1V8C1 9.06087 1.42143 10.0783 2.17157 10.8284C2.92172 11.5786 3.93913 12 5 12H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Kapseln und Pulver</span>
                                </a>
                            <?php }
                        ?>
                        <a href="/kategorie/ab-hof-vitalpilze" class="link__elem <?php echo ($current_page == '/kategorie/ab-hof-vitalpilze/') ? 'active' : '' ?>">
                            <span>Ab-Hof-Vitalpilzprodukte</span>
                        </a>
                        <?php
                            if ( is_product_category( array( 'ab-hof-vitalpilze', 'frisch-vom-hof', 'gewurze-trockenvleisch', 'vitalpilz-tee-kaffee' ) ) ) { ?>
                                <a href="/kategorie/ab-hof-vitalpilze/frisch-vom-hof" class="link__elem __submenu <?php echo ($current_page == '/kategorie/ab-hof-vitalpilze/frisch-vom-hof/') ? 'active' : '' ?>">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7L17 12L12 17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 1V8C1 9.06087 1.42143 10.0783 2.17157 10.8284C2.92172 11.5786 3.93913 12 5 12H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Frisch vom Hof</span>
                                </a>
                                <a href="/kategorie/ab-hof-vitalpilze/gewurze-trockenvleisch" class="link__elem __submenu <?php echo ($current_page == '/kategorie/ab-hof-vitalpilze/gewurze-trockenvleisch/') ? 'active' : '' ?>">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7L17 12L12 17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 1V8C1 9.06087 1.42143 10.0783 2.17157 10.8284C2.92172 11.5786 3.93913 12 5 12H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Gewürze & TrockenVleisch</span>
                                </a>
                                <a href="/kategorie/ab-hof-vitalpilze/vitalpilz-tee-kaffee" class="link__elem __submenu <?php echo ($current_page == '/kategorie/ab-hof-vitalpilze/vitalpilz-tee-kaffee/') ? 'active' : '' ?>">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7L17 12L12 17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 1V8C1 9.06087 1.42143 10.0783 2.17157 10.8284C2.92172 11.5786 3.93913 12 5 12H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Vitalpilz-Tee & -Kaffee</span>
                                </a>
                            <?php }
                        ?>
                        <a href="/kategorie/vitalpilz-kosmetik" class="link__elem <?php echo ($current_page == '/kategorie/vitalpilz-kosmetik/') ? 'active' : '' ?>">
                            <span>Vitalpilz-Kosmetik</span>
                        </a>
                        <a href="/kategorie/bio-dunger-ersatz" class="link__elem <?php echo ($current_page == '/kategorie/bio-dunger-ersatz/') ? 'active' : '' ?>">
                            <span>Bio-Dünger-Ersatz</span>
                        </a>
                        <?php
                            if ( is_product_category( array( 'bio-dunger-ersatz', 'mykorrhiza-vitalpilz-granulat-bio', 'mykorrhiza-vitalpilz-losung-bio' ) ) ) { ?>
                                <a href="/kategorie/bio-dunger-ersatz/mykorrhiza-vitalpilz-granulat-bio" class="link__elem __submenu <?php echo ($current_page == '/kategorie/bio-dunger-ersatz/mykorrhiza-vitalpilz-granulat-bio/') ? 'active' : '' ?>">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7L17 12L12 17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 1V8C1 9.06087 1.42143 10.0783 2.17157 10.8284C2.92172 11.5786 3.93913 12 5 12H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Mykorrhiza Vitalpilz-Granulat (BIO)</span>
                                </a>
                                <a href="/kategorie/bio-dunger-ersatz/mykorrhiza-vitalpilz-losung-bio" class="link__elem __submenu <?php echo ($current_page == '/kategorie/bio-dunger-ersatz/mykorrhiza-vitalpilz-losung-bio/') ? 'active' : '' ?>">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 7L17 12L12 17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 1V8C1 9.06087 1.42143 10.0783 2.17157 10.8284C2.92172 11.5786 3.93913 12 5 12H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Mykorrhiza Vitalpilz-Lösung (BIO)</span>
                                </a>
                            <?php }
                        ?>
                        <a href="/kategorie/komplementaere-produkte" class="link__elem <?php echo ($current_page == '/kategorie/komplementaere-produkte/') ? 'active' : '' ?>">
                            <span>Komplementäre produkte</span>
                        </a>
                        <a href="/kategorie/pilzbuecher-pilzliteratur" class="link__elem <?php echo ($current_page == '/kategorie/pilzbuecher-pilzliteratur/') ? 'active' : '' ?>">
                            <span>Pilzbücher / Pilzliteratur</span>
                        </a>
                        <a href="/kategorie/geschenkartikel" class="link__elem <?php echo ($current_page == '/kategorie/geschenkartikel/') ? 'active' : '' ?>">
                            <span>Geschenkartikel</span>
                        </a>
                        <a href="/kategorie/pet-produkte" class="link__elem <?php echo ($current_page == '/kategorie/pet-produkte/') ? 'active' : '' ?>">
                            <span>PET-Produkte</span>
                        </a>
                        <a href="/produkte" class="link__elem <?php echo ($current_page == '/produkte/') ? 'active' : '' ?>">
                            <span>Alle produkte</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="column is-8">
                <div class="inner__content">
                    <div class="columns is-multiline is-variable is-1">
                        <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => 9,
                            'paged' => $paged,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field'    => 'slug',
                                    'terms'    => get_queried_object()->slug,
                                ),
                            ),
                        );

                        $loop = new WP_Query( $args );

                        if ( $loop->have_posts() ) { 
                            while ( $loop->have_posts() ) { 
                                $loop->the_post(); 
                                global $product; ?>
                                    <div class="column is-4">
                                        <?php get_template_part('template-parts/product', 'card'); ?>
                                    </div>
                            <?php } ?>

                                <div class="column is-12">
                                    <?php the_posts_pagination( array(
                                        'mid_size'  => 2,
                                        'prev_text' => __( '<svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 1L1 5.5L5 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', 'mykotheke' ),
                                        'next_text' => __( '<svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 10L5 5.5L1 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', 'mykotheke' ),
                                    ) ); ?>
                                </div>
                            <?php } else {
                            echo __('No products found');
                        }

                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php
/* 
Template Name: Kontakt Template
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
                        <path d="M47.9998 19L29.2998 37.7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M48 19L36.1 53L29.3 37.7L14 30.9L48 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="headline__wrap">
                        <h1 class="title">KONTAKT UNS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kontakt__content" class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-7">
                <div class="left__side">
                    <div class="form__wrap">
                        <div class="headline__wrap">
                            <p class="subtitle">Dein Vitalpilz-Onlineshop „MYKOTHEKE“</p>
                            <h2 class="title">Wir sind jederzeit und gerne für Dich da!</h2>
                        </div>
                        <?php echo do_shortcode('[wpforms id="426" title="false"]'); ?>
                    </div>
                </div>
            </div>
            <div class="column is-5">
                <div class="right__side">
                    <div class="location__content">
                        <h2 class="title">MYKOTHEKE.AT</h2>
                        <div class="group__items">
                            <a href="https://www.google.com/maps/place/MYKOTHEKE+-+VITALPILZ-PRODUKTE+BIO+%26+VEGAN/@48.2085838,16.3146036,17z/data=!3m1!4b1!4m5!3m4!1s0x476d05bae72b6d71:0x1f0b56a0a796d7f3!8m2!3d48.2085838!4d16.3167923" target="_blank" class="link__item">
                                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="27" cy="27" r="27" fill="black"/>
                                    <path d="M36 25C36 32 27 38 27 38C27 38 18 32 18 25C18 22.6131 18.9482 20.3239 20.636 18.636C22.3239 16.9482 24.6131 16 27 16C29.3869 16 31.6761 16.9482 33.364 18.636C35.0518 20.3239 36 22.6131 36 25Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M27 28C28.6569 28 30 26.6569 30 25C30 23.3431 28.6569 22 27 22C25.3431 22 24 23.3431 24 25C24 26.6569 25.3431 28 27 28Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Possingergasse 59, 1160 Wien</span>
                            </a>
                            <a href="tel:+4319293003" class="link__item">
                                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="27" cy="27" r="27" fill="black"/>
                                    <path d="M36.8881 31.9201V34.9201C36.8892 35.1986 36.8322 35.4743 36.7206 35.7294C36.6091 35.9846 36.4454 36.2137 36.2402 36.402C36.035 36.5902 35.7927 36.7336 35.5289 36.8228C35.265 36.912 34.9855 36.9452 34.7081 36.9201C31.631 36.5857 28.6751 35.5342 26.0781 33.8501C23.6619 32.3148 21.6135 30.2663 20.0781 27.8501C18.3881 25.2413 17.3364 22.2711 17.0081 19.1801C16.9831 18.9036 17.016 18.6249 17.1046 18.3617C17.1932 18.0986 17.3357 17.8568 17.5229 17.6517C17.7101 17.4466 17.9379 17.2828 18.1919 17.1706C18.4459 17.0584 18.7205 17.0004 18.9981 17.0001H21.9981C22.4834 16.9953 22.9539 17.1672 23.3219 17.4836C23.6898 17.8001 23.9302 18.2395 23.9981 18.7201C24.1247 19.6802 24.3596 20.6228 24.6981 21.5301C24.8327 21.888 24.8618 22.277 24.782 22.651C24.7023 23.0249 24.517 23.3682 24.2481 23.6401L22.9781 24.9101C24.4017 27.4136 26.4746 29.4865 28.9781 30.9101L30.2481 29.6401C30.52 29.3712 30.8633 29.1859 31.2372 29.1062C31.6112 29.0264 32.0002 29.0556 32.3581 29.1901C33.2654 29.5286 34.2081 29.7635 35.1681 29.8901C35.6539 29.9586 36.0975 30.2033 36.4146 30.5776C36.7318 30.9519 36.9003 31.4297 36.8881 31.9201Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>+4319293003</span>
                            </a>
                            <a href="mailto:info@mykotheke.at" class="link__item">
                                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="27" cy="27" r="27" fill="black"/>
                                    <path d="M19 19H35C36.1 19 37 19.9 37 21V33C37 34.1 36.1 35 35 35H19C17.9 35 17 34.1 17 33V21C17 19.9 17.9 19 19 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M37 21L27 28L17 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>info@mykotheke.at</span>
                            </a>
                        </div>
                        <a href="https://g.page/r/CfPXlqegVgsfEAE" target="_blank" class="btn__link">
                            <span>SIEHE WEGBESCHREIBUNG & ÖFFNUNGSZEITEN</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

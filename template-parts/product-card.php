<?php
global $product;
?>
<div class="product__card">
    <a href="<?php echo get_the_permalink(); ?>">
        <figure class="image is-1by1">
            <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                }
            ?>
        </figure>
        <p class="title"><?php the_title(); ?></p>
    </a>
    <div class="action__wrap">
        <div class="price__elem"><span><?php echo $product->get_price_html(); ?></span></div>
        <?php if ( $product->is_in_stock() ) : ?>
        <form action="<?php echo esc_url( get_permalink($product->get_id()) ); ?>" method="post" class="cart">
            <!-- <div class="quantity buttons_added">
                <input type="button" value="-" class="minus">
                <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                <input type="button" value="+" class="plus">
            </div> -->
            <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>">
            <button type="submit" class="btn__addtocart">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_37_1143" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                    <path d="M0 0H21.8036V22H0V0Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask0_37_1143)">
                    <path d="M15.8415 9.45312V5.84375C15.8415 3.09096 13.6299 0.859375 10.9017 0.859375C8.17345 0.859375 5.96179 3.09096 5.96179 5.84375V9.45312" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.8416 19.4219H19.2484" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.545 17.7031V21.1406" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.2484 14.2656V6.01562H2.55505V21.1406H12.4348" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
                <span>In den Warenkorb</span>
            </button>
        </form>
        <?php else : ?>
            <p class="stock out-of-stock">VERGRIFFEN</p>
        <?php endif; ?>
    </div>
</div>

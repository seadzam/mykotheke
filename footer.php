<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyKotheke
 */

?>

	<footer id="footer__section" class="section">
		<div class="container">
			<div class="columns">
				<div class="column is-3">
					<div class="left__side">
						<figure class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/mykotheke-logo-footer.webp" alt="" />
						</figure>
						<p class="info__content">Unter der Marke „MYKOTHEKE“ werden VEGANE Vitalpilzprodukte in BIO-Qualität produziert und verkauft.</p>
						<div class="buttons__group">
							<a href="http://mrca-science.org/index.php/de/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/mrca-icon.webp" alt="mrca-science.org" />
							</a>
							<a href="https://www.handelsverband.at/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/handels-verband-icon.webp" alt="handelsverband.at" />
							</a>
							<a href="https://www.bio-garantie.at/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/bio-logo.webp" alt="bio-garantie.at" />
							</a>
						</div>
					</div>
				</div>
				<div class="column is-5 align__fix">
					<div class="middle__elem">
						<p class="title">SITEMAP</p>
						<nav>
							<div>
								<a href="/produkte/vitalpilz-extrakte">Vitalpilz-Extrakte</a>
								<a href="/produkte/ab-hof-vitalpilze">Ab-Hof-Vitalpilzprodukte</a>
								<a href="/produkte/vitalpilz-kosmetik">Vitalpilz-Kosmetik</a>
								<a href="/produkte/bio-dunger-ersatz">Bio-Dünger-Ersatz (MYKORRHIZEN)</a>
							</div>
							<div>
								<a href="/produkte/komplementaere-produkte">Komplementäre produkte</a>
								<a href="/produkte/pilzbuecher-pilzliteratur">Pilzbücher / Pilzliteratur</a>
								<a href="/produkte/geschenkartikel">Geschenkartikel</a>
								<a href="/produkte/pet-produkte">PET-Produkte</a>
							</div>
						</nav>
						<figure class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/payments.webp" alt="" />
						</figure>
					</div>
				</div>
				<div class="column is-4 align__fix">
					<div class="right__side">
						<p class="title">SICHER EINKAUFEN BEI MYKOTHEKE</p>
						<nav>
							<div>
								<a href="/agb">AGB</a>
								<a href="/datenschutz">Datenschutzerklärung</a>
								<a href="/widerrufsbelehrung">Widerrufsbelehrung</a>
								<a href="/impressum">Impressum</a>
								<a href="/uber-uns">Über uns</a>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="container copy__wrap">
			<div class="columns">
				<div class="column is-6">
					<div class="left__side__1">
						<p class="title">© 2023 MYKOTHEKE ALL RIGHTS RESERVED.</p>
					</div>
				</div>
				<div class="column is-6">
					<div class="right__side__1">
						<a href="https://www.facebook.com/Mykotheke-102278758442764" target="_blank">
							<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="19.5034" cy="20.2256" r="19.5034" fill="white"/>
								<path d="M24.56 11.5576H21.9989C20.8669 11.5576 19.7812 11.9952 18.9807 12.7742C18.1802 13.5531 17.7305 14.6095 17.7305 15.7111V18.2032H15.1694V21.526H17.7305V28.1716H21.1452V21.526H23.7063L24.56 18.2032H21.1452V15.7111C21.1452 15.4908 21.2352 15.2795 21.3953 15.1237C21.5554 14.9679 21.7725 14.8804 21.9989 14.8804H24.56V11.5576Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="https://www.instagram.com/mykotheke/" target="_blank">
							<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="20.3454" cy="20.2256" r="19.5034" fill="white"/>
								<path d="M23.9571 13.0024H16.7336C14.7389 13.0024 13.1218 14.6195 13.1218 16.6142V23.8377C13.1218 25.8324 14.7389 27.4494 16.7336 27.4494H23.9571C25.9518 27.4494 27.5688 25.8324 27.5688 23.8377V16.6142C27.5688 14.6195 25.9518 13.0024 23.9571 13.0024Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M23.2348 19.7712C23.324 20.3724 23.2213 20.9864 22.9414 21.5258C22.6615 22.0653 22.2186 22.5027 21.6757 22.776C21.1329 23.0492 20.5177 23.1443 19.9177 23.0478C19.3176 22.9512 18.7633 22.6679 18.3336 22.2382C17.9039 21.8084 17.6206 21.2541 17.524 20.6541C17.4275 20.0541 17.5226 19.4389 17.7958 18.896C18.069 18.3532 18.5065 17.9103 19.0459 17.6304C19.5854 17.3505 20.1994 17.2478 20.8005 17.3369C21.4137 17.4279 21.9815 17.7136 22.4198 18.152C22.8582 18.5903 23.1439 19.158 23.2348 19.7712Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M24.3184 16.2529H24.3257" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="https://www.linkedin.com/company/70442292" target="_blank">
							<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="20.1875" cy="19.5034" r="19.5034" fill="white"/>
								<path d="M23.077 16.6143C24.2265 16.6143 25.3289 17.0709 26.1417 17.8837C26.9545 18.6965 27.4111 19.7989 27.4111 20.9483V26.0048H24.5217V20.9483C24.5217 20.5652 24.3695 20.1977 24.0986 19.9268C23.8276 19.6559 23.4602 19.5037 23.077 19.5037C22.6939 19.5037 22.3264 19.6559 22.0555 19.9268C21.7845 20.1977 21.6323 20.5652 21.6323 20.9483V26.0048H18.7429V20.9483C18.7429 19.7989 19.1995 18.6965 20.0123 17.8837C20.8251 17.0709 21.9275 16.6143 23.077 16.6143Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.8533 17.3369H12.9639V26.0051H15.8533V17.3369Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M14.4086 15.1697C15.2064 15.1697 15.8533 14.5229 15.8533 13.725C15.8533 12.9271 15.2064 12.2803 14.4086 12.2803C13.6107 12.2803 12.9639 12.9271 12.9639 13.725C12.9639 14.5229 13.6107 15.1697 14.4086 15.1697Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var myButton = document.querySelector('#cart__action');
    myButton.addEventListener('click', function() {
        var event = new CustomEvent('fkcart_open');
        document.body.dispatchEvent(event);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var myButton = document.querySelector('#cart__action__mobile');
    myButton.addEventListener('click', function() {
        var event = new CustomEvent('fkcart_open');
        document.body.dispatchEvent(event);
    });
});
</script>
<script>
  new Glide('.top__slider', {
	autoplay: 4000,
	type: "carousel",
	perView: 3,
	breakpoints: {
        700: {
            perView: 1
        }
    }
  }).mount();
  new Glide('.focus__slider__mobile', {
	autoplay: 6000,
	type: "carousel",
	perView: 3,
	breakpoints: {
        700: {
            perView: 1
        }
    }
  }).mount();
  new Glide('.box__slider__1', {
	autoplay: 6000,
	type: "carousel",
	perView: 1,
  }).mount();
  new Glide('.box__slider__2', {
	autoplay: 9000,
	type: "carousel",
	perView: 1,
  }).mount();
  new Glide('.box__slider__3', {
	autoplay: 5000,
	type: "carousel",
	perView: 1,
  }).mount();
  new Glide('.box__slider__4', {
	autoplay: 6000,
	type: "carousel",
	perView: 1,
  }).mount();
  new Glide('.bonus__slider', {
	autoplay: 2600,
	type: "carousel",
	perView: 1,
  }).mount();
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var mobileMenuButton = document.getElementById('mobile__menu');
    var mobileNav = document.getElementById('mobile__nav');

	var svgMenuOpen = `
		<svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
			<circle cx="29.5" cy="29.5" r="29.5" fill="black"/>
			<path d="M18 30.5H40.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M18 23H40.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M18 38H40.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
	`;

	var svgMenuClose = `
		<svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
			<circle cx="29.5" cy="29.5" r="29.5" fill="black"/>
			<path d="M38 21L22 37" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M22 21L38 37" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
	`;


    mobileMenuButton.innerHTML = svgMenuOpen;

    mobileMenuButton.addEventListener('click', function() {
        mobileNav.classList.toggle('is-visible');

        if (mobileNav.classList.contains('is-visible')) {
            mobileMenuButton.innerHTML = svgMenuClose;
        } else {
            mobileMenuButton.innerHTML = svgMenuOpen;
        }
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var searchButton = document.querySelector('.search__btn');
    var searchBox = document.querySelector('.search__box');

    searchButton.addEventListener('click', function() {
        searchBox.classList.toggle('is-visible');
    });
});
</script>

<script>

document.addEventListener('DOMContentLoaded', function() {
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.addedNodes.length > 0) {
                var noticeElement = document.querySelector('.wc-block-components-notice-banner.is-error[data-id="legal"]');
                if (noticeElement) {
                    var targetElement = document.querySelector('.woocommerce-gzd-legal-checkbox-text');
                    if (targetElement) {
                        targetElement.style.color = 'red';
                    }
                }
            }
        });
    });

    var targetNode = document.querySelector('.checkout.woocommerce-checkout'); // Replace with the ID or selector of the parent element where AJAX content is loaded
    var config = { childList: true, subtree: true };
    observer.observe(targetNode, config);
});


</script>

<script>
	jQuery(document).ready(function($) {
    $(document).on('click', '.plus, .minus', function() {
        var $qty = $(this).closest('.quantity').find('.qty'),
            currentVal = parseFloat($qty.val()),
            max = parseFloat($qty.attr('max')),
            min = parseFloat($qty.attr('min')),
            step = $qty.attr('step');

        // Change the value
        if ($(this).is('.plus')) {
            if (max && (max == currentVal || currentVal > max)) {
                $qty.val(max);
            } else {
                $qty.val(currentVal + parseFloat(step));
            }
        } else {
            if (min && (min == currentVal || currentVal < min)) {
                $qty.val(min);
            } else if (currentVal > 0) {
                $qty.val(currentVal - parseFloat(step));
            }
        }

        // Trigger change event
        $qty.trigger('change');
    });
});

jQuery(document).ready(function($) {
    $('form.cart').on('submit', function(e) {
        e.preventDefault();
        var $form = $(this),
            product_id = $form.find('input[name=add-to-cart]').val(),
            quantity = $form.find('input[name=quantity]').val();

        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'woocommerce_ajax_add_to_cart',
                product_id: product_id,
                quantity: quantity,
            },
            success: function(response) {
                if (response.error & response.product_url) {
                    window.location = response.product_url;
                    return;
                } else {
                    // Trigger event so the page reflects the new cart contents
                    $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $form]);
                }
            },
        });
    });
});

</script>

<script>
jQuery(document).ready(function($) {
    $(document.body).on('btn__addtocart', function(event, fragments, cart_hash, $button) {
        $('a.added_to_cart').remove();
    });
});
</script>
<script src="https://app.prive.eu/consent"
		data-cc-tools="Wordpress"
		data-cc-privacy="https://www.mykotheke.at/datenschutz"
		data-cc-imprint="https://www.mykotheke.at/impressum"
		data-cc-color=""
		data-cc-theme="system"
		data-cc-language="browser"
		data-cc-non-eu-consent="true">
</script>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		var dropdown = document.querySelector('.dropdown__category');
		
		dropdown.addEventListener('click', function(event) {
		
			event.stopPropagation();
			
			dropdown.classList.toggle('is-active');
		});
	});        
</script>

</body>
</html>

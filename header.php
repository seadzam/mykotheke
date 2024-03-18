<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyKotheke
 */
$current_page = $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">

	<script defer data-cookiecategory="Facebook">
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '747765348705908');
		fbq('track', 'PageView');
	</script>


	<script>
	(function(w,d,s,l,i){
		w[l]=w[l]||[];
		w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});
		var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
		j.async=true;
		j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
		f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NCTZTJC');
	</script>

	<?php wp_head(); ?>
</head>
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCTZTJC"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page__wrap woocommerce">
	<header id="header__main" class="section">
		<div class="container">
			<div class="columns">
				<div class="column is-12">
					<div class="main__wrap">
						<div class="logo__nav">
							<a href="/" class="logo__elem">
								<img src="<?php echo get_template_directory_uri(); ?>/images/mykotheke-logo.webp" alt="MyKotheke" />
							</a>
							<nav>
								<a href="/" class="<?php echo ($current_page == '/') ? 'active' : '' ?>">HOME</a>
								<div class="dropdown is-hoverable">
									<a href="/produkte" class="dropdown-trigger">
										<button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
											<span class="<?php echo ($current_page == '/produkte/') ? 'active' : '' ?>">PILZPRODUKTE</span>
											<span class="icon is-small">
												<svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1 1L4 4L7 1" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</span>
										</button>
  									</a>
									<div class="dropdown-menu" id="dropdown-menu4" role="menu">
										<div class="dropdown-content">
											<div class="dropdown-item">
												<a href="/kategorie/vitalpilz-extrakte" class="link__elem">
													<span>Vitalpilz-Extrakte</span>
												</a>
											</div>
											<div class="dropdown-item">
												<a href="/kategorie/ab-hof-vitalpilze" class="link__elem">
													<span>Ab-Hof-Vitalpilzprodukte</span>
												</a>
											</div>
											<div class="dropdown-item">
												<a href="/kategorie/vitalpilz-kosmetik" class="link__elem">
													<span>Vitalpilz-Kosmetik</span>
												</a>
											</div>
											<div class="dropdown-item">
												<a href="/kategorie/bio-dunger-ersatz" class="link__elem">
													<span>Bio-Dünger-Ersatz</span>
												</a>
											</div>
											<div class="dropdown-item">
												<a href="/kategorie/komplementaere-produkte" class="link__elem">
													<span>Komplementäre produkte</span>
												</a>
											</div>
											<div class="dropdown-item">
												<a href="/kategorie/pilzbuecher-pilzliteratur" class="link__elem">
													<span>Pilzbücher / Pilzliteratur</span>
												</a>
											</div>
											<div class="dropdown-item">
												<a href="/kategorie/geschenkartikel" class="link__elem">
													<span>Geschenkartikel</span>
												</a>
											</div>
											<div class="dropdown-item">
												<a href="/kategorie/pet-produkte" class="link__elem">
													<span>PET-Produkte</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="dropdown is-hoverable">
									<a href="/angebote" class="dropdown-trigger">
										<button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
											<span class="<?php echo ($current_page == '/angebote/') ? 'active' : '' ?>">ANGEBOTE%</span>
											<span class="icon is-small">
												<svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1 1L4 4L7 1" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</span>
										</button>
  									</a>
									<div class="dropdown-menu" id="dropdown-menu4" role="menu">
										<div class="dropdown-content">
											<div class="dropdown-item">
												<a href="/angebote" class="link__elem">
													<span>Produkte im Angebot</span>
												</a>
											</div>
											<div class="dropdown-item">
												<a href="/wiederverkaufer" class="link__elem">
													<span>Angebote für Wiederverkäufer</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<a href="/blog" class="<?php echo ($current_page == '/blog/') ? 'active' : '' ?>">BLOG</a>
								<a href="/kontakt" class="<?php echo ($current_page == '/kontakt/') ? 'active' : '' ?>">KONTAKT</a>
							</nav>
						</div>
						<div class="right__side">
							<div class="search__box">
								<?php echo do_shortcode( '[ivory-search id="418" title="Main Search Form"]' ); ?>
							</div>
							<button class="search__btn">
								<svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="29.5" cy="29.5" r="29.5" fill="white"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M22 28C22 24.134 25.134 21 29 21C32.866 21 36 24.134 36 28C36 29.8858 35.2543 31.5975 34.0416 32.8562C34.0072 32.8826 33.9742 32.9115 33.9428 32.9429C33.9114 32.9744 33.8825 33.0074 33.8561 33.0417C32.5974 34.2543 30.8858 35 29 35C25.134 35 22 31.866 22 28ZM34.6176 35.032C33.078 36.2635 31.125 37 29 37C24.0294 37 20 32.9706 20 28C20 23.0294 24.0294 19 29 19C33.9706 19 38 23.0294 38 28C38 30.125 37.2635 32.0781 36.0318 33.6178L39.707 37.2929C40.0975 37.6834 40.0975 38.3166 39.707 38.7071C39.3165 39.0977 38.6833 39.0977 38.2928 38.7071L34.6176 35.032Z" fill="black"/>
								</svg>
							</button>
							<button id="cart__action">
								<svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="29.5" cy="29.5" r="29.5" fill="white"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M23.2 18.4C23.3889 18.1482 23.6852 18 24 18H36C36.3148 18 36.6111 18.1482 36.8 18.4L39.7939 22.3919C39.9232 22.5604 40 22.7712 40 23V37C40 37.7957 39.6839 38.5587 39.1213 39.1213C38.5587 39.6839 37.7957 40 37 40H23C22.2043 40 21.4413 39.6839 20.8787 39.1213C20.3161 38.5587 20 37.7957 20 37V23C20 22.7712 20.0768 22.5604 20.2061 22.3919L23.2 18.4ZM35.5 20L37 22H23L24.5 20H35.5ZM22 37V24H38V37C38 37.2652 37.8946 37.5196 37.7071 37.7071C37.5196 37.8946 37.2652 38 37 38H23C22.7348 38 22.4804 37.8946 22.2929 37.7071C22.1054 37.5196 22 37.2652 22 37ZM27 27C27 26.4477 26.5523 26 26 26C25.4477 26 25 26.4477 25 27C25 28.3261 25.5268 29.5979 26.4645 30.5355C27.4021 31.4732 28.6739 32 30 32C31.3261 32 32.5979 31.4732 33.5355 30.5355C34.4732 29.5979 35 28.3261 35 27C35 26.4477 34.5523 26 34 26C33.4477 26 33 26.4477 33 27C33 27.7956 32.6839 28.5587 32.1213 29.1213C31.5587 29.6839 30.7956 30 30 30C29.2044 30 28.4413 29.6839 27.8787 29.1213C27.3161 28.5587 27 27.7956 27 27Z" fill="black"/>
								</svg>
								<?php 
									$cart_count = get_cart_count();
									if ($cart_count > 0) {
										echo '<div class="items__elem">' . $cart_count . '</div>';
									} 
								?>
							</button>
							<div id="button__lang" class="dropdown is-right is-hoverable">
								<div class="dropdown-trigger">
									<button aria-haspopup="true" aria-controls="dropdown-menu4">
										<svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="29.5" cy="29.5" r="29.5" fill="white"/>
											<path d="M30 39C35.5228 39 40 34.5228 40 29C40 23.4772 35.5228 19 30 19C24.4772 19 20 23.4772 20 29C20 34.5228 24.4772 39 30 39Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M20 29H40" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M30 19C32.5013 21.7384 33.9228 25.292 34 29C33.9228 32.708 32.5013 36.2616 30 39C27.4987 36.2616 26.0772 32.708 26 29C26.0772 25.292 27.4987 21.7384 30 19Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>						
									</button>
								</div>
								<div class="dropdown-menu" id="dropdown-menu4" role="menu">
									<div class="dropdown-content">
										<div class="dropdown-item">
											<a href="https://mykotheke.com" target="_blank" class="link__elem">
												<span>English</span>
											</a>
										</div>
										<div class="dropdown-item">
											<a href="https://mykotheke.es/" target="_blank" class="link__elem">
												<span>Español</span>
											</a>
										</div>
										<div class="dropdown-item">
											<a href="https://www.mykotheke.com.hr/" target="_blank" class="link__elem">
												<span>Hrvatski</span>
											</a>
										</div>
										<div class="dropdown-item">
											<a href="https://mykotheke.at" target="_blank" class="link__elem">
												<span>Deutsch</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="mobile__header" class="is-hidden-desktop">
		<div class="header__inner">
			<div class="left__side">
				<a href="/" class="logo__elem">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mykotheke-logo.webp" alt="MyKotheke" />
				</a>
			</div>
			<div class="right__side">
				<button id="mobile__menu"></button>
				<button id="cart__action__mobile">
					<svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="29.5" cy="29.5" r="29.5" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M23.2 18.4C23.3889 18.1482 23.6852 18 24 18H36C36.3148 18 36.6111 18.1482 36.8 18.4L39.7939 22.3919C39.9232 22.5604 40 22.7712 40 23V37C40 37.7957 39.6839 38.5587 39.1213 39.1213C38.5587 39.6839 37.7957 40 37 40H23C22.2043 40 21.4413 39.6839 20.8787 39.1213C20.3161 38.5587 20 37.7957 20 37V23C20 22.7712 20.0768 22.5604 20.2061 22.3919L23.2 18.4ZM35.5 20L37 22H23L24.5 20H35.5ZM22 37V24H38V37C38 37.2652 37.8946 37.5196 37.7071 37.7071C37.5196 37.8946 37.2652 38 37 38H23C22.7348 38 22.4804 37.8946 22.2929 37.7071C22.1054 37.5196 22 37.2652 22 37ZM27 27C27 26.4477 26.5523 26 26 26C25.4477 26 25 26.4477 25 27C25 28.3261 25.5268 29.5979 26.4645 30.5355C27.4021 31.4732 28.6739 32 30 32C31.3261 32 32.5979 31.4732 33.5355 30.5355C34.4732 29.5979 35 28.3261 35 27C35 26.4477 34.5523 26 34 26C33.4477 26 33 26.4477 33 27C33 27.7956 32.6839 28.5587 32.1213 29.1213C31.5587 29.6839 30.7956 30 30 30C29.2044 30 28.4413 29.6839 27.8787 29.1213C27.3161 28.5587 27 27.7956 27 27Z" fill="black"/>
					</svg>
					<?php 
						$cart_count = get_cart_count();
						if ($cart_count > 0) {
							echo '<div class="items__elem">' . $cart_count . '</div>';
						} 
					?>
				</button>
			</div>
		</div>
	</div>
	<div id="mobile__nav" class="is-hidden-desktop">
		<nav>
			<a href="/" class="<?php echo ($current_page == '/') ? 'active' : '' ?>">HOME</a>
			<a href="/produkte" class="<?php echo ($current_page == '/produkte/') ? 'active' : '' ?>">PILZPRODUKTE</a>
			<a href="/angebote" class="<?php echo ($current_page == '/angebote/') ? 'active' : '' ?>">ANGEBOTE%</a>
			<a href="/blog" class="<?php echo ($current_page == '/blog/') ? 'active' : '' ?>">BLOG</a>
			<a href="/kontakt" class="<?php echo ($current_page == '/kontakt/') ? 'active' : '' ?>">KONTAKT</a>
			<div class="search__box">
				<?php echo do_shortcode( '[ivory-search id="418" title="Main Search Form"]' ); ?>
			</div>
		</nav>
	</div>
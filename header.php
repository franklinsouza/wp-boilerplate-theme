<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row py-4">
				<div class="col-9 col-md-2 col-lg-3">
					<img src="https://dummyimage.com/150x70/FFA500" alt="Logo" class="img-fluid">
				</div><!-- .site-branding -->
				
				<div class="col-3 col-md-10 col-lg-9 d-flex justify-content-end align-items-center">
					<nav id="main-menu" class="d-flex">
						<ul class="main-menu" role="menubar">
							<li>
								<a href="<?php echo get_home_url(); ?>/quem-somos" role="menuitem" title="Menu item 1">
									Menu item 1
								</a>
							</li>
							<li>
								<a href="<?php echo get_home_url(); ?>/quem-somos" role="menuitem" title="Menu item 2">
									Menu item 2
								</a>
							</li>
							<li aria-haspopup="true">
								<a href="<?php echo get_home_url(); ?>/quem-somos" role="menuitem" title="Menu item 3">
									Menu item 3 <i class="fas fa-chevron-down ms-1 d-none d-lg-inline-block"></i>
								</a>
								<ul role="menu">
									<li>
										<a href="<?php echo get_home_url(); ?>/quem-somos" role="menuitem" title="Menu item 1">
											Submenu item 1
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url(); ?>/quem-somos" role="menuitem" title="Menu item 2">
											Submenu item 2
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url(); ?>/quem-somos" role="menuitem" title="Menu item 3">
											Submenu item 3
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="<?php echo get_home_url(); ?>/quem-somos" role="menuitem" title="Menu item 2">
									Menu item 3
								</a>
							</li>
							<li>
								<a href="<?php echo get_home_url(); ?>/quem-somos" role="menuitem" title="Menu item 2">
									Menu item 4
								</a>
							</li>
						</ul>
					</nav>
					<a href="#main-menu" class="fas fa-bars fs-4 d-block d-lg-none"></a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

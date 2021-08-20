<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>		
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
		<!-- Font Awesome -->
		<!-- <link rel="stylesheet" href="images/fontawesome/css/all.css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> </head>

<body>
	<nav class="site-header header-default fixed-top">
		<div class="container-fluid">
			<div class="d-flex bd-highlight navbar_details">
				<div class="flex-fill bd-highlight w-50">
					<div class="brand-logo p-2 custom_field_contact">
						<?php
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
						?>
					</div>
				</div>
				<div class="d-flex flex-fill bd-highlight">
					<div class="p-2 flex-fill bd-highlight custom_field_email">
						<div class="p-2 flex-fill bd-highlight"> <i class="fa fa-phone"></i>
							<?php 
				if ( '' == get_theme_mod( 'custom_field_contact' ) ) 
					{ 
						$custom_field_contact = 'Default set of data'; 
					} else 
						{ $custom_field_contact = get_theme_mod('custom_field_contact'); 
					} 
					echo $custom_field_contact; 
				?> &nbsp  &nbsp| </div>
					</div>
					<div class="pt-2 flex-fill bd-highlight custom_field_email">
						<div class="pt-2 flex-fill bd-highlight"> <i class="fa fa-envelope"></i>
							<?php 
				if ( '' == get_theme_mod( 'custom_field_email' ) ) 
					{ 
						$custom_field_email = 'Default set of data'; 
					} else 
						{ $custom_field_email = get_theme_mod('custom_field_email'); 
					} 
					echo $custom_field_email; 
				?>
						</div>
					</div>
					<div class="p-2 flex-fill bd-highlight">
						<button type="button" class="btn btn-primary btn-sm rounded-pill btn-custom border-0"> &nbsp<i class="fa fa-paper-plane"></i> Book Now &nbsp</button>
					</div>
				</div>
			</div>
			<p class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			</p>
			<p class="site-description">
				<?php bloginfo( 'description' ); ?>
			</p>
		</div>
	</nav>
	
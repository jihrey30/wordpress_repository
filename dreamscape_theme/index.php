 <?php get_header(); ?>
<!-- slider-->
<div class="container m-0 p-0">
		<div class="arrow arrow-left">
			</i>   
		</div>
		<div class="d-flex flex-column bd-highlight mt-5 ms-5">
			<div class="row justify-content-start  m-0 p-0">
				<div class="caption-title pt-5 ps-5 bd-highlight col-6">Let's Make Your Best Trip Ever </div>
			</div>
			<div class="row justify-content-start m-0 p-0">
				<div class="caption-details pt-5 ps-5 bd-highlight col-7">We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience. </div>
				<div class="row justify-content-start">
					<div class="caption-details pt-5 ps-5 bd-highlight col-7">
						<button type="button" class="btn btn-primary btn-sm rounded-pill btn-custom border-0"> &nbsp<i class="fa fa-paper-plane"></i> Book A Tour &nbsp</button>
					</div>
				</div>
			</div>
			<div> <img src="<?php echo THEME_IMG_PATH; ?>/Image1.png" alt="" /> </div>
			<div> <img src="<?php echo THEME_IMG_PATH; ?>/Image2.png" alt="" /> </div>
			<div> <img src="<?php echo THEME_IMG_PATH; ?>/Image3.png" alt="" /> </div>
			<div class="arrow arrow-right">
				</i>
			</div>
			<div class="dots">
				<div class="dot"> <i class="fa fa-dot-circle"></i> </div>
				<div class="dot"> <i class="fa fa-circle"></i> </div>
				<div class="dot"> <i class="fa fa-circle"></i> </div>
			</div>
		</div>
	</div>

<!-- Gallery -->
<div class="d-flex flex-column bd-highlight mt-5 p-5">
	<div class="d-flex flex-column text-center caption-gallery-title">Featured Tours</div>
	<div class="d-flex flex-column text-center caption-gallery-details">Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and already well-known destinations, some of which are listed below.</div>
</div>
<div class="container-image ms-5 me-5 ">
	<div class="polaroid">
		<img class="photo" src="
		<?php 
		$tour1 = get_stylesheet_directory_uri() . '/images/ds_img_png/tour1.png';
		if (get_theme_mod('image_control_one') !='') {
			$tour1 = get_theme_mod('image_control_one');
		}
		echo $tour1;
		?>" alt="">	
		<div class="caption">
			<div class="d-flex flex-column text-center caption-gallery-details-bold">
            <?php 
				if ( '' == get_theme_mod( 'custom_field_title_1' ) ) 
					{ 
						$custom_field_title_1 = 'Kamalame Cay Resort'; 
					} else 
						{ $custom_field_title_1 = get_theme_mod('custom_field_title_1'); 
					} 
					echo $custom_field_title_1; 
			?>
			</div>
			<div class="d-flex flex-column text-center caption-gallery-details">
            <?php 
				if ( '' == get_theme_mod( 'custom_field_details_1' ) ) 
					{ 
						$custom_field_details_1 = 'Kamalame Cay, The Bahamas'; 
					} else 
						{ $custom_field_details_1 = get_theme_mod('custom_field_details_1'); 
					} 
					echo $custom_field_details_1; 
			?>
			<!-- </div> -->
			</div>
			<div class="text-center flex-fill bd-highlight">
						<button type="button" class="btn btn-primary btn-sm rounded-pill btn-custom border-0"> &nbsp<i class="fa fa-paper-plane"></i> &nbsp Read More &nbsp &nbsp</button>
			</div>
		</div>		
	</div>	
	
	<div class="polaroid">
		<img class="photo" src="
		<?php 
		$tour1 = get_stylesheet_directory_uri() . '/images/ds_img_png/tour2.png';
		if (get_theme_mod('image_control_two') !='') {
			$tour1 = get_theme_mod('image_control_two');
		}
		echo $tour1;
		?>" alt="">	
		<div class="caption">
			<div class="d-flex flex-column text-center caption-gallery-details-bold">
			<?php 
				if ( '' == get_theme_mod( 'custom_field_title_2' ) ) 
					{ 
						$custom_field_title_2 = 'Kamalame Cay Resort'; 
					} else 
						{ $custom_field_title_2 = get_theme_mod('custom_field_title_2'); 
					} 
					echo $custom_field_title_2; 
			?>
			</div>
			<div class="d-flex flex-column text-center caption-gallery-details">
			<?php 
				if ( '' == get_theme_mod( 'custom_field_details_2' ) ) 
					{ 
						$custom_field_details_2 = 'Kamalame Cay, The Bahamas'; 
					} else 
						{ $custom_field_details_2 = get_theme_mod('custom_field_details_2'); 
					} 
					echo $custom_field_details_2; 
			?>
			</div>
			<div class="text-center flex-fill bd-highlight">
						<button type="button" class="btn btn-primary btn-sm rounded-pill btn-custom border-0"> &nbsp<i class="fa fa-paper-plane"></i> &nbsp Read More &nbsp</button>
			</div>
		</div>		
	</div>
	<div class="polaroid">
		<img class="photo" src="
		<?php 
		$tour1 = get_stylesheet_directory_uri() . '/images/ds_img_png/tour3.png';
		if (get_theme_mod('image_control_3') !='') {
			$tour1 = get_theme_mod('image_control_3');
		}
		echo $tour1;
		?>" alt="">	
		<div class="caption">
			<div class="d-flex flex-column text-center caption-gallery-details-bold">
			<?php 
				if ( '' == get_theme_mod( 'custom_field_title_3' ) ) 
					{ 
						$custom_field_title_3 = 'Kamalame Cay Resort'; 
					} else 
						{ $custom_field_title_3 = get_theme_mod('custom_field_title_3'); 
					} 
					echo $custom_field_title_3; 
			?>
			</div>
			<div class="d-flex flex-column text-center caption-gallery-details">
			<?php 
				if ( '' == get_theme_mod( 'custom_field_details_3' ) ) 
					{ 
						$custom_field_details_3 = 'Kamalame Cay, The Bahamas'; 
					} else 
						{ $custom_field_details_3 = get_theme_mod('custom_field_details_3'); 
					} 
					echo $custom_field_details_3; 
			?>  
			</div>
			<div class="text-center flex-fill bd-highlight">
					<button type="button" class="btn btn-primary btn-sm rounded-pill btn-custom border-0"> &nbsp<i class="fa fa-paper-plane"></i> &nbsp Read More &nbsp</button>
			</div>
		</div>				
	</div>
	<div class="polaroid">
		<img class="photo" src="
		<?php 
		$tour1 = get_stylesheet_directory_uri() . '/images/ds_img_png/tour4.png';
		if (get_theme_mod('image_control_4') !='') {
			$tour1 = get_theme_mod('image_control_4');
		}
		echo $tour1;
		?>" alt="">	
		<div class="caption">
			<div class="d-flex flex-column text-center caption-gallery-details-bold">
			<?php 
				if ( '' == get_theme_mod( 'custom_field_title_4' ) ) 
					{ 
						$custom_field_title_4 = 'Kamalame Cay Resort'; 
					} else 
						{ $custom_field_title_4 = get_theme_mod('custom_field_title_4'); 
					} 
					echo $custom_field_title_4; 
			?>
			</div>
			<div class="d-flex flex-column text-center caption-gallery-details">
			<?php 
				if ( '' == get_theme_mod( 'custom_field_details_4' ) ) 
					{ 
						$custom_field_details_4 = 'Kamalame Cay, The Bahamas'; 
					} else 
						{ $custom_field_details_4 = get_theme_mod('custom_field_details_4'); 
					} 
					echo $custom_field_details_4; 
			?>   
			</div>
			<div class="text-center flex-fill bd-highlight">
						<button type="button" class="btn btn-primary btn-sm rounded-pill btn-custom border-0"> &nbsp<i class="fa fa-paper-plane"></i> &nbsp Read More &nbsp</button>
			</div>
		</div>				
	</div>
</div>

<div class="container-mission">
	<img class="img-fluid" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/mission.png'; ?>" alt="" /> 
	<div class="d-flex flex-column bd-highlight mission-title">
		<div class="d-flex flex-column text-center caption-title-2 p-2">We Provide Only The Best Tours</div>
		<div class="d-flex flex-column text-center caption-details p-2">Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and already well-known destinations, some of which are listed below.</div>
		<div class="d-flex flex-column text-center caption-details"> We offer you a vast variety of tours of all types featuring both exotic and already well-known destinations, some of which are listed below.</div>
	</div>
</div>

<div class="container-service">
	<div class="d-flex flex-column bd-highlight mb-3 mt-5">
		<div class="p-2 bd-highlight text-center caption-gallery-title">Why Us?</div>
	</div>
	<div class="row text-center m-0 p-0">
		<div class="col-4 p-2">
			<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/serve1.jpg'; ?>" alt="" /> 
			<div class="caption">
				<div class="d-flex flex-column text-center caption-gallery-details-bold">
				The Best Service 
				</div>
				<div class="d-flex flex-column text-center caption-gallery-details">
				Our aim is to provide you with the tour service of the top quality, and we'll do our best to find the suitable tour for you.  
				</div>
			</div>		
		</div>
		<div class="col-4 p-2">
			<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/serve2.jpg'; ?>" alt="" /> 
			<div class="caption">
				<div class="d-flex flex-column text-center caption-gallery-details-bold">
				Everything is included
				</div>
				<div class="d-flex flex-column text-center caption-gallery-details">
				There are dozens of aspects to pay attention to, while organizing a trip, and we’ll make sure your tour includes everything you need.
			</div>
			</div>	
		</div>
		<div class="col-4  p-2">
			<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/serve3.jpg'; ?>" alt="" /> 
			<div class="caption">
				<div class="d-flex flex-column text-center caption-gallery-details-bold">
				Great Prices 
				</div>
				<div class="d-flex flex-column text-center caption-gallery-details">
				All our tours and excursions are available at really affordable prices so you can always pick a great destination.
			</div>
			</div>	
		</div>
	</div>
</div>

<div class="container-partners mt-5 pt-5 mb-5 pb-5">
	<div class="d-flex flex-column bd-highlight mb-3 mt-5">
		<div class="p-2 bd-highlight text-center caption-gallery-title">Our Partners</div>
	</div>
	<div class="row m-0 p-0">
		<div class="col-2">
		<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/part1.png'; ?>" alt="" /> 
		</div>
		<div class="col-2">
		<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/part2.png'; ?>" alt="" /> 
		</div>
		<div class="col-2">
		<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/part3.png'; ?>" alt="" /> 
		</div>
		<div class="col-2">
		<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/part4.png'; ?>" alt="" /> 
		</div>
		<div class="col-2">
		<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/part5.png'; ?>" alt="" /> 
		</div>
		<div class="col-2">
		<img class="img-fluid service" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/part6.png'; ?>" alt="" /> 
		</div>
		
	</div>
</div>


<div class="container-testimonials mt-5 pt-5 mb-5 pb-5">
	<div class="d-flex flex-column bd-highlight mb-3 mt-5">
		<div class="p-2 bd-highlight text-center caption-gallery-title">What Our Client Say</div>
	</div>
	<div class="row m-0 p-0">
		<div class="col-4 text-center">
			<div class="row m-0 p-0"> 
				<div class="col-6">				
					<img class="img-fluid t-nail" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/face1.jpg'; ?>" alt="" /> 				
				</div>
				<div class="col-6">		
					<div class="d-flex flex-column text-center caption-gallery-details-bold">
					Disney in December was absolutely delightful! From our 1 day at Magic Kingdom & 2 days at Animal Kingdom, our family was filled with excitement and magical memories.  - Lisa Evants
					</div>		
				</div>
			</div>
		</div>
		<div class="col-4 text-center">
			<div class="row m-0 p-0"> 
				<div class="col-6">				
					<img class="img-fluid t-nail" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/face2.jpg'; ?>" alt="" /> 				
				</div>
				<div class="col-6">		
					<div class="d-flex flex-column text-center caption-gallery-details-bold">
					Disney in December was absolutely delightful! From our 1 day at Magic Kingdom & 2 days at Animal Kingdom, our family was filled with excitement and magical memories.  - Lisa Evants
					</div>		
				</div>
			</div>
		</div>
		<div class="col-4 text-center">
			<div class="row m-0 p-0 "> 
				<div class="col-6">				
					<img class="img-fluid t-nail" src="<? echo get_stylesheet_directory_uri() . '/images/ds_img_png/face3.jpg'; ?>" alt="" /> 				
				</div>
				<div class="col-6">		
					<div class="d-flex flex-column text-center caption-gallery-details-bold">
					Disney in December was absolutely delightful! From our 1 day at Magic Kingdom & 2 days at Animal Kingdom, our family was filled with excitement and magical memories.  - Lisa Evants
					</div>		
				</div>
			</div>
		</div>
		<div class="p-2 flex-fill bd-highlight text-center pt-5">
			<button type="button" class="btn btn-primary btn-sm rounded-pill btn-custom border-0" data-bs-toggle="modal" data-bs-target="#exampleModalLive"> &nbsp<i class="fa fa-paper-plane"></i> &nbsp&nbspGet In Touch &nbsp&nbsp</button>
		</div>
	</div>
</div>

<!-- Modal Get In Touch -->
        <div class="modal fade" id="exampleModalLive" tabindex="-1" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog mt-5 p-5">
            <div class="modal-content rounded-0 border-0">
              <div class="modal-header custom-modal-header">
                <h5 class="modal-title caption-title-modal" id="exampleModalLiveLabel">Contact Us</h5>
                <button type="button" class="btn-close rounded-pill ms-5 custom-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="input-group input-group-sm mb-3 ps-3 pe-3">
                    <span class="input-group-text caption-gallery-details-bold icon-color" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control border-color " placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group input-group-sm mb-3 ps-3 pe-3">
                    <span class="input-group-text caption-gallery-details-bold icon-color" id="basic-addon1"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control border-color " placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
                </div>
                <div class="input-group input-group-sm mb-3 ps-3 pe-3">
                    <span class="input-group-text caption-gallery-details-bold icon-color" id="basic-addon1"><i class="fa fa-link"></i></span>
                    <input type="text" class="form-control border-color " placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group input-group-sm mb-3 ps-3 pe-3">
                    <span class="input-group-text caption-gallery-details-bold icon-color" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="textarea" class="form-control border-color " placeholder="Message" aria-label="Message" aria-describedby="basic-addon1">
                </div>
              </div>
	            <div class="p-2 flex-fill bd-highlight text-center pt-5">
			        <button type="button" class="btn btn-primary btn-sm rounded-pill btn-custom border-0"> &nbsp<i class="fa fa-paper-plane"></i> &nbsp&nbsp Send Message &nbsp&nbsp</button>
		        </div>
            </div>
          </div>
        </div>

<?php get_footer(); ?>
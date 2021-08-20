<footer>
    <div ><div class="container-fluid">
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
				?> &nbsp &nbsp &nbsp| </div>
					</div>
					<div class="p-2 flex-fill bd-highlight custom_field_email">
						<div class="p-2 flex-fill bd-highlight"> <i class="fa fa-envelope"></i>
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
	</nav></div>
</footer>
</body>
<!--  -->
<!-- slider script -->
<script>
const imgs = document.querySelectorAll(".container img");
const dots = document.querySelectorAll(".dot i");
const leftArrow = document.querySelector(".arrow-left");
const rightArrow = document.querySelector(".arrow-right");

let currentIndex = 0;
let time = 5000; // default time for auto slideshow

const defClass = (startPos, index) => {
  for (let i = startPos; i < imgs.length; i++) {
    imgs[i].style.display = "none";
    dots[i].classList.remove("fa-dot-circle");
    dots[i].classList.add("fa-circle");
  }
  imgs[index].style.display = "block";
  dots[index].classList.add("fa-dot-circle");
};

defClass(1, 0);

leftArrow.addEventListener("click", function(){
  currentIndex <= 0 ? currentIndex = imgs.length-1 : currentIndex--;
  defClass(0, currentIndex);
});

rightArrow.addEventListener("click", function(){
  currentIndex >= imgs.length-1 ? currentIndex = 0 : currentIndex++;
  defClass(0, currentIndex);
});

const startAutoSlide = () => {
  setInterval(() => {
    currentIndex >= imgs.length-1 ? currentIndex = 0 : currentIndex++;
    defClass(0, currentIndex);
  }, time);
};

startAutoSlide(); // Start the slideshow
</script>

<!-- slider end -->
</html>
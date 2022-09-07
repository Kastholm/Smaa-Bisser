<?php
get_header()
?>

<script>
  AOS.init();
</script>

<!-- <div class="top-banner">
     
</div> -->

<!-- 
<div id="slider" class="owl-carouselOne owl-carousel owl-theme" style="width:90vw; margin: 0 auto; max-width: 1620px;">



  <div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"><div class="overlay">
 </div><span class="banner-text">
    <h1> MEGA CENTER <br>
  Tekst tekst tekst  <br>
  Tekst tekst tekst </h1> <h2>Tekst tekst tekst tekst tekstk tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</h2><button>SHOP TEKST</button>
  </span> <img style="min-height: 350px !important; width: 100vw;"  src="https://i.ibb.co/N3QBNq6/Center-bredformat-1.jpg" alt=""/> 


</div>
  <div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"><div class="overlay">
 </div> <span class="banner-text">
    <h1> MEGA CENTER <br>
  Tekst tekst tekst  <br>
  Tekst tekst tekst </h1> <h2>Tekst tekst tekst tekst tekstk tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</h2><button>SHOP TEKST <br>
  DISCOVER Tekst</button>
  </span> <img style="min-height: 350px !important; width: 100vw;" src="https://i.ibb.co/N3QBNq6/Center-bredformat-1.jpg" alt=""> </div>
  <div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"><div class="overlay">
 </div> <span class="banner-text">
    <h1> MEGA CENTER <br>
  Tekst tekst tekst  <br>
  Tekst tekst tekst </h1> <h2>Tekst  tekst tekst tekst tekstk tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</h2><button>SHOP TEKST <br>
  DISCOVER Tekst</button>
  </span> <img style="min-height: 350px !important; width: 100vw;" src="https://i.ibb.co/N3QBNq6/Center-bredformat-1.jpg" alt=""> </div>
  <div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"> <div class="overlay">
 </div>
    
    
 
    <span class="banner-text">
      <h1> MEGA CENTER <br>
  Tekst tekst tekst  <br>
  Tekst tekst tekst </h1> <h2>Tekst  tekst tekst tekst tekstk tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</h2><button>SHOP TEKST <br>
  DISCOVER Tekst</button>
    </span>
    


<img style="min-height: 350px !important; width: 100vw;" src="https://i.ibb.co/N3QBNq6/Center-bredformat-1.jpg" alt=""> </div>
</div>
 -->

<!--  <div class="loadingScreen">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

<script> jQuery(window).on("load", function () {
  jQuery(".loadingScreen").fadeOut("slow");
}); </script> -->

<div  class='top-bg'>
	<div class='banner'  >
	<img  class='bog'  src="https://i.ibb.co/s9wHrhX/Image-2.gif" alt="" />
	
	<div class='banner-text-field'>
	  <div class='pure-text'>
	    <h1 >GLADE TÆNDER GIVER <br>
	    GLADE BØRN</h1>
	    <h2>Små Bisser bygger på gode og sunde rutiner, <br> samarbejde mellem dig og dit barn og legende metoder. <br>Tandbørstning er en nødvendighed for at bevare sunde tænder, <br>en sund mund og et sundt helbred. 
	    </h2>
	    <button class='main-button tand-button'>Køb bogen nu <!-- <img class='tand' src="https://i.ibb.co/Mp6s0PG/Tand.gif" alt="Tand" border="0"> --></button>
	  </div>
	  
	  <div class='logo-flex'>
	
	<span data-aos="zoom-in" data-aos-delay="0">
	<img src="https://i.ibb.co/1vpvh2k/tilfreds.png" alt="tilfreds" border="0">
	  <p>Top anmeldelser<br>.</p>
	</span>
	
	<span data-aos="zoom-in" data-aos-delay="200">
	<img  src="https://i.ibb.co/BKnzzms/levering.png" alt="levering" border="0">
	  <p>1-3 dages levering<br>.</p>
	</span>
	
	<span class='flex' data-aos="zoom-in" data-aos-delay="400">
	<img src="https://i.ibb.co/MR7jtYv/reutr.png" alt="reutr" border="0">
	  <p>Fuld garanti<br>.</p>
	</span>
	
	  </div>
	
	</div>
	  </div>
	
	
	
	
	
	<div>
	
	
<!-- 	<?php $BannerPosts = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'forsidebanner',
  'order' => 'ASC'
)); 
while($BannerPosts -> have_posts()) {
  $BannerPosts->the_post(); ?>


<div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"><div class="overlay">
 </div><span class="banner-text">
 <a href="<?php echo the_permalink();?>"> <h1> <?php the_title(); ?> 
  </h1> <h2><?php echo get_the_content() ?></h2><button> <?php echo get_the_excerpt() ?></button>
  </span> <img style="min-height: 350px !important; width: 100vw;"  src=<?php echo the_post_thumbnail_url() ?> alt=""/> 
 <!--  https://wallpaper.dog/large/990949.jpg  -->
 </a>
</div>


<?php
}
?> 
	
	
	<div class='owl-slider'>
		<h3>Vi samarbejder med</h3>
		<img class='corner' src="https://i.ibb.co/qB5f2Cw/corner2.gif" alt="bg-mini" border="0">
		<div class="owl-carousel owl-theme">
		<?php $Partnere = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'samarbejdspartnere',
  'order' => 'ASC'
)); 
while($Partnere -> have_posts()) {
  $Partnere->the_post(); ?>
			<div class="item itemTwo"><img width="200" height="150" src=<?php echo the_post_thumbnail_url() ?> alt=<?php echo get_the_excerpt() ?> /></div>
			<?php
}
?> 
		</div>
	</div>


	
	<!-- 	
	<div class='owl-slider'>
		<h3>Vi samarbejder med</h3>
		<img class='corner' src="https://i.ibb.co/qB5f2Cw/corner2.gif" alt="bg-mini" border="0">
		<div class="owl-carousel owl-theme">
			<div class="item itemTwo"><img width="200" height="150" src="https://i.ibb.co/8DyBgM0/colgate.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
			<div class="item "><img width="200" height="150" src="https://i.ibb.co/hYjhL2t/Zendium-logo-Dentistry-co.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
			<div class="item itemTwo"><img width="200" height="150" src="https://i.ibb.co/8DkFjHC/Jordan-Clinic-Interdental-Brush-L-10-PCS-Quick-Buy.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
			<div class="item "><img width="200" height="150" src="https://i.ibb.co/sysny2j/Sebra-til-barn-Babyshop.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
			<div class="item itemTwo"><img width="200" height="150" src="https://i.ibb.co/wwrsKfX/Plan-Toys.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
			<div class="item "><img width="200" height="150" src="https://i.ibb.co/HpxQQYV/Pixizoo-alt-i-baby-og-b-rneudstyr.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
			<div class="item itemTwo"><img width="200" height="150" src="https://i.ibb.co/fMyxrYM/Fredericia-kommune-logo-Trelden-s-Tr-service.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
			<div class="item"><img width="200" height="150" src="https://i.ibb.co/2vcV6mm/Forside-Magasinet-Helse.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
			<div class="item itemTwo"><img width="200" height="150" src="https://i.ibb.co/jk2qWc8/Te-Pe-Logotype-Te-Pe-Munhygienprodukter-AB.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
		    <div class="item "><img width="200" height="150" src="https://i.ibb.co/M9gkzVB/Designguide.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
		    <div class="item itemTwo"><img width="200" height="150" src="https://i.ibb.co/Lr3TkBv/Danske-Tandplejere-er-tandplejernes-faglige-organisation-Danske-Tand.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
		    <div class="item "><img width="200" height="150" src="https://i.ibb.co/1KKmp0D/Bibs-Soother-Logo-HD-Png-Download-vhv.gif" class="attachment-large size-large" alt="" loading="lazy"></div>
		    
		</div>
	</div> -->
	
</div>	</div>	
<!-- <div class="item itemTwo"><img width="200" height="150" src="https://i.ibb.co/DGLpWs5/B-rn-i-byen-Apps-on-Google-Play.gif" class="attachment-large size-large" alt="" loading="lazy"></div> -->

<script>

jQuery(document).ready(function ($) {
  $(".owl-carousel").owlCarousel({
    loop: true,
    items: 7,
    responsive: true,
    dots: false,
    autoWidth:true,
    autoplay:true,
    autoPlay: 800,
    responsive: {
      0: {
        items: 1,
	   autoWidth:false,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 7,
      },
    },
  });
});

</script>


<!-- 
<div data-elementor-type="wp-page" data-elementor-id="8" class="elementor elementor-8" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-2a8e3056 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="2a8e3056" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-3114f843" data-id="3114f843" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-224cdb3 elementor-widget elementor-widget-image" data-id="224cdb3" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/armond.png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-4ee41fc6" data-id="4ee41fc6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1d061d79 elementor-widget elementor-widget-image" data-id="1d061d79" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/bastil.png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-40d0640f" data-id="40d0640f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-31b5f694 elementor-widget elementor-widget-image" data-id="31b5f694" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/bolier.png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-60bb7c" data-id="60bb7c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-713dfa53 elementor-widget elementor-widget-image" data-id="713dfa53" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/digit.png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-837681b" data-id="837681b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2fb65d27 elementor-widget elementor-widget-image" data-id="2fb65d27" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/darkside.png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-161b797e elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="161b797e" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-63ff2659" data-id="63ff2659" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-20328d16 elementor-widget elementor-widget-image" data-id="20328d16" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/fifthflour.png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-788a89d4" data-id="788a89d4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-524534c2 elementor-widget elementor-widget-image" data-id="524534c2" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/Edgewater...png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-7b4d71d5" data-id="7b4d71d5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4777604a elementor-widget elementor-widget-image" data-id="4777604a" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/Modal...png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-3569147" data-id="3569147" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4ec66fad elementor-widget elementor-widget-image" data-id="4ec66fad" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/madrin.png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-2b0d1fed" data-id="2b0d1fed" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2221725 elementor-widget elementor-widget-image" data-id="2221725" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="200" height="150" src="http://localhost:8080/smaa-bisser/wp-content/uploads/2022/08/Kos...png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>





</div>


 -->



<div class="bg-main">
	
	
	
	  <div data-aos="fade-up" class="slider-body">
	  <!-- <img class='corner' src="https://i.ibb.co/M6j2s2D/bg-mini.gif" alt="bg-mini" border="0"> -->
	    <h3  >Læserne siger</h3>
	    <div class="slider">
	  		<input type="radio" name="testimonial" id="t-1">
	  		<input type="radio" name="testimonial" id="t-2">
	  		<input type="radio" name="testimonial" id="t-3" checked>
	  		<input type="radio" name="testimonial" id="t-4">
	  		<input type="radio" name="testimonial" id="t-5">
	  		<div class="testimonials">
	  			<label class="item" for="t-1">
	  				
	  				<h3>Kathrine, Instagram</h3>
	  				<h4>"Altså er det jeres nummer 2 barn, for i har da virkelig godt styr på det med de tænder! Siger tandplejeren. Det føles ret tjekket."</h4>
	  			</label>
	  			<label class="item" for="t-2">
	  				
	  				<h3>Emma, Instagram</h3>
	  				<h4>"TAK! Tak for tippet om den elektriske tandbørste! Min søn synes den er sjov. I dag da jeg tog den, puttede tandpasta på og sagde, nu skal vi børste tænder, så åbnede han bare munden og lod mig børste over det hele! Kunne græde af glæde! Tak!!!"</h4>
	  			</label>
	  			<label class="item" for="t-3">
	  				
	  				<h3>Anonym, Saxo.com</h3>
	  				<h4>"Kan varmt anbefales til alle forældre - gid vi også havde denne bog til vores første barn. Alt hvad I bør vide står i denne bog - virkelig god bog!"</h4>
	  			</label>
	  			<label class="item" for="t-4">
	  				
	  				<h3>Laila, Instagram</h3>
	  				<h4>"Jeg fik dælme lov til at børste alle 6 tænder uden gråd og modstand, men med smil og grin fra den lille gut. Jeg var ellers lige ved at forene mig med tanken om at fastholdelse var den eneste vej til at få børstet tænder"</h4>
	  			</label>
	  			<label class="item" for="t-5">
					  
	  				<h3>Anne Mette, Instagram</h3>
	  				<h4>"Har lige kortvarigt fået kigget bogens billeder... og i går havde vi den bedste tandbørstning nogensinde!!!! Tak for inspiration til teknik! Tænk hvordan det ikke kan blive når jeg jeg rent faktisk får ro til at læse den."</h4>
	  			</label>
	  		</div>
	  		<div class="dots">
	  			<label for="t-1"></label>
	  			<label for="t-2"></label>
	  			<label for="t-3"></label>
	  			<label for="t-4"></label>
	  			<label for="t-5"></label>
	  		</div>
	  	</div>
	  </div>
	
	
	
	<div class='vejledning'>
	  <div data-aos="fade-up"  class='carina-text'>
	    <h3>Få professionel hjælp
	    til dit barns tandpleje. 
	    <br>- helt gratis.</h3>
	    <h4>Tekstt eksttekst tekstteksttek sttekstteks
	      teksttek sttekst tekstt ekstteks tteks ttek stteks
	      tekstt eksttek sttekstt eksttek stteksttek
	      stte kst ekstteks tteksttek ttekstte ksttek sttek ekstteks tteks ttek stteks eksttekst tekstteksttek sttekstteks
	      teksttek sttekst tekstt ekstteks tteks ttek stteks
	      tekstt eksttek sttekstt eksttek stteksttek <br><br>
	      stte kst ekstteks tteksttek ttekstte ksttek sttek ekstteks tteks ttek stteks
	      tekstt eksttek sttekstt eksttek stteksttek
	      stte kst ekstteks tteksttek ttekstte ksttek sttek</h4>
	      
	      <Button class='main-button'>klik</Button>
	    </div>
	    <div data-aos="fade-up"  class='carina-container'><img class='main-img' src="https://images.pexels.com/photos/1456951/pexels-photo-1456951.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image-7"><!-- <img class='att-img' src="https://i.ibb.co/gmbZg16/Artboard-29.png" alt="Artboard-29" border="0"> --></div>
	
	
	</div>
	
	
	
	
	<div class='faqs'>
	
	<div class='img-container'>
	
	<img class='img-changer' src="https://images.pexels.com/photos/5355901/pexels-photo-5355901.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
	</div>
	
	
	
	  <div  class="container-body">
	    <div data-aos="fade-up"  class="container">
	      <h2>Frequently Asked Questions</h2>
	      <div class="accordion">
	        <div class="accordion-item">
	          <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes ?</span><span class="icon" aria-hidden="true"></span></button>
	          <div class="accordion-content">
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
	          </div>
	        </div>
	        <div class="accordion-item">
	          <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
	          <div class="accordion-content">
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
	          </div>
	        </div>
	        <div class="accordion-item">
	          <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we ever discover aliens?</span><span class="icon" aria-hidden="true"></span></button>
	          <div class="accordion-content">
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
	          </div>
	        </div>
	        <div class="accordion-item">
	          <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much does the Earth weigh?</span><span class="icon" aria-hidden="true"></span></button>
	          <div class="accordion-content">
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
	          </div>
	        </div>
	        <div class="accordion-item">
	          <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do airplanes stay up?</span><span class="icon" aria-hidden="true"></span></button>
	          <div class="accordion-content">
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	
	</div>
	
	
	
	
	
	<div class='hvemerjeg'>
	  <div data-aos="fade-up"  class='carina-text'>
	    <h3>Hvem er jeg?</h3>
	    <h5>Min motivation til at starte Små Bisser, kom fra et forældremøde i mit barns vuggestue. Snakken faldt på tandbørstning og jeg blev overrasket over, hvor meget det fyldte hos andre børnefamilier. I enhver familie har man noget forskelligt at slås med, men efter en del rundspørgen, stod det klart for mig, at tandbørstning generelt er problematisk for mange med små børn.</h5>
	      
	      <Button class='main-button'>klik</Button>
	    </div>
	    <div  class='carina-container'><img data-aos="fade-up"  src="https://i.ibb.co/wcdBBZH/Image-7.gif" alt="Image-7" border="0"></div>
	
	
	</div>
	

</div>	


<div class='instagram'>
<h3>Følg med i Små bissers hverdag <br> - på Instagram</h3>
  <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe data-aos="zoom-in-up" src="//lightwidget.com/widgets/bd04284f6a005461be4480c5c88bd521.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

</div>







<?php
the_content();
    ?>



<?php
get_footer()
?>
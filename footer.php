<footer>
			<div class="vis-container">
				<div class="row">
					<!-- <div class="col-md-12">
						<div class="subs-form text-footer new_subs_form">
							<div class="subs-setion1">
								<h4>Sign up to our Newsletter</h4>
								<form>
									<div class="subs-form-inner">
										<div class="foot-input">
											<input type="text"
												placeholder="Email Id" />
										</div>
										<div class="form-submit-btn">
											<button type="submit">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div> -->
					<div class="col-md-12">
						<div class="footerlinks footerlink_rep">
							<ul>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-about-us.php">About</a>
								</li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-culture.php">Culture</a>
								</li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-career.php">Careers</a>
								</li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-Insight.php">Insights</a>
								</li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-csr.php">CSR</a>
								</li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/pressroom.php">Pressroom</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-12">
						<div class="footerlinks footerlink_rep">
							<ul>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-our-service.php">Our
										Services</a></li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-ris-service.php">Research
										& Investment Services</a></li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-dig-service.php">Data
										Intelligence Group</a></li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-cfo-service.php">CFO
										Office Services
									</a></li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/new-bds-service.php">Business
										Development Services</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-12">
						<div class="footerlinks footerlink_rep">
							<ul>
								<li><a
										href="http://13.233.16.157/tresvista-demo/web-policy.php">
										Web Policy</a>
								</li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/terms-of-use.php">Terms
										of Use </a>
								</li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/privacy-policy.php">Privacy
										Policy </a>
								</li>
								<li><a
										href="http://13.233.16.157/tresvista-demo/contact-us.php">Contact
										Us</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</footer>
		<div class="copy-right">
			<div class="vis-container">
				<div class="row">
					<div class="col-md-4">
						<div class="follow-us">
							<ul class="m-0">
								<li><a
										href="https://in.linkedin.com/company/tresvista"><i
											class="fa fa-linkedin"
											aria-hidden="true"></i></a>
								</li>
								<li><a
										href="https://twitter.com/TresVista?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i
											class="fa fa-twitter"
											aria-hidden="true"></i></a>
								</li>
								<!-- <li><a href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li> -->
							</ul>
						</div>
					</div>
					<div class="col-md-8">
						<div class="copywrite_text">
							<p>Copyright © 2021. TresVista. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- js for half circle -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="js/circle.js"></script>
	<!-- end js for half circle -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/jquery.animateTyping.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="jarallax/jarallax.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



	<script>
	$(document).ready(function() {
		AOS.init();

		//// Jarallax Animation
		jarallax(document.querySelectorAll('.jarallax'));

		$(".read_mr_ls a").on("click", function(){
			$(this).parent().siblings().toggleClass("hidden_content_height");
			$(this).parent().toggleClass("readless");
			$(".extra_content").slideToggle();
		})

        
		$('.tabs_slider_with_bg_js').owlCarousel({
			loop:false,
			dots:false,
			margin:0,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		})
		

		$('.global_slider_sec').owlCarousel({
			loop:true,
			margin:20,
			nav:true,
			dots:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		})
		
		
		/*************************************************/
		var galleryTop = new Swiper('.gallery-top', {
		  spaceBetween: 0,
		  effect: "fade",
		  loop: true,
		  loopedSlides: 4, //looped slides should be the same
		  pagination: {
			el: '.swiper-pagination',
			clickable: true,
		  },
		});
		
		var galleryThumbs = new Swiper('.gallery-thumbs', {
		  spaceBetween: 0,
		  slidesPerView: 4,
		  loop: true,
		  loopedSlides: 4, //looped slides should be the same
		  watchSlidesVisibility: true,
		  watchSlidesProgress: true,
		  navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		  },
		  breakpoints: {
				0: {
					slidesPerView: 1.3
				},
				576: {
					slidesPerView: 1.3
				},
				768: {
					slidesPerView: 1.4
				},
				1024: {
					slidesPerView: 4
				}
   			 }
		});
		
		galleryThumbs.controller.control = galleryTop;
		
	  $('.hoverthumb_js').hover(function() {
		  var thmbno = $( this ).attr( "data-thumbslide" );
		  var thumbttno = parseInt(thmbno) - parseInt(1);
		  console.log(thumbttno);
		  $(".gallery-top .swiper-pagination span:eq("+thumbttno+")").click();
	   });
	
		/*************************************************/
		
		
		$(".bgimage_slider_item").mouseenter(function() {
			$(this).find('ul').stop().slideDown();
			var bgImg = $(this).attr("data-bgimage");
		}).mouseleave(function() {
			$(this).find('ul').stop().slideUp();
		});


        /**blog read* */
        $('.blog_read_slider_sec').owlCarousel({
			loop:true,
			margin:20,
			nav:true,
			dots:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				900:{
					items:3
				},
				1000:{
					items:4
				}
			}
		})


        /***press room slider */
        $('.pressroom_slider_sec').owlCarousel({
			loop:true,
			margin:20,
			nav:true,
			dots:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:3
				}
			}
		})

	})
	</script>

<!-- script for csr form dropdown -->

<script>
    document.querySelector('.custom-select-wrapper1').addEventListener('click', function() {
        this.querySelector('.custom-select1').classList.toggle('open');
    })
    for (const option of document.querySelectorAll(".custom-option1")) {
        option.addEventListener('click', function() {
            if (!this.classList.contains('selected')) {
                this.parentNode.querySelector('.custom-option1.selected').classList.remove('selected');
                this.classList.add('selected');
                this.closest('.custom-select1').querySelector('.custom-select__trigger1 span').textContent = this.textContent;
            }
        })
    }
    window.addEventListener('click', function(e) {
        const select = document.querySelector('.custom-select1')
        if (!select.contains(e.target)) {
            select.classList.remove('open');
        }
    });
    </script>
    <!-- end script for csr form dropdown -->


	
	<!-- script for contactus form dropdown -->

	<script>
		document.querySelector('.contact_form_custom_select').addEventListener('click', function() {
			this.querySelector('.custom-select1').classList.toggle('open');
		})
		for (const option of document.querySelectorAll(".custom-option1")) {
			option.addEventListener('click', function() {
				if (!this.classList.contains('selected')) {
					this.parentNode.querySelector('.custom-option1.selected').classList.remove('selected');
					this.classList.add('selected');
					this.closest('.custom-select1').querySelector('.custom-select__trigger1 span').textContent = this.textContent;
				}
			})
		}
		window.addEventListener('click', function(e) {
			const select = document.querySelector('.custom-select1')
			if (!select.contains(e.target)) {
				select.classList.remove('open');
			}
		});
		</script>
    <!-- end script for contactus form dropdown -->

	<!-- script for contactus form dropdown -->

	<script>
		document.querySelector('.contact_form_custom_select_msg').addEventListener('click', function() {
			this.querySelector('.custom-select1').classList.toggle('open');
		})
		for (const option of document.querySelectorAll(".custom-option1")) {
			option.addEventListener('click', function() {
				if (!this.classList.contains('selected')) {
					this.parentNode.querySelector('.custom-option1.selected').classList.remove('selected');
					this.classList.add('selected');
					this.closest('.custom-select1').querySelector('.custom-select__trigger1 span').textContent = this.textContent;
				}
			})
		}
		window.addEventListener('click', function(e) {
			const select = document.querySelector('.custom-select1')
			if (!select.contains(e.target)) {
				select.classList.remove('open');
			}
		});
		</script>
    <!-- end script for contactus form dropdown -->

		<!-- script for service page form dropdown -->
		<script>
		document.querySelector('.service_custom_select').addEventListener('click', function() {
			this.querySelector('.custom-select1').classList.toggle('open');
		})
		for (const option of document.querySelectorAll(".custom-option1")) {
			option.addEventListener('click', function() {
				if (!this.classList.contains('selected')) {
					this.parentNode.querySelector('.custom-option1.selected').classList.remove('selected');
					this.classList.add('selected');
					this.closest('.custom-select1').querySelector('.custom-select__trigger1 span').textContent = this.textContent;
				}
			})
		}
		window.addEventListener('click', function(e) {
			const select = document.querySelector('.custom-select1')
			if (!select.contains(e.target)) {
				select.classList.remove('open');
			}
		});
	</script>
    <!-- end script for service page form dropdown -->

	<!-- js for another dropdown(source) -->
	<script>
			document.querySelector('.service_custom_select_source').addEventListener('click', function() {
				this.querySelector('.custom-select1').classList.toggle('open');
			})
			for (const option of document.querySelectorAll(".custom-option1")) {
				option.addEventListener('click', function() {
					if (!this.classList.contains('selected')) {
						this.parentNode.querySelector('.custom-option1.selected').classList.remove('selected');
						this.classList.add('selected');
						this.closest('.custom-select1').querySelector('.custom-select__trigger1 span').textContent = this.textContent;
					}
				})
			}
			window.addEventListener('click', function(e) {
				const select = document.querySelector('.custom-select1')
				if (!select.contains(e.target)) {
					select.classList.remove('open');
				}
			});
		</script>
		<!-- end js for another dropdown(source) -->

		<script>
			AOS.init();jarallax(document.querySelectorAll('.jarallax'));
			$('.client_say_owl_carousal').owlCarousel({
				loop:true,
				margin:20,
				nav:true,
				dots:false,
				responsive:{
					0:{
						items:1.2
					},
					425:{
						items:1.2
					},
					600:{
						items:1.4
					},
					769:{
						items:1
					},
					1000:{
						items:1
					}
				}
			})
		</script>
	
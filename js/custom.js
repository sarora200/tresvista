
 $(document).ready(function() {
    $('.home-banner-slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      animateOut: 'fadeOut',
      autoplay:1500,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true,
          loop: true
        }
      }
    })
    $('.client-slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      animateOut: 'fadeOut',
      //autoplay:1500,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true,
          loop: true
        }
      }
    })
  })



  $(document).ready(function() {
    $('.counter').counterUp({
        delay: 20,
        time: 2000
    });
});

$('.contact_query a').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top - $('header').height()
  });
  return false;
});


$(document).ready(function() {

/* 	$('.accordionButton:first').addClass('on');
	$('.accordionButton').click(function() {
		$('.accordionButton').removeClass('on');
     $('.accordionContent').slideUp('normal');
		if($(this).next().is(':hidden') == true) {
      $(this).addClass('on');
			$(this).next().slideDown('normal');
		 } 
	 }); */
     
    $('.accordionButton').on("click", function(){
        $(this).siblings('.accordionContent').slideToggle();
        $(this).toggleClass('on');
    }) 
     
  
});



// accordian on blog read 
$(document).ready(function() {
	// $('.blog_read_mini_accordionBtn:first').addClass('on');
	$('.blog_read_mini_accordionBtn').click(function() {
		$('.blog_read_mini_accordionBtn').removeClass('on');
     $('.blog_read_mini_accordionCont').slideUp('normal');
		if($(this).next().is(':hidden') == true) {
      $(this).addClass('on');
			$(this).next().slideDown('normal');
		 } 
	 });
  
});


// individual service page form scroll on specific section and close
$(document).ready(function(){
  $(window).scroll(function() {
  // var headheight = $("header").outerHeight()
  // Section menu active on page scroll
  var scrollDistance = $(window).scrollTop();
  $('#enq_form').each(function(i) {
  var pstMinus = $(this).position().top - $('header').height();
  if (pstMinus <= scrollDistance) {
    // $('.close_button button').click();
  }
  });
  
}).scroll();
})


$(document).ready(function(){
  $('.work_with_us_modal_btn a').click(function() {
    $('.modal').modal('hide');
  })
})





		// <!-- js for another dropdown(source) -->
		// <script>
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
		// </script>
		// <!-- end js for another dropdown(source) -->


// <!-- js for another dropdown(source) -->
		// <script>
    document.querySelector('.service_custom_inquiry_source').addEventListener('click', function() {
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
  // </script>
  // <!-- end js for another dropdown(source) -->

  
// script for service page form dropdown
		// <!-- <script>
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
  // </script> -->


  // $(document).ready(function(){
  //   $(window).scroll(function() {
  //     var scrollDistance = $(window).scrollTop();
  //     $('.our_service_box_wrp').each(function(i) {
  //     var pstMinus = $(this).position().top - $('header').height();
  //     if (pstMinus <= scrollDistance) {
  //       $('.close_button button').click();
  //       alert("hi");
  //     }
  //     });
      
  // }).scroll();
  // alert("adjfjhdhjg");
  // })

 
  


// $('.learn-more-btn a').click(function(){
//   $('.close_button button').click();
// })





  // card swipe on mobile test
  // let stack = document.querySelector(".stack");
  // [...stack.children].reverse().forEach(i => stack.append(i));

  // stack.addEventListener("click", swap);

  // function swap(e) {
  // let card = document.querySelector(".card:last-child");
  // if (e.target !== card) return;
  // card.style.animation = "swap 700ms forwards";

  // setTimeout(() => {
  //   card.style.animation = "";
  //   stack.prepend(card);
  // }, 700);
  // }




  


/**JS for header margin from top */
$(document).ready(function(){
  if($('header').hasClass('blog_read_header')){
    $("body").css('margin-top',0);
  }
  else{
    var headheight = $("header").outerHeight()-4;
    $("body").css('margin-top',headheight);
    $(".mob-cta-tabs").css('top',headheight+4);
    $(".sticky_nav").css('top',headheight+4);
    console.log("head height is ",headheight);
  }
})
/***end JS for header margin top */

/* Start js for Side bar*/
function openNav() {
  document.getElementById("mySidenav").style.width = "280px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
/* End js for Side bar*/



/**JS for csr form validation */

$(document).ready(function() {
    $('#contact_name').on('input', function() {
      var input=$(this);
      var is_name=input.val();
      if(is_name){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}
    });
  
    $('#contact_phone').on('input', function() {
      var input=$(this);
      /*var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;*/
      var re =  /^\d{10}$/;
      var phone_no=re.test(input.val());
      if(phone_no){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}
    });
    $('#contact_company').on('input', function() {
      var input=$(this);
      var is_name=input.val();
      if(is_name){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}
    });
    $('#contact_city').on('input', function() {
      var input=$(this);
      var is_name=input.val();
      if(is_name){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}
    });
    
    
  $("#csr_form_submit button").click(function(event){
    var form_data=$("#csr_form").serializeArray();
    var error_free=true;
    for (var input in form_data){
      var element=$("#contact_"+form_data[input]['name']);
      var valid=element.hasClass("valid");
      var error_element=$("span", element.parent());
      if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
      else{error_element.removeClass("error_show").addClass("error");}
    }
    if (!error_free){
      event.preventDefault(); 
    }
    else{
      alert('No errors: Form will be submitted');
    }
  });
});
/**End js for csr form validation */

/**JS for tabs */
function csrActivityTab(evt, tabn) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  // document.getElementById("tab-one").style.display= "block";
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabn).style.display = "block";
  evt.currentTarget.className += " active";
}

// js for culture buddy carousel

$(document).ready(function() {
  $('.buddy-program-right .client-slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    animateOut: 'fadeOut',
    // autoplay:1500,
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

/***JS for master blog - cards section card height */
$(document).ready(function(){
  var cardheiight = $('.mastr_blog_filter_scroll .work-sample-card-body').height()*2+300;
  $('.mastr_blog_filter_scroll').css('height',cardheiight);
  console.log("card height is:"+cardheiight);
})

/******************* */

/***JS for pressrom - tab section height */
$(document).ready(function(){
  var newsheight = $('.news_tabs_inner .tabs_content_view .news-repeat').height()*5.5;
  $('.news_area_scroll').css('height',newsheight);
  console.log("news height is:"+newsheight);
})

/******************* */


/**JS for contact form validation */

$(document).ready(function() {
  $('#contact_name').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  $('#contact_company').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  $('#contact_mail').on('input', function() {
      var input=$(this);
      var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      var phone_no=re.test(input.val());
      if(phone_no){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}
    });

  $('#contact_message').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  
  
  $("#contact_us_form_btn button").click(function(event){
    var form_data=$("#contact_us_form_id").serializeArray();
    var error_free=true;
    for (var input in form_data){
      var element=$("#contact_"+form_data[input]['name']);
      var valid=element.hasClass("valid");
      var error_element=$("span", element.parent());
      if (!valid){error_element.removeClass("required").addClass("contact_error_msg_visible"); error_free=false;}
      else{error_element.removeClass("contact_error_msg_visible").addClass("required");}
    }
    if (!error_free){
      event.preventDefault(); 
    }
    else{
      alert('No errors: Form will be submitted');
    }
  });
});
/**End js for contact form validation */




// width test 
$(document).ready(function(){
  var wd = $('.location_new_york').width();
  console.log("location new width",wd);
})

// js for map marker hover and location visible
$(document).ready(function(){
  // newyork
  $(".ny_marker, #new_york_id").mouseenter(
    function () {
      $('.location_new_york .location_addr').removeClass("add_hide");
      $('.ny_marker img').attr('src','new-image/contactus/yellow-down-tria.png');
      
    }
  );

  $( ".ny_marker, #new_york_id" ).mouseout(function() {
    $('.location_new_york .location_addr').addClass("add_hide");
    $('.ny_marker img').attr('src','new-image/contactus/blue-down-tria.png');
  });

  // singapore
  $(".singa_marker, #singa_id").mouseenter(
    function () {
      $('.location_singapore .location_addr').removeClass("add_hide");
      $('.singa_marker img').attr('src','new-image/contactus/yellow-down-tria.png');
    }
  );

  $( ".singa_marker, #singa_id" ).mouseout(function() {
    $('.location_singapore .location_addr').addClass("add_hide");
    $('.singa_marker img').attr('src','new-image/contactus/blue-down-tria.png');
  });


  // banglore
  $(".bang_marker, #banga_id").mouseenter(
    function () {
      $('.location_bengaluru .location_addr').removeClass("add_hide");
      $('.bang_marker img').attr('src','new-image/contactus/yellow-down-tria.png');
    }
  );

  $( ".bang_marker, #banga_id" ).mouseout(function() {
    $('.location_bengaluru .location_addr').addClass("add_hide");
    $('.bang_marker img').attr('src','new-image/contactus/blue-down-tria.png');
  });

  // mumbai
  $(".mumb_marker, #mumb_id").mouseenter(
    function () {
      $('.location_mumbai .location_addr').removeClass("add_hide");
      $('.mumb_marker img').attr('src','new-image/contactus/yellow-down-tria.png');
      
    }
  );

  $( ".mumb_marker, #mumb_id" ).mouseout(function() {
    $('.location_mumbai .location_addr').addClass("add_hide");
    $('.mumb_marker img').attr('src','new-image/contactus/blue-down-tria.png');
  });

  // pune
  $(".pune_marker, #pune_id").mouseenter(
    function () {
      $('.location_pune .location_addr').removeClass("add_hide");
      $('.pune_marker img').attr('src','new-image/contactus/yellow-down-tria.png');
    }
  );

  $( ".pune_marker, #pune_id" ).mouseout(function() {
    $('.location_pune .location_addr').addClass("add_hide");
    $('.pune_marker img').attr('src','new-image/contactus/blue-down-tria.png');
  });

   // London
   $(".london_marker, #london_id").mouseenter(
    function () {
      $('.location_london .location_addr').removeClass("add_hide");
      $('.london_marker img').attr('src','new-image/contactus/yellow-down-tria.png');
    }
  );

  $( ".london_marker, #london_id" ).mouseout(function() {
    $('.location_london .location_addr').addClass("add_hide");
    $('.london_marker img').attr('src','new-image/contactus/blue-down-tria.png');
  });
})


/****change pressroom active tab title */
$(document).ready(function () {

    // $(".change_heading a").attr("href", "http://13.233.16.157/tresvista-demo/pressroom.php");
    $(".change_heading small").text("Click to explore more TresVista News");
    $(".change_subhead small").text("Look ar our media mentions");

  $("#tres-news-tab").click(function(){
    // $(".change_heading a").attr("href", "http://13.233.16.157/tresvista-demo/pressroom.php");
    $(".change_heading small").text("Click to explore more TresVista News");
    $(".change_subhead small").text("Look ar our media mentions");
})

 $("#tres-press-tab").click(function(){
      // $(".change_heading a").attr("href", "http://13.233.16.157/tresvista-demo/pressroom.php");
      $(".change_heading small").text("Click to explore more TresVista Press");
      $(".change_subhead small").text("Read about the latest happenings at Tresvista");
  })

  $("#tres-media-tab").click(function(){
    // $(".change_heading a").attr("href", "http://13.233.16.157/tresvista-demo/pressroom.php");
    $(".change_heading small").text("Click to explore more TresVista Media");
    $(".change_subhead small").text("Browse our collection of visual data");
})
});


// js for hobby club custom dropdown
$(document).ready(function(){
  $("#hobbyclub_id_1").click(function(){
    $(".hobbyclub_cls_1").show();
    $(".hobbyclub_cls_2").hide();
    $(".hobbyclub_cls_3").hide();
    $(".hobbyclub_cls_4").hide();
    $(".hobbyclub_cls_5").hide();
    $(".hobbyclub_cls_6").hide();
    $(".hobbyclub_cls_7").hide();
    $(".hobbyclub_cls_8").hide();
    $(".hobbyclub_cls_9").hide();
    $(".hobby-club-left").css("background-color","#61cf6c");
    $(".hobby-inner-carou").css("background-color","#61cf6c");
  });

  $("#hobbyclub_id_2").click(function(){
    $(".hobbyclub_cls_1").hide();
    $(".hobbyclub_cls_2").hide();
    $(".hobbyclub_cls_3").show();
    $(".hobbyclub_cls_4").hide();
    $(".hobbyclub_cls_5").hide();
    $(".hobbyclub_cls_6").hide();
    $(".hobbyclub_cls_7").hide();
    $(".hobbyclub_cls_8").hide();
    $(".hobbyclub_cls_9").hide();
    $(".hobby-club-left").css("background-color","#60CFC6");
    $(".hobby-inner-carou").css("background-color","#60CFC6");
  });
  $("#hobbyclub_id_3").click(function(){
    $(".hobbyclub_cls_1").hide();
    $(".hobbyclub_cls_2").hide();
    $(".hobbyclub_cls_3").hide();
    $(".hobbyclub_cls_4").show();
    $(".hobbyclub_cls_5").hide();
    $(".hobbyclub_cls_6").hide();
    $(".hobbyclub_cls_7").hide();
    $(".hobbyclub_cls_8").hide();
    $(".hobbyclub_cls_9").hide();
    $(".hobby-club-left").css("background-color","#00327B");
    $(".hobby-inner-carou").css("background-color","#00327B");
  });
  $("#hobbyclub_id_4").click(function(){
    $(".hobbyclub_cls_1").hide();
    $(".hobbyclub_cls_2").hide();
    $(".hobbyclub_cls_3").hide();
    $(".hobbyclub_cls_4").hide();
    $(".hobbyclub_cls_5").show();
    $(".hobbyclub_cls_6").hide();
    $(".hobbyclub_cls_7").hide();
    $(".hobbyclub_cls_8").hide();
    $(".hobbyclub_cls_9").hide();
    $(".hobby-club-left").css("background-color","#347EF6");
    $(".hobby-inner-carou").css("background-color","#347EF6");
  });
  $("#hobbyclub_id_5").click(function(){
    $(".hobbyclub_cls_1").hide();
    $(".hobbyclub_cls_2").hide();
    $(".hobbyclub_cls_3").hide();
    $(".hobbyclub_cls_4").hide();
    $(".hobbyclub_cls_5").hide();
    $(".hobbyclub_cls_6").show();
    $(".hobbyclub_cls_7").hide();
    $(".hobbyclub_cls_8").hide();
    $(".hobbyclub_cls_9").hide();
    $(".hobby-club-left").css("background-color","#F6B343");
    $(".hobby-inner-carou").css("background-color","#F6B343");
  });
  $("#hobbyclub_id_6").click(function(){
    $(".hobbyclub_cls_1").hide();
    $(".hobbyclub_cls_2").show();
    $(".hobbyclub_cls_3").hide();
    $(".hobbyclub_cls_4").hide();
    $(".hobbyclub_cls_5").hide();
    $(".hobbyclub_cls_6").hide();
    $(".hobbyclub_cls_7").hide();
    $(".hobbyclub_cls_8").hide();
    $(".hobbyclub_cls_9").hide();
    $(".hobby-club-left").css("background-color","#699FOF1");
    $(".hobby-inner-carou").css("background-color","#699FOF1");
  });
  $("#hobbyclub_id_7").click(function(){
    $(".hobbyclub_cls_1").hide();
    $(".hobbyclub_cls_2").hide();
    $(".hobbyclub_cls_3").hide();
    $(".hobbyclub_cls_4").hide();
    $(".hobbyclub_cls_5").hide();
    $(".hobbyclub_cls_6").hide();
    $(".hobbyclub_cls_7").show();
    $(".hobbyclub_cls_8").hide();
    $(".hobbyclub_cls_9").hide();
    $(".hobby-club-left").css("background-color","#064991");
    $(".hobby-inner-carou").css("background-color","#064991");
  });
  $("#hobbyclub_id_8").click(function(){
    $(".hobbyclub_cls_1").hide();
    $(".hobbyclub_cls_2").hide();
    $(".hobbyclub_cls_3").hide();
    $(".hobbyclub_cls_4").hide();
    $(".hobbyclub_cls_5").hide();
    $(".hobbyclub_cls_6").hide();
    $(".hobbyclub_cls_7").hide();
    $(".hobbyclub_cls_8").show();
    $(".hobbyclub_cls_9").hide();
    $(".hobby-club-left").css("background-color","#00327B");
    $(".hobby-inner-carou").css("background-color","#00327B");
  });
  $("#hobbyclub_id_9").click(function(){
    $(".hobbyclub_cls_1").hide();
    $(".hobbyclub_cls_2").hide();
    $(".hobbyclub_cls_3").hide();
    $(".hobbyclub_cls_4").hide();
    $(".hobbyclub_cls_5").hide();
    $(".hobbyclub_cls_6").hide();
    $(".hobbyclub_cls_7").hide();
    $(".hobbyclub_cls_8").hide();
    $(".hobbyclub_cls_9").show();
    $(".hobby-club-left").css("background-color","#F6B343");
    $(".hobby-inner-carou").css("background-color","#F6B343");
  });
});




/**JS for csr second form validation */

$(document).ready(function() {
  $('#contact_na').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });

  $('#contact_comp').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });

  $('#contact_ph').on('input', function() {
    var input=$(this);
    /*var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;*/
    var re =  /^\d{10}$/;
    var phone_no=re.test(input.val());
    if(phone_no){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });

  $('#contact_ml').on('input', function() {
    var input=$(this);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var phone_no=re.test(input.val());
    if(phone_no){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  
  
$("#csr_form_submit_second button").click(function(event){
  var form_data=$("#csr_form_second").serializeArray();
  var error_free=true;
  for (var input in form_data){
    var element=$("#contact_"+form_data[input]['name']);
    var valid=element.hasClass("valid");
    var error_element=$("span", element.parent());
    if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
    else{error_element.removeClass("error_show").addClass("error");}
  }
  if (!error_free){
    event.preventDefault(); 
  }
  else{
    alert('No errors: Form will be submitted');
  }
});
});
/**End js for csr form validation */

// home page our service inner container width

// $(document).ready(function(){
//   var scre_wi = $(window).width()-40;
//   $(".home-services-inner-container").css("max-width",scre_wi);
//   console.log("window width",scre_wi);
// })


/**JS for Insight modal form validation */

$(document).ready(function() {
  $('#contact_name').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  $('#contact_company').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  $('#contact_mail').on('input', function() {
      var input=$(this);
      var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      var email=re.test(input.val());
      if(email){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}
  });

  $('#contact_phone').on('input', function() {
    var input=$(this);
    /*var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;*/
    // var re =  /^\d{10}$/;
    var re= 10;
    var phone_no=re.test(input.val());
    if(phone_no){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  
  
  $("#insight_modal_form_btn button").click(function(event){
    var form_data=$("#modal_form_id").serializeArray();
    var error_free=true;
    for (var input in form_data){
      var element=$("#contact_"+form_data[input]['name']);
      var valid=element.hasClass("valid");
      var error_element=$("span", element.parent());
      if (!valid){error_element.removeClass("required").addClass("contact_error_msg_visible"); error_free=false;}
      else{error_element.removeClass("contact_error_msg_visible").addClass("required");}
    }
    if (!error_free){
      event.preventDefault(); 
    }
    else{
      alert('No errors: Form will be submitted');
    }
  });
});
/**End js for Insight modal form validation */






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








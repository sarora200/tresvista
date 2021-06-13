let i=2;


$(document).ready(function(){
var radius = 200;
var fields = $('.itemDot');
var container = $('.dotCircle');
var width = container.width();
  radius = width/2.5;
 
var height = container.height();
var angle = 0, step = (2*Math.PI) / fields.length;
fields.each(function() {
var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
if(window.console) {
console.log($(this).text(), x, y);
}

$(this).css({
left: x + 'px',
top: y + 'px'
});
angle += step;
});


var clickitem = $('.itemDot').click(function(){

var dataTab= $(this).data("tab");
$('.itemDot').removeClass('active');
$(this).addClass('active');
$('.CirItem').removeClass('active');
$( '.CirItem'+ dataTab).addClass('active');
i=dataTab;

$('.dotCircle').css({
"transform":"rotate("+(360-(i-1)*45)+"deg)",
"transition":"2s"
});
$('.itemDot').css({
"transform":"rotate("+((i-1)*45)+"deg)",
"transition":"0s"
});

});



// var lis = Array.prototype.slice.call( document.querySelectorAll('.itemDot'));
// var lis_count = lis.length;
// var active_li_index = 0;
// setInterval(function(){
// var active_li = document.querySelector('.itemDot.active');
// var dataTab= $(this).data("tab");

// $( '.CirItem'+ dataTab).addClass('active');

// $('.itemDot').removeClass('active');
// $('[data-tab="'+i+'"]').addClass('active');
// $('.CirItem').removeClass('active');
// $( '.CirItem'+i).addClass('active');
// i++;

// if( lis.indexOf(active_li) == lis_count-1 )
//   active_li_index  = 0;
// else
//   active_li_index++;
 
// active_li.classList.remove('active');
// document.querySelectorAll('.itemDot')[active_li_index].classList.add('active');
//  }, 1000);



var roundcircle = $(".itemDot").length;


setInterval(function(){
var dataTab= $('.itemDot.active').data("tab");
if(dataTab>8||i>8){
dataTab=1;
i=1;
}

$('.itemDot.active + .itemDot').click();

}, 3000);


setInterval(function(){

$('.itemDot:first-child').click();

}, roundcircle * 3000);

});
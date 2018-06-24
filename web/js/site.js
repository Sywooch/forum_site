
  $(function() {

	$('#da-slider').cslider({
	  autoplay    : true,
	  bgincrement : 100
	});

  });
    
    
jQuery(document).ready(function() {


	$('.bxslider1').bxSlider({
	  minSlides: 5,
	  maxSlides: 6,
	  slideWidth: 360,
	  slideMargin: 2,
	  moveSlides: 1,
	  responsive: true,
	  nextSelector: '#slider-next',
	  prevSelector: '#slider-prev',
	  nextText: 'Onward →',
	  prevText: '← Go back'
	});

  });



  $('a.info').tooltip();

  $(window).on('load',function() {
	$('.flexslider').flexslider({
	  animation: "slide",
	  start: function(slider) {
		$('body').removeClass('loading');
	  }
	});
  });

  $(document).ready(function() {

	$("#owl-demo").owlCarousel({

	  items : 4

	});

  });

  jQuery(document).ready(function(){
	jQuery('ul.superfish').superfish();
  });

  new WOW().init();

	// Ajax jQuery + php
	$(document).ready(function (e) {
		$("#uploadForm").on('submit',(function(e) {
			e.preventDefault();  //If this method is called, the default action of the event will not be 							triggered.
			$.ajax({
						url: "/blog/create/",
				type: "POST",
				data:  new FormData(this),
				contentType: false,     //when we send json file we write contentType: 'application/json'
						cache: false,
				processData:false,
				success: function(data)
					{
				$("#targetLayer").html(data);
					},
					error: function() 
					{
					} 	        
			 });
		}));
	});
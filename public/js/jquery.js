
	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 86){
		  $("#banner").addClass("shrink");
		}
		else
		{
			$("#banner").removeClass("shrink");
		}
	});

  // HIDE NAVBAR AFTER CLICK
  $('.navbar-nav>li>a').on('click', function(){
     $('.navbar-collapse').collapse('hide');
  });

  
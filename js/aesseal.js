
// Carousel

  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 5000
    })
  });


// Vranch Email Fill

 $(document).ready(function() {
 	var branchEmail = $('.email a').text();
	$("input[name^='field_hidden_branch_email']").val(branchEmail)
 });

  // Contact form Slidins


$(document).ready(function(){
	$(".requestcontact").click(function(){
 		$(".view-content").slideDown("slow");
		$(".requestcontact").fadeOut();
	});
});




   
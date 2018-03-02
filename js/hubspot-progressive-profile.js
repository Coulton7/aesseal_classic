//Progressive Profiler - Hubspot Edition.

/*


This goes wherever you have the content gate form. , you could conceivably include it in every page but you probably shouldn't.
Probably best to just put it in sites/all/themes/aesseal-classic/js and then add the following line to the top of node--industryguide.tpl.php and node--vide.tpl.php

<script type="text/javascript" src="../js/hubspot-progressive-profile.js"></script>


*/

$(document).ready(function () {
	if ($('.entityform').length){
  		var hubspotutk = $.cookie("hubspotutk");
  		console.log(hubspotutk); //disable this once you know it's all working. it basically spits the cookie detail into the browser log.

  		// We get our customer info using a php script called simple proxy, read about it here: https://github.com/cowboy/php-simple-proxy/
  		// It lets us fetch JSON data via javascript without cross domain errors
  		//  		$.getJSON('ba-simple-proxy.php?url=http://api.hubapi.com/contacts/v1/contact/utk/'+hubspotutk+'/profile?hapikey=eb430742-5ec5-4dd5-a2b3-e0dabcfe7c7d',
  		$.getJSON('ba-simple-proxy.php?url=https://api.hubapi.com/contacts/v1/contact/utk/'+hubspotutk+'/profile?hapikey=58e45a37-44c9-4b50-bc17-28281538a59a',
  		function(json) { //Parse the json we just got
  			console.log(json); //Get rid of this when it's working, it throws the entire JSON string into the log.

  			//Next we go through all the fields we want to progressively profile by name and set their value to the corresponding JSON entry.
	        $('input[name="field_email_address[und][0][value]"]').val(json.contents.properties.email.value);
	        $('input[name="field_first_name[und][0][value]"]').val(json.contents.properties.firstname.value);
	        $('input[name="field_last_name[und][0][value]"]').val(json.contents.properties.lastname.value);
	        $('input[name="field_city[und][0][value]"]').val(json.contents.properties.city.value);
	        $('input[name="field_organisation[und][0][value]"]').val(json.contents.properties.company.value);
	        $('input[name="field_telephone[und][0][value]"]').val(json.contents.properties.phone.value);
	        $('select[name="field_country[und]"]').val(json.contents.properties.country.value);

	         //next we add a class to every form item in the entity form and then hide everything with that class

	        $('.entityform:  .form-item').addClass('progPro');
	        $('.progPro').hide();

	        //After that we loop through every form item on the form and check if it has a value

	        $('.entityform:  .form-item').each( function () {
	        	$this = $(this);
	          	var inputVal = $this.find('input').attr('value');
	          	if (inputVal != '' ){
	          		//if the field isn't empty we remove the progPro class, blank the field and then remove the required class (except if its the email address)
	            	$this.removeClass('progPro');
	           		$this.find('input: not(#edit-field-email-address-und-0-value--3)').val("");
	         		$this.find('input: not(#edit-field-email-address-und-0-value--3)').removeClass("required");
	          	}

	     	 });

	        var countryVal = $('#edit-field-country-und').val();
			if(countryVal = '') {
				$('.form-item-field-country-und').addClass('progPro');

	         }
//lastly we add prog pro back to email address and question fields (so that they ALWAYS show) and then reveal the first 4 fields with the prog pro class

	        $('.form-item-field-email-address-und-0-value').addClass('progPro');
	        $('.form-item-field-question-und-0-value').addClass('progPro');
	        $('.mollom-content-id').addClass('progPro');
	        $('.progPro:lt(4)').show();

 		});
	}
});

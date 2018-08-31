$( "#select-country" ).change(function() {
  	var country_name = $("#select-country").val();
  	var redirect_url = base_url + "escorts/" +country_name;
	window.location.replace(redirect_url);
});


$( "#select_country" ).change(function() {
  	var country_id = $("#select_country").val();
  	var ajex_url = base_url + "admin/common_admin/getcity";
	$.ajax({
	  	type: "POST",
	  	url: ajex_url,
	  	data: {country_id:country_id},
	  	success: function(response){
	  		if (response.status == "success") {
	  			$("#select-city").html('');
	  			var html_str = '<option value="">---Select city---</option>';
	  			for(var i=0 ; i < response.cities_data.length ; i++)
	  			{
	  				html_str += '<option value="'+response.cities_data[i].city_id+'">'+response.cities_data[i].city_name+'</option>'
	  			}
	  			$("#select_city").html(html_str);
	  		}
	  	},
	  	error : function(response){
	  		alert(response.responseText);
	  	}
	});
});


$("#select-payment-category").change(function() {
  	var payment_caegory_id = $("#select-payment-category").val();
  	var ajex_url = base_url + "admin/common_admin/getpaymentperiod";
  	$.ajax({
	  	type: "POST",
	  	url: ajex_url,
	  	data: {payment_caegory_id:payment_caegory_id},
	  	success: function(response){
	  		if (response.payment_period.length) {
	  			$("#select-payment-period").html('');
	  			var html_str = '<option value="">---Select Payment period---</option>';
	  			for(var i=0 ; i < response.payment_period.length ; i++)
	  			{
	  				html_str += '<option value="'+response.payment_period[i].days+'">'+response.payment_period[i].payment_period_description+'</option>'
	  			}
	  			$("#select-payment-period").html(html_str);
	  			// $("#payment_period_tab").show();
	  		} else {
	  			alert("data is is not present");
	  		}
	  	},
	  	error : function(response){
	  		alert(response.responseText);
	  	}
	});
});
$(document).ready(function(){
    // $("#city_tab").hide();
    // $("#payment_period_tab").hide();
});
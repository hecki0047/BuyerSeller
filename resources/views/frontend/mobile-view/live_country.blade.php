<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript"> 
       	$('#country').val('Bangladesh');
$('#phone_country').val('880');
$(document).on({
	keyup: function() {
		var country_id;
		var iso_code_2;
		var country_code;
		$(this).autocomplete({
			source: window.location.origin + "/country_suggesion/" + $(this).val(),
			select: function(event, ui) {
				country_id = ui.item.id;
				iso_code_2 = ui.item.iso_code_2;
				country_code = ui.item.country_code;
				$(this).prev().val(country_id);
				iso_code_2 = iso_code_2.toLowerCase();
				$('#iso_code').attr('src','http://www.bdtdc.com/resources/assets/global/img/flags/'+iso_code_2+'.png');
				$('#phone_country').val(country_code);
			},
			html: true,
			open: function(event, ui) {
				$('.ui-autocomplete').css('z-index', '9999');
			}
		});
	}
}, 'input[name="country_suggession"]');
        </script>
  
    </head>
    <body>
        <div class="container">
            <div class="row">
            	<div class="col-sm-12">
            		<div class="col-xs-10 col-xs-offset-1 margin-bottom2">
						<div class="col-xs-3 text-right">
							<label for="Company Location">Company Location:</label>
						</div>
						<div class="col-xs-5">
							<input type="hidden" name="country" value="">
							{!! Form::text('country_suggession','',array('class'=>'form-control','id'=>'country','placeholder'=>'country...','validation'=>"validated_true")) !!}
						</div>
						<div class="col-xs-4 validation_status">
							<img id="iso_code" style="height: 21px;margin-right: 10px;" src="{!! asset('resources/assets/global/img/flags/bd.png') !!}">
							<i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
							<i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
							<span class="text-danger validation_message invalid_country">Please type your Country</span>
						</div>
					</div>

            	</div>


            </div>


        
        </div>

    </body>
</html>
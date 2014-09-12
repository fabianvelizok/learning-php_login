function validate(){

	$('#js-loginForm').validate({

		rules:{
			user_email:{
				minlength: 4
			},
			user_password:{
				minlength: 4
			}
		},
		
		submitHandler:function(){
			
			var str = $('#js-loginForm').serialize();

			$.ajax({

				beforeSend:function(){

					$('#js-fullScreen').show();
				},

				cache:false,
				type: 'POST',
				dataType: 'json',
				url: 'php/app_response.php',
				data: str + '&action=login',

				success:function(data){

					if(data.response==true){

						if($('.row.error').is(':visible')) 
							$('.row.error').hide();
						
						alert(data.content);

					}else{

						alert(data.message);
						console.log('response false');
						$('.row.error').show();
					}

					$('#js-fullScreen').hide();

				},

				error:function(error){
					alert(error.message);
					console.log('ERROR AJAX');
				}

			});

		},

		errorPlacement:function(error,item){
			item.parent().append('<div class="errorItem"></div>').find('.errorItem').html(error);

		}
	});
}


function onReady(){

	validate();

}


$(document).on('ready',onReady);

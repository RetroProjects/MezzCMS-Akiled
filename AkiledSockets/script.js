$(function(){

	$('#overlay').animate({marginTop:"0%",opacity:"1"},1000,function(){

		$('img').animate({width:"350px",opacity:"1",marginLeft:"170px"},500,function(){

			$('img').animate({width:"200px",marginLeft:"240px"},300,function(){

				$('.titre').slideDown(500,function(){

					$('.texte').fadeIn(500,function(){

						$('.owner').slideDown(500)

					})
					
				})

			})

		})

	})

})
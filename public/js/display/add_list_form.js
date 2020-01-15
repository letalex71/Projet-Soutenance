/*
	TODO : ajotuer une possibiltié de recevoir l'id facilement sur les pages film / série 
 */

function formOverlay() {

	// Overlay s'affiche quand on clique sur icone
	$('.c-reaction-square').click( function () {

		let apiCall; // recevra la promesse de l'api


		var media; // aura le type du media ajouté et son id 


		// Si page d'accueil, media sera rempli selon sur quelle icone on a cliqué, sinon selon l'id reçu et l'url
		if ( typeof id !==  'undefined' ) {

			media[0] = 'quelque chose on verra plus tard';
			media[1] = id;
		}
		else {
			media =  $(this).parent().parent().parent().attr('id').split('-');


		}

		$('body').prepend('<div class="overlay d-flex align-items-center justify-content-center"></div>');

		// Appel à l'api
		apiCall = (media[0] == 'movie') ? tmdbApi.movie(media[1], 'fr-FR') : tmdbApi.tvShow(media[1], 'fr-FR'); 

		apiCall.then( response => {


			// titre change selon si tv ou movie
			var title = (typeof response.title !== 'undefined') ? response.title : response.name;

			// Ajout de la div formulaire
			$('.overlay').append(`
							
					<div class="container bg-dark rounded-lg col-10 offset-1 watchlist-container">
						<div class="row">
							<img class="col-md-2" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2${response.poster_path}" alt="Image du film ${title}">
						
							<div class="col-md-10">
								<h2 class="col-md-4 offset-md-4 text-center text-light" id="media-title">${title}</h2>
								<p class="mt-5 text-light">${response.overview}</p>
							</div>
						
						</div>
					
						<div class="form-container mx-1 row mt-3">
							<form class="col-12 watchlist-form" action="">
								<div class="form-row">

									<div class="form-group col-md-6">
										<label class="h4 text-light" for="inputStatus">Statut :</label>
										<select name="status" class="custom-select bg-dark text-light" id="inputStatus">>
											<option value="completed" selected>Terminé</option>
											<option value="plan_to_watch">À regarder</option>
											<option value="dropped">Laissé tombé</option>
										</select>
							
									</div>

									<div class="form-group col-md-5 offset-md-1">
										<label class="h4 text-light" for="inputStatus">Score :</label>
										<select name="score" class="custom-select bg-dark text-light" id="inputScore">
											<option value="0">0</option>
											<option value="0.5">0.5</option>
											<option value="1">1</option>
											<option value="1.5">1.5</option>
											<option value="2">2</option>
											<option value="2.5">2.5</option>
											<option value="3">3</option>
											<option value="3.5">3.5</option>
											<option value="4">4</option>
											<option value="4.5">4.5</option>
											<option value="5">5</option>
											<option value="5.5">5.5</option>
											<option value="6">6</option>
											<option value="6.5">6.5</option>
											<option value="7">7</option>
											<option value="7.5">7.5</option>
											<option value="8">8</option>
											<option value="8.5">8.5</option>
											<option value="9">9</option>
											<option value="9.5">9.5</option>
											<option value="10" selected>10</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button class="btn btn-danger offset-1 cancel-button">Annuler</button>
									<button class="btn btn-info offset-sm-1  offset-md-2 send-button">Envoyer</button>
								</div>

						</form>
					</div>
				</div>

			`);

			// Enlève le formulaire quand on clique sur le boutton cancel
			$('.cancel-button').click( function(e) {

				e.preventDefault();
				$('.overlay').remove();
			});

			// Vérifie le formulaire et envoit le formulaire à notre API PHP + l'API TMDB sir tout est bon
			$('.send-button').click( function(e) {
				
				
				
				e.preventDefault();

				let status = $('#inputStatus').val();
				let score = $('#inputScore').val();
				
                                    	
				let type = (media[0] == 'tv') ? 's' : 'm';

				let formData = new FormData();

				formData.append('type', type);
				formData.append('score', score * 10);
				formData.append('title', title);
				formData.append('status', status);
				formData.append('itemID', media[1]);
				formData.append('posterPath', response.poster_path);
		
				let result = formCheck(formData);
					
				result.then(result => {
					console.log(result);
				});

			});

		});
	
	});

	// Enlève le formulaire quand on clique sur l'overlay
	$('.overlay').click( function () {

		$(this).remove();
	});

}
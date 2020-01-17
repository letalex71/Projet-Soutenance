/*
	TODO : ajotuer une possibiltié de recevoir l'id facilement sur les pages film / série 
 */

function formOverlay() {

	// Overlay s'affiche quand on clique sur icone Ajouter
	$('.add-media').click( function () {

		let apiCall; // recevra la promesse de l'api

		var media;


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
							
					<div class="shadow container bg-dark rounded-lg col-10 py-3 offset-1 watchlist-container">
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

				let score = $('#inputScore').val();
				let status = $('#inputStatus').val();


				$(this).remove();
				$('.watchlist-container').children().remove();
				$('.watchlist-container').removeClass();
				$('.overlay').children().addClass('watchlist-container col-sm-10 col-xs-10 col-md-6 bg-dark rounded-lg align-items-center d-flex flex-column py-3');
				$('.watchlist-container').append('<p class="h4 text-light py-2 validation-info">Ajout en cours...</p>')
				$('.watchlist-container').append('<div class="loader"></div>');


				

				let type = (media[0] == 'tv') ? 's' : 'm';

				let formData = new FormData();


				formData.append('type', type);
				formData.append('score', parseInt(score) * 10);
				formData.append('title', title);
				formData.append('status', status);
				formData.append('itemID', media[1]);
				formData.append('posterPath', response.poster_path);
		
				let result = formCheck(formData);
					
				result.then( message => {

					$('.loader').remove();

					if (message['status'] == 'success'){

						$('.validation-info').text('L\'ajout à votre watchlist a bien été effectué ');
						$('.watchlist-container')
						.append(`
						<a style="text-decoration: none!important;" href="${redirectionPath}">										
							<button class="btn btn-info validation-button">Ok</button>
						</a>
						`);
					}

					else {
						
						$('.validation-info').text('Nous avons rencontré un problème, veuillez rééssayer plus tard');
						$('.watchlist-container').append(`<button class="btn btn-info validation-button">Ok</button>`);
						$('.validation-button').click(() => $('.overlay').remove() );
					}
	
				});

			});

		});
	
	});

	// Enlève le formulaire quand on clique sur l'overlay
	$('.overlay').click( function () {

		$(this).remove();
	});


	$('.delete-media').click( function(){


		var media;


		// Si page d'accueil, media sera rempli selon sur quelle icone on a cliqué, sinon selon l'id reçu et l'url
		if ( typeof id !==  'undefined' ) {

			media[0] = 'quelque chose on verra plus tard';
			media[1] = id;
		}
		else {
			media =  $(this).parent().parent().parent().attr('id').split('-');

		}

		$('body').prepend('<div class="overlay d-flex align-items-center justify-content-center"></div>');


		$('.overlay').append(`
			
			<div class="shadow container bg-dark rounded-lg col-md-6 offset-md-3 py-3 col-10 offset-1  watchlist-container">
				<p class="h4 text-center text-light">Voulez vous vraiment supprimer cet élément de votre watchlist ?</p>
				<div class="col-md-8 offset-md-2 d-flex justify-content-center">
					<button class="btn btn-danger cancel-button mr-2">Annuler</button>
					<button class="btn btn-info offset-1 send-button">Confirmer</button>
				</div>
			</div>

			`);


		// Enlève le formulaire quand on clique sur le boutton cancel
			$('.cancel-button').click( function(e) {

				e.preventDefault();
				$('.overlay').remove();
			});

			$('.send-button').click(function(e) {
				
				e.preventDefault();
				$('.watchlist-container').children().remove();
				$('.watchlist-container').removeClass();
				$('.overlay').children().addClass('watchlist-container col-sm-10 col-xs-10 col-md-6 bg-dark rounded-lg align-items-center d-flex flex-column py-3');
				$('.watchlist-container').append('<p class="h4 text-light py-2 validation-info">Suppression en cours...</p>')
				$('.watchlist-container').append('<div class="loader"></div>');


				let formData = new FormData();

				let type = (media[0] == 'tv') ? 's' : 'm';


				formData.append('type', type);
				formData.append('itemId', media[1]);
				let result = deleteItem(formData);

				result.then( function (message) {


					$('.loader').remove();

					if (message['status'] == 'success'){

						$('.validation-info').text('La suppression a bien été effectuée');
						$('.watchlist-container')
						.append(`
						<a style="text-decoration: none!important;" href="${redirectionPath}">										
							<button class="btn btn-info validation-button">Ok</button>
						</a>
						`);
					}

					else {
						
						$('.validation-info').text('Nous avons rencontré un problème, veuillez rééssayer plus tard');
						$('.watchlist-container').append(`<button class="btn btn-info validation-button">Ok</button>`);
						$('.validation-button').click(() => $('.overlay').remove() );
					}

				});

			});

	});
}
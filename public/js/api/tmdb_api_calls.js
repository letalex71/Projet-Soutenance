function homePage(isLogged) {

	 

	let movies = tmdbApi.discover('movie', {
	        'include_video' : 'false',
	        'include_adult' : 'false',
	        'sort_by' : 'popularity.desc',
	        'total_result' : '5',
	        'language' : 'fr-FR',
	        })
	.then( movies => { return displayMovies(movies.results) });

	let shows = tmdbApi.discover('tv', {
	            'include_null_first_air_dates' : 'false',
	            'timezone' : 'Europe%2FParis',
	            'page' : '1',
	            'sort_by' : 'popularity.desc',
	            'language' : 'fr-FR',
	        })
	.then( shows => { return displayShows(shows.results) });

	Promise.all([movies, shows]).then( () => checkSession(isLogged));

}

function movieView(){

	let id = window.location.search.substr(4);
    
    tmdbApi.movie( id , 'fr-FR').then( response => {
        displayMovie(response.results);
    });
}

function filterSearch() {


	let type;
	let filters = {

		language: 'fr-FR'
	};


	for (selectedFilter of $('.filter-active'))
	{

		switch (selectedFilter.dataset.filter)
		{	
			case "type":
				type = selectedFilter.id;
				break;

			case "sort":
				filters["sort_by"] = selectedFilter.value;
				break;

			case "year":
				filters["primary_release_year"] = selectedFilter.value;
				break;

			case "genre":

				if (filters["with_genres"] === undefined)
					filters["with_genres"] = selectedFilter.id.substr(6);
				else
					filters["with_genres"] += `,${selectedFilter.id.substr(6)}`;

				break;
		}

		
	}
	
	tmdbApi.discover(type, filters)
	.then( response => {

		console.log(response);
	});

}
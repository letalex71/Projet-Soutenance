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

function movieView(id){

	tmdbApi.movie( id , 'fr-FR')
	.then( response => {
		displayMovie(response);
	});
}

function castMovieView(id) {

	tmdbApi.movie(id , 'fr-FR', 'credits')
	.then( response => {
		displayCast(response);
	});
}


function filterSearch() {

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
			if (selectedFilter.value != 'none')
			{
				if ($('.filter-active[data-filter="type"]').attr('id') == 'movie')
					filters["year"] = selectedFilter.value;
				else
					filters['first_air_date_year'] = selectedFilter.value;
			}
			break;

			case "genre":

			if (filters["with_genres"] === undefined)
				filters["with_genres"] = selectedFilter.id.substr(6);
			else
				filters["with_genres"] += `,${selectedFilter.id.substr(6)}`;
			break;
		}

		
	}


	if (type == 'tv')
		$('.contents-container').attr('id', `popular-shows`);
	else
		$('.contents-container').attr('id', `popular-movies`);
	tmdbApi.discover(type, filters)
	.then( response => {

		page = 1;
		$('.grid-item').remove();
		$('.total-results').remove();
		
		displayResults(response.total_results);
		if (type == 'movie')
			displayMovies(response.results);
		else
			displayShows(response.results);
	});

	function addEvent(node, type, callback) {
		if('addEventListener' in node) {
			node.addEventListener(type, callback, false);
		} else {
			node.attachEvent('on' + type, callback);
		}
	}

	addEvent(window, 'scroll', (function() {
    // https://developer.mozilla.org/en/DOM/window.scrollY#Notes
	    var stObj, stProp;
	    if('scrollY' in window) { // CSSOM:
	        // http://www.w3.org/TR/cssom-view/#extensions-to-the-window-interface
	        stObj = window;
	        stProp = 'scrollY';
	    } else if('pageYOffset' in window) { // CSSOM too
	    	stObj = window;
	    	stProp = 'pageYOffset';
	    } else {
	    	stObj = document.documentElement.clientHeight ?
	    	document.documentElement : document.body;
	    	stProp = 'scrollTop';
	    }

	    var node = document.documentElement.clientHeight ?
	    document.documentElement :
	        document.body; // let's assume it is IE in quirks mode
	        var lastSt = -1;
	        return function(e) {
		        if(lastSt !== stObj[ stProp ] && // IE <= 8 fires twice
		        	node.scrollHeight === stObj[ stProp ] + node.clientHeight) {
		        		
		        		filters['page'] = ++page;

						
						tmdbApi.discover(type, filters)
						.then( response => {

							if (type == 'movie')
								displayMovies(response.results);
							else
								displayShows(response.results);
						});
	    			}
	    		lastSt = stObj[ stProp ];
			};
	})());
}


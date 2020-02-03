var tmdbApi = {
	/*
		clé API qui sert à la création de l'URL pour faire la requête.
		Possibilité d'utiliser setApiKey pour la changer
	 */
	apiKey: '6bf0fa1291809ddcb8f6efb13f63ffbc',
	/*
		URL de base qui sert à la création de l'URL pour faire la requête
	 */
	baseURL: 'https://api.themoviedb.org/3/',
	/*
		Cette fonction sert a hydrater la variable apiKey qui sera réutilisée
		pour toutes les requêtes
	 */
	setApiKey: function (apiKey) {
		this.apiKey = apiKey;
	},
	/*
		Reçoit l'url à laquelle faire une requête, et renvoit le résultat
		sous forme de promesse
	 */
	apiRequest: async function (url) {
		const response = fetch(url);
		const output = response.then(response => {
			return response.json();
		})
		return output;
	},
	/*
		Renverra une liste de film, séries TV ou personnes par rapport aux filtres utilisés.
		'filters' est un objet (par exemple, tmdb.discover('movie', {'with_genre' : 26}); pour 
		avoir la liste des films du genre comédie.
		Liste des filtres possibles : https://developers.themoviedb.org/3/discover/movie-discover
	 */
	discover: function (type, filters) {
		url = `${this.baseURL}discover/${type}?api_key=${this.apiKey}`;
		for (filter in filters)
			url += `&${filter}=${filters[filter]}`;
		return this.apiRequest(url);
	},
	/*
		Retournera une requête de tous les genres disponibles pour un type de media
		('movie' ou 'tv')
	 */
	genres: function (type, language = 'fr-FR') {
		url = `${this.baseURL}genre/${type}/list?api_key=${this.apiKey}&language=${language}`;
		return this.apiRequest(url);
	},
	/*
		Retournera les données d'un film par rapport à son id. Le contenu sera en 'en_US' par
		défaut. 'detail' permet de recevoir qu'un détail spécifique. Pour connaître la liste des
		détails possibles : https://developers.themoviedb.org/3/movies/get-movie-details
		(ex : envoyer 'release_date' pour ne recevoir que la date de sortie)
	 */
	movie: function (id, language = 'fr-FR', detail = false, appendToResponse = false) {
		url = `${this.baseURL}movie/${id}`;
		url += (detail === false) ?
			`?api_key=${this.apiKey}&language=${language}` :
			`/${detail}?api_key=${this.apiKey}&language=${language}`;
		url += (appendToResponse === false) ? '' : `apend_to_response=${appendToResponse}`;
		return this.apiRequest(url);
	},
	tvShow: function (id, language = 'fr-FR', detail = false, appendToResponse = false) {
		url = `${this.baseURL}tv/${id}`;
		url += (detail === false) ?
			`?api_key=${this.apiKey}&language=${language}` :
			`/${detail}?api_key=${this.apiKey}&language=${language}`;
		url += (appendToResponse === false) ? '' : `apend_to_response=${appendToResponse}`;
		return this.apiRequest(url);
	},
	tvSeason: function (id, season_number, language = 'fr-FR') {
		url = `${this.baseURL}tv/${id}/season/${season_number}`;
		url += `?api_key=${this.apiKey}&language=${language}`;
		return this.apiRequest(url);
	},
	people: function (id, language = 'fr-FR', detail = false, appendToResponse = false) {
		url = `${this.baseURL}person/${id}`;
		url += (detail === false) ?
			`?api_key=${this.apiKey}&language=${language}` :
			`/${detail}?api_key=${this.apiKey}&language=${language}`;
		url += (appendToResponse === false) ? '' : `apend_to_response=${appendToResponse}`;
		return this.apiRequest(url);
	},
	peopleCredits: function (id, language = 'fr-FR') {
		url = `${this.baseURL}person/${id}/combined_credits`;
		return this.apiRequest(url);
	},
	/*
		'type' accepte : 'all', 'movie', 'tv', 'person'
		'timeWindow' accepte : 	'day', 'week'
	 */
	trendings: function (type, timeWindow) {
		url = `${this.baseURL}trending/${type}/${timeWindow}?api_key=${this.apiKey}`;
		return this.apiRequest(url);
	},
	search: function (type, query, page = 1, language = 'fr-FR', )
	{
		url = `${this.baseURL}search/${type}?api_key=${this.apiKey}&language=${language}&page=${page}&query=${query}`
		return this.apiRequest(url);
	}
}
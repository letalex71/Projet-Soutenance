/*
 * SUMMARY
 *
 * 1 :: DISCOVER PAGE
 * 1.1 - Popular Movies
 * 1.2 - Popular TV Shows
 *
 * 2 :: ITEM PAGE
 * 2.1 - Display Movie
 * 2.2 - Display TV Show
 *
 * 3 :: SEARCH PAGE
 * 3.1 - Movie filter
 * 3.2 - TV Show filter
 * 3.3 - Actors filter
 *
 * 4 - LISTS
 * 4.1 - Create list
 * 4.2 - Read List
 * 4.3 - Delete list
 *
 * 5 - ADDITIONNAL
 *
 *
 * Authors : Alex, Thomas, Lisia
 *
 */

/**
 * 1 :: DISCOVER PAGE
 */

/**
 * Check if user is logged : Display "add to list" button if logged
 * @param {*} isLogged
 */
async function checkSession() {
    let itemsToChange = $("[class*='itemMovies']:not('.added-fav'), [class*='itemShows']:not('.added-fav')");
    itemsToChange.addClass('added-fav');
    if (isLogged === true) {
        // Récupère la liste des medias déjà ajoutés par l'utilisateur
        let watchlist = await fetch(`${watchlistPath}?user=${userId}`)
            .then(function (response) {
                return response.json();
            })
            .then(function (result) {
                return result;
            });
        itemsToChange.each(function () {
            mediaCS = $(this).parent().attr('id').split('-');
            mediaCS[1] = parseInt(mediaCS[1]);
            /* Cette condition vérifie si l'item a déjà été ajouté a la watchlist par l'utilisateur.
               Si c'est le cas, un bouton de suppression sera affiché à la place */
            if (
                (mediaCS[0] == 'tv' && (watchlist['t'].length == 1 || (watchlist['t'].length > 1 && !watchlist['t'].includes(mediaCS[1])))) ||
                (mediaCS[0] == 'movie' && (watchlist['m'].length == 1 || (watchlist['m'].length > 1 && !watchlist['m'].includes(mediaCS[1]))))
            ) {
                $(this).append(`
                    <div class="c-tooltip ml-1">
                            <div class="c-reaction-square add-media">
                                <i class=" c-reaction-icon far fa-plus-square"></i>
                            </div>
                        <div class="c-tooltip-text">Ajouter à votre watchlist</div>
                    </div>
                `);
            } else {
                $(this).append(`
                    <div class="c-tooltip ml-1">
                            <div class="c-reaction-square delete-media">
                                <i class=" c-reaction-icon far fa-times-circle"></i>
                            </div>
                        <div class="c-tooltip-text">Supprimer de votre watchlist</div>
                    </div>
                `);
            }
        });
    } else {
        itemsToChange.each(function () {
            $(this).append(`
                    <div class="c-tooltip ml-1">
                        <a href="/connexion">
                            <div class="c-reaction">
                                <i class=" c-reaction-icon c-reaction-icon-disabled far fa-plus-square"></i>
                            </div>
                        </a>
                        <div class="c-tooltip-text">Vous devez être connecté pour ajouter en favori</div>
                    </div>`);
        });
    }
    formOverlay();
}
// 1.1 - Display Movies
async function displayMovies(movies) {
    return new Promise(resolve => {
        let movieId = 0;
        for (movie of movies) {
            $('#popular-movies').append(`
                    <article class="grid-item" id="movie-${movie.id}">
                        <div class="grid-item-icons u-top itemMovies">
                        <i class="far fa-star">
                        <span id="js-glamour-likes-28145" class="c-reaction-icon">${movie.vote_average}</span>
                        </i>
                        </div>
                        <a href="films/${movie.id}" class="grid-item-link media-id">
                            <div class="grid-item-content">
                                <div class="grid-item-content-divider"></div>
                                <h3 class="grid-item-content-title">${movie.title}</h3>
                            </div>
                            <img
                                src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/${movie.poster_path}"
                                loading="lazy" class="grid-item-image u-inset">
                        </a>
                    </article>`);
        }
        resolve('Success');
    });
}
/**
 * 1.3 Trending
 * @param {*} trendings
 */
async function displayTrendings(trendings) {
    return new Promise(resolve => {
        let itemId = 0;
        for (item of trendings) {
            if (item.profile_path){
                var poster = item.profile_path == null ? `img/ressources/poster_not_found.png` : `https://image.tmdb.org/t/p/w600_and_h900_bestv2${item.profile_path}`
            } else {
                var poster = (item.poster_path == null ? `img/ressources/poster_not_found.png` : `https://image.tmdb.org/t/p/w600_and_h900_bestv2${item.poster_path}`)
            }
            var trueTitle = (item.title ? item.title : '' || item.name ? item.name : '');
            if (item.vote_average){
                var vote = `class="c-reaction-icon">${item.vote_average}`
            } else {
                var vote = `class="c-reaction-icon">0`
            }
            if (item.media_type == 'tv') {
                var trueType = 'series';
                var itemType = 'itemShows';
            } else if (item.media_type == 'movie') {
                var trueType = 'films';
                var itemType = 'itemMovies';
            } else if (item.media_type == "person") {
                var trueType = 'personnes';
                var itemType = 'itemPersons';
            }
            let urlTitle = trueTitle.split(" ").join("-");
            $('#trendings').append(`
                    <article class="grid-item" id="${trueType}-${item.id}">
                        <div class="grid-item-icons u-top ${itemType}">
                        <i class="far fa-star">
                        <span id="js-glamour-likes-28145" ${vote}</span>
                        </i>
                        </div>
                        <a href="${trueType}/${item.id}" class="grid-item-link media-id">
                            <div class="grid-item-content">
                                <div class="grid-item-content-divider"></div>
                                <h3 class="grid-item-content-title">${trueTitle}</h3>
                            </div>
                            <img
                                src="${poster}"
                                loading="lazy" class="grid-item-image u-inset">
                        </a>
                    </article>`);
        }
        resolve('Success');
    });
}

// 1.2 - Popular TV Shows
async function displayShows(shows) {
    return new Promise((resolve) => {
        let showInd = 0;
        for (show of shows) {
            let urlTitle = show.name.split(" ").join("-");
            var poster = show.poster_path == null ? `img/ressources/poster_not_found.png` : `https://image.tmdb.org/t/p/original${show.poster_path}`;
            $('#popular-shows').append(`
                <article class="grid-item" id="tv-${show.id}">
                    <div class="grid-item-icons u-top itemShows">
                    <i class="far fa-star">
                        <span id="js-glamour-likes-28145" class="c-reaction-icon ">${show.vote_average}</span>
                    </i>
                    </div>
                    <a href="/series/${show.id}" class="grid-item-link">
                        <div class="grid-item-content">
                            <div class="grid-item-content-divider"></div>
                                <h3 class="grid-item-content-title">${show.name}</h3>
                            </div>
                            <img
                                src="${poster}"
                                loading="lazy" class="grid-item-image u-inset">
                        </a>
                </article>`);
        }
        resolve('Success');
    });
}

/**
 * 2 :: ITEM PAGE
 */

// 2.1 - Display Movie
function displayMovie(response) {

    /**
     * Variables declarations
     */
    var backdrop = response.backdrop_path == null ? `img/ressources/backdrop_not_found.png` : `https://image.tmdb.org/t/p/original${response.backdrop_path}`;
    var poster = response.poster_path == null ? `img/ressources/poster_not_found.png` : `https://image.tmdb.org/t/p/w600_and_h900_bestv2${response.poster_path}`;
    var overview = response.overview.length == '' ? "Ce film n'a pas encore de synopsis" : response.overview;
    let countries = [];
    response.production_countries.forEach(country => {
        countries.push(country.name);
    });
    let studios = [];
    response.production_companies.forEach(studio => {
        studios.push(studio.name);
    });
    /**
     * Synopsis Area
     */
    $('title').prepend(response.title);
    $('#comment_form_itemName').val(response.title);
    $('.overview-content').text(overview);
    $('.poster').attr('src', poster);
    $('body').css('background-image', 'url("' + backdrop + '")');
    $('.votes').append(`<span class="fa-layers fa-fw">
        <i class="fas fa-star"></i>
            <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-11.5 rotate--30" style="font-weight:900">${response.vote_average}</span>
        </span>`);
    $('.votes-count').append(`<span class="font-weight-light small">Note déduite après ${response.vote_count} votes</span>`);
    /**
     * Details Area
     */
    $('.country').append(countries.join(', '));
    $('.studio').append(studios.join(', '));
    $('.year').append(`${response.release_date.substr(0, 4)}`);
    $('.budget').append(`${response.budget} $`);
    $('.revenues').append(`${response.revenue} $`)
}

/**
 * 2.2 Display People
 */
function displayPerson(response) {
    var biography = response.biography.length == '' ? "Cet/cette acteur/actrice n'a pas de biographie" : response.biography;
    // Used to convert US dates to French dates
    const birthday = new Date(response.birthday);
    const deathday = new Date(response.deathday);
    const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    $('.overview-content').text(biography);
    $('.name').prepend(response.name);
    $('.profile').attr('src', `https://image.tmdb.org/t/p/w600_and_h900_bestv2${response.profile_path}`);
    $('.birthday').append(`<li><small>${birthday.toLocaleDateString('fr-FR', options)}</small></li>`);
    if (response.deathday !== null) {
        $('.deathday').append(`<li><small>${deathday.toLocaleDateString('fr-FR', options)}</small></li>`);
    } else {
        $('.death').remove;
    }
    $('.birthplace').append(`<li><small>${response.place_of_birth}</small></li>`);
    $('.know-for-department').append(`<li><small>${response.known_for_department}</small></li>`);
}
function displayPersonCredits(response) {
    /**
     * Credits area
     * Need to truncate results because some people have a very big movies credits. Display only the first 5
     */

    var trunCreditsCast = response.cast.slice(0, 5);
    if (response.cast.length != 0) {
        trunCreditsCast.forEach(creditsCast => {
            let title = creditsCast.title
            let character = creditsCast.character
            if ((window.innerWidth < 768)) {
                title = title.substr(0, 10);
                character = character.substr(0, 15);
                title += (title.length == creditsCast.title.length) ? '' : '...';
                character += (character.length == creditsCast.character.length) ? '' : '...';
            }
            $('.list-cast').append(`
        <div class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="creditsCast">
            <img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${creditsCast.poster_path}" loading="lazy" class="casting-list-img">
            <p class="badge badge-pill text-dark">${character}</p>
            <p class="badge badge-pill text-dark">dans : <a href="/films/${creditsCast.id}">${title}</a></p>
        </div>`);
        });
    } else {
        $('.list-cast').append('<p class="text-dark" id="creditsCrew">Cette personne n\'a jamais eu de rôle.</p>');
    }
    var trunCreditsCrew = response.crew.slice(0, 5);
    if (response.crew.length != 0) {
        trunCreditsCrew.forEach(creditsCrew => {
            let title = creditsCrew.title
            if ((window.innerWidth < 960) && title.length >= 26) {
                title = title.substr(0, 25);
                title += (title.length == creditsCast.title.length) ? '' : '...';
            }
            $('.list-crew').append(`
            <p class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="creditsCrew">
            <img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${creditsCrew.poster_path}" loading="lazy" class="casting-list-img">
            <span class="badge badge-pill align-self-center"><a href="/films/${creditsCrew.id}">${title}</a></span></p>`);
        });
    } else {
        $('.list-crew').append('<p class="text-dark" id="creditsCrew">Cette personne n\'a jamais fait partie d\'une équipe de production.</p>');
    }
}

function displayCast(response) {
    /**
     * Cast / Crew Area
     * Need to truncate results because some movies have very big cast/crew. Display only the first ten
     */
    var truncCast = response.cast.slice(0, 5);
    truncCast.forEach(casting => {
        $('.list-group-cast').append(`
            <p class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="cast">
            <td><img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${casting.profile_path}" loading="lazy" class="casting-list-img">
            <span class="badge badge-pill"><a href="/personnes/${casting.id}">${casting.name}</a></span>
            <span class="badge badge-pill text-dark">${casting.character}</span>
        </p>`);
    });
    var truncCrew = response.crew.slice(0, 5);
    truncCrew.forEach(crew => {
        $('.list-group-crew').append(`
            <p class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="crew">
            <td><img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${crew.profile_path}" loading="lazy" style="height:125px;" class="casting-list-img">
            <span class="badge badge-pill"><a href="/personnes/${crew.id}">${crew.name}</a></span>
            <span class="badge badge-pill text-dark">${crew.job}</span>
        </p>`);
    });
}

/**
 * 2.2 - Display TV Show
 * Get last characters of URL to have only the ID
 */
function displayShow(id) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": `https://api.themoviedb.org/3/tv/${id}?language=fr-FR&api_key=6bf0fa1291809ddcb8f6efb13f63ffbc&append_to_response=credits`,
        "method": "GET",
        "headers": {},
        "data": "{}"
    }
    $.ajax(settings).done(function (response) {
        /**
         * Variables declarations
         */
        var backdrop = response.backdrop_path == null ? `../../img/ressources/backdrop_not_found.png` : `https://image.tmdb.org/t/p/original${response.backdrop_path}`;
        var poster = response.poster_path == null ? `../../img/ressources/poster_not_found.png` : `https://image.tmdb.org/t/p/w600_and_h900_bestv2${response.poster_path}`;
        var overview = response.overview.length == '' ? "Cette série n'a pas encore de synopsis" : response.overview;
        // Convert boolean value to sentance for better displaying
        let productionState = response.in_production;
        let search = new RegExp("^true$");
        // Used to convert US dates to French dates
        const firstAired = new Date(response.first_air_date);
        const lastAired = new Date(response.last_air_date);
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        /**
         * Synopsis Area
         */
        $('title').prepend(response.name);
        $('#comment_form_itemName').val(response.name);
        $('body').css('background-image', 'url("' + backdrop + '")');
        $('.poster').attr('src', poster);
        $('.overview-content').text(overview);
        $('.votes').append(`<span class="fa-layers fa-fw">
        <i class="fas fa-star"></i>
            <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-11.5 rotate--30" style="font-weight:900">${response.vote_average}</span>
        </span>`)
        $('.votes-count').append(`<span class="font-weight-light small">Note déduite après ${response.vote_count} votes</span>`);
        /**
         * Details Area
         */
        if (search.test(productionState)) {
            $('.in-production').append(`<li><small>En production</small></li>`);
        } else {
            $('.in-production').append(`<li><small>Terminée</small></li>`);
        }
        $('.first-episode').append(`<li><small>${firstAired.toLocaleDateString('fr-FR', options)}</small></li>`);
        $('.last-episode').append(`<li><small>${lastAired.toLocaleDateString('fr-FR', options)}</small></li>`);
        $('.number-seasons').append(`<li><small>${response.number_of_seasons}</small></li>`);
        $('.number-episodes').append(`<li><small>${response.number_of_episodes}</small></li>`);
        response.genres.forEach(genre => {
            $('.genres').append(`<li><small>${genre.name}</small></li> `);
        });
        /**
         * Cast / Crew Area
         * Need to truncate results because some movies have very big cast/crew. Display only the first ten
         */
        var truncCast = response.credits.cast.slice(0, 10);
        truncCast.forEach(cast => {
            $('.list-group-cast').append(`
            <li class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="cast">
            <td><img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${cast.profile_path}" loading="lazy" style="height:125px;" class="casting-list-img">
            <span class="badge badge-pill"><a href="/personnes/${cast.id}">${cast.name}</a></span>
            <span class="badge badge-pill text-dark">${cast.character}</span>
        </li>`);
        });
        var truncCrew = response.credits.crew.slice(0, 10);
        truncCrew.forEach(crew => {
            $('.list-group-crew').append(`
            <li class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="crew">
            <td><img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${crew.profile_path}" loading="lazy" style="height:125px;" class="casting-list-img">
            <span class="badge badge-pill"><a href="/personnes/${crew.id}">${crew.name}</a></span>
            <span class="badge badge-pill text-dark">${crew.job}</span>
        </li>`);
        });
    });
}

/* Fills year select from 1900 to current year */
function fillYears(currentYear) {
    while (currentYear > 1899) {
        $('.year-select').append(`
            <option data-filter="year" value="${currentYear}">${currentYear--}</option>
        `);
    }
}
/* Fills genres select corresponding to the media type previously selected*/
function fillGenres() {
    // Vide les genres du select car différents selon série ou film
    $('.genres-search').empty();
    // Affichage des genres quand clique sur la barre de recherche
    $('label[for="genres-search"]').click(() => {
        // Appelle les genres correspondant au type de média
        tmdbApi.genres($('h2.filter-active[data-filter="type"]').attr('id'))
            .then(response => {
                // Ajoute la div ".genres-options" seulement si elle n'existe pas
                if (!$('.genres-options').length) {
                    $('.genres-group').after(`
                    <div class="genres-options border py-2"></div>
                `);
                    // Affiche tous les genres à la manière d'un select
                    for (genre of response.genres) {
                        $('.genres-options').append(`
                        <span id="${genre.id}" class="genre-option col-12 d-block p-2">${genre.name}</span>
                    `);
                    }
                }
                $(document).click(function (event) {
                    // Si on clique sur une de ces divs, la liste des genres s'enlèvera
                    if (!$(event.target)[0].className.includes('genre-option') &&
                        $(event.target)[0] !== document.querySelector('.genres-options') &&
                        !$(event.target)[0].className.includes('genres-form') &&
                        !$(event.target)[0].className.includes('genres-search') &&
                        !$(event.target)[0].className.includes('remove-selected-genre') &&
                        !$(event.target)[0].className.includes('selected-genre')
                    ) {
                        $('.genres-options').remove();
                    }
                });
                $('.genre-option').click(function () {
                    // Ajoute une étiquette au genre cliqué si il n'y en a pas déjà une
                    if (!$(`#genre-${$(this).attr('id')}`).length) {
                        $('.genres-form').prepend(`
                        <span class="selected-genre text-center filter-active" data-filter="genre" id="genre-${$(this).attr('id')}">
                        <span class="remove-selected-genre">X</span>
                        ${$(this).text()}
                        </span>
                    `);
                        // Ajoute un eventlistener pour pouvoir supprimer le genre ajouté
                        $(`#genre-${$(this).attr('id')}`).children('.remove-selected-genre').click(function () {
                            $(this).parent().remove();
                            filterSearch();
                        });
                        filterSearch();
                    }
                });
            });
    });
}
function displayResults(results) {
    $('.contents-container').before(`
        <h2 class="text-center col-12 mt-5 total-results">Nombre total de résultats : ${results}</h2>
    `);
}


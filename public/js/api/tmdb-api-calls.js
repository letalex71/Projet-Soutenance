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

function checkSession() {
    var itemsToChange = $("[id*='itemMovies-'], [id*='itemShows-']")
    if (isLogged === true) {
        itemsToChange.each(function () {
            $(this).append(`
                <div class="c-tooltip">
                    <a href="/like">
                        <div class="c-reaction">
                            <i class="c-reaction-icon far fa-heart"></i>
                        </div>
                    </a>
                    <div class="c-tooltip-text">Cette fonctionnalité n'est pas encore disponible</div>
                </div>
                <div class="c-tooltip">
                    <a href="/prout">
                        <div class="c-reaction">
                            <i class=" c-reaction-icon far fa-plus-square"></i>
                        </div>
                    </a>
                    <div class="c-tooltip-text">Cette fonctionnalité n'est pas encore disponible</div>
                </div>`);
        });
    } else {
        itemsToChange.each(function () {
            $(this).append(`
                    <div class="c-tooltip">
                        <a href="/login">
                            <div class="c-reaction">
                                <i class="c-reaction-icon c-reaction-icon-disabled far fa-heart"></i>
                            </div>
                        </a>
                        <div class="c-tooltip-text">Vous devez être connecté pour aimer ceci</div>
                    </div>
                    <div class="c-tooltip">
                        <a href="/login">
                            <div class="c-reaction">
                                <i class=" c-reaction-icon c-reaction-icon-disabled far fa-plus-square"></i>
                            </div>
                        </a>
                        <div class="c-tooltip-text">Vous devez être connecté pour ajouter en favori</div>
                    </div>`);
        });
    }
}

// 1.1 - Popular Movies
function discoverMovies() {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.themoviedb.org/3/discover/movie?page=1&include_video=false&include_adult=false&sort_by=popularity.desc&total_results=5&language=fr-FR&api_key=6bf0fa1291809ddcb8f6efb13f63ffbc",
        "method": "GET",
        "headers": {},
        "data": "{}"
    }

    $.ajax(settings).done(function (response) {
        for (var i = 0; i < 20; i++) {
            for (movie of response.results) {
                $('#popular-movies').before(`
                <article class="grid-item">
                    <div class="grid-item-icons u-top" id="itemMovies-` + i++ + `">
                    <i class="far fa-star">
                    <span id="js-glamour-likes-28145" class="c-reaction-icon">${movie.vote_average}</span>
                    </i>
                    </div>
                    <a href="films/${movie.id}" class="grid-item-link">
                        <div class="grid-item-content">
                            <div class="grid-item-content-divider"></div>
                            <h3 class="grid-item-content-title">${movie.original_title}</h3>
                            </h4>
                        </div>
                        <img
                            src="https://image.tmdb.org/t/p/w600_and_h900_bestv2${movie.poster_path}"
                            loading="lazy" class="grid-item-image u-inset">
                    </a>
                </article>`);
            }
        }
    });
}

// 1.2 - Popular TV Shows
function discoverShows() {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.themoviedb.org/3/discover/tv?api_key=6bf0fa1291809ddcb8f6efb13f63ffbc&language=fr-FR&sort_by=popularity.desc&page=1&timezone=Europe%2FParis&include_null_first_air_dates=false",
        "method": "GET",
        "headers": {},
        "data": "{}"
    }

    $.ajax(settings).done(function (response) {
        for (var i = 0; i < 20; i++) {
            for (show of response.results) {
                if (show.poster_path === 'null')
                    return '../../img'
                $('#popular-shows').before(`
                <article class="grid-item">
                    <div class="grid-item-icons u-top" id="itemShows-` + i++ + `">
                    <i class="far fa-star">
                    <span id="js-glamour-likes-28145" class="c-reaction-icon ">${show.vote_average}</span>
                    </i>
                    </div>
                    </div>
                    <a href="/series/${show.id}" class="grid-item-link">
                        <div class="grid-item-content">
                            <div class="grid-item-content-divider"></div>
                            <h3 class="grid-item-content-title">${show.name}</h3>
                            </h4>
                        </div>
                        <img
                            src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/${show.poster_path}"
                            loading="lazy" class="grid-item-image u-inset">
                    </a>
            </article>`);
            }
        }
    });
}
/**
 * 2 :: ITEM PAGE
 */

// 2.1 - Display Movie
// Get last characters of URL to have only the ID
function displayMovie() {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": `https://api.themoviedb.org/3/movie/${id}?language=fr-FR&api_key=6bf0fa1291809ddcb8f6efb13f63ffbc&append_to_response=credits`,
        "method": "GET",
        "headers": {},
        "data": "{}"
    }
    $.ajax(settings).done(function (response) {
        console.log(response);
        var overview = response.overview.length == '' ? "Ce film n'a pas encore de synopsis" : response.overview;
        var backdrop = response.backdrop_path == null ? `img/ressources/image_not_found.jpg` : `https://image.tmdb.org/t/p/w1440_and_h320_bestv2${response.backdrop_path}`;
        $('title').prepend(response.title);
        $('.overview-content').text(overview);
        $('.poster').attr('src', `https://image.tmdb.org/t/p/w600_and_h900_bestv2/${response.poster_path}`);
        $('.backdrop').css('background-image', 'url("' + backdrop + '")');
        /**
         * Cast / Crew Area
         * Need to truncate results because some movies have very big cast/crew. Display only the first ten
         */
        var truncCast = response.credits.cast.slice(0, 10);
        truncCast.forEach(casting => {
            $('.list-group-cast').append(`
            <p class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="cast">
            <td><img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${casting.profile_path}" loading="lazy" class="casting-list-img">
            <span class="badge badge-pill"><a href="/personnes/${casting.id}">${casting.name}</a></span>
            <span class="badge badge-pill text-dark">${casting.character}</span>
        </p>`);
        });

        var truncCrew = response.credits.crew.slice(0, 10);
        truncCrew.forEach(crew => {
            $('.list-group-crew').append(`
            <p class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="crew">
            <td><img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${crew.profile_path}" loading="lazy" style="height:125px;" class="casting-list-img">
            <span class="badge badge-pill"><a href="/personnes/${crew.id}">${crew.name}</a></span>
            <span class="badge badge-pill text-dark">${crew.job}</span>
        </p>`);
        });
        /**
         * Details Area
         */
        let countries = [];
        response.production_countries.forEach(country => {
            countries.push(country.name);
        });

        let studios = [];
        response.production_companies.forEach(studio => {
            studios.push(studio.name);
        });

        $('.country').append(countries.join(', '));
        $('.studio').append(studios.join(', '));
        $('.year').append(`${response.release_date.substr(0, 4)}`);
        $('.budget').append(`${response.budget} $`);
        $('.revenues').append(`${response.revenue} $`);
        $('.votes').append(`${response.vote_average} $`);
        $('.votes-count').append(`<span class="font-weight-light small">Note déduite après ${response.vote_count} votes</span>`);
    });

}



// 2.2 - Display TV Show
/* Get last characters of URL to have only the ID */
function displayShow() {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": `https://api.themoviedb.org/3/tv/${id}?language=fr-FR&api_key=6bf0fa1291809ddcb8f6efb13f63ffbc&append_to_response=credits`,
        "method": "GET",
        "headers": {},
        "data": "{}"
    }

    $.ajax(settings).done(function (response) {
        console.log(response);
        // Used to convert US dates to French dates
        const firstAired = new Date(response.first_air_date);
        const lastAired = new Date(response.last_air_date);
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        // Convert boolean value to sentance for better displaying
        var overview = response.overview.length == '' ? "Ce film n'a pas encore de synopsis" : response.overview;
        var backdrop = response.backdrop_path == null ? `img/ressources/backdrop_not_found.png` : `https://image.tmdb.org/t/p/w1440_and_h320_bestv2${response.backdrop_path}`;
        let productionState = response.in_production;
        let search = new RegExp("^true$");
        if (search.test(productionState)) {
            $('.in-production').append(`<li class="details-li-content"><small>En production</small></li>`);
        } else {
            $('.in-production').append(`<li class="details-li-content"><small>Terminée</small></li>`);
        }
        let genres = [];
        response.genres.forEach(genre => {
            genres.push(genre.name);
        });
        console.log(genres);
        // Display other elements
        $('title').prepend(response.name);
        $('.overview-content').text(overview);
        $('.poster').attr('src', `https://image.tmdb.org/t/p/w600_and_h900_bestv2/${response.poster_path}`);
        $('.backdrop').css('background-image', 'url("' + backdrop + '")');
        $('.first-episode').append(`<li class="details-li-content"><small>${firstAired.toLocaleDateString('fr-FR', options)}</small></li>`);
        $('.last-episode').append(`<li class="details-li-content"><small>${lastAired.toLocaleDateString('fr-FR', options)}</small></li>`);
        $('.number-seasons').append(`<li class="details-li-content"><small>${response.number_of_seasons}</small></li>`);
        $('.number-episodes').append(`<li class="details-li-content"><small>${response.number_of_episodes}</small></li>`);
        $('.genres').append(`<li class="details-li-content"><small>${genres.join(', ')}</small></li> `);
        $('.votes').append(`<span class="fa-layers fa-fw">
        <i class="fas fa-star"></i>
            <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-11.5 rotate--30" style="font-weight:900">${response.vote_average}</span>
        </span>`);
        $('.votes-count').append(`<span class="font-weight-light small">Note déduite après ${response.vote_count} votes</span>`);
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

// 2.2 - Display People
/* Get last characters of URL to have only the ID */
function displayPeople() {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": `https://api.themoviedb.org/3/person/${id}?language=fr-FR&api_key=6bf0fa1291809ddcb8f6efb13f63ffbc`,
        "method": "GET",
        "headers": {},
        "data": "{}"
    }

    $.ajax(settings).done(function (people) {
        console.log(people);
    });
}

function displayPeopleCredits() {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": `https://api.themoviedb.org/3/person/${id}?language=fr-FR&api_key=6bf0fa1291809ddcb8f6efb13f63ffbc&combined_credits`,
        "method": "GET",
        "headers": {},
        "data": "{}"
    }

    $.ajax(settings).done(function (credits) {
        console.log(credits);
    });
}
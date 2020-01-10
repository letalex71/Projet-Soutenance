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

function checkSession(isLogged) {

    let itemsToChange =  $("[id*='itemMovies-'], [id*='itemShows-']")
    if (isLogged === true) {
        itemsToChange.each(function (){
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
        itemsToChange.each(function (){
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
    
// 1.1 - 


async function displayMovies(movies){
    

    console.log(movies);

    return new Promise( resolve => { 
        let movieId = 0;

        for (movie of movies) {
                $('#popular-movies').before(`
                    <article class="grid-item">
                        <div class="grid-item-icons u-top" id="itemMovies-` + movieId++ + `">
                        <i class="far fa-star">
                        <span id="js-glamour-likes-28145" class="c-reaction-icon">${movie.vote_average}</span>
                        </i>
                        </div>
                        <a href="films?id=${movie.id}" class="grid-item-link">
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

// 1.2 - Popular TV Shows

async function displayShows(shows) {

    return new Promise ( (resolve) => { 
     
        let showInd = 0;

        for (show of shows) {
            $('#popular-shows').before(`
                <article class="grid-item">
                    <div class="grid-item-icons u-top" id="itemShows-${showInd}">
                    <i class="far fa-star">
                        <span id="js-glamour-likes-28145" class="c-reaction-icon ">${show.vote_average}</span>
                    </i>
                    </div> 
                    <a href="/series?id=${show.id}-${show.name}" class="grid-item-link">
                        <div class="grid-item-content">
                        <div class="grid-item-content-divider"></div>
                           <h3 class="grid-item-content-title">${show.name}</h3>
                         </div>
                        <img
                            src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/${show.poster_path}"
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
// Get last characters of URL to have only the ID
function displayMovie() {
    id = window.location.search.substr(4);
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
        var backdrop = response.backdrop_path == null ? `img/ressources/image_not_found.png` : `https://image.tmdb.org/t/p/w1440_and_h320_bestv2${response.backdrop_path}` ;
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
            <span class="badge badge-pill"><a href="/personnes?id=${casting.id}-${casting.name}">${casting.name}</a></span>
            <span class="badge badge-pill text-dark">${casting.character}</span>
        </p>`);
        });

        var truncCrew = response.credits.crew.slice(0, 10);
        truncCrew.forEach(crew => {
            $('.list-group-crew').append(`
            <p class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="crew">
            <td><img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${crew.profile_path}" loading="lazy" style="height:125px;" class="casting-list-img">
            <span class="badge badge-pill"><a href="/personnes?id=${crew.id}-${crew.name}">${crew.name}</a></span>
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

        $('.country').append( countries.join(', ') );
        $('.studio').append( studios.join(', ') );
        $('.year').append(`${response.release_date.substr(0, 4)}`);
        $('.budget').append(`${response.budget} $`);
        $('.revenues').append(`${response.revenue} $`)
        $('.votes').append(`<span class="fa-layers fa-fw">
        <i class="fas fa-star"></i>
            <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-11.5 rotate--30" style="font-weight:900">${response.vote_average}</span>
        </span>`)
    });

}



// 2.2 - Display TV Show
/* Get last characters of URL to have only the ID */
function displayShow() {
    id = window.location.search.substr(4);
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
        let productionState = response.in_production;
        let search = new RegExp("^true$");
        if (search.test(productionState)) {
            $('.in-production').append(`<li><small>En production</small></li>`);
        } else {
            $('.in-production').append(`<li><small>Terminée</small></li>`);
        }
        // Display other elements
        $('title').prepend(response.name);
        $('.overview').text(response.overview);
        $('.poster').attr('src', `https://image.tmdb.org/t/p/w600_and_h900_bestv2${response.poster_path}`);
        $('.backdrop').attr('src',
            `https://image.tmdb.org/t/p/w1440_and_h320_bestv2${response.backdrop_path}`);
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
            <span class="badge badge-pill"><a href="/personnes?id=${cast.id}-${cast.name}">${cast.name}</a></span>
            <span class="badge badge-pill text-dark">${cast.character}</span>
        </li>`);
        });
        var truncCrew = response.credits.crew.slice(0, 10);
        truncCrew.forEach(crew => {
            $('.list-group-crew').append(`
            <li class="list-group-item d-flex justify-content-between align-items-center .list-group-item-action" id="crew">
            <td><img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/${crew.profile_path}" loading="lazy" style="height:125px;" class="casting-list-img">
            <span class="badge badge-pill"><a href="/personnes?id=${crew.id}-${crew.name}">${crew.name}</a></span>
            <span class="badge badge-pill text-dark">${crew.job}</span>
        </li>`);
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

    $('.country').append( countries.join(', ') );
    $('.studio').append( studios.join(', ') );
    $('.year').append(`${response.release_date.substr(0, 4)}`);
    $('.budget').append(`${response.budget} $`);
    $('.revenues').append(`${response.revenue} $`)
    $('.votes').append(`<span class="fa-layers fa-fw">
    <i class="fas fa-star"></i>
        <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-11.5 rotate--30" style="font-weight:900">${response.vote_average}</span>
    </span>`)
    });
}

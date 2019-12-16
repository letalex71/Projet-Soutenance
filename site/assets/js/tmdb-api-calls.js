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
        for (movie of response.results) {
            console.log(movie)
            $('#popular-movies').before(`
            <article class="grid-item">
                <div class="grid-item-icons u-top"><span id="js-glamour-likes-28145"
                        class="grid-item-icons-counter c-label">0</span>
                    <div class="c-tooltip"><a href="/login">
                            <div class="c-reaction"><img src="assets/img/icons/ionicons_svg_ios-heart.svg"
                                    class="c-reaction-icon c-reaction-icon-disabled"></div>
                        </a>
                        <div class="c-tooltip-text">you need to be logged in to love</div>
                    </div>
                    <div class="c-tooltip"><a href="/login">
                            <div class="c-reaction"><img src="assets/img/icons/ionicons_svg_ios-star.svg"
                                    class="c-reaction-icon c-reaction-icon-disabled"></div>
                        </a>
                        <div class="c-tooltip-text">you need to be logged in to save as favorite</div>
                    </div>
                </div> <a href="movies.html?id=${movie.id}" class="grid-item-link">
                    <div class="grid-item-content">
                        <div class="grid-item-content-divider"></div>
                        <h3 class="grid-item-content-title">${movie.original_title}</h3>
                        </h4>
                    </div> <img
                        src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/${movie.poster_path}"
                        loading="lazy" class="grid-item-image u-inset">
                </a>
        </article>`);
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
        for (show of response.results) {
            console.log(show)
            $('#popular-shows').before(`
            <article class="grid-item">
                <div class="grid-item-icons u-top"><span id="js-glamour-likes-28145"
                        class="grid-item-icons-counter c-label">0</span>
                    <div class="c-tooltip"><a href="/login">
                            <div class="c-reaction"><img src="assets/img/icons/ionicons_svg_ios-heart.svg"
                                    class="c-reaction-icon c-reaction-icon-disabled"></div>
                        </a>
                        <div class="c-tooltip-text">you need to be logged in to love</div>
                    </div>
                    <div class="c-tooltip"><a href="/login">
                            <div class="c-reaction"><img src="assets/img/icons/ionicons_svg_ios-star.svg"
                                    class="c-reaction-icon c-reaction-icon-disabled"></div>
                        </a>
                        <div class="c-tooltip-text">you need to be logged in to save as favorite</div>
                    </div>
                </div> <a href="tv.html?id=${show.id}" class="grid-item-link">
                    <div class="grid-item-content">
                        <div class="grid-item-content-divider"></div>
                        <h3 class="grid-item-content-title">${show.name}</h3>
                        </h4>
                    </div> <img
                        src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/${show.poster_path}"
                        loading="lazy" class="grid-item-image u-inset">
                </a>
        </article>`);
        }
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
        $('.overview').text(response.overview);
        $('.poster').attr('src', `https://image.tmdb.org/t/p/w600_and_h900_bestv2/${response.poster_path}`);
        $('.backdrop').attr('src',
            `https://image.tmdb.org/t/p/w1440_and_h320_bestv2/${response.backdrop_path}`);


        response.production_countries.forEach(country => {
            $('.country').append(`<li><small>${country.name}</small></li> `);
        });
        response.production_companies.forEach(studio => {
            $('.studio').append(`<li><small>${studio.name}</small></li> `);
        });

        $('.year').append(`<li><small>${response.release_date.substr(0, 4)}</small></li>`);
        $('.casting').append(`<li><small>${response.production_countries[0].iso_3166_1}</small></li>`);
        $('.budget').append(`<li><small>${response.budget} $</small></li>`);
        $('.revenues').append(`<li><small>${response.revenue} $</small></li>`)
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
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };

        // Convert boolean value to sentance for better displaying
        let productionState = response.in_production;
        let search = new RegExp("^true$");
        if (search.test(productionState)) {
            $('.in-production').append(`<li><small>En production</small></li>`);
        } else {
            $('.in-production').append(`<li><small>Terminée</small></li>`);
        }
        // Display other elements
        $('.overview').text(response.overview);
        $('.poster').attr('src', `https://image.tmdb.org/t/p/w600_and_h900_bestv2/${response.poster_path}`);
        $('.backdrop').attr('src',
            `https://image.tmdb.org/t/p/w1440_and_h320_bestv2/${response.backdrop_path}`);
        $('.first-episode').append(`<li><small>${firstAired.toLocaleDateString('fr-FR', options)}</small></li>`);
        $('.last-episode').append(`<li><small>${lastAired.toLocaleDateString('fr-FR', options)}</small></li>`);
        $('.number-seasons').append(`<li><small>${response.number_of_seasons}</small></li>`);
        $('.number-episodes').append(`<li><small>${response.number_of_episodes}</small></li>`);
        response.genres.forEach(genre => {
            $('.genres').append(`<li><small>${genre.name}</small></li> `);
        });
    });
}

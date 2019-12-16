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
                            <div class="c-reaction"><img src="/resources/icons/icon-love.svg"
                                    class="c-reaction-icon c-reaction-icon-disabled"></div>
                        </a>
                        <div class="c-tooltip-text">you need to be logged in to love</div>
                    </div>
                    <div class="c-tooltip"><a href="/login">
                            <div class="c-reaction"><img src="/resources/icons/icon-star.svg"
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
                            <div class="c-reaction"><img src="/resources/icons/icon-love.svg"
                                    class="c-reaction-icon c-reaction-icon-disabled"></div>
                        </a>
                        <div class="c-tooltip-text">you need to be logged in to love</div>
                    </div>
                    <div class="c-tooltip"><a href="/login">
                            <div class="c-reaction"><img src="/resources/icons/icon-star.svg"
                                    class="c-reaction-icon c-reaction-icon-disabled"></div>
                        </a>
                        <div class="c-tooltip-text">you need to be logged in to save as favorite</div>
                    </div>
                </div> <a href="tv.html?id=${show.id}" class="grid-item-link">
                    <div class="grid-item-content">
                        <div class="grid-item-content-divider"></div>
                        <h3 class="grid-item-content-title">${show.original_title}</h3>
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
function displayMovie(){
    // id = window.location.href.substr(84); // WF3
    id = window.location.href.substr(78); // Home tests only

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": `https://api.themoviedb.org/3/movie/${id}?language=fr-FR&api_key=6bf0fa1291809ddcb8f6efb13f63ffbc`,
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
    
    
        /* TO DO
        response.production_companies.forEach( studio => {
            $('.studio').append(studio.name);
        });
        $('.country').text(`Country : ${response.production_countries[0].iso_3166_1}`
        $('.year').text(`Année : ${response.release_date.substr(0, 4)}`)
        $('.casting').text(`Casting : ${response.production_countries[0].iso_3166_1}`)
        $('.revenues').text(`Revenus : ${response.revenue} $`)
        $('.budget').text(`Budget : ${response.production_countries[0].iso_3166_1}`) */
    });
}

// 2.2 - Display TV Show
/* Get last characters of URL to have only the ID */
function displayShow(){
    // id = window.location.href.substr(84); // WF3
    id = window.location.href.substr(74); // Laptop - Home tests only
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": `https://api.themoviedb.org/3/tv/${id}?language=fr-FR&api_key=6bf0fa1291809ddcb8f6efb13f63ffbc`,
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
    
    
        /* TO DO
        response.production_companies.forEach( studio => {
            $('.studio').append(studio.name);
        });
        $('.country').text(`Country : ${response.production_countries[0].iso_3166_1}`
        $('.year').text(`Année : ${response.release_date.substr(0, 4)}`)
        $('.casting').text(`Casting : ${response.production_countries[0].iso_3166_1}`)
        $('.revenues').text(`Revenus : ${response.revenue} $`)
        $('.budget').text(`Budget : ${response.production_countries[0].iso_3166_1}`) */
    });
}

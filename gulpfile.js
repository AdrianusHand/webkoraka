var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.styles([
    	'bootstrap.css',
    	'themify-icons.css',
    	'flexslider.css',
    	'lightbox.min.css',
    	'ytplayer.css',
    	'theme-gunmetal.css',
    	'custom.css'
    	])
    
    .scripts([
    	'jquery.min.js',
    	'bootstrap.min.js',
    	'flickr.js',
    	'flexslider.min.js',
    	'lightbox.min.js',
    	'masonry.min.js',
    	'twitterfetcher.min.js',
    	'spectragram.min.js',
    	'ytplayer.min.js',
    	'countdown.min.js',
    	'smooth-scroll.min.js',
    	'parallax.js',
    	'scripts.js'
    	]);
});
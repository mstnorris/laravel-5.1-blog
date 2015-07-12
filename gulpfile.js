var elixir = require('laravel-elixir');

elixir(function(mix) {

    mix.sass('app.scss', 'resources/assets/css/sass-output.css');

    mix.styles([
        'sass-output.css',
        'sticky-footer.css',
        'style.css'
    ]);

    mix.scripts([
        "app.js"
    ]);

    elixir(function(mix) {
        mix.version(["css/all.css", "js/all.js"]);
    });

});

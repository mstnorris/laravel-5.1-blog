var elixir = require('laravel-elixir');

elixir(function(mix) {

    mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts/');

    mix.sass('app.scss', 'resources/assets/css/sass-output.css');

    mix.styles([
        'sass-output.css',
        'sticky-footer.css',
        'style.css'
    ]);

    mix.scripts([
        "../../../node_modules/jquery/dist/jquery.js",
        "../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js",
        "app.js"
    ]);

    elixir(function(mix) {
        mix.version(["css/all.css", "js/all.js"]);
    });

});

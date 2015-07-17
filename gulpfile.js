var elixir = require('laravel-elixir');

elixir(function(mix) {

    mix.copy('node_modules/bootstrap/fonts', 'public/build/fonts/bootstrap/');
    mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts/');
    mix.copy('resources/assets/fonts/vendor', 'public/build/fonts/')

    mix.sass('app.scss', 'resources/assets/css/sass-output.css');

    mix.styles([
        'sass-output.css',
        'less-output.css',
        '../../../node_modules/bootstrap-markdown/css/bootstrap-markdown.min.css',
        'vendor/fuelux.css',
        'sticky-footer.css',
        'style.css'
    ]);

    mix.scripts([
        "../../../node_modules/jquery/dist/jquery.js",
        "../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js",
        "../../../node_modules/vue/dist/vue.js",
        "../../../node_modules/vue-resource/dist/vue-resource.js",
        "../../../node_modules/bootstrap-markdown/js/bootstrap-markdown.js",
        "../../../node_modules/marked/lib/marked.js",
        "vendor/fuelux.js",
        "../../../node_modules/select2/dist/js/select2.js",
        "../../../node_modules/sweetalert/dist/sweetalert.min.js",

        "app.js"
    ]);

    elixir(function(mix) {
        mix.version(["css/all.css", "js/all.js"]);
    });

});

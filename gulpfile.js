var elixir = require('laravel-elixir');


elixir(function(mix) {
    var bootstrapPath = 'bower_components/bootstrap/dist/';
    mix.sass('app.scss')

        .copy(bootstrapPath + 'js/bootstrap.min.js', 'public/js');
});
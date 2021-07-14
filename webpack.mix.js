let mix = require('laravel-mix')

mix.browserSync('127.0.0.1:8000');

mix
  .setPublicPath('dist')
  .js('resources/js/index.js', 'js')
  .js('resources/js/routes.js', 'js');

mix.copy([
    'dist/js/index.js',
    'dist/js/routes.js',
], './../../test/test-autostrap/public/vendor/aquastrap/js');

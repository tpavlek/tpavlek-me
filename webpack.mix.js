
const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.js('source/_assets/js/main.js', 'js')
    .less('source/_assets/less/app.less', 'source/css')
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.less'],
    })
    .options({
        processCssUrls: false,
        postCss: [
            require('tailwindcss'),
        ],
    })
    .sourceMaps()
    .version();

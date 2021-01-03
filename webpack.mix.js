const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.js('source/_assets/js/app.js', 'js')
    .vue()
    .less('source/_assets/less/sc2ctl.less', 'css/sc2ctl.css')
    .postCss('source/_assets/css/main.css', 'css/main.css', [
        require('tailwindcss'),
    ])
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.scss'],
    })
    .options({
        processCssUrls: false,
    })
    .sourceMaps()
    .version();

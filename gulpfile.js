var gulp = require('gulp');
var autoprefix = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-cssnano');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    return gulp.src([
        'resources/css/fonts.css',
        'resources/css/font-awesome.min.css',
        'resources/css/prism.css',
        'resources/css/pure.min.css',
        'resources/css/grids-responsive.min.css',
        'resources/sass/style.scss'
    ])
        .pipe(sass({ style: "expanded" }))
        .pipe(concat('all.css'))
        .pipe(autoprefix('last 2 versions'))
        .pipe(minifyCSS())
        .pipe(gulp.dest('./source/css/'))
});

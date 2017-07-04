var gulp = require('gulp'),
    less = require('gulp-less'),
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('less', function() {
    return gulp.src('./less/style.less')
        .pipe(sourcemaps.init())
            .pipe(less().on('error', function(err) {
                console.log(err);
            }))
            .pipe(autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false
            }))
            .pipe(cssmin().on('error', function(err) {
                console.log(err);
            }))
            .pipe(rename({
                suffix: '.min'
            }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./build/'));
});

var jsFiles = [
        './node_modules/jquery/dist/jquery.js',
        './node_modules/spin.js/spin.js',
        './node_modules/spin.js/jquery.spin.js',
        './node_modules/swiper/dist/js/swiper.jquery.js',
        './node_modules/hammerjs/hammer.js',
        //'./node_modules/flipclock/compiled/flipclock.js',
        './node_modules/jquery-mask-plugin/dist/jquery.mask.js',
        './node_modules/jquery-validation/dist/jquery.validate.js',
        './node_modules/croppie/croppie.js',
        './node_modules/moment/moment.js',
        './node_modules/pikaday/pikaday.js',
        './node_modules/pikaday/plugins/pikaday.jquery.js',
        './node_modules/devbridge-autocomplete/dist/jquery.autocomplete.js',
        './node_modules/baron/baron.min.js',
        './js/components/*.js',
        './js/scripts.js'
    ],
    jsDest = './build';

gulp.task('scripts', function() {
    return gulp.src(jsFiles)
        .pipe(sourcemaps.init())
            .pipe(concat('scripts.js'))
            .pipe(gulp.dest(jsDest))
            .pipe(rename('scripts.min.js'))
            .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(jsDest));
});

gulp.task('default', ['less', 'scripts'], function() {
    gulp.watch('./less/**/*.less', ['less']);
    gulp.watch('./js/**/*.js', ['scripts']);
});
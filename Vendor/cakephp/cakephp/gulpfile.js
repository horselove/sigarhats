//=============================================
// GULP WITH SASS, AUTOPREFIX AND BROWSER-SYNC
//=============================================


// TASKS LISTING

// style | compiles *.scss to *.css
// browser-sync | injects files, and updates browsers with websockets
// css-build | Concatinates all css files and minifies it.


// LOADING PLUGINS

/*
 * Requires all the node plugins
 * gulp-load-plugins loads the plugins specified
 * in package.json
*/

var gulp = require('gulp'),
  gulpLoadPlugins = require('gulp-load-plugins'),
  browserSync = require('browser-sync'),
  concat = require('gulp-concat'),
  plugins = gulpLoadPlugins();


// WATCH TASKS

/*
 * "Style" watches and compiles sass with compass
 * then prefixes the css and copies the css
 * to app/assets/css
*/


gulp.task('style', function () {
  gulp.src('app/webroot/scss/**/*.scss')
    .pipe(plugins.plumber())
    .pipe(plugins.sass())
    .pipe(plugins.autoprefixer("last 2 versions", "Firefox > 0", "Opera > 0", "Explorer > 0"))
    .pipe(gulp.dest('app/webroot/css'))
    .pipe(browserSync.reload({stream:true}));
});

/*
 * "jsconcat" watches and concatinate all vendor scripts
*/

var bowersrc = 'app/webroot/vendor/bower_components/';

gulp.task('jsconcat', function() {
  gulp.src([
    bowersrc +'jquery/dist/jquery.min.js',
    bowersrc +'modernizr/modernizr.js',
    bowersrc +'foundation/js/foundation.min.js',
  ])
    .pipe(concat('vendor.js'))
    .pipe(gulp.dest('app/webroot/js/'))
    .pipe(browserSync.reload({stream:true}));
});

/*
 * browser-sync injects the files to the browser
 * every time the task is running.
 * It should run after all compiling and and copy
*/

gulp.task('browser-sync', function () {
   var files = [
      'app/View/**/*.ctp',
      'app/webroot/img/**/*.png',
      'app/webroot/js/**/*.js'
   ];

   browserSync.init(files, {
      proxy: "http://localhost:8888",
      baseDir: "/Vendor/cakephp/cakephp/"
   });
});


// BUILD TASKS

/*
 * Compressor
 * https://www.npmjs.org/package/gulp-compressor/
 *
 * Can compress html, js and css.
*/

// css compressor
gulp.task('css-build', function () {
    gulp.src('app/assets/stylesheets/css/**/*.css')
        .pipe(plugins.concat('style.css'))
        .pipe(plugins.compressor())
        .pipe(gulp.dest('build/css'));
});


// COLLECTED TASKS

gulp.task('watch', ['style', 'browser-sync']);

gulp.task('serve', ['style', 'browser-sync', 'jsconcat'], function() {
  gulp.watch('app/webroot/**/*.scss', function() {
    gulp.run('style');
  });
});

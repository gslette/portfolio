// Include gulp
var gulp = require('gulp');
 // Define base folders
var src = 'app/';
var dest = 'build/';
 // Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
 // Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src(src + 'js/*.js')
      .pipe(concat('main.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(dest + 'js'));
});
 // Watch for changes in files
gulp.task('watch', function() {
   // Watch .js files
  gulp.watch(src + 'js/*.js', ['scripts']);
 });
 // Default Task
gulp.task('default', ['scripts', 'watch']);
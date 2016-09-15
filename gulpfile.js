var gulp = require('gulp');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');

var cssFile = 'library/css/style.css';

gulp.task('minifyCSS', function () {
  return gulp.src(cssFile)
    .pipe(gulpIf('style.css', cssnano()))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('library/css/'));
});

gulp.task('watch', function () {
  gulp.watch(cssFile, ['minifyCSS']);
});

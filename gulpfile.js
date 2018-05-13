const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const log = require('fancy-log');

gulp.task('styles', () => {
  log.info('Starting build');
  return gulp.src('web/themes/custom/wiredpea/sass/**/*.scss', { verbose: true })
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('web/themes/custom/wiredpea/css/'));
});

// Watch task
gulp.task('default', () => {
  gulp.watch('sass/**/*.scss', ['styles']);
});

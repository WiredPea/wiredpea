"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass");
var concat = require("gulp-concat");
var uglify = require("gulp-uglify");
var log = require("fancy-log");

gulp.task("styles", function() {
    log.info("Starting build");
    return gulp.src("web/themes/custom/wiredpea/sass/**/*.scss", { verbose: true })
        .pipe(sass().on("error", sass.logError))
        .pipe(gulp.dest("web/themes/custom/wiredpea/css/"));
});

//Watch task
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
});
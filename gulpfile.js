'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
//compile
gulp.task('sass', function () {
    gulp.src('style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('style.css'));
});

compile and watch
gulp.task('sass:watch', function() {
    gulp.watch('style.scss', ['sass']);
});
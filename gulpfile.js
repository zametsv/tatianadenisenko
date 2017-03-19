var gulp = require('gulp'),
watch = require('gulp-watch'),
postcss = require('gulp-postcss'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested'),
cssimport = require('postcss-import');

//Watch tast
gulp.task('watch', function(){
    watch('./wordpress/wp-content/themes/photographywithtatianadenisenko/assets/css/**/*.css', function(){
        gulp.start('styles');
    });
});

//Styles task
gulp.task('styles', function(){
   return gulp.src('./wordpress/wp-content/themes/photographywithtatianadenisenko/assets/css/style.css')
    .pipe(postcss([cssimport, cssvars, nested, autoprefixer]))
    .pipe(gulp.dest('./wordpress/wp-content/themes/photographywithtatianadenisenko/'));
});
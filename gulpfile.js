var gulp = require('gulp'),
watch = require('gulp-watch'),
postcss = require('gulp-postcss'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested');


//Styles task
gulp.task('styles', function(){
   return gulp.src('./wordpress/wp-content/themes/photographywithtatianadenisenko/assets/css/style.css')
    .pipe(postcss([cssvars, nested, autoprefixer]))
    .pipe(gulp.dest('./wordpress/wp-content/themes/photographywithtatianadenisenko/'));
});

//Watch tast
gulp.task('watch', function(){
    watch('./wordpress/wp-content/themes/photographywithtatianadenisenko/assets/css/**/*.css', function(){
        gulp.start('styles');
    });
});
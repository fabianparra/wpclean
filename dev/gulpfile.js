var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

var files = [
    '../css/styles.css',
    './**/*.php'
    ];

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init(files, {
    //browsersync with a php server
    proxy: "wordpress.local.co",
    notify: false
    });

    gulp.watch("scss/**/*.scss", ['sass']);
    gulp.watch("../**/*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("scss/**/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("../css"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);

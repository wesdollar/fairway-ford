let gulp = require('gulp')
let sass = require('gulp-sass')
let livereload = require('gulp-livereload')

gulp.task('sass', function() {
    gulp.src('scss/**/styles.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
        .pipe(livereload())
})

gulp.task('sass:watch',function() {
    livereload.listen()
    gulp.watch('scss/**/*.scss', ['sass']);
})

gulp.task('php', function() {
    gulp.src('./*.php')
        .pipe(livereload());
});

gulp.task('php:watch',function() {
    livereload.listen()
    gulp.watch('./**/*.php', ['php']);
})

gulp.task('html', function() {
    gulp.src('./*.html')
        .pipe(livereload());
});

gulp.task('html:watch',function() {
    livereload.listen()
    gulp.watch('./**/*.html', ['html']);
})

gulp.task('watch', ['sass:watch', 'html:watch', 'php:watch'])
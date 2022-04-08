const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('styles', () => {
    return gulp.src('./src/sass/general/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./src/css/general/'));
});

gulp.task('cpt', () => {
    return gulp.src('./src/sass/cpt/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./src/css/cpt/'));
});

gulp.task('scripts', () => {
    return gulp.src('./src/js/scripts/*.js')
        .pipe(gulp.dest('./src/js/'));
});

gulp.task('default', gulp.series(['cpt','styles', 'scripts'])); 
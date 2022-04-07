const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('styles', () => {
    return gulp.src('./src/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./src/css/main.css'));
});

gulp.task('default', gulp.series(['styles'])); 
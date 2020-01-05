const gulp  = require('gulp');
const sass = require("gulp-sass");
const browerSync = require("browser-sync").create();

function css()
{
    console.log("Compile Sass Files");
    return gulp.src('sass/**/*.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('.'))
    .pipe(browerSync.stream());
}

function watchFiles()
{
    browerSync.init({
        proxy : "http://club-plongee-aa.test/"
    })

    console.log("Watches files");
    gulp.watch('./sass/**/*.scss',css);
    gulp.watch('./*.php').on('change',browerSync.reload);
}

gulp.task('default',watchFiles);
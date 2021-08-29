import gulp from "gulp";
import autoprefixer from "gulp-autoprefixer";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import minifyCss from "gulp-minify-css";
import sourcemaps from "gulp-sourcemaps";
import concat from "gulp-concat";
import browser from "browser-sync";
const browserSync = browser.create();

export default (isMinified = false) => {
  const sass = gulpSass(dartSass);
  const path = {
    src: ["src/sass/app.scss"],
    dest: "public/css",
  };
  if (isMinified) {
    return gulp
      .src(path.src)
      .pipe(sourcemaps.init())
      .pipe(concat("style.css"))
      .pipe(sass().on("error", sass.logError))
      .pipe(autoprefixer("last 2 versions"))
      .pipe(minifyCss())
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(path.dest))
      .pipe(browserSync.stream());
  }
  return gulp
    .src(path.src)
    .pipe(sourcemaps.init())
    .pipe(concat("style.css"))
    .pipe(sass().on("error", sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path.dest))
    .pipe(browserSync.stream());
};

import gulp from "gulp";
import sourcemaps from "gulp-sourcemaps";
import concat from "gulp-concat";
import uglify from "gulp-uglify";
import browser from "browser-sync";
const browserSync = browser.create();

export default (isMinified = false) => {
  const path = {
    src: ["src/js/app.js"],
    dest: "public/js",
  };
  if (!isMinified) {
    return gulp
      .src(path.src)
      .pipe(sourcemaps.init())
      .pipe(concat("main.js"))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(path.dest))
      .pipe(browserSync.stream());
  }
  return gulp
    .src(path.src)
    .pipe(sourcemaps.init())
    .pipe(concat("main.js"))
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path.dest))
    .pipe(browserSync.stream());
};

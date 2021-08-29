import gulp from "gulp";
import clean from "gulp-clean";

export default () => {
  return gulp.src("public").pipe(clean({ force: true }));
};

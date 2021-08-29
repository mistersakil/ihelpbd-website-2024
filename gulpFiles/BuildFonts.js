import gulp from "gulp";

export default () => {
  return gulp.src("src/webfonts/*").pipe(gulp.dest("public/webfonts"));
};

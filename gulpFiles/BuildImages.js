import gulp from "gulp";
import changed from "gulp-changed";
import imagemin, { gifsicle, mozjpeg, optipng, svgo } from "gulp-imagemin";
export default () => {
  const path = {
    src: "src/images/**/*.+(png|jpg|gif|svg)",
    dest: "public/images",
  };
  return gulp
    .src(path.src)
    .pipe(changed(path.dest))
    .pipe(
      imagemin([
        gifsicle({ interlaced: true }),
        mozjpeg({ quality: 50, progressive: true }),
        optipng({ optimizationLevel: 1 }),
        svgo({
          plugins: [{ removeViewBox: true }, { cleanupIDs: false }],
        }),
      ])
    )
    .pipe(gulp.dest(path.dest));
};

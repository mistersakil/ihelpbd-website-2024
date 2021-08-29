import buildImages from "./gulpFiles/BuildImages.js";
import buildCss from "./gulpFiles/BuildCss.js";
import buildJs from "./gulpFiles/BuildJs.js";
import buildFonts from "./gulpFiles/BuildFonts.js";
import cleanDir from "./gulpFiles/Clean.js";

import gulp from "gulp";
import browser from "browser-sync";
const browserSync = browser.create();
const { reload } = browserSync;
function server() {
  browserSync.init({
    server: {
      baseDir: "./",
    },
  });
}

export default async () => {
  await buildImages();
  await buildCss();
  await buildJs();
  await buildFonts();
  await server();
  gulp.watch("*.html").on("change", reload);
  gulp
    .watch("src/sass/**/*.scss", function (cb) {
      buildCss();
      cb();
    })
    .on("change", reload);
  gulp
    .watch("src/js/**/*.js", function (cb) {
      buildJs();
      cb();
    })
    .on("change", reload);
  gulp
    .watch("src/images/**/*", function (cb) {
      buildImages();
      cb();
    })
    .on("change", reload);
};

export const prod = () => {
  buildImages();
  buildCss(true);
  buildJs(true);
  buildFonts(true);
  server();
  gulp.watch("*.html").on("change", reload);
  gulp
    .watch("src/sass/**/*.scss", function (cb) {
      buildCss(true);
      cb();
    })
    .on("change", reload);
  gulp
    .watch("src/js/**/*.js", function (cb) {
      buildJs(true);
      cb();
    })
    .on("change", reload);
  gulp
    .watch("src/images/**/*.+(png|jpg|gif|svg)", function (cb) {
      buildImages();
      cb();
    })
    .on("change", reload);
};
export const clean = () => {
  cleanDir();
};

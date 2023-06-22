const { src, dest, series } = require('gulp');
const cssimport = require('gulp-cssimport');
const uglifycss = require('gulp-uglifycss');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const uglifyjs = require('gulp-uglify-es').default;
const concat = require('gulp-concat');
const include = require('gulp-include');
const fonter = require('gulp-fonter');
const ttf2woff2 = require('gulp-ttf2woff2');
const replace = require('gulp-replace');


function css() {
  return src('./assets/css/src/style.css')
    .pipe(sourcemaps.init())
      .pipe(cssimport({}))
      .pipe(autoprefixer())
      .pipe(uglifycss())
      .pipe(replace('../../fonts/', '../fonts/'))
      .pipe(rename('style.bundle.min.css'))
    .pipe(sourcemaps.write('./'))
    .pipe(dest('./assets/css'))
}

function js() {
  return src('./assets/js/src/main.js')
    .pipe(sourcemaps.init())
      .pipe(include())
      .pipe(uglifyjs())
      .pipe(rename('main.bundle.min.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('./assets/js'))
}


function fonts() {
  return src('./assets/fonts/*.*')
    .pipe(fonter({
      formats: ['woff', 'ttf']
    }))
    .pipe(src('./assets/fonts/*.ttf'))
    .pipe(ttf2woff2())
    .pipe(dest('./assets/fonts'))
}

module.exports.css = css;
module.exports.js = js;
module.exports.fonts = fonts;

module.exports.build = series(css, js, fonts);

const { series, parallel , src, dest, watch } = require('gulp');
const fs = require('fs');
const dotenv = require('dotenv');
const gulpif = require('gulp-if');
var rename = require('gulp-rename');
const sass = require('gulp-sass');
const uglifycss = require('gulp-uglifycss');
const autoprefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const babel = require('gulp-babel');
const include = require('gulp-include')
const { on } = require('events');
const through = require('through2');
const chalk = require('chalk');

const result = dotenv.config();

const sassOptions = {
  outputStyle: 'expanded'
};
const PATH = {
  js: {
    watch: 'src/js/*.js',
    src: ['src/js/*.js', '!src/js/_*.js'],
    dist: 'public/dist/js'
  },
  css: {
    watch: 'src/sass/*.scss',
    src: ['src/sass/*.scss', '!src/sass/_*'],
    dist: 'public/dist/css'
  }
}
function logBabelMetadata() {
	return through.obj((file, enc, cb) => {
		console.log(chalk.cyan(file.babel.test)); // 'metadata'
		cb(null, file);
	});
}

function javascript(cb) {
  return src(PATH.js.src)
    .pipe(include({
      extensions: 'js'
    }).on('error', console.log))
    .pipe(babel({
			presets: ['@babel/preset-env'],
      plugins: [
        {
          post(file) {
            file.metadata.test = file.opts.sourceFileName;
          }
        },
        "@babel/plugin-syntax-dynamic-import"
    ]
		}))
    .pipe(logBabelMetadata())
    .pipe(dest(PATH.js.dist))
    .pipe(babel({
      plugins: [
        ["transform-remove-console", { "exclude": [ "error", "warn"] }]
      ]
		}))
    .pipe(uglify())
    .pipe(rename({ extname: '.min.js' }))
    .pipe(dest(PATH.js.dist));
  cb();
}

function fn_sass(cb) {
  return src(PATH.css.src)
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(dest(PATH.css.dist))
    .pipe(uglifycss({
      "maxLineLen": 800,
      "uglyComments": true
    }))
    .pipe(rename({ extname: '.min.css' }))
    .pipe(dest(PATH.css.dist));
  cb();
}

exports.default = function() {
  fn_sass();
  javascript();
  watch(PATH.css.watch, fn_sass);
  watch(PATH.js.watch, javascript);
}

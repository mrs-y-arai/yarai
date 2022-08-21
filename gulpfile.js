const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssSorter = require("css-declaration-sorter");
const mmq = require("gulp-merge-media-queries");

const browserSync = require("browser-sync");

const cleanCss = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");

const htmlBeautify = require("gulp-html-beautify");

const plumber = require("gulp-plumber");
const notify = require("gulp-notify");

// 画像圧縮
const imageOptimize = require("gulp-imagemin");

// CSSコンパイル
function compileSass() {
    // srcは、元となるファイル
    return gulp.src("./dev/assets/css/**/*.scss")
    // 処理を止めたくないところにつける
    .pipe(plumber({
        // エラーメッセージの表示
        errorHandler: notify.onError( 'Error: <%= error.message  %>' )
    }))
    // 元となるファイルを、css化する
    .pipe(sass())
    // postcssは、CSSの操作をする。オートプレフィクサーを使う。
    .pipe(postcss([autoprefixer(), cssSorter({
        order: "smacss"
    })]))
    .pipe(mmq())
    // ファイルのコンパイル先
    .pipe(gulp.dest("./public/assets/css/"))
    // コンパイル後にCSSを圧縮
    .pipe(cleanCss())
    // CSSをminにリネーム
    .pipe(rename({
        suffix: ".min"
    }))
    // リネーム後に再度コンパイル
    .pipe(gulp.dest("./public/assets/css/"))
}

function browserReload(done) {
    browserSync.reload();
    done();
}

function watch() {
    gulp.watch("./dev/assets/css/**/*.scss", gulp.series(compileSass, browserReload));
    gulp.watch("./dev/assets/js/**/*.js", gulp.series(minJS , browserReload));
    gulp.watch("./dev/assets/img/**/*", gulp.series(copyImage , browserReload));
}

function browserInit(done) {
    browserSync.init({
        server: {
            baseDir: "./public"
        }
    });

    done();
}

// JS圧縮
function minJS() {
    // 元となるファイル
    return gulp.src("./dev/assets/js/**/*.js")
    // 処理を止めたくないところにつける
    .pipe(plumber({
        // エラーメッセージの表示
        errorHandler: notify.onError( 'Error: <%= error.message  %>' )
    }))
    .pipe(uglify())
    .pipe(rename({
        suffix: ".min"
    }))
    .pipe(gulp.dest("./public/assets/js/"))
}

function copyImage() {
    return gulp.src("./dev/assets/img/**/*")
    // 処理を止めたくないところにつける
    .pipe(plumber({
        // エラーメッセージの表示
        errorHandler: notify.onError( 'Error: <%= error.message  %>' )
    }))
    .pipe(imageOptimize())

    .pipe(gulp.dest("./public/assets/img/"))
}

exports.compileSass = compileSass;
exports.watch = watch;
exports.browserInit = browserInit;
exports.dev = gulp.parallel(browserInit, watch);
exports.minJS = minJS;
exports.copyImage = copyImage;
exports.build = gulp.parallel(compileSass, minJS, copyImage);
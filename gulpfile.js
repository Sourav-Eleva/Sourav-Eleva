var gulp = require("gulp"),
	plumber = require('gulp-plumber'),
	notify = require("gulp-notify"),
	sass = require("gulp-sass"),
	postcss = require("gulp-postcss"),
	autoprefixer = require("gulp-autoprefixer"),
	cssnano = require("cssnano"),
	rename = require("gulp-rename"),
	concat = require("gulp-concat"),
	imagemin = require("gulp-imagemin"),
	// jshint = require('gulp-jshint'),
	uglify = require("gulp-uglify"),
	del = require('del'),
	cache = require('gulp-cache'),
	browserSync = require("browser-sync").create();

var config = {
	build: 'assets',
	dev: 'source',
}

var assets = {
	css: [
		config.dev + '/scss/*.*'
	],
	images: [
		config.dev + '/images/*.{gif,jpg,png,svg,ico,pdf,mp4,mov,wmv,mp3,aac,webm}',
		config.dev + '/images/**/*.{gif,jpg,png,svg,ico,pdf,mp4,mov,wmv,mp3,aac,webm}'
	],
	libs: [
		'node_modules/webfontloader/webfontloader.js',
		'node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js',
		// 'node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js',
		'node_modules/smooth-scrollbar/dist/smooth-scrollbar.js',
		'node_modules/smooth-scrollbar/dist/plugins/overscroll.js',
		'node_modules/jquery-parallax.js/parallax.js',
		// 'node_modules/rellax/rellax.js',
		'node_modules/slick-carousel/slick/slick.js',
		'node_modules/jquery-match-height/dist/jquery.matchHeight.js',
		'node_modules/imagesloaded/imagesloaded.pkgd.js',
		'node_modules/magnific-popup/dist/jquery.magnific-popup.js',
		'node_modules/plyr/dist/plyr.js',
		// 'node_modules/chosen-js/chosen.jquery.js',
		// 'node_modules/perfect-scrollbar/dist/perfect-scrollbar.js',
	],
	customs: [
		config.dev + '/js/**/*.js',
		config.dev + '/js/custom.js',
	],
	font: [
		config.dev + '/fonts/*.*',
	]
}

function style() {
	return (
		gulp
		.src(assets.css)
		.pipe(plumber())
		.pipe(sass())
		.on('error', notify.onError())
		.pipe(autoprefixer({
			overrideBrowserslist: ['last 99 versions'],
			cascade: false
		}))
		.pipe(gulp.dest(config.build + '/css'))
		.pipe(postcss([cssnano()]))
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(browserSync.reload({
			stream: true
		}))
		.pipe(gulp.dest(config.build + '/css'))
	);
}
exports.style = style;

function vendors() {
	return (gulp
		.src(assets.libs)
		.pipe(concat('js/vendors.js'))
		.pipe(cache.clear())
		.pipe(gulp.dest(config.build))
		.pipe(uglify())
		// .pipe(flatten())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(browserSync.reload({
			stream: true
		}))
		.pipe(gulp.dest(config.build))
	);
}
exports.vendors = vendors;

function js() {
	return (gulp
		.src(assets.customs)
		.pipe(cache.clear())
		// .pipe(jshint())
		.pipe(gulp.dest(config.build + "/js"))
		.pipe(uglify())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(browserSync.reload({
			stream: true
		}))
		.pipe(gulp.dest(config.build + "/js"))
	);
}
exports.js = js;

function imgs() {
	return (
		gulp
		.src(assets.images)
		.pipe(cache(imagemin({
			interlaced: true
		})))
		.pipe(browserSync.reload({
			stream: true
		}))
		.pipe(gulp.dest(config.build + '/images'))
	);
}
exports.imgs = imgs;

function font() {
	return (
		gulp
		.src(assets.font)
		.pipe(cache.clear())
		.pipe(browserSync.reload({
			stream: true
		}))
		.pipe(gulp.dest(config.build + '/fonts'))
	);
}
exports.font = font;


function clean() {
	return (
		del([config.build])
	);
}
exports.clean = clean;


function watch() {
	browserSync.init({
		// You can tell browserSync to use this directory and serve it as a mini-server
		server: {
			baseDir: config.build,
		},
		injectChanges: true,
		// If you are already serving your website locally using something like apache
		// You can use the proxy setting to proxy that instead
		// proxy: "yourlocal.dev"
	});
	gulp.watch(assets.css, style);
	gulp.watch(assets.libs, vendors);
	gulp.watch(assets.customs, js);
	gulp.watch(assets.images, imgs);
	gulp.watch(assets.font, font);
}
exports.watch = watch;

exports.default = gulp.series(gulp.parallel(style, vendors, js, imgs, font), watch);
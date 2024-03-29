const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const sass = require('gulp-sass')(require('sass'));
const $ = gulpLoadPlugins();

const sassConfig = {
    outputStyle: 'expanded',
    precision: 10,
    includePaths: [
        'node_modules/bourbon/core/',
    ]
};

const lint = (files, options = {fix: false}) => {
    return gulp.src(files)
        .pipe($.eslint(options))
        .pipe($.eslint.format())
        .pipe($.eslint.failAfterError());
};

gulp.task('styles:sass', () => {
    return gulp.src('src/styles/*.scss')
        .pipe($.plumber())
        .pipe($.sourcemaps.init())
        .pipe(sass.sync(sassConfig).on('error', sass.logError))
        .pipe($.autoprefixer())
        .pipe($.cssnano({safe: true, autoprefixer: false}))
        .pipe($.sourcemaps.write('.'), {includeContent: true})
        .pipe($.size({title: 'styles:sass', gzip: true}))
        .pipe(gulp.dest('docroot/styles'));
});

gulp.task('styles:vendor', () => {
    return gulp.src([
        'node_modules/flexslider/flexslider.css',
    ])
        .pipe($.cssnano({safe: true, autoprefixer: false}))
        .pipe($.size({title: 'styles:vendor', gzip: true}))
        .pipe(gulp.dest('docroot/styles/vendor'));
});

gulp.task('styles', gulp.series('styles:sass', 'styles:vendor'));

gulp.task('scripts:main', () => {
    return gulp.src('src/scripts/*.js')
        .pipe($.plumber())
        .pipe($.sourcemaps.init())
        .pipe($.babel())
        .pipe($.uglify())
        .pipe($.sourcemaps.write('.'), {includeContent: true})
        .pipe($.size({title: 'scripts', gzip: true}))
        .pipe(gulp.dest('docroot/scripts'));
});

gulp.task('scripts', gulp.series('scripts:main'));

gulp.task('fonts', () => {
    return gulp.src('node_modules/flexslider/fonts/*')
        .pipe($.size({title: 'fonts', gzip: true}))
        .pipe(gulp.dest('docroot/styles/vendor/fonts'));
});

gulp.task('lint:root', () => lint(['*.js']));

gulp.task('lint:src', () => {
    return lint(['src/scripts/*.js']).pipe(gulp.dest('src/scripts'));
});

gulp.task('lint', gulp.series('lint:root', 'lint:src'));

gulp.task('html', gulp.series('styles', 'scripts', () => {
    return gulp.src('src/**/*.php')
        .pipe($.useref({searchPath: ['docroot', 'src', '.']}))
        .pipe(gulp.dest('docroot'));
}));

gulp.task('images', () => {
    return gulp.src([
        'src/images/**/*',
        '!src/images/src/**/*',
    ])
        .pipe($.imagemin([
            $.imagemin.gifsicle(),
            $.imagemin.mozjpeg({quality: 90}),
            $.imagemin.optipng(),
            $.imagemin.svgo()
        ]))
        .pipe($.size({title: 'images', gzip: true}))
        .pipe(gulp.dest('docroot/images'));
});

gulp.task('all', gulp.series('html', 'images', 'fonts'));

gulp.task('default', gulp.series('all'));

// generated on 2016-11-20 using generator-webapp 2.3.2
const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const del = require('del');
const runSequence = require('run-sequence');

const $ = gulpLoadPlugins();

const sassConfig = {
  outputStyle: 'expanded',
  precision: 10,
  includePaths: [
    'bower_components/normalize-css/',
    'bower_components/bourbon/core/',
    'bower_components/neat/app/assets/stylesheets',
  ]
}

const versionConfig = {
  'value': '%MDS%',
  'append': {
    'key': 'v',
    'to': [
      'css',
      'js',
    ],
  },
};

var dev = true;

gulp.task('styles', () => {
  return gulp.src('src/styles/*.scss')
    .pipe($.plumber())
    .pipe($.sass.sync(sassConfig).on('error', $.sass.logError))
    .pipe($.autoprefixer({browsers: ['> 1%', 'last 2 versions', 'Firefox ESR']}))
    .pipe($.cssnano({safe: true, autoprefixer: false}))
    .pipe(gulp.dest('docroot/styles'));
});

gulp.task('scripts', () => {
  return gulp.src('src/scripts/**/*.js')
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
      .pipe($.if('main.js', $.babel()))
      .pipe($.uglify())
    .pipe($.sourcemaps.write('.'), {includeContent: true})
    .pipe(gulp.dest('docroot/scripts'));
});

gulp.task('fonts', () => {
  return gulp.src(require('main-bower-files')('**/*.{eot,svg,ttf,woff,woff2}', function (err) {})
    .concat('src/styles/vendor/fonts/*'))
    .pipe(gulp.dest('docroot/styles/vendor/fonts'));
});

function lint(files, options) {
  return gulp.src(files)
    .pipe($.eslint({ fix: false }))
    .pipe($.eslint.format());
}

gulp.task('lint', () => {
  return lint(['src/scripts/main.js'])
    .pipe(gulp.dest('src/scripts'));
});

gulp.task('html', ['styles', 'scripts', 'locales'], () => {
  return gulp.src('src/**/*.php')
    .pipe($.useref({searchPath: ['docroot', 'src', '.']}))
    .pipe($.if('*.php', $.htmlmin({collapseWhitespace: true})))
    .pipe($.if('*.php', $.versionNumber(versionConfig)))
    .pipe(gulp.dest('docroot'));
});

gulp.task('images', () => {
  return gulp.src([
      'src/images/**/*',
      '!src/images/src/**/*',
    ])
    .pipe($.cache($.imagemin()))
    .pipe(gulp.dest('docroot/images'));
});

gulp.task('locales', () => {
  return gulp.src([
      'locale/*/LC_MESSAGES/*',
    ])
    .pipe(gulp.dest('docroot/locale'));
});

gulp.task('clean', del.bind(null, [
  'docroot/scripts',
  'docroot/styles',
  'docroot/templates',
  'docroot/locale',
]));

gulp.task('clean:images', del.bind(null, [
  'docroot/images',
]));

gulp.task('watch', () => {
  runSequence(['clean'], ['html', 'fonts'], () => {
    gulp.watch('src/templates/*.php', ['html']);
    gulp.watch('src/styles/*.scss', ['styles', 'html']);
    gulp.watch('src/scripts/*.js', ['scripts', 'html']);
    gulp.watch('src/styles/vendor/fonts/*', ['fonts']);
  });
});

gulp.task('develop', () => {
  runSequence(['clean'], ['html', 'fonts']);
});

gulp.task('build', ['lint', 'html', 'images', 'fonts'], () => {
  return gulp.src('src/**/*')
    .pipe($.size({title: 'build', gzip: true}));
});

gulp.task('default', () => {
  return new Promise(resolve => {
    dev = false;
    runSequence(['clean'], 'build', resolve);
  });
});

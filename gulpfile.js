// generated on 2016-11-20 using generator-webapp 2.3.2
const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const del = require('del');
const runSequence = require('run-sequence');

const $ = gulpLoadPlugins();
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
    .pipe($.sourcemaps.init())
    .pipe($.sass.sync({
      outputStyle: 'expanded',
      precision: 10,
      includePaths: [
        'bower_components/normalize-css/',
        'bower_components/bourbon/app/assets/stylesheets/',
        'bower_components/neat/app/assets/stylesheets',
      ]
    }).on('error', $.sass.logError))
    .pipe($.autoprefixer({browsers: ['> 1%', 'last 2 versions', 'Firefox ESR']}))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('.tmp/styles'));
});

gulp.task('scripts', () => {
  return gulp.src('src/scripts/**/*.js')
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
    .pipe($.if('main.js', $.babel()))
    .pipe($.sourcemaps.write('.'))
    .pipe(gulp.dest('.tmp/scripts'));
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

gulp.task('html', ['styles', 'scripts'], () => {
  return gulp.src('src/**/*.php')
    .pipe($.useref({searchPath: ['.tmp', 'src', '.']}))
    .pipe($.if('*.js', $.uglify()))
    .pipe($.if('*.css', $.cssnano({safe: true, autoprefixer: false})))
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

gulp.task('clean', del.bind(null, [
  '.tmp',
  'docroot/scripts',
  'docroot/styles',
  'docroot/templates',
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
  return gulp.src('src/**/*').pipe($.size({title: 'build', gzip: true}));
});

gulp.task('default', () => {
  return new Promise(resolve => {
    dev = false;
    runSequence(['clean'], 'build', resolve);
  });
});

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
    'bower_components/bourbon/app/assets/stylesheets/',
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

// Rsync configurations for deploying to production.
const rsyncConf = {
  root: 'docroot/',
  hostname: 'tuxfamily',
  destination: '/home/getgnulinux/getgnulinux.org-web/htdocs',
  progress: true,
  incremental: true,
  relative: true,
  emptyDirectories: true,
  recursive: true,
  clean: true,
  compress: true,
  exclude: ['.*.swp'],
};

var dev = true;

gulp.task('styles:sass', () => {
  return gulp.src('src/styles/*.scss')
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
    .pipe($.sass.sync(sassConfig).on('error', $.sass.logError))
    .pipe($.autoprefixer({browsers: ['> 1%', 'last 2 versions', 'Firefox ESR']}))
    .pipe($.cssnano({safe: true, autoprefixer: false}))
    .pipe($.sourcemaps.write('.'), {includeContent: true})
    .pipe(gulp.dest('docroot/styles'));
});

gulp.task('styles:vendor', () => {
  return gulp.src([
      'bower_components/flexslider/flexslider.css',
    ])
    .pipe($.cssnano({safe: true, autoprefixer: false}))
    .pipe(gulp.dest('docroot/styles/vendor'));
});

gulp.task('styles', gulp.series('styles:sass', 'styles:vendor'));

gulp.task('scripts:main', () => {
  return gulp.src('src/scripts/main.js')
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
    .pipe($.babel())
    .pipe($.uglify())
    .pipe($.sourcemaps.write('.'), {includeContent: true})
    .pipe(gulp.dest('docroot/scripts'));
});

gulp.task('scripts:plugins', () => {
  return gulp.src([
      'src/scripts/plugins.js',
      'bower_components/flexslider/jquery.flexslider-min.js',
    ])
    .pipe($.concat('plugins.js'))
    .pipe(gulp.dest('docroot/scripts'));
});

gulp.task('scripts', gulp.series('scripts:main', 'scripts:plugins'));

gulp.task('fonts', () => {
  return gulp.src(
      require('main-bower-files')('**/*.{eot,svg,ttf,woff,woff2}', function (err) {})
    .concat('bower_components/flexslider/fonts/*'))
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

gulp.task('html', gulp.series('styles', 'scripts', () => {
  return gulp.src('src/**/*.php')
    .pipe($.useref({searchPath: ['docroot', 'src', '.']}))
    .pipe($.if('*.php', $.versionNumber(versionConfig)))
    .pipe(gulp.dest('docroot'));
}));

gulp.task('images', () => {
  return gulp.src([
      'src/images/**/*',
      '!src/images/src/**/*',
    ])
    .pipe($.cache($.imagemin()))
    .pipe(gulp.dest('docroot/images'));
});

gulp.task('clean', del.bind(null, [
  'docroot/scripts',
  'docroot/styles',
  'docroot/templates',
]));

gulp.task('clean:images', del.bind(null, [
  'docroot/images',
]));

gulp.task('watch', () => {
  runSequence(['clean'], gulp.series('html', 'fonts', () => {
    gulp.watch('src/templates/*.php', ['html']);
    gulp.watch('src/styles/*.scss', ['styles', 'html']);
    gulp.watch('src/scripts/*.js', ['scripts', 'html']);
    gulp.watch('src/styles/vendor/fonts/*', ['fonts']);
  }));
});

gulp.task('develop', () => {
  runSequence(['clean'], gulp.series('html', 'fonts'));
});

gulp.task('build', gulp.series('lint', 'html', 'images', 'fonts', () => {
  return gulp.src('src/**/*')
    .pipe($.size({title: 'build', gzip: true}));
}));

gulp.task('default', () => {
  return new Promise(resolve => {
    dev = false;
    runSequence(['clean'], 'build', resolve);
  });
});

gulp.task('deploy', () => {
  return gulp.src('docroot/**')
	.pipe(
	  $.prompt.confirm({
		message: `Are you sure you want to deploy to ${rsyncConf.hostname}:${rsyncConf.destination}?`,
		default: false
	  })
	)
	.pipe($.rsync(rsyncConf));
});

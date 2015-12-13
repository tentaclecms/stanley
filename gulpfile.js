var gulp = require("gulp"),
    gutil = require('gulp-util'),
    gulpsync = require('gulp-sync')(gulp),
    browserSync = require("browser-sync"),
    watch = require('gulp-watch'),
    babel = require("gulp-babel");

var config = require('./gulp-config'),
    gulp = require('gulp'),
    plugins = require('gulp-load-plugins')({camelize: true}),
    bless = require('gulp-bless'),
    minifyCSS = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    gutil = require('gulp-util'),
    sourcemaps = require('gulp-sourcemaps'),
    notify = require('gulp-notify'),
    expect = require('gulp-expect-file'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync'),
    babel = require('gulp-babel'),
    browserify = require('browserify'),
    babelify = require('babelify'),
    source = require('vinyl-source-stream');

var css_dir = 'assets/css';

module.exports = {
    css_dir: css_dir,
    sass: {
        bootstrap: {
            main: [css_dir + '/source/bootstrap.scss'],
            watch: [css_dir + '/source/bootstrap.scss']
        },
        base: {
            main: [css_dir + '/source/base.scss'],
            watch: [css_dir + '/source/base.scss', 'static/css/source/components/*.scss']
        },
        brand: {
            main: [css_dir + '/source/brand.scss'],
            watch: [css_dir + '/source/brand.scss']
        },
        site: {
            main: [css_dir + '/source/site.scss'],
            watch: [css_dir + '/source/site.scss']
        },
        dir: css_dir + '/source',
        dest: css_dir
    }
}

module.exports = {
    handleSass: function (file) {
        return gulp.src(config.sass[file].main)
            .pipe(plugins.sass({
                paths: [config.sass.dir]
            }))
            .on("error", this.handleError)
            .pipe(sourcemaps.init())
            .pipe(minifyCSS())
            .pipe(sourcemaps.write('/maps'))
            .pipe(gulp.dest(config.sass.dest))
            .pipe(browserSync.stream());
    },

    handleError: function (err) {
        console.log(err.toString());
        this.emit('end');
    },

    handleSuccess: function (message) {
        gutil.log(gutil.colors.green(message));
    }
}

gulp.task('styles', ['styles:site']);

gulp.task("styles:base", function () {
    helpers.handleSass('base');
});

gulp.task("styles:site", function () {
    helpers.handleSass('site');
});

// Rerun the task when a file changes
// https://www.npmjs.com/package/gulp-watch
gulp.task('watch', function () {
    gulp.watch(config.sass.site.watch, ['styles:site']);

    // Refresh when one of these files changes
    gulp.watch([
        'assets/css/*.css',
        'assets/js/*.js',

        '*.php',
        'partials/*.php',

    ]).on('change', function () {
        browserSync.reload();
    });
});

// Load Browser-Sync
gulp.task('browser-sync', function () {
    browserSync.init({
        //proxy: 'goauto.localtest.me'
        proxy: 'goauto-new.dev'
    });

});

gulp.task('default', gulpsync.sync([
    'styles:bootstrap',
    'styles:base',
    'styles:brand',
    'styles:site',
    'script:jsx',
    'browser-sync',
    'watch'
]), function () {
    gutil.log(gutil.colors.green('************'));
    gutil.log(gutil.colors.green('* All Done *'), 'You can start editing your code, BrowserSync will update your browser after any change..');
    gutil.log(gutil.colors.green('************'));
});

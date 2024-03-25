const { series, parallel, src, dest, watch } = require('gulp');

const sass = require('gulp-sass')(require('sass'));
const cssMinify = require('gulp-clean-css');
const fileinclude = require('gulp-file-include');
const minifyJS = require('gulp-uglify');

const del = import('del');
// import {deleteAsync} from 'del';

// const deletedFilePaths = deleteAsync(['dist/']);
// const deletedDirectoryPaths = deleteAsync(['dist']);


function deleteFiles(cb) {
    del([
        'dist/**',
    ]);
    // deletedFilePaths();
    // deletedDirectoryPaths();
    cb();
}

function css(cb) {
    src('./src/styles/**/*.scss')
    .pipe( sass() )
    .pipe( cssMinify() )
    .pipe( dest('./dist/styles/') );
    cb();
}

function javascript(cb) {
    src('./src/scripts/**/*.js')
    .pipe( minifyJS() )
    .pipe( dest('./dist/scripts/') );
    cb();
}

function compileImages(cb) {
    src('./src/media/**/*.{jpg,png,gif,svg,webp}')
    .pipe(dest('./dist/media'));
    cb();
}

function fileInclude(cb) {
    src('./src/html/*.html')
    .pipe(fileinclude({
        prefix: '@@',
        basepath: './src/html/'
    }))
    .pipe(dest('./dist/'));
    cb();
}

function build(cb) {
    series(fileInclude(), css(), javascript, compileImages );
    cb();
}

function clean(cb) {
    deleteFiles();
    cb();
}

exports.default = function(cb) {
    series(deleteFiles, fileInclude, css, javascript, compileImages );
    watch('./src/scripts/**/*.js', javascript);
    watch('./src/styles/**/*.scss', css);
    watch('./src/media/**/*.{jpg,png,gif,svg,webp,ico}', compileImages);
    watch('./src/html/**/*.html', fileInclude);
    cb();
};

exports.build = build;
exports.clean = clean;
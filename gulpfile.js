const { src, dest, parallel, series, watch } = require('gulp');
const browserSync = require('browser-sync').create();
//var gulp = require('gulp');
const jshint = require('gulp-jshint');
const concat = require('gulp-concat');
// const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const minifyCss = require('gulp-minify-css');
const autoprefixer = require('gulp-autoprefixer');
const cleancss = require('gulp-clean-css');
// const run = require('gulp-run-command').default

var path = {
    'addJs': [
		'./resources/js/jquery.stack.js',
        './resources/js/uikit.stack.js',
		'./resources/js/uikit-icons.stack.js',
		'./resources/js/cookie.stack.js',
		'./resources/js/action.stack.js'
    ],
    'addCss': [
        './resources/css/uikit.stack.css',
        './resources/css/theme.stack.css'
    ],
	'addCssFont': [
        './resources/css/font.stack.css',
    ],
    'distJs': './js',
    'distCss': './css'
};

function browsersync() {
	browserSync.init({ // Инициализация Browsersync
		server: { baseDir: 'app/' }, // Указываем папку сервера
		notify: false, // Отключаем уведомления
		online: true // Режим работы: true или false
	})
}

function addJs() {
	return src([
		'resources/js/jquery.stack.js',
        'resources/js/uikit.stack.js',
		'resources/js/uikit-icons.stack.js',
		'resources/js/cookie.stack.js',
		'resources/js/action.stack.js'
		])
	.pipe(concat('js.min.js')) // Конкатенируем в один файл
	.pipe(uglify()) // Сжимаем JavaScript
	.pipe(dest('local/templates/swebix/js/')) // Выгружаем готовый файл в папку назначения
	.pipe(browserSync.stream()) // Триггерим Browsersync для обновления страницы
}

function addCss() {
	return src([
		'resources/css/uikit.stack.css',
        'resources/css/theme.stack.css'
	])
	//.pipe(eval(preprocessor)()) // Преобразуем значение переменной "preprocessor" в функцию
	.pipe(concat('css.min.css')) // Конкатенируем в файл app.min.js
    .pipe(minifyCss({compatibility: 'ie8'}))
	.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true })) // Создадим префиксы с помощью Autoprefixer
	.pipe(cleancss( { level: { 1: { specialComments: 0 } }/* , format: 'beautify' */ } )) // Минифицируем стили
	.pipe(dest('local/templates/swebix/css/')) // Выгрузим результат в папку "app/css/"
	.pipe(browserSync.stream()) // Сделаем инъекцию в браузер
}

function addCssFont() {
	return src([
		'resources/css/font.stack.css',
	])
	//.pipe(eval(preprocessor)()) // Преобразуем значение переменной "preprocessor" в функцию
	.pipe(concat('font.css')) // Конкатенируем в файл app.min.js
    .pipe(minifyCss({compatibility: 'ie8'}))
	.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true })) // Создадим префиксы с помощью Autoprefixer
	.pipe(cleancss( { level: { 1: { specialComments: 0 } }/* , format: 'beautify' */ } )) // Минифицируем стили
	.pipe(dest('local/templates/swebix/css/')) // Выгрузим результат в папку "app/css/"
	.pipe(browserSync.stream()) // Сделаем инъекцию в браузер
}

exports.browsersync = browsersync;
exports.addJs = addJs;
exports.addCss = addCss;
exports.addCssFont = addCssFont;
exports.all = parallel(addJs, addCss, addCssFont);
src = 
	scss: 	'dev/sass/'
	js:		'dev/js/'

dist = 
	css: 	'public/css/'
	js: 	'public/js/'

gulp = require('gulp')
autoprefixer = require('gulp-autoprefixer')
$ = require('gulp-load-plugins')()

browser_support = ["ie >= 9", "ie_mob >= 10", "ff >= 30", "chrome >= 34", "safari >= 7", "opera >= 23", "ios >= 7", "android >= 4.4", "bb >= 10"]

gulp.task 'sass', ->
	gulp.src "#{src.scss}*.scss"
	.pipe $.sass
		includePaths: 'susy/sass'
		onError: console.error.bind(console, 'SASS Error:')
	.pipe autoprefixer
		browsers: browser_support
	.pipe gulp.dest "#{dist.css}"
	.pipe $.size()

gulp.task 'js', ->
	gulp.src "#{src.js}*.js"
    .pipe $.concat 'app.js'
    .pipe gulp.dest "#{dist.js}"
    .pipe $.size()

gulp.task 'watch',['sass', 'js'], ->
	gulp.watch "#{src.scss}**/*.scss", ['sass']

gulp.task 'default', ['sass', 'js', 'watch']
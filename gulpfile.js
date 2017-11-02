var gulp = require ('gulp'),
		sass = require('gulp-ruby-sass'),
		livereload = require('gulp-livereload'),
		imagemin = require ('gulp-imagemin');


//Task SCSS
gulp.task('styles', function() {
	return sass('sass/*.scss', {
		style: 'compressed'
	})
			.pipe(gulp.dest('sass'))
			.pipe(livereload());
});

//Task HTML
gulp.task('html', function() {
	gulp.src('./*.html')
			.pipe(livereload());
});

//Task IMAGE
gulp.task('image', function() {
	gulp.src('img/*')
			.pipe(imagemin())
			.pipe(gulp.dest('build/img'));
});


gulp.task('watch', function(){
	var server = livereload.listen();
	gulp.watch('sass/*.scss', ['styles']);
	gulp.watch('./*.html', ['html']);
});



gulp.task('default', ['styles', 'watch', 'html']);
var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-ruby-sass');

gulp.task('serve',['sass'], function() {
	browserSync.init({
		proxy: "localhost/b2b"
	});
	gulp.watch("*.scss", ['sass']);
	gulp.watch("*.php").on('change', browserSync.reload);
});

gulp.task('sass', function() {
	return sass('*.scss')
			.on('error', function (err) {
				console.error('Error!', err.message);
			})
			.pipe(gulp.dest("./"))
			.pipe(browserSync.stream({match: '**/*.css'}));

});
gulp.task('sass:watch', function () {
	gulp.watch('*.scss', ['sass']);
});
gulp.task('default', ['serve']);

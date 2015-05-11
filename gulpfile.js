var gulp = require('gulp');
var less = require('gulp-less');
var path = require('path');
 
gulp.task('less', function () {
  return gulp.src('style.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest('.'));
});

gulp.task('watch-less', function(){
    // What to watch
    gulp.watch('less/**/*.less', function(){
        // What to run
        gulp.run('less');
    });
});
gulp.task('default', ['watch-less'] );
/** gruntfile.js */
module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        /** Only use include_paths if extracting elements from Bower */
        includePaths: ['themes/restaurant-theme/assets/vendor/foundation-sites/assets']
            }, //options
            dist: {
              options: {
                outputStyle: 'expanded',
                sourceMap: false
              },
              files: {
                'themes/restaurant-theme/assets/css/main.css': 'themes/restaurant-theme/assets/scss/main.scss'
              }
            }
        }, // sass

        watch: {
          options: {
            livereload: true,
            dateFormat: function(time) {
              grunt.log.writeln('The watch finished in ' + time + 'ms at ' + (new Date()).toString());
              grunt.log.writeln('Waiting for more changes...');
                    } //date format function
            }, //options
            scripts: {
              files: ['themes/**/*.js']
            }, // scripts
            //Live Reload of SASS
            sass: {
              files: ['themes/**/*.scss'],
              tasks: ['sass']
            }, //sass
            css: {
              files: ['themes/**/*.css', '!themes/**/main.css']
            },
            html: {
              files: ['themes/**/*.html']
            }, //html
        }, //watch

        postcss: {
          options: {
            processors: [
              require('autoprefixer')({
                browsers: 'last 2 versions'
              }),
              require('cssnano')({
                discardComments: {
                  removeAll: true
                }
              }) // minify the result
            ]
          },

          dist: {
            src: 'themes/restaurant-theme/assets/css/main.css'
          }
        }, //post css
      });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-postcss');

  grunt.registerTask('default', ['sass', 'watch']);
  grunt.registerTask('build', ['sass', 'postcss']);
};

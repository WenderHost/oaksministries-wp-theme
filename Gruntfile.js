module.exports = function(grunt){
    require('load-grunt-tasks')(grunt); // npm install --save-dev load-grunt-tasks
                                        //
    grunt.initConfig({
        less: {
          development: {
            options: {
              compress: false,
              yuicompress: false,
              optimization: 2,
              relativeUrls: true,
              sourceMap: true,
              sourceMapFilename: 'css/main.css.map',
              sourceMapBasepath: 'less',
              sourceMapURL: 'main.css.map',
              sourceMapRootpath: '../less'
            },
            files: {
              // target.css file: source.less file
              'css/main.css': 'less/main.less'
            }
          },
          production: {
            options: {
              compress: true,
              yuicompress: true,
              optimization: 2,
              relativeUrls: true
            },
            files: {
              'css/main.css': 'less/main.less'
            }
          }
        },
        watch: {
          options: {
            livereload: true,
          },
          styles: {
            files: ['less/**/*.less','*.php'], // which files to watch
            tasks: ['less:production'],
            options: {
              nospawn: true
            }
          }
        }


    });
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['less:production']);
    grunt.registerTask('builddev', ['less:development']);
}
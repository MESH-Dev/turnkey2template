module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // concat - combine files to production version
        compass: {
          dist: {
            options: {
              sassDir : 'sass/',
              cssDir: './',
              environment: 'production'
            }
          }
        },
        // concat: {
        //   js: {
        //     // add/remove/edit files and order to project needs
        //     src: ['js/*.js'],
        //     dest: '<%= pkg.name %>.js'
        //   }
        // },
        // // uglify - minify production js file created through concat
        // uglify: {
        //   js: {
        //     files: {
        //       '<%= pkg.name %>.js': ['<%= pkg.name %>.min.js']
        //     }
        //   }
        // },
        // watch - tasks triggered with [grunt watch] is initiated in the cli
        watch:{
          // cssconcat:{
          //   files: ['*.css','!*.min.css'],
          //   tasks: ['concat']
          // },
          //
          // jsuglify:{
          //   files: ['js/*.js'],
          //   tasks: ['uglify']
          // },
          css: {
            files: 'sass/**/*.scss',
            tasks: ['compass']
          }
        },
        browserSync: {
          dev: {
            bsFiles: {
              src: [
                "*.css",
                "*.html"
              ]
            },
            options: {
              watchTask: true,
              proxy: "localhost/[ENTER DIRNAME HERE]"
            }
          }
        }

    });
    // load tasks from node_modules
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // tasks that will be triggered with [grunt] in the cli
    grunt.registerTask('default', ['compass','browserSync', 'concat:js', 'uglify:js','watch']);
};

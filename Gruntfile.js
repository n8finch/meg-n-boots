module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    jshint: {
      files: ['Gruntfile.js', 'js/custom.js'],
      options: {
        globals: {
          jQuery: true
        }
      }
    },

    copy: {
      main: {
        expand: true,
        cwd: 'bower_components/bootstrap/dist/fonts/',
        src: '**',
        dest: 'bsfonts/',
        flatten: true,
        filter: 'isFile'
      }
    },

    concat: {
      options: {
      },
      javascript: {
        src: [ 'js/customizer.js', 'js/navigation.js', 'js/npm.js', 'js/skip-link-focus-fix.js', 'js/custom.js' ],
        dest: 'js/meg-n-boots.js'
      },
      css: {
        src: ['css/main-style.css', 'bower_components/bootstrap/dist/css/bootstrap.min.css', 'css/custom.css'],
        dest: 'style.css'
      }
    },

    uglify: {
      javascript: {
        files: {
          'meg-n-boots.min.js': ['meg-n-boots.js']
        }
      }
    },

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: {                         // Dictionary of files
          'sass/newstyle.css': 'sass/style.scss',       // 'destination': 'source'
        }
      }
    },

    watch: {
      files: ['css/*.css', 'js/*.js', 'sass/**/*.scss'],
      tasks: ['jshint', 'concat', 'sass']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('default', ['jshint', 'copy', 'concat', 'uglify', 'sass', 'watch']);

};
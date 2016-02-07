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
        src: ['bower_components/jquery-backstretch/jquery.backstretch.min.js','bower_components/bootstrap/dist/js/bootstrap.min.js', 'js/customizer.js', 'js/navigation.js', 'js/npm.js', 'js/skip-link-focus-fix.js', 'bower_components/masonry/masonry.js', 'js/custom.js' ],
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

    watch: {
      files: ['css/*.css', 'js/*.js'],
      tasks: ['jshint', 'concat']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('default', ['jshint', 'copy', 'concat', 'uglify', 'watch']);

};
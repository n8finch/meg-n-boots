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


    concat: {
      options: {
        //banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
        //'<%= grunt.template.today("yyyy-mm-dd") %> */',
        //separator: '/*-----------------------------------------*/',
      },
      javascript: {
        src: ['js/*.js'],
        dest: 'meg-n-boots.js'
      },
      css: {
        src: ['css/main-style.css', 'css/bootstrap.min.css', 'css/bootstrap-theme.min.css', 'css/bootstrap-theme.min.css', 'css/custom.css'],
        dest: 'style-human.css'
      }
    },

    uglify: {
      javascript: {
        files: {
          'meg-n-boots.min.js': ['meg-n-boots.js']
        }
      }
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'style.css': ['style-human.css']
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
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'cssmin', 'watch']);

};
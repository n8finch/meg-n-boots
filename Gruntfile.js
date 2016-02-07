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
        dest: 'built.js'
      },
      css: {
        src: ['css/main-style.css', 'css/bootstrap.min.css', 'css/bootstrap-theme.min.css', 'css/bootstrap-theme.min.css', 'css/media-queries.css', 'css/custom.css'],
        dest: 'style.css'
      }
    },

    watch: {
      files: ['<%= jshint.files %>'],
      tasks: ['jshint']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.registerTask('default', ['jshint', 'concat',]);

};
module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
          dist: {
            files: [{
              expand: true,
              cwd: 'public/css/sass',
              src: ['wp-easy-grid.scss'],
              dest: 'public/css',
              ext: '.css'
            }]
          }
        },

    });

    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('default', [
        'sass:dist',
    ]);

};

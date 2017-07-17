module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            compile: {
                plugins: [
                    new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
                    new (require('less-plugin-clean-css'))()
                ],
                files: [
                    {
                        expand: true,
                        src: ['**/*.less', '!node_modules/**'],
                        ext: '.css'
                    }
                ],
                options: {
                    sourceMap: true
                }
            }
        },
        watch: {
            less: {
                files: ['**/*.less'],
                tasks: ['less:compile']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['less:compile', 'watch']);
};
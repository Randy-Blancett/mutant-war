// Karma configuration
// Generated on Tue Nov 25 2014 19:41:25 GMT-0500 (EST)

module.exports = function(config) {
	config.set({

		// base path that will be used to resolve all patterns (eg.
		// files,
		// exclude)
		basePath : '',

		// frameworks to use
		// available frameworks:
		// https://npmjs.org/browse/keyword/karma-adapter
		frameworks : [ 'jasmine' ],

		// list of files / patterns to load in the browser
		files : [ '../src/main/www/js/angular/angular.min.js','../src/main/www/js/angular/angular-messages.min.js',
				'../src/main/www/js/angular/angular-mocks.js',
				'../src/main/www/js/mutantWar/**/*.js',
				'../src/test/js/**/*.js' ],

		// list of files to exclude
		exclude : [],

		// preprocess matching files before serving them to the browser
		// available preprocessors:
		// https://npmjs.org/browse/keyword/karma-preprocessor
		preprocessors : {
			'../src/main/www/js/mutantWar/**/*.js' : 'coverage'
		},

		// test results reporter to use
		// possible values: 'dots', 'progress'
		// available reporters:
		// https://npmjs.org/browse/keyword/karma-reporter
		reporters : [ 'progress', 'html', 'junit', 'coverage' ],

		htmlReporter : {
			outputFile : '../target/reports/karma/units.html'
		},

		junitReporter : {
			outputFile : '../target/reports/karma/test-results.xml',
			suite : ''
		},

		coverageReporter : {
			type : 'html',
			dir : '../target/reports/karma/',
			file : 'coverage.html'
		},

		// web server port
		port : 9876,

		// enable / disable colors in the output (reporters and logs)
		colors : true,

		// level of logging
		// possible values: config.LOG_DISABLE || config.LOG_ERROR ||
		// config.LOG_WARN || config.LOG_INFO || config.LOG_DEBUG
		logLevel : config.LOG_INFO,

		// enable / disable watching file and executing tests whenever
		// any file
		// changes
		autoWatch : false,

		// start these browsers
		// available browser launchers:
		// https://npmjs.org/browse/keyword/karma-launcher
		browsers : [ 'Chrome', 'Firefox', 'IE' ],

		// Continuous Integration mode
		// if true, Karma captures browsers, runs the tests and exits
		singleRun : false
	});
};

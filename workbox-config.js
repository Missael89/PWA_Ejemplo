module.exports = {
	globDirectory: './',
	globPatterns: [
		'**/*.{png,html,js,json,php}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};
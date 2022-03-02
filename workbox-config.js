module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{png,html,json,js,php}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};
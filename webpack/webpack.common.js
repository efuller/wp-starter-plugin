const commonPaths = require( './common-paths' );
const ProgressBar = require( 'progress-bar-webpack-plugin' );
const ExtractTextPlugin = require('extract-text-webpack-plugin');

const config = {

	entry: {
		main: './src/front/index.js',
		admin: './src/admin/index.js'
	},
	output: {
		filename: 'js/[name].js',
		path: commonPaths.outputPath
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: 'babel-loader'
			},
			{
				test: /\.scss/,
				use: ExtractTextPlugin.extract({
 					fallback: 'style-loader',
 					use: [
						{
							loader: 'css-loader',
							options: {
								sourceMap: true
							}
						},
						{
							loader: 'sass-loader',
							options: {
								sourceMap: true
							}
						}
					]
				})
			}
		]
	},
	plugins: [
		new ProgressBar(),
		new ExtractTextPlugin({
			filename: (getPath) => {
				return getPath('js/css/[name].css').replace('js/css', 'css');
			},
			allChunks: true
		})
	]
};

module.exports = config;

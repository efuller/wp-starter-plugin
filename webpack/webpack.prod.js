const webpack = require( 'webpack' );
const ExtractTextPlugin = require( 'extract-text-webpack-plugin' );
const autoprefixer = require( 'autoprefixer' );

const config = {
	// This allows for JS and SCSS source maps.
	devtool: 'cheap-source-map',
	plugins: [
		new webpack.DefinePlugin({
			'process.env': {
				NODE_ENV: JSON.stringify( 'production' )
			}
		}),
		new webpack.optimize.UglifyJsPlugin(),
		// Extract the CSS file.
		new ExtractTextPlugin( '../css/main.css' ),

		// Configure autoprefixer.
		new webpack.LoaderOptionsPlugin({
			options: {
				postcss: [
					autoprefixer()
				]
			}
		})
	]
};

module.exports = config;

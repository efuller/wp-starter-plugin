const webpack = require( 'webpack' );
const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' );

const config = {
	devtool: 'eval-source-map',
	devServer: {
		historyApiFallback: true,
		hot: true
	},
	plugins: [
		// Browsersync is a better option when working in a WordPress environment.
		new BrowserSyncPlugin({
			open: false,
			injectChanges: true,
			host: 'localhost',
			port: '3000',
			proxy: 'learnwp.dev'
		})
	]
};

module.exports = config;

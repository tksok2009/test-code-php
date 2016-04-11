const webpack = require('./node_modules/webpack');
const path = require('path');

module.exports = {
  entry: path.resolve(__dirname, 'src/main.js'),
  output: {
    path: __dirname + '/public/inc',
    filename: 'bundle.js'
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery'
    }),
    new webpack.optimize.DedupePlugin()
  ],
  module: {
    loaders: [
    ]
  }
};

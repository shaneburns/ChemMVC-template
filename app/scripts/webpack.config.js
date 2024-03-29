var TerserPlugin = require('terser-webpack-plugin');
const path = require('path');

module.exports = {
  mode: 'development',
  entry: {
    'mainBundle': path.join(__dirname, 'main.js'),
  },
  watch: true,
  output: {
    path: path.join(__dirname, '../../public_html/scripts/dist'),
    publicPath: '/scripts/dist/',
    filename: '[name].js'
  },
  module: {
    rules: [{
      test: /.jsx?$/,
      include: [
        path.resolve(__dirname),
        path.resolve(__dirname, 'node_modules')
      ]
    }]
  },
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()],
  },
  resolve: {
    extensions: ['.json', '.js', '.jsx']
  },
  devtool: 'source-map'
};
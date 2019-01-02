const path = require('path');
// const HtmlWebpackPlugin = require('html-webpack-plugin');
// const CleanWebpackPlugin = require('clean-webpack-plugin');
const webpack = require('webpack');

module.exports = {
  mode: 'development',
  entry: {
    app: './resources/js/app.js'
  },
  devtool: 'inline-source-map',
  devServer: {
    contentBase: './public',
    hot: true
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader']
      },
      {
        test: /\.scss$/,
        use: ['style-loader', 'css-loader', 'sass-loader']
      }
    ]
  },
  plugins: [
    /* new CleanWebpackPlugin(['dist']), */
    /* new HtmlWebpackPlugin({
      title: 'Output Management'
    }), */
    /* new webpack.HotModuleReplacementPlugin() */
  ],
  output: {
    filename: '[name].bundle.js',
    path: path.resolve(__dirname, 'public')
  },
};

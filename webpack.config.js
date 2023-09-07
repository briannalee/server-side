const HtmlWebpackPlugin = require('html-webpack-plugin');
const path = require('path');

module.exports = {
  entry: './src/js/main.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist')
  },
  devServer: {
    static: path.resolve(__dirname, 'dist'),
    port: 8080,
    hot: true
  },
  plugins: [new HtmlWebpackPlugin({
    template: 'src/resources/templates/web.mustache',
    inject: 'body',
  })],
  module: {
    rules: [
      {
        test: /\.html$/,
        loader: 'mustache-loader'
        // loader: 'mustache-loader?minify'
        // loader: 'mustache-loader?{ minify: { removeComments: false } }'
        // loader: 'mustache-loader?noShortcut'
    },
      {
        test: /\.(scss)$/,
        use: [
          {
            loader: 'style-loader'
          },
          {
            loader: 'css-loader'
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: () => [
                  require('autoprefixer')
                ]
              }
            }
          },
          {
            loader: 'sass-loader'
          }
        ]
      },
      {
        test: /web\.mustache$/,
        loader: 'mustache-loader',
        options: {
            tiny: true,
            render: {
                title: 'hello world',
              },
          },
      },
      {
        test: /\.(png|svg|jpg|jpeg|gif)$/i,
        type: 'asset/resource',
        use: [
          { loader: 'file-loader' }
        ]
      }
    ]
  }
}
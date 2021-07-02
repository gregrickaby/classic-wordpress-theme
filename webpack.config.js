const path = require('path')
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin')
const ESLintPlugin = require('eslint-webpack-plugin')
const LiveReloadPlugin = require('webpack-livereload-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const StylelintPlugin = require('stylelint-webpack-plugin')
const TerserPlugin = require('terser-webpack-plugin')
const isProduction = process.env.NODE_ENV == 'production'

const config = {
  entry: path.resolve(process.cwd(), 'src', 'index.js'),
  output: {
    clean: true,
    path: path.resolve(process.cwd(), 'build')
  },
  devtool: 'eval-cheap-module-source-map',
  watchOptions: {
    ignored: ['vendor/', 'node_modules/', 'build/']
  },
  target: 'web',
  optimization: {
    minimizer: [
      new CssMinimizerPlugin({
        parallel: true,
        minimizerOptions: {
          preset: [
            'default',
            {
              discardComments: {removeAll: true}
            }
          ]
        }
      }),
      new TerserPlugin({
        extractComments: false,
        parallel: true,
        terserOptions: {
          compress: {
            passes: 2
          }
        }
      })
    ]
  },
  plugins: [
    new LiveReloadPlugin(),
    new ESLintPlugin(),
    new StylelintPlugin(),
    new MiniCssExtractPlugin()
  ],
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.(eot|svg|ttf|woff|woff2|png|jpg|gif)$/i,
        type: 'asset'
      },
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader']
      }
    ]
  }
}

module.exports = () => {
  if (isProduction) {
    config.mode = 'production'
  } else {
    config.mode = 'development'
  }
  return config
}

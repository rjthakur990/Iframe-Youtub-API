import postcssNesting from 'postcss-nesting';

module.exports = {
    module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          'style-loader',
          { loader: 'css-loader', options: { importLoaders: 1 } },
          { loader: 'postcss-loader', options: {
            ident: 'postcss',
            plugins: () => [
              postcssNesting(/* pluginOptions */)
            ]
          } }
        ]
      }
    ]
  }
}

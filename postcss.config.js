module.exports = {
    plugins: [
      require('autoprefixer'),
      require('cssnano'),
      require('postcss-discard-duplicates')({
        preset: 'default',
      }),
    ],
  };
  
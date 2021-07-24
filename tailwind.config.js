module.exports = {
  mode: 'jit',
  purge: {
    content: ['./**/*.php', './src/js/*.js']
  },
  darkMode: 'media',
  theme: {
    extend: {},
    fontFamily: {
      sans: ['Open Sans', 'sans-serif']
    }
  },
  variants: {
    extend: {}
  },
  plugins: []
}

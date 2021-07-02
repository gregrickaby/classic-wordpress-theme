module.exports = {
  mode: 'jit',
  purge: {
    content: ['./**/*.php', './src/js/*.js']
  },
  darkMode: false, // or 'media' or 'class'
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

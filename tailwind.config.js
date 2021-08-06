module.exports = {
  mode: 'jit',
  purge: {
    content: ['./**/*.php', './src/js/*.js']
  },
  darkMode: 'media',
  theme: {
    extend: {
      fontFamily: {
        sans: ['Heebo', 'sans-serif'],
        serif: ['Lora', 'serif']
      },
      colors: {
        gray: {
          200: '#d3d3d3',
          700: '#535353',
          800: '#242424',
          900: '#1c1b1b'
        }
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '2rem'
        }
      }
    }
  },
  variants: {
    extend: {}
  },
  plugins: []
}

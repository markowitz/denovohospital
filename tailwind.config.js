module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens : {
      'xxs': '375px',
      xxxs: '414px',
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px'
    },
    extend: {
      height: {
        xxl: '600px'
      },
      bg: {
        1000: '#375336'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

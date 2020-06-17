module.exports = {
  purge: [],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1062px',
      'xl': '1280px',
    },
    extend: {
      gradients: theme => ({
        'primary-lite': [theme('colors.primary'),theme('colors.primary-lite')],
        'primary-lite-h': [theme('colors.primary'),theme('colors.primary')],
        'hero-cover': ['#ffffffad','#ffffff00']
      }),
      fontFamily:{
        'quicksand' : ['Quicksand', 'sans-serif'],
        'montserrat' : ['Montserrat', 'sans-serif']
      },
      colors:{
        'primary': '#E7BC85',
        'primary-lite': '#FFDFB8',
        'secondaray': '#4A351B'
      }
    },
  },
  variants: {
    gradients: ['responsive', 'hover'],
  },
  plugins: [
    require('./plugins/gradients')
  ],
}

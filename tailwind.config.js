/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'green': '#a5d5bb',
        'green-light': '#f2f9f5',
      },
      fontFamily: {
        'din-next': ["DIN Next LT Pro Condensed", 'Helvetica', 'Arial', 'sans-serif'],
      },
    },
    
  },
  plugins: [
    plugin(function({ addBase, theme }) {
      addBase({
        'h1': { fontSize: theme('fontSize.2xl') },
        'h2': { fontSize: theme('fontSize.xl') },
        'h3': { fontSize: theme('fontSize.lg') },
      })
    }),
    require('@tailwindcss/forms'),
  ],
}
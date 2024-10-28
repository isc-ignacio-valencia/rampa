/** @type {import('tailwindcss').Config} */
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
  },
    
  },
  plugins: [],
}
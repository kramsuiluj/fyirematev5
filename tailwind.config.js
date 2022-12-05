/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            'daysone': ['Days One', 'sans-serif'],
            'opensans': ['Open Sans', 'sans-serif']
        }
    },
  },
  plugins: [],
}

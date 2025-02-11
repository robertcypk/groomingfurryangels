module.exports = {
  content: [
    './**/*.php',
    './js/*.js',
    './node_modules/flowbite/**/*.js'
  ],
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        'brand-teal': '#497C8F',
        'brand-red': '#BE3249',
        'brand-green': '#478175',
      },
    },
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ]
}

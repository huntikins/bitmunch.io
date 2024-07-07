/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: ["./src/**/*.{hbs,js,ts}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ['DM_Sans', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        dark: "#191A19",
        brand: "#19C384",
      },
    },
  },
  plugins: [],
};

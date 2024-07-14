/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: ["./src/**/*.{php,js,ts,html}"],
  theme: {
    extend: {
      fontFamily: {
        mono: ['Iosevka', ...defaultTheme.fontFamily.mono],
        sans: ['Lato', ...defaultTheme.fontFamily.sans]
      },
      colors: {
        dark: "#191A19",
        brand: "#19C384",
        green: {
          dark: "#56682c",
        }
      },
    },
  }
};

/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
  content: ["./src/**/*.{php,ts}"],
  theme: {
    fontFamily: {
      mono: ["Iosevka", ...defaultTheme.fontFamily.mono],
      sans: ["Lato", ...defaultTheme.fontFamily.sans],
    },
    colors: {
      dark: { primary: "#191A19", secondary: "#2A2B2E" },
      light: { primary: "#E8F1F2", secondary: "#19C384" },
      brand: {
        primary: "#19C384",
        dark: "#15A26F",
        light: "#26E39E",
      },
      danger: "#CC2936",
      warning: "#FFDD4A",
      info: "#5ADBFF",
      success: "#256D1B",
    },
  },
};

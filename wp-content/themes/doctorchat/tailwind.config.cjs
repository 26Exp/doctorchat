// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {
        doctorchat: {
          mint: "#A0D2D2",
          turquoise: "#0FA49E",
          red: "#E81F41",
          gray: "#494949",
          blue: "#1C1F62",
          teal: "#007d7a",
        },
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};

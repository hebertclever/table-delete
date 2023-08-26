/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.php"],
  darkMode: 'class',
  theme: {
    extend: {
      screens: {
        'light': {'raw': '(prefers-color-scheme: light)'},
      },
    },
  },
  purge: {
    content: ["./src/**/*.php"],
    options: {
      safelist: ['dark', 'light'],
    },
  },
  plugins: [],
}

module.exports = {
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      blue: {
        light: '#85d7ff',
        DEFAULT: '#2D7DB0',
        dark: '#009eeb',
      }
    }
  },
  plugins: [
    // ...
    require('@tailwindcss/aspect-ratio'),
  ]
}

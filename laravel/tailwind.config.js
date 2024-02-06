// tailwind.config.js

module.exports = {
    purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    darkMode: 'class', // Opcional: habilita el modo oscuro
    theme: {
      extend: {
        fontFamily: {
          sans: ['Figtree', 'sans-serif'],
        },
        colors: {
          transparent: 'transparent',
          current: 'currentColor',
          white: '#ffffff',
          lightdark: '#212226',
          first: '#F2CC85',
          second: '#F2A74B',
          third: '#D98032',
          fourth: '#A65221',
        },
      },
    },
    plugins: [
      require('tailwindcss-plugins/pagination')
    ],
  };
  
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    screens: {
        tablet: '960px',
        desktop: '1248px',
    },
    colors: {
        white: '#fff',
        black: '#353534',
        blue: '#99C4EA',
        blue2: '#6AC2EE',
        red: '#E34C60',
        green: '#9BC463',
        orange: '#EE9427',
    },
    boxShadow:{
        sm: '0px 2px 4px 0px rgba(11, .10, .55, . -0.15)',
        lg: '0px 8px 20px 0px rgba(18, .16, .99, .0.06)',
    },
    fontSize: {
        h1: ['6rem', { lineHeight:'130px', letterSpacing: '-0.05em' }],
        h2: ['2.25rem', { lineHeight:'32px', letterSpacing: '0.05em'}],
        h3: ['1.5rem', {lineHeight:'32px', letterSpacing: '0.50em'}],
    },
    fontFamily: {
        header: 'Satoshi-Black, sans-serif',
        body: 'poppinsregular, sans-serif',
    },
    extend: {},
  },
  plugins: [],
}

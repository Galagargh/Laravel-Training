module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    screens: {
        phone: '840px',
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
        mh1: ['2.5rem', { lineHeight:'50px', letterSpacing: '-0.05em' }],
        mh2: ['2.25rem', { lineHeight:'32px', letterSpacing: '0.05em'}],
        mh3: ['1.5rem', {lineHeight:'32px', letterSpacing: '0.50em'}],
        dh1: ['6rem', { lineHeight:'130px', letterSpacing: '-0.05em' }],
        dh2: ['2.25rem', { lineHeight:'32px', letterSpacing: '0.05em'}],
        dh3: ['1.5rem', {lineHeight:'32px', letterSpacing: '0.50em'}],
    },
    fontFamily: {
        header: 'Satoshi-Black, sans-serif',
        body: 'poppinsregular, sans-serif',
    },
    extend: {},
  },
  plugins: [],
}

module.exports = {
  prefix: "t-", // t-붙이면 tailwind의 부트스트랩을 가져오겠다는 의미
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

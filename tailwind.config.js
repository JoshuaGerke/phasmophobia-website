module.exports = {
    mode: "jit",
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                body,
                sans,
                serif,
                mono,
                display: ["Yahfie", "Arial"],
            },
            backgroundImage: {
                "main-bg": "url(/dist/img/main/cover_back_main)",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};

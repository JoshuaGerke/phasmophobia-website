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
                body: ["Yahfie", "Arial"],
                sans: ["Yahfie", "Arial"],
                serif: ["Yahfie", "Arial"],
                mono: ["Yahfie", "Arial"],
                display: ["Yahfie", "Arial"],
            },
            backgroundImage: {
                "main-bg": "url(/img/main/cover_back_main.png)",
                "main-board": "url(/img/main/back_main.png)",
                "main-board-dev": "url(/img/main/back_main.png)",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};

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
                "main-board-dev": "url(/img/main/back_main2.png)",
                "main-infobox": "url(/img/main/info_box.png)",
                "main-updatebox": "url(/img/main/update_box.png)",
                "button-1": "url(/img/buttons/button1.png)",
                "button-1-hover": "url(/img/buttons/button1_hover.png)",
                "back-button-1": "url(/img/buttons/back_button1.png)",
                "back-button-1-hover":
                    "url(/img/buttons/back_button1_hover.png)",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};

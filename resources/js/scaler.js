let platform;

$(window).on("resize", function () {
    let x = 2048;
    let x2 = window.innerWidth;
    let x3 = x2 / x;
    if (x3 < 0.4) {
        platform = "PHONE";
    } else {
        platform = "DESKTOP";
    }

    if (platform === "DESKTOP") {
        scalePC();
    } else {
    }
});

function scalePC() {
    let x = 2048;
    let y = 1079;

    let x2 = window.innerWidth;
    let y2 = window.innerHeight;

    let x3 = x2 / x;
    let y3 = y2 / y;

    let bw = window.innerWidth;
    let p = bw / x; //WIDTH SCALE
    let m = bw / 32 - 64; //HEIGHT REM
    let hw = window.innerHeight;
    let g = hw / y; //HEIGHT SCALE
    let j = hw / 31.73 - 34; //HEIGHT REM

    if (x3 < y3) {
        $("#main-board").css("transform", `scale(${p})`);
    } else {
        $("#main-board").css("transform", `scale(${g})`);
    }

    $("#main-board").css("left", `${m}rem`);
    $("#main-board").css("top", `${j}rem`);
    $(window).scrollLeft();
    $(window).scrollTop();
}

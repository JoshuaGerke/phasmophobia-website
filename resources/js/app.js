window.$ = require("./vendor/jquery");
window.jQuery = require("./vendor/jquery");
require("./helpers");

let routeName = $("#routeName").val();
if (routeName === "main.start") require("./start");

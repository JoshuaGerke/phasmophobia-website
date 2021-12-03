window.$ = require("./vendor/jquery");
window.jQuery = require("./vendor/jquery");
require("./helpers");
require("./scaler");

let routeName = $("#routeName").val();
if (routeName === "main.start") require("./start");

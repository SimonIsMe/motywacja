var page = require('webpage').create();
page.viewportSize = {
    width: 1200,
    height: 600
};

var system = require('system');
var address = system.args[1]

page.open(address, function(status) {
    console.log("Status: " + status);

    setTimeout(function () {

        var clipRect = document.querySelector('img').getBoundingClientRect();
        page.clipRect = {
            top:    clipRect.top,
            left:   clipRect.left,
            width:  clipRect.width,
            height: clipRect.height
        };

        page.render('screenshot.png');
        phantom.exit();
    }, 1000);
});
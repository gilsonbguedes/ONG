/**
 * @author gilson b.guedes
 */

$(document).ready(function() {
    $("#dialog").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });
    
    $('a').click(function() {
        $("#dialog").dialog("open");
    });



});


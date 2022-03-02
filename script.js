$(function () {

    $.get('php/conn.php',{},
    function (res) {
            console.log(res);    
    });
    
});
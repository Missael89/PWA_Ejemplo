$(function () {

    $.post('php/conn.php',{},
    function (res) {
        console.log(res);    
    });
    
});
$(function () {

    $.get('PWA_Ejemplo/php/conn.php',{},
    function (res) {
            console.log(res);    
    });
    
});
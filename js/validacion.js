$(document).ready( function () {
    capturaDatos();
   
   
});


function capturaDatos() {
    $("#frm_login").on("submit" , function (e) {
        e.preventDefault();
        var frm = $(this).serialize()
        $.ajax({
            "method":"POST",
            "url":"../login/php/usuario.php",
            "data": frm
        }).done(function (data) {

            if (data == 1) {
                $(location).attr('href', '../login/views/index.php')
            } else {
                $('#mensaje').html("<div class='alert alert-danger alert-dismissible fade show'> <button type='button' class='close' 'data-dismiss=alert'>&times;</button><strong>Usuario Invalido!</strong> Verifique Usuario y contraseña");
                
            }
        });
    });
    
}
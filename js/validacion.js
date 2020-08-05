$(document).ready( function () {
    capturaDatos();
    capturaDatosRecu();
   
   
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

function capturaDatosRecu() {
    $("#frm_recu").on("submit" , function (e) {
        e.preventDefault();
        var frm = $(this).serialize()
        console.log(frm)
        $.ajax({
            "method":"POST",
            "url":"../php/recu.php",
            "data": frm
        }).done(function (data) {
            console.log(data);
            if (data == 1 ) {
                $('#mensaje').html("<div class='alert alert-success alert-dismissible fade show'> <button type='button' class='close' 'data-dismiss=alert'>&times;</button><strong>Correo Valido!</strong> Verifique su email");
            } else {
                $('#mensaje').html("<div class='alert alert-danger alert-dismissible fade show'> <button type='button' class='close' 'data-dismiss=alert'>&times;</button><strong>Correo Invalido!</strong> Contacte al administrador");
            }

           
        });
    });
    
}


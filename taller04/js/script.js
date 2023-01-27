function enviar() {
    $.ajax({
        url: './verificar.php',
        type: 'post',
        data: {
            cedula: $('#cedula').val()
        }
    }).done(
        function () {
            $('#cedula').val('');
        }
    );
}

$(document).ready(() => {
    $('.errorCedula').hide();
    $('#formularioCedula').submit(function (evento) {
        
        let cedula = $('#cedula').val().trim();

        if (!cedula.length) {
            $('#vacio').show();
            $('#verificarCantidad').hide();
            evento.preventDefault();
            return;
        }

        if (alfanumerico(cedula)) {
            $('#verificarCantidad').hide();
            $('#vacio').hide();
            alert("No se permiten caracteres alfanumérico");
            $('#cedula').val('');
            evento.preventDefault();
            return;
        }

        if (!validar(cedula)) {
            $('#verificarCantidad').show();
            $('#vacio').hide();
            evento.preventDefault();
            return;
        }

        if ((cedula.length) && (validar(cedula)) && !(alfanumerico(cedula))) {
            $('#enviar').click(enviar);
            enviar();
        }
    })
});

function validar(cedula) {
    let patron = new RegExp(/^[0-9]{10}$/);
    return patron.test(cedula);
}

function alfanumerico(cedula) {
    let patron = new RegExp(/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/);
    return patron.test(cedula);
}
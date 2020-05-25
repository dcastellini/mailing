
function login() {

    debugger;

    var usuario = $('#usuario').val();
    var password = $('#password').val();

    if (usuario == "" || usuario == null){
        $('#titulo').html("Error");
        $('#cuerpo').html("¡Debe ingresar el usuario!");
        $('#modal').modal("show");
    } else if (password == "" || password == null){
        $('#titulo').html("Error");
        $('#cuerpo').html("¡Debe ingresar la contraseña!");
        $('#modal').modal("show");
    } else {
        var data = {'usuario': usuario, 'password': password};
        $.ajax({
            url: baseUrl + '/site/login',
            type: "POST",
            data: data,
            dataType: "html",
            cache: false,
            success: function (response) {
                if (response == "error") {
                    $('#titulo').html("Error");
                    $('#cuerpo').html("¡Datos incorrectos!");
                    $('#modal').modal("show");
                } else {
                    window.location.replace(response);
                }

            }, error: function (e) {
                console.log(e);
            }
        });
    }
}


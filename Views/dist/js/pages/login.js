document.getElementById('formIngresar').addEventListener('submit', async (e) => {
    e.preventDefault();

    try {

        var datos = new FormData(document.getElementById('formIngresar'));
        datos.append('ingresar', 'OK');

        var peticion = await fetch('../Controllers/LoginController.php', {
            method: 'POST',
            body: datos
        })

        var resjson = await peticion.json();

        if (resjson.respuesta == "OK") {
            window.location = "admin.php";
        } else {
            notificarError(resjson.respuesta);
        }

    } catch (error) {
       
    }

})


// variables
const usuario = document.querySelector('#usuario');
const password = document.querySelector('#password');
const btnIniciarSesion = document.querySelector('#iniciarSesion');



// eventListeners
btnIniciarSesion.addEventListener('click', async (e) => {
    e.preventDefault();

    if(!usuario.value || !password.value) {
        Swal.fire({
            icon: 'warning',
            title: 'Advertencia',
            text: 'Debe escribir su Usuario y Contraseña',
        });
        return;
    }

    try {
        const respuesta = await axios.post('php/models/Mlogin.php', {
            usuario : usuario.value,
            password : password.value
        });

        if(respuesta.data.tipo == "success") {
            Swal.fire({
                icon: 'success',
                title: 'Inicio exitoso',
                text: 'Redireccionando espere un momento',
            });

            setTimeout(() => {
                window.location.href = "bienvenida.php";
            }, 1500)
        } else if(respuesta.data.tipo == "warning") {
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'Credenciales invalidas',
            });
        }

    } catch (error) {
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Error interno por parte del servidor',
        });
    }


    
})

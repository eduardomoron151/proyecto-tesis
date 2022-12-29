// variables
const usuario = document.querySelector('#usuario');
const password = document.querySelector('#password');
const btnIniciarSesion = document.querySelector('#iniciarSesion');

const url = window.location;

// eventListeners
btnIniciarSesion.addEventListener('click', async (e) => {
    e.preventDefault();

    if(!usuario.value || !password.value) {
        Swal.fire({
            icon: 'warning',
            title: 'Advertencia',
            text: 'Debe escribir su Usuario y Contraseña',
        });
    }

    try {

        const formData = {
            usuario : usuario.value,
            password : password.value
        }

        const respuesta = await axios.post(url + 'php/models/Mlogin.php', {
            formData
        });

        console.log(respuesta);
        // TODO: manejar respuesta y redirigir a la pagina de bienvenida

        if(respuesta) {
            Swal.fire({
                icon: 'success',
                title: 'Inicio exitoso',
                text: 'Redireccionando espere un momento',
            });

            setTimeout(() => {
                window.location.href = "bienvenida.php";
            }, 1500)
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

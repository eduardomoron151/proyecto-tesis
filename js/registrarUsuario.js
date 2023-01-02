// variables
const nombre = document.querySelector('#nombre');
const apellido = document.querySelector('#apellido');
const cedula = document.querySelector('#cedula');
const usuario = document.querySelector('#usuario');
const password = document.querySelector('#password');
const rol = document.querySelector('#rol');
const registrarUsuario = document.querySelector('#registrarUsuario');

const btnRegistrarUsuario = document.querySelector('#registrarUsuario');

// eventListeners
btnRegistrarUsuario.addEventListener('click', async (e) => {

    e.preventDefault();

    if(!nombre.value || !apellido.value || !cedula.value || !usuario.value || !password.value || !rol.value) {
        Swal.fire({
            icon: 'warning',
            title: 'Advertencia',
            text: 'Debe llenar todos los campos y en el formato correcto',
        });
        return;
    }

    try {

        Swal.fire({
            title: 'Esta seguro que desea agregar el usuario?',
            showCancelButton: true,
            confirmButtonText: 'Guardar',
        }).then(async (result) => {
            if (result.isConfirmed) {

                const respuesta = await axios.post('php/models/Musuario.php', {
                    nombre : nombre.value,
                    apellido : apellido.value,
                    cedula : cedula.value,
                    usuario : usuario.value,
                    password : password.value,
                    rol : rol.value,
                    tipo : 'registrarUsuario'
                });

                console.log(respuesta);
        
                if(respuesta.data.tipo == "success") {
                    Swal.fire(
                        respuesta.data.titulo,
                        respuesta.data.data,
                        respuesta.data.tipo
                    );
                }
                if(respuesta.data.tipo == 'error' || respuesta.data.tipo == 'warning') {
                    Swal.fire(
                        respuesta.data.titulo,
                        respuesta.data.data,
                        respuesta.data.tipo
                    );
                }

            } 
        })

    } catch (error) {
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Error interno por parte del servidor',
        });
    }

})
// variables
const cedulaBuscar = document.querySelector('#cedulaBuscar');
const btnCedulaBuscar = document.querySelector('#btnCedulaBuscar');

const idusuario = document.querySelector('#idusuario');
const usuario = document.querySelector('#usuario');
const cedula = document.querySelector('#cedula');
const nombre = document.querySelector('#nombre');
const apellido = document.querySelector('#apellido');
const password = document.querySelector('#password');
const rol = document.querySelector('#rol');

const actualizarUsuario = document.querySelector('#actualizarUsuario');

// eventlistener
btnCedulaBuscar.addEventListener('click', async(e) => {
    e.preventDefault();

    if(!cedulaBuscar.value) {
        Swal.fire({
            icon: 'warning',
            title: 'Advertencia',
            text: 'Debe indicar una cedula de identidad',
        });
        return;
    }

    try {
        const respuesta = await axios.get('php/models/Musuario.php', {
            params : {
                cedula : cedulaBuscar.value,
                tipo : 'buscarUsuario'
            }
        });

        if(respuesta.data.tipo == 'success') {

            idusuario.value = respuesta.data.data.id_usuarios;
            usuario.value = respuesta.data.data.tx_usuario;
            cedula.value = respuesta.data.data.tx_cedula;
            nombre.value = respuesta.data.data.tx_nombre;
            apellido.value = respuesta.data.data.tx_apellido;
            password.value = respuesta.data.data.tx_password;
            rol.value = respuesta.data.data.id_rol;

            document.querySelector('.usuario-auditoria').style.visibility = "visible";
        }

        if(respuesta.data.tipo == 'error' || respuesta.data.tipo == 'warning') {
            document.querySelector('.usuario-auditoria').style.visibility = "hidden";

            Swal.fire(
                respuesta.data.titulo,
                respuesta.data.data,
                respuesta.data.tipo
            );
        }
    } catch (error) {
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Error interno por parte del servidor',
        });
    }
});


actualizarUsuario.addEventListener('click', async(e) => {
    e.preventDefault();

    try {

        Swal.fire({
            title: 'Esta seguro que desea actualizar el usuario?',
            showCancelButton: true,
            confirmButtonText: 'Guardar',
        }).then(async (result) => {
            if(result.isConfirmed) {
                const respuesta = await axios.post('php/models/Musuario.php', {
                    idusuario : idusuario.value,
                    nombre : nombre.value,
                    apellido : apellido.value,
                    cedula : cedula.value,
                    usuario : usuario.value,
                    password : password.value,
                    rol : rol.value,
                    tipo : 'actualizarUsuario'
                });
        
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
        } )

    } catch (error) {
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Error interno por parte del servidor',
        });
    }

})
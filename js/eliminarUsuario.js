// variables
const cedulaBuscar = document.querySelector('#cedulaBuscar');
const btnCedulaBuscar = document.querySelector('#btnCedulaBuscar');

const idusuario = document.querySelector('#idusuario');
const usuario = document.querySelector('#usuario');
const cedula = document.querySelector('#cedula');
const nombre = document.querySelector('#nombre');
const apellido = document.querySelector('#apellido');
const rol = document.querySelector('#rol');
const fe_creacion = document.querySelector('#fe_creacion');
const fe_actualizacion = document.querySelector('#fe_actualizacion');

const eliminarUsuario = document.querySelector('#eliminarUsuario');

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
            usuario.innerHTML = respuesta.data.data.tx_usuario;
            cedula.innerHTML = respuesta.data.data.tx_cedula;
            nombre.innerHTML = respuesta.data.data.tx_nombre;
            apellido.innerHTML = respuesta.data.data.tx_apellido;
            rol.innerHTML = respuesta.data.data.rol;
            rol.innerHTML = respuesta.data.data.rol;
            fe_actualizacion.innerHTML = respuesta.data.data.fe_actualizacion;

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

eliminarUsuario.addEventListener('click', async(e) => {
    e.preventDefault();

    try {

        Swal.fire({
            title: 'Esta seguro que desea eliminar el usuario?',
            showCancelButton: true,
            confirmButtonText: 'Eliminar',
        }).then(async (result) => {
            if (result.isConfirmed) {

                const respuesta = await axios.post('php/models/Musuario.php' ,{
                    idusuario : idusuario.value,
                    tipo : 'eliminarUsuario'
                });
        
                if(respuesta.data.tipo == "success") {
                    Swal.fire(
                        respuesta.data.titulo,
                        respuesta.data.data,
                        respuesta.data.tipo
                    );
                    document.querySelector('.usuario-auditoria').style.visibility = "hidden";
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
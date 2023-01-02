// variables
const cedulaBuscar = document.querySelector('#cedulaBuscar');
const btnCedulaBuscar = document.querySelector('#btnCedulaBuscar');

const usuario = document.querySelector('#usuario');
const cedula = document.querySelector('#cedula');
const nombre = document.querySelector('#nombre');
const apellido = document.querySelector('#apellido');
const rol = document.querySelector('#rol');
const fe_creacion = document.querySelector('#fe_creacion');
const fe_actualizacion = document.querySelector('#fe_actualizacion');




// eventListener
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

            usuario.innerHTML = respuesta.data.data.tx_usuario;
            cedula.innerHTML = respuesta.data.data.tx_cedula;
            nombre.innerHTML = respuesta.data.data.tx_nombre;
            apellido.innerHTML = respuesta.data.data.tx_apellido;
            fe_creacion.innerHTML = respuesta.data.data.fe_creacion;
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


})

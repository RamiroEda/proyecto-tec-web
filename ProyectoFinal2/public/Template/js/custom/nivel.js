function modificarPlantel(id,nivel,comentario) {
    document.getElementById('nivel2').value = nivel;
    document.getElementById('comentario2').value = comentario;
    document.getElementById('Id').value = id;
}

function eliminarPlantel(id,nombre) {
    var mensaje = "¿Está seguro de eliminar "+nombre+" permanentemente?";
    document.getElementById('mensaje').innerHTML = mensaje;
    document.getElementById('nivelElmID').value = id;
}

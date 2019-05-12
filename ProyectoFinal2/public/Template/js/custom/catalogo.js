function modificarPlantel(id,nombre,clave,comentario) {
    document.getElementById('NombrePlantel2').value = nombre;
    document.getElementById('ClaveSEP2').value = clave;
    document.getElementById('comentario2').value = comentario;
    document.getElementById('plantelId').value = id;
}

function eliminarPlantel(id,nombre) {
    var mensaje = "¿Está seguro de eliminar "+nombre+" permanentemente?";
    document.getElementById('mensaje').innerHTML = mensaje;
    document.getElementById('plantelElmID').value = id;
}

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

/*----------------------------------Semestre----------------------------------*/
function modificarSemestre(id,semestre,comentario) {
    document.getElementById('semestre2').value = semestre;
    document.getElementById('comentario2').value = comentario;
    document.getElementById('semestreID').value = id;
}

function eliminarSemestre(id,semestre) {
    var mensaje = "¿Está seguro de eliminar el semestre "+semestre+" permanentemente?";
    document.getElementById('mensaje').innerHTML = mensaje;
    document.getElementById('elmSemestre').value = id;
}

/*-----------------------------------Nivel-----------------------------------*/
function modificarNivel(id,nivel,comentario) {
    document.getElementById('nivel2').value = nivel;
    document.getElementById('comentario2').value = comentario;
    document.getElementById('Id').value = id;
}
function eliminarNivel(id,nombre) {
    var mensaje = "¿Está seguro de eliminar "+nombre+" permanentemente?";
    document.getElementById('mensaje').innerHTML = mensaje;
    document.getElementById('nivelElmID').value = id;
}

function modificarPlantel(id,nombre,clave,comentario) {
    document.getElementById('plantelId').value = id;
    document.getElementById('NombrePlantel2').value = nombre;
    document.getElementById('ClaveSEP2').value = clave;
    document.getElementById('comentario2').value = comentario;
}

function eliminarPlantel(id,nombre) {
    var mensaje = "¿Está seguro de eliminar "+nombre+" permanentemente?";
    document.getElementById('plantelElmID').value = id;
    document.getElementById('mensaje').innerHTML = mensaje;
}

/*----------------------------------Semestre----------------------------------*/
function modificarSemestre(id,semestre,comentario) {
    document.getElementById('semestreID').value = id;
    document.getElementById('semestre2').value = semestre;
    document.getElementById('comentario2').value = comentario;
}

function eliminarSemestre(id,semestre) {
    var mensaje = "¿Está seguro de eliminar el semestre "+semestre+" permanentemente?";
    document.getElementById('elmSemestre').value = id;
    document.getElementById('mensaje').innerHTML = mensaje;
}

/*-----------------------------------Nivel-----------------------------------*/
function modificarNivel(id,nivel,comentario) {
    document.getElementById('nivel2').value = nivel;
    document.getElementById('Id').value = id;
    document.getElementById('comentario2').value = comentario;
}
function eliminarNivel(id,nombre) {
    var mensaje = "¿Está seguro de eliminar "+nombre+" permanentemente?";
    document.getElementById('nivelElmID').value = id;
    document.getElementById('mensaje').innerHTML = mensaje;
}

/*-----------------------------------Grupo-----------------------------------*/

function modificarGrupo(id,grupo,semestre,nivel,comentario) {
    document.getElementById('GrupoID').value = id;
    document.getElementById('grupo2').value = grupo;
    document.getElementById('nivel2').value = nivel-1;
    document.getElementById('semestre2').value = semestre-1;
    document.getElementById('comentario2').value = comentario;
}

function eliminarGrupo(id,grupo) {
    var mensaje = "¿Estas seguro de eliminar el grupo "+grupo+" permanentemente?";
    document.getElementById('elmGrupo').value = id;
    document.getElementById('mensaje').innerHTML = mensaje;
}

/*--------------------------------tipoPractica--------------------------------*/
function modificarTipoPractica(id,tipo,comentario) {
    document.getElementById('tipoPracID').value = id;
    document.getElementById('tipoPrac2').value = tipo;
    document.getElementById('comentario2').value = comentario;
}

function eliminarTipoPractica(id,tipo) {
    var mensaje = "¿Estas seguro de eliminar el tipo de practica "+tipo+" permanentemente?";
    document.getElementById('elmTipoPractica').value = id;
    document.getElementById('mensaje').innerHTML = mensaje;
}

/*-----------------------------entidadFederativa-----------------------------*/
function modificarEntidadFederativa(id,entidad,comentario) {
    document.getElementById('entidadID').value = id;
    document.getElementById('entfed2').value = entidad;
    document.getElementById('comentario2').value = comentario;
}

function eliminarEntidadFederativa(id,entidad) {
    var mensaje = "¿Estas seguro de eliminar la enidad "+entidad+" permanentemente?";
    document.getElementById('elmEntidad').value = id;
    document.getElementById('mensaje').innerHTML = mensaje;
}
/*------------------------------------------------------------------------*/
function modificarGrupo(id,comentario, grupo) {
  document.getElementById('Id').value = id;
    document.getElementById('grupo2').value = grupo;
    document.getElementById('comentario2').value = comentario;
}
function eliminarGrupo(id,nombre) {
    var mensaje = "¿Está seguro de eliminar el grupo "+nombre+" permanentemente?";
    document.getElementById('mensaje').innerHTML = mensaje;
    document.getElementById('grupoElmID').value = id;
}

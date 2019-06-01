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
/*------------------------------UnidadAprendizaje--------------------------------------------*/
function UA(idUa,idIM,nombre,comentario) {
    document.getElementById('UnidadID').value = idUa;
    document.getElementById('ImparteID').value = idIM;
    document.getElementById('nombre2').value = nombre;
    document.getElementById('comentario2').value = comentario;
}

function eUA(idUA,idIM,entidad) {
    var mensaje = "¿Estas seguro de eliminar la unida de aprendizaje "+entidad+" permanentemente?";
    document.getElementById('UnidadIDel').value = idUA ;
    document.getElementById('ImparteIDel').value = idIM ;
    document.getElementById('wop').innerHTML = mensaje;
}
/*------------------------------Profesor--------------------------------------------*/
function modificarProfesor(usuario,id,nombre,comentario) {
    document.getElementById('clave2').value = usuario;
    document.getElementById('nombre2').value = nombre;
    document.getElementById('comentario2').value = comentario;
    document.getElementById('wop').value = id;
}

function eliminarProfe(idUA,idIM,entidad) {
    var mensaje = "¿Estas seguro de eliminar al profesor "+entidad+" permanentemente?";
    document.getElementById('porfeDel').value = idUA ;
    document.getElementById('UserDel').value = idIM ;
    document.getElementById('mensaje').innerHTML = mensaje;
}

/*----------------------------------Prcticas----------------------------------*/
function modificarPractica(id,nombre,descripcion,programa,semestre,grupo,tipo,
                           estrategias,competencia,ua,noPractica,objetivo,
                           entidad,institucion,profesor,fecha,alumnos,presupesto) {
    //window.alert(grupo);
    document.getElementById('practicaID').value = id;
    document.getElementById('nombre2').value = nombre;
    document.getElementById('descripcion2').value = descripcion;
    document.getElementById('programa2').value = programa;
    document.getElementById('semestre2').value = semestre;
    document.getElementById('grupo2').value = grupo;
    document.getElementById('tipo2').value = tipo;
    document.getElementById('estrategia2').value = estrategias;
    document.getElementById('compentencia2').value = competencia;
    document.getElementById('ua2').value = ua;
    document.getElementById('noPractica2').value = noPractica;
    document.getElementById('objetivo2').value = objetivo;
    document.getElementById('entidad2').value = entidad;
    document.getElementById('institucion2').value = institucion;
    document.getElementById('profesor2').value = profesor;
    document.getElementById('fecha2').value = formatoFecha(fecha);;
    document.getElementById('alumnos2').value = alumnos;
    document.getElementById('presupuesto2').value = presupesto;
}

function eliminarPractica(id,practica) {
    var mensaje = "¿Estas seguro de eliminar la practica "+practica+" permanentemente?";
    document.getElementById('practicaElmID').value = id ;
    document.getElementById('mensaje').innerHTML = mensaje;
}

function formatoFecha(fecha) {
    var info = fecha.split('-');
    return info[2] + '/' + info[1] + '/' + info[0];
 }

 /*----------------------------------Nominas----------------------------------*/

 function displayNomina(id, alumnos){
    $("#id_practica").val(id);
    let tabla = $("#seguro").DataTable();
    tabla.clear();

    tabla.rows.add(alumnos.map((val) => {
        console.log(val);
        
        return [val.nombre, val.email, '<button type="submit" class="btn btn-primary btn-danger" data-toggle="modal"'+
                            'data-target="#exampleModalCenter" onclick="deleteAlumnoNomina(\''+val.id+'\', \''+id+'\')">'+
                            '<span class="glyphicon glyphicon-trash">Eliminar</span>'+
                        '</button>'];
    }));

    tabla.draw();
 }

 function deleteAlumnoNomina(idAlumno, idPractica){
    $("#delPractica").val(idPractica);
    $("#delUsuario").val(idAlumno);

    $("#delForm").submit();
 }
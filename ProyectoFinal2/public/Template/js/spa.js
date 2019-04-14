function cambiarPagina(url, method, data){
    if(method == undefined) method = "get";

    $.ajax({
        method: method,
        url: url,
        data: data
    }).done((html) => {
        $("#spa-content").html(html);
    });
}

cambiarPagina("/tabla");
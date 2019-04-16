function cambiarPagina(url, method, data){
    if(method == undefined) method = "get";

    // elemento de loading

    $("#spa-content").html(
        '<div style="width: 100%">' +
        '   <div style="margin: 0 50% 0 50%" class="spinner-grow text-success" role="status">' +
        '       <span class="sr-only">Loading...</span>' +
        '   </div>' +
        '</div>'
    );

    $.ajax({
        method: method,
        url: url,
        data: data
    }).done((html) => {
        $("#spa-content").html(html);
    });
}

cambiarPagina("/tabla");
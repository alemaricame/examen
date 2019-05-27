window.addEventListener('load', function() {
    var idprofesor = document.getElementById('idprofesor').value;

    $.ajax({
        type:'GET',
        url:"http://localhost/examen/index.php/login/materias",
        dataType: "JSON",
        success:  function (data) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            console.log("enviado",data);
            var html = '';
            var i;

            for(i=0;i<data.length;i++){
                html += '<tr>'+
                '<td>'+data[i].idgrupo+'</td>'+
                '<td>'+data[i].idmateria+'</td>'+
                '<td>'+'<acromym title="Subir examen"><button id="examensubida" class="sub"><i class="material-icons">unarchive</i></button><acromym title="Descargar calificaciones"><button ><i class="material-icons">assignment_returned</i></button>'+'</td>'+
                '</tr>';
            }
            $('#datamat').html(html);

        }
    });
    console.log(idprofesor);
    $('#altam').on('click', function() {
        $("#materia").modal();
    });
    
    $('#table').on('click','.sub', function() {
        $("#sexamen").modal();
    });

});

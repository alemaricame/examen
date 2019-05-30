window.addEventListener('load', function() {
    


    
    /* ENVIAR DATOS A INSERTAR */
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

        /* OBTENER LISTA DE ALUMNOS */

        var X = XLSX;
        var XW = {
            /* worker message */
            msg: 'xlsx',
            /* worker scripts */
            worker: 'http://localhost/examen/js/xlsxworker.js'
        };
    
            var global_wb;
    
        var process_wb = (function() {
        var OUT = document.getElementById('out');
        var HTMLOUT = document.getElementById('htmlout');
    
        console.log(OUT);
    
        var to_json = function to_json(workbook) {
            var result = {};
            workbook.SheetNames.forEach(function(sheetName) {
                var roa = X.utils.sheet_to_json(workbook.Sheets[sheetName], {header:1});
                if(roa.length) result[sheetName] = roa;
            });
            var variable = result['Hoja1'];
            $('#subirmat').on('click', function() {
                var idprofesor = document.getElementById('idprofesor').value;
                var idmateria=document.getElementById('idmateria').value;
                var nombremat = document.getElementById('nombremat').value;
                var idgrupo=document.getElementById('idgrupo').value;
                var materias={
                    "idprofesor":idprofesor,
                    "idmateria":idmateria,
                    "nombremat":nombremat,
                    "idgrupo":idgrupo,
                }
                console.log("datosmaterias",materias);
                $.ajax({
                    type:'POST',
                    url:"http://localhost/examen/index.php/login/altamateria",
                    dataType: "JSON",
                    data : {data:materias}
                }).done(function(resp){
                    console.log("ingresado");
                });
            for(i=1;i<variable.length;i++){
               
                var idmateria=document.getElementById('idmateria').value;
                var idgrupo=document.getElementById('idgrupo').value;
                var matricula = variable[i][0];
                var nombre = variable[i][1];
                    
                    console.log("subirmat");
                    
                    console.log("materia",idmateria);
                var datos={
                    "idmateria":idmateria,
                    "idgrupo":idgrupo,
                    "matricula":matricula,
                    "nombre":nombre
                }
                console.log("datos",datos);


                    $.ajax({
                        type:'POST',
                        url:"http://localhost/examen/index.php/login/alumnos",
                        dataType: "JSON",
                        data : {data:datos}
                    }).done(function(resp){
                        console.log("ingresado");
                    });
             
                    
              
            
            }
       
            return JSON.stringify(variable);
        });
        };
    
        return function process_wb(wb) {
            global_wb = wb;
            var output = to_json(wb);
            if(OUT.innerText === undefined) OUT.textContent = output;
            else OUT.innerText = output;
            if(typeof console !== 'undefined') console.log("output", new Date());
        };
        })();
    
        var do_file = (function() {
        var rABS = typeof FileReader !== "undefined" && (FileReader.prototype||{}).readAsBinaryString;
        var domrabs = document.getElementsByName("userabs")[0];
        console.log("dim",domrabs);
        if(!rABS) domrabs.disabled = !(domrabs.checked = false);
    
        var use_worker = typeof Worker !== 'undefined';
        var domwork = document.getElementsByName("useworker")[0];
        console.log("usemorker",domwork);
        if(!use_worker) domwork.disabled = !(domwork.checked = false);
    
        var xw = function xw(data, cb) {
            var worker = new Worker(XW.worker);
            worker.onmessage = function(e) {
                switch(e.data.t) {
                    case 'ready': break;
                    case 'e': console.error(e.data.d); break;
                    case XW.msg: cb(JSON.parse(e.data.d)); break;
                }
            };
            worker.postMessage({d:data,b:rABS?'binary':'array'});
        };
    
        return function do_file(files) {
            rABS = true;
            use_worker = true;
            var f = files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                if(typeof console !== 'undefined') console.log("onload", new Date(), rABS, use_worker);
                var data = e.target.result;
                if(!rABS) data = new Uint8Array(data);
                if(use_worker) xw(data, process_wb);
                else process_wb(X.read(data, {type: rABS ? 'binary' : 'array'}));
            };
            if(rABS) reader.readAsBinaryString(f);
            else reader.readAsArrayBuffer(f);
            };
        })();

            (function() {
                var xlf = document.getElementById('xlf');
                if(!xlf.addEventListener) return;
                function handleFile(e) { do_file(e.target.files); }
                xlf.addEventListener('change', handleFile, false);
            })();
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36810333-1']);
            _gaq.push(['_trackPageview']);
    
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
  
       
/* FIN DE OBTENER LISTA DE ALUMNOS */
});

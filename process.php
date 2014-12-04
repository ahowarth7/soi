<?php
error_log(print_r($_REQUEST,1));

if($_REQUEST['accion'] == 'login'){
   //consulta sql
    if ($_REQUEST['username'] === 'josue')
       echo '{"resultado":true,"mensaje":"ok","nombre_usuario": "josue","id_usuario":"1", "nivel":"1"}';
    else
        echo '{"resultado":false,"mensaje":"USUARIO NO ENCONTRADO"}';
}
	else if($_REQUEST['accion'] == 'ver_documento')
?>			
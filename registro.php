<?php 

include"conexion.php";

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['PrimerNombre']) || empty($_POST['SegundoNombre']) || empty($_POST['PrimerApellido']) || empty($_POST['SegundoApellido']) || empty($_POST['Dpi']) || empty($_POST['Sexo']) || empty($_POST['Edad']) || empty($_POST['Municipio']) || empty($_POST['Departamento']) || empty($_POST['Pais']) ||empty($_POST['Fecha'])|| empty($_POST['Tipopago']) || empty($_POST['Cantidad']) || empty($_POST['Noboleta']))
{
    $alert='<p class="msg_error"> todos los campos son obligatorios</p>';
} else{
    
    $PrimerNombre =$_POST['PrimerNombre'];
    $SegundoNombre =$_POST['SegundoNombre'];
    $PrimerApellido =$_POST['PrimerApellido'];
    $SegundoApellido =$_POST['SegundoApellido'];
    $Dpi =$_POST['Dpi'];
    $Sexo =$_POST['Sexo'];
    $Edad =$_POST['Edad'];
    $Municipio =$_POST['Municipio'];
    $Departamento =$_POST['Departamento'];
    $Pais =$_POST['Pais'];
    $Fecha=$_POST['Fecha'];
    $Tipopago=$_POST['Tipopago'];
    $Cantidad =$_POST['Cantidad'];
    $Noboleta =$_POST['Noboleta'];
    
    $sql = "INSERT INTO covid(PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Dpi,Sexo,Edad,Municipio,Departamento,Pais,Fecha,Tipopago,Cantidad,Noboleta)
        VALUES('$PrimerNombre','$SegundoNombre','$PrimerApellido','$SegundoApellido','$Dpi','$Sexo','$Edad','$Municipio','$Departamento','$Pais','$Fecha','$Tipopago','$Cantidad','$Noboleta')";
    $query_insert = mysqli_query($conection, $sql);
    if($query_insert){
        $alert='<p class="msg_save">Registro creado correctamente. </p>';
    }else{
        $alert='<p class="msg_error">Error al crear registro</p>' . mysqli_error($conection);
    }

}


}
?>
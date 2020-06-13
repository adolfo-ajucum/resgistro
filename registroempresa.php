<?php 

include"conexion.php";

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['nombre']) || empty($_POST['nit']) || empty($_POST['departamento']) || empty($_POST['pais']) || empty($_POST['fecha']) || empty($_POST['tipopago']) || empty($_POST['cantidad']) || empty($_POST['noboleta']))
{
    $alert='<p class="msg_error"> todos los campos son obligatorios</p>';
} else{
    
    $Nombre =$_POST['nombre'];
    $Nit =$_POST['nit'];
   $Departamento =$_POST['departamento'];
    $Pais =$_POST['pais'];
    $Fecha=$_POST['fecha'];
     $Tipopago=$_POST['tipopago'];
      $Cantidad =$_POST['cantidad'];
    $Noboleta =$_POST['noboleta'];
    $sql = "INSERT INTO empresa(Nombre,Nit,Departamento,Pais,Fecha,Tipopago,Cantidad,Noboleta)
        VALUES('$Nombre','$Nit','$Departamento','$Pais','$Fecha','$Tipopago','$Cantidad','$Noboleta')";
    $query_insert = mysqli_query($conection, $sql);
    if($query_insert){
        $alert='<p class="msg_save">Registro creado correctamente. </p>';
    }else{
        $alert='<p class="msg_error">Error al crear registro</p>' . mysqli_error($conection);
    }

}


}
?>
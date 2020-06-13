<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<
<?php
include"registro.php";
include"conexion.php";
?>
<div class="container register">
<form action="" method="POST">
                <div class="row">
                         <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="home" aria-selected="true">PERSONAL</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="empresa.php" id="profile-tab" data-toggle="tab" href="empresa.php" role="tab" aria-controls="profile" aria-selected="false">EMPRESA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reporte.php" id="profile-tab" data-toggle="tab" href="reporte.php" role="tab" aria-controls="profile" aria-selected="false" >Estadistica Donantes</a>
                        </ul>
                            <h3 class="register-heading" ></h3>
                            <table>
                        <div class="tab-content" id="myTabContent">
                                     <table class="table table-bordered table-dark">
                                       <th scope="col">PERSONA </th>
                                     
                                    <?php
                                    $query= mysqli_query($conection,"select count(*) as covidpersonal from covid");
                                    $result=mysqli_num_rows($query);
                                    if($result > 0){
                                        while($data= mysqli_fetch_array($query)){
                                    ?>
                                    <td><?php echo $data["covidpersonal"]; ?></td>
                                       <?php 
                                       }
                                    }
                                    ?>       
                                     
                                       <th scope="col">EFECTIVO TOTAL APORTE PERSONAL</th>
                                    <?php
                                    $query= mysqli_query($conection,"SELECT SUM(Cantidad) AS SUMA FROM covid GROUP by Pais");
                                    $result=mysqli_num_rows($query);
                                    if($result > 0){
                                       while($data= mysqli_fetch_array($query)){
                                    ?>
                                    <td><?php echo $data["SUMA"]; ?></td>
                                       <?php 
                                       }
                                    }
                                    ?>

                                     <table class="table table-bordered table-dark">
                                       <th scope="col">EMPRESA</th>
                                    <?php
                                    $query= mysqli_query($conection,"select count(*) as covidempresa from empresa");
                                    
                                    $result=mysqli_num_rows($query);
                                    if($result > 0){
                                       while($data= mysqli_fetch_array($query)){
                                    ?>
                                    <td><?php echo $data["covidempresa"]; ?></td>
                                       <?php 
                                       }
                                    }
                                    ?>
                                  
                                       <th scope="col">EFECTIVO TOTAL APORTE EMPRESA</th>
                                     
                                    <?php
                                    $query= mysqli_query($conection,"SELECT SUM(Cantidad) AS SUMA FROM empresa GROUP by Pais");
                                    
                                    $result=mysqli_num_rows($query);
                                    if($result > 0){
                                       while($data= mysqli_fetch_array($query)){
                                    ?>
                                    <td><?php echo $data["SUMA"]; ?></td>
                                       <?php 
                                       }
                                    }
                                    ?>
                                    </tbody>
                                    
                                 <br>       
                               </div>
                                    </div>
                                  <h3 class="register-heading">Listado de aporte por fecha</h3>
                        <div class="tab-content" id="myTabContent">
                      
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 <center>
                                    <br>
                                     <br>
                                      <br>
                                     <table class="table table-bordered table-dark">
                                    
                                     <thead >
                                       <tr>
                                        <th scope="col">Pais </th>
                                       <th scope="col">Fecha </th>
                                       <th scope="col">Tipo pago </th>
                                       <th scope="col">Cantidad</th>
                                       
                                       </thead>
                                     
                                         <tbody>
                                       </tr>
                                    <?php
                                    $query= mysqli_query($conection,"SELECT *FROM covid");
                                    
                                    $result=mysqli_num_rows($query);
                                    if($result > 0){
                                        while($data= mysqli_fetch_array($query)){
                                    
                                    ?>
                                    <tr>
                                    <td><?php echo $data["Pais"]; ?></td>
                                    <td><?php echo $data["Fecha"]; ?></td>
                                    <td><?php echo $data["Tipopago"]; ?></td>
                                    <td><?php echo $data["Cantidad"]; ?></td>
                                    
                                    </tr>
                                       <?php 
                                       }
                                    }
                                    ?>























                                    </table>
                                  </form>
                                </div>
            
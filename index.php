<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->
<?php
include"registro.php"
?>

<div class="container register">
<form action="" method="POST">

                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Bienvenido</h3>
                        <p>Colaboradores ante la pandemia de covid_19, complete todas las casillas! umg2020</p>
                        <br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php" id="home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="home" aria-selected="true">PERSONAL</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="empresa.php" id="profile-tab" data-toggle="tab" href="empresa.php" role="tab" aria-controls="profile" aria-selected="false">EMPRESA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reporte.php" id="profile-tab" data-toggle="tab" href="reporte.php" role="tab" aria-controls="profile" aria-selected="false" >EstadisticaDonantes</a>
                           
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">REGISTRO PERSONA INDIVIDUAL</h3>
                                <div class="row register-form">
                                <div class= "alert"><?php echo isset($alert) ? $alert: ''; ?> </div>
                                    <div class="col-md-6">
                                    <br>
                                        <div class="form-group">
                                            <input type="text" name="PrimerNombre" class="form-control" placeholder="Primer Nombre *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="SegundoNombre"class="form-control" placeholder="Segundo Nombre *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="PrimerApellido"class="form-control" placeholder="Pimer Apellido *" value=""required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="SegundoApellido"class="form-control" placeholder="Segundo Apellido *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="Dpi"class="form-control" placeholder="dpi" value="" required/>
                                        </div>
                                        <div class="form-group" required>
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="Sexo" value="Masculino" checked>
                                                    <span> Masculino </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="Sexo" value="Femenino">
                                                    <span>Femenino </span>
                                                    </label>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <br>
                                            <input type="number" name="Edad"class="form-control" placeholder="Edad *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Municipio"class="form-control" placeholder="Municipio *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Departamento"class="form-control" placeholder="Departamento *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Pais"class="form-control" placeholder="Pais *" value=""required />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="Fecha"class="form-control" placeholder="Fecha *" value="" required/>
                                        </div>
                                         <div class="form-group">
                                            <div class="maxl" required>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="Tipopago" value="deposito" checked>
                                                    <span> Deposito </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="Tipopago" value="Efectivo" >
                                                    <span>efectivo </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="Cantidad"class="form-control" placeholder="cantidad" value="" required/>
                                        </div>
                                    
                                        <div class="form-group">
                                            <input type="number" name="Noboleta"class="form-control" placeholder="noboleta" value="" required/>
                                        </div>
                                         <input type="submit" class="btnRegister"  value="Registrar" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</form>
            </div>
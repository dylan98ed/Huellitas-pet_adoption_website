<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiero Adoptar</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <!-- <link rel="stylesheet" type="text/css" href="css/header2.css"> -->
    <link rel="stylesheet" type="text/css" href="css/header-nav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_adopciones.css">
    <!-- footer -->
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-ligh header-Nav">
        <div class="container-fluid">
                <div class="icon-nav">
                    <a class="navbar-brand" href="index.html">Huellitas </a>
                    <img src="svg/huella.svg" id="img-nav" alt="123">
                </div>
            <button class="navbar-toggler nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon nav-btn"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adopciones.php">Quiero adoptar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.html">Quiero poner en adopcion</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle bg_header" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Consejos de adopcion
                        </a>
                        <ul class="dropdown-menu bg_header " aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item bg_hover" href="consejosadopcion.html">Primeros dias</a></li>
                            <li><a class="dropdown-item bg_hover" href="consejosadopcion.html">Castracion</a></li>
                            <li>
                                <a class="dropdown-item bg_hover" href="consejosadopcion.html">Alimentacion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <div class="item">
        <?php
            require_once("php/conexion.php");
            $conn=new conexion();
            $querySELECT="SELECT * FROM `mascotas`";
            $result= mysqli_query($conn->conectardb(),$querySELECT);
            ?>
            
                <h2>Mascotas que esperan por vos</h2>
                <?php
                    while($row = mysqli_fetch_array($result)){
                ?>
                <table>
                <tr>
                    <td rowspan="5" style="width: 200px;" ><img class="imagen" height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                    <td><strong>Nombre:</strong> <?php echo $row['nombre']; ?> </td>
                    <td><strong>Tipo:</strong> <?php  echo $row['tipo']; ?> </td>
                    <td><strong>Edad:</strong> <?php  echo $row['edad']; ?> </td>
                    <td rowspan="5"><a id=button_adoptar href="mailto:<?php  echo $row['mail']; ?>">Quiero Adoptar</a></td>
                </tr>
                <tr>
                    <td><strong>Sexo:</strong> <?php echo $row['sexo']; ?> </td>
                    <td><strong>Castrado:</strong> <?php echo $row['castrado']; ?> </td>
                    <td><strong>¿Tiene antecedentes médicos?:</strong> <?php echo $row['condicion_medica']; ?> </td>
                </tr>
                <tr>
                    <td colspan="3"><strong>Antecedentes medicos:</strong> <?php echo $row['cond_medica_descripcion']; ?> </td>
                </tr>
                <tr>
                    <td><strong>Dueño:</strong> <?php echo $row['dueño_nombre']; ?> </td>
                    <td colspan="2"><strong>Localidad:</strong> <?php echo $row['localidad']; ?> </td>
                </tr>
                <tr>
                    <td colspan="3"><strong>Comentarios:</strong> <?php echo $row['comentarios']; ?> </td>
                </tr>
                </table>
                <?php
                    }
                ?>
            
    </div>
    

<a href="index.html" id="button_volver">Volver al Inicio</a>
<footer class="footer" id="ContactoFooter">
    <div class="sec1">
                
        <div class="box">
            <!-- <i class="fa-solid fa-code"></i> -->
            <h4>Proyecto Colaborativo</h4>
            <p>Este proyecto nace con la necesidad de crear un entorno de trabajo y poner en practica lo aprendido</p>
        </div>
        <div class="box">
            <h4>Integrantes</h4>
            <ul>
                <li><a href="https://www.linkedin.com/in/ana-laura-burgos/" target="_blank">Burgos Laura</a></li>
                <li><a href="https://www.linkedin.com/in/juana-jauregui-88a58b143/" target="_blank">Jauregui Juana</a></li>
                <li><a href="https://www.linkedin.com/in/santiago-l-martinez/" target="_blank">Martinez Santiago</a></li>
                <li><a href="https://www.linkedin.com/in/jose-luis-perez-huanca-361775229/" target="_blank">Perez Huanca Jose</a></li>
                <li><a href="https://www.linkedin.com/in/dylanquiroga/" target="_blank">Quiroga Dylan</a></li>
                <li><a href="https://www.linkedin.com/in/rossiantonella702/" target="_blank">Rossi Antonella</a></li>
            </ul>
        </div>
        <div class="box socialMedia">
            <h4>Redes Sociales</h4>

            <!-- FALTA agregar redes sociales -->
            <!-- FALTA TRABAJAR PALETA DE COLORES -->
            
            <!-- facebook -->
            <a href="#"><i class="footer-icon fa-brands fa-facebook"></i></a>
            <!-- github -->
            <a href="" class="footer-icon" ><i class="footer-icon fa-brands fa-github"></i></a>
            <!-- linkedin -->
            <a href=""><i class="footer-icon fa-brands fa-linkedin"></i></a>
            <!-- Phone -->
            <a href=""><i class="footer-icon fa-solid fa-square-phone"></i></a>
            <!-- Instagram -->
            <a href=""><i class="footer-icon fa-brands fa-instagram-square"></i></a>
        </div>
    </div>
    <div class="sec2">
        <small>&copy; 2022 <b>Grupo 2</b> - Powered by <a href="http://www.pescar.org.ar/" target="_blank">Fundacion Pescar</a> & <a href="https://www.jpmorgan.com/AR/en/about-us" target="_blank">J.P.Morgan</a> </small>
    </div>
</footer>
<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- scripts -->
<script src="js/mascota.js"></script>
<script src="js/main.js"></script>
</body>
</html>
<?php
session_start();
if (empty($_COOKIE['PHPSESSID'])) {
    header('Location: login.php');
} else {
    if (isset($_REQUEST['salir'])) {
        session_destroy();
        header('Location: login.php');
        exit;
    }
    if (isset($_REQUEST['detalle'])) {
        header('Location: detalle.php');
        exit;
    }
}
?>


<html>

    <head>
        <meta charset="UTF-8">
        <title>LOGIN / LOGOFF</title>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
        <link href="../weboroot/css/estilos-programa.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div class="container">
            <?php 
            
            echo 'Bienvenido: '.$_SESSION['usuario']->T01_DescUsuario;
            echo '<br>';
            if($_SESSION['usuario']->T01_NumConexiones == 1){
                echo 'Esta es la primera vez que te conectas';
            }else{
                echo 'Te has conectado: '.$_SESSION['usuario']->T01_NumConexiones.' veces';
            }
            ?>

            <form>
                <input type="submit" name="salir" value="Salir" >

                <input type="submit" name="detalle" value="Detalle" >
            </form>




        </div>

    </body>
    <footer>
        <a href="/../index.php" style="text-decoration:none">
            <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                 onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
        </a>
        <a href="/doc/CV.pdf" target="_blank" style="text-decoration: none">
            <img src="/doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                 width="39" title="curriculum vitae" class="icono_cv" />
        </a>

        © Alejandro Otálvaro Marulanda

        <a href="https://github.com/alexotalvaro/206DWESProyectoLoginLogoffTema5" target="_blank" style="text-decoration: none">
            <img src="../doc/git.png" alt="git" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                 width="39" title="GIT"/>
        </a>

        <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
           style="text-decoration: none">
            <img src="/doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                 width="39" title="linkedin" class="icono_link" />
        </a>

    </footer>

</html>